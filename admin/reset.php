<?php
require_once '../db.php';

// This will create a NEW admin user with the password: 123
$new_password = password_hash('123', PASSWORD_DEFAULT);
$username = 'master';

try {
    $stmt = $pdo->prepare("INSERT INTO admins (username, password) VALUES (?, ?) ON DUPLICATE KEY UPDATE password = ?");
    $stmt->execute([$username, $new_password, $new_password]);
    echo "<h1>Success!</h1><p>You can now log in with:</p><ul><li>Username: <b>master</b></li><li>Password: <b>123</b></li></ul><p><a href='login.php'>Go to Login Page</a></p>";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
