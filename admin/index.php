<?php
session_start();

if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header('Location: dashboard.php');
    exit;
}

require_once '../config/database.php';
$db = Database::getInstance();
$conn = $db->getConnection();

$stmt = $conn->query("SELECT COUNT(*) FROM admin_users");
$hasAdmin = $stmt->fetchColumn() > 0;

$error = '';
$success = '';
$showSetup = !$hasAdmin;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_POST['csrf_token']) || !isset($_SESSION['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token']) {
        $error = 'Invalid request. Please try again.';
    } else {
        $ip = $_SERVER['REMOTE_ADDR'] ?? 'unknown';
        $db->clearOldAttempts();
        
        if ($db->checkLoginAttempts($ip) >= 5) {
            $error = 'Too many login attempts. Please try again in 5 minutes.';
        } else {
            if (isset($_POST['setup'])) {
                $username = trim($_POST['username'] ?? '');
                $password = $_POST['password'] ?? '';
                $confirmPassword = $_POST['confirm_password'] ?? '';
                
                if (empty($username) || empty($password)) {
                    $error = 'Please fill in all fields.';
                } elseif (strlen($password) < 8) {
                    $error = 'Password must be at least 8 characters long.';
                } elseif (!preg_match('/[A-Z]/', $password) || !preg_match('/[a-z]/', $password) || !preg_match('/[0-9]/', $password)) {
                    $error = 'Password must contain uppercase, lowercase, and numbers.';
                } elseif ($password !== $confirmPassword) {
                    $error = 'Passwords do not match.';
                } else {
                    if ($db->setupAdmin($username, $password)) {
                        $success = 'Admin account created successfully. You can now login.';
                        $showSetup = false;
                        $hasAdmin = true;
                    } else {
                        $error = 'Failed to create admin account.';
                    }
                }
            } else {
                $username = trim($_POST['username'] ?? '');
                $password = $_POST['password'] ?? '';
                
                if (empty($username) || empty($password)) {
                    $error = 'Please enter both username and password.';
                    $db->recordLoginAttempt($ip);
                } else {
                    try {
                        $stmt = $conn->prepare("SELECT * FROM admin_users WHERE username = ?");
                        $stmt->execute([$username]);
                        $user = $stmt->fetch(PDO::FETCH_ASSOC);
                        
                        if ($user && password_verify($password, $user['password'])) {
                            $_SESSION['admin_logged_in'] = true;
                            $_SESSION['admin_username'] = $user['username'];
                            $_SESSION['admin_id'] = $user['id'];
                            
                            if (isset($user['must_change_password']) && $user['must_change_password'] == 1) {
                                $_SESSION['must_change_password'] = true;
                            }
                            
                            header('Location: dashboard.php');
                            exit;
                        } else {
                            $db->recordLoginAttempt($ip);
                            $error = 'Invalid username or password.';
                        }
                    } catch (Exception $e) {
                        $error = 'An error occurred. Please try again.';
                    }
                }
            }
        }
    }
}

$_SESSION['csrf_token'] = bin2hex(random_bytes(32));
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <title><?php echo $showSetup ? 'Setup Admin' : 'Admin Login'; ?> | Lababdar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="../assets/images/logo.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #1a1a4e 0%, #2d2d6b 25%, #1e3a5f 50%, #2d2d6b 75%, #1a1a4e 100%);
            padding: 20px;
        }
        
        .login-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 50px 40px;
            border-radius: 25px;
            box-shadow: 0 30px 60px rgba(0, 0, 0, 0.3);
            width: 100%;
            max-width: 420px;
        }
        
        .logo-section {
            text-align: center;
            margin-bottom: 35px;
        }
        
        .logo-section img {
            height: 70px;
            margin-bottom: 15px;
        }
        
        .logo-section h1 {
            font-family: 'Playfair Display', serif;
            font-size: 1.8rem;
            color: #1a1a4e;
            margin-bottom: 5px;
        }
        
        .logo-section p {
            color: #6B6B7B;
            font-size: 0.9rem;
        }
        
        .form-group {
            margin-bottom: 22px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #1a1a4e;
            font-weight: 500;
            font-size: 0.95rem;
        }
        
        .input-wrapper {
            position: relative;
        }
        
        .input-wrapper i {
            position: absolute;
            left: 18px;
            top: 50%;
            transform: translateY(-50%);
            color: #D4AF37;
            font-size: 1rem;
        }
        
        .form-group input {
            width: 100%;
            padding: 16px 18px 16px 50px;
            border: 2px solid #e0e0e0;
            border-radius: 12px;
            font-size: 1rem;
            font-family: 'Poppins', sans-serif;
            transition: all 0.3s ease;
            background: #FDFBF7;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #D4AF37;
            box-shadow: 0 0 0 4px rgba(212, 175, 55, 0.1);
        }
        
        .error-message {
            background: linear-gradient(135deg, #c62828 0%, #e53935 100%);
            color: white;
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.9rem;
        }
        
        .success-message {
            background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%);
            color: white;
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 25px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-size: 0.9rem;
        }
        
        .login-btn {
            width: 100%;
            padding: 16px;
            background: linear-gradient(135deg, #D4AF37 0%, #F4D03F 50%, #D4AF37 100%);
            color: #0d0d2b;
            border: none;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .login-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(212, 175, 55, 0.4);
        }
        
        .back-link {
            text-align: center;
            margin-top: 25px;
        }
        
        .back-link a {
            color: #1a1a4e;
            text-decoration: none;
            font-size: 0.9rem;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: color 0.3s ease;
        }
        
        .back-link a:hover {
            color: #D4AF37;
        }
        
        .password-requirements {
            background: rgba(212, 175, 55, 0.1);
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            border: 1px solid rgba(212, 175, 55, 0.3);
        }
        
        .password-requirements p {
            font-size: 0.85rem;
            color: #6B6B7B;
            margin-bottom: 8px;
        }
        
        .password-requirements ul {
            font-size: 0.8rem;
            color: #6B6B7B;
            margin-left: 20px;
        }
        
        .password-requirements li {
            margin-bottom: 3px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo-section">
            <img src="../assets/images/logo.png" alt="Lababdar">
            <h1><?php echo $showSetup ? 'Setup Admin' : 'Admin Panel'; ?></h1>
            <p><?php echo $showSetup ? 'Create your admin account' : 'Sign in to manage inquiries'; ?></p>
        </div>
        
        <?php if ($error): ?>
        <div class="error-message">
            <i class="fas fa-exclamation-circle"></i>
            <span><?php echo htmlspecialchars($error); ?></span>
        </div>
        <?php endif; ?>
        
        <?php if ($success): ?>
        <div class="success-message">
            <i class="fas fa-check-circle"></i>
            <span><?php echo htmlspecialchars($success); ?></span>
        </div>
        <?php endif; ?>
        
        <?php if ($showSetup): ?>
        <div class="password-requirements">
            <p><strong>Password Requirements:</strong></p>
            <ul>
                <li>At least 8 characters</li>
                <li>Contains uppercase letter</li>
                <li>Contains lowercase letter</li>
                <li>Contains a number</li>
            </ul>
        </div>
        
        <form method="POST" action="" autocomplete="off">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            <input type="hidden" name="setup" value="1">
            
            <div class="form-group">
                <label for="username">Admin Username</label>
                <div class="input-wrapper">
                    <i class="fas fa-user"></i>
                    <input type="text" id="username" name="username" placeholder="Choose a username" required autocomplete="off">
                </div>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Create a strong password" required autocomplete="new-password">
                </div>
            </div>
            
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required autocomplete="new-password">
                </div>
            </div>
            
            <button type="submit" class="login-btn">
                <i class="fas fa-user-plus"></i> Create Admin Account
            </button>
        </form>
        <?php else: ?>
        <form method="POST" action="" autocomplete="off">
            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
            
            <div class="form-group">
                <label for="username">Username</label>
                <div class="input-wrapper">
                    <i class="fas fa-user"></i>
                    <input type="text" id="username" name="username" placeholder="Enter username" required autocomplete="username">
                </div>
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <div class="input-wrapper">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="password" name="password" placeholder="Enter password" required autocomplete="current-password">
                </div>
            </div>
            
            <button type="submit" class="login-btn">
                <i class="fas fa-sign-in-alt"></i> Sign In
            </button>
        </form>
        <?php endif; ?>
        
        <div class="back-link">
            <a href="../index.php"><i class="fas fa-arrow-left"></i> Back to Website</a>
        </div>
    </div>
</body>
</html>
