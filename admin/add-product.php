<?php
require_once '../db.php';
require_once '../includes/auth_check.php';

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = clean_input($_POST['product_name']);
    $category = clean_input($_POST['category']);
    $weight = clean_input($_POST['weight']);
    $grain_type = clean_input($_POST['grain_type']);
    $description = clean_input($_POST['description']);

    // Image Upload
    $image_name = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];
    $image_size = $_FILES['image']['size'];
    $image_error = $_FILES['image']['error'];

    if (empty($product_name) || empty($category) || empty($weight) || empty($grain_type) || empty($image_name)) {
        $error = "All fields are required.";
    } else {
        $image_ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
        $allowed_ext = array('jpg', 'jpeg', 'png', 'gif', 'webp');

        if (in_array($image_ext, $allowed_ext)) {
            if ($image_size < 5000000) { // 5MB Limit
                $new_image_name = time() . '_' . uniqid() . '.' . $image_ext;
                $upload_dir = '../uploads/';
                $upload_path = $upload_dir . $new_image_name;

                if (move_uploaded_file($image_tmp, $upload_path)) {
                    $stmt = $pdo->prepare("INSERT INTO products (product_name, category, weight, grain_type, description, image) VALUES (?, ?, ?, ?, ?, ?)");
                    if ($stmt->execute([$product_name, $category, $weight, $grain_type, $description, $new_image_name])) {
                        header("Location: dashboard.php?msg=Product added successfully!");
                        exit();
                    } else {
                        $error = "Failed to add product to database.";
                    }
                } else {
                    $error = "Failed to upload image.";
                }
            } else {
                $error = "Image is too large (max 5MB).";
            }
        } else {
            $error = "Invalid image type. Allowed: JPG, JPEG, PNG, GIF, WEBP.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product - Lababdar Rice</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="admin-body">
    <div class="admin-sidebar">
        <div class="sidebar-header">
            <h3>Lababdar Rice</h3>
        </div>
        <ul class="sidebar-menu">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="add-product.php" class="active">Add Product</a></li>
            <li><a href="../product.php" target="_blank">View Website</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="admin-content">
        <div class="content-header">
            <h2>Add New Product</h2>
            <a href="dashboard.php" class="btn btn-secondary">Back to Dashboard</a>
        </div>

        <?php if ($error): ?>
            <div class="alert alert-danger"><?php echo $error; ?></div>
        <?php endif; ?>

        <div class="form-container">
            <form action="add-product.php" method="POST" enctype="multipart/form-data">
                <div class="form-grid">
                    <div class="form-group">
                        <label for="product_name">Product Name *</label>
                        <input type="text" id="product_name" name="product_name" required>
                    </div>
                    <div class="form-group">
                        <label for="category">Category *</label>
                        <select id="category" name="category" required>
                            <option value="">Select Category</option>
                            <option value="Royal">Royal</option>
                            <option value="Rozzana">Rozzana</option>
                            <option value="Everyday">Everyday</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="weight">Weight (e.g., 1KG, 5KG) *</label>
                        <input type="text" id="weight" name="weight" required>
                    </div>
                    <div class="form-group">
                        <label for="grain_type">Grain Type *</label>
                        <select id="grain_type" name="grain_type" required>
                            <option value="">Select Grain Type</option>
                            <option value="Long">Long</option>
                            <option value="Extra Long">Extra Long</option>
                            <option value="Medium">Medium</option>
                        </select>
                    </div>
                    <div class="form-group full-width">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Product Image *</label>
                        <input type="file" id="image" name="image" accept="image/*" onchange="previewImage(event)" required>
                        <div id="image-preview-container" style="margin-top: 10px;">
                            <img id="image-preview" src="#" alt="Preview" style="display: none; max-width: 150px; border-radius: 4px;">
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Save Product</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        function previewImage(event) {
            const preview = document.getElementById('image-preview');
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
</body>
</html>
