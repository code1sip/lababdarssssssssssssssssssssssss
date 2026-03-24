    <?php
    require_once '../db.php';
    require_once '../includes/auth_check.php';
    
    // Fetch all products
    $stmt = $pdo->query("SELECT * FROM products ORDER BY created_at DESC");
    $products = $stmt->fetchAll();
    
    // Handle success/error messages from other pages
    $message = isset($_GET['msg']) ? clean_input($_GET['msg']) : "";
    $error = isset($_GET['err']) ? clean_input($_GET['err']) : "";
    ?>
    
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard - Lababdar Rice</title>
        <link rel="stylesheet" href="../css/style.css">
    </head>
    <body class="admin-body">
        <div class="admin-sidebar">
            <div class="sidebar-header">
                <h3>Lababdar Rice</h3>
            </div>
            <ul class="sidebar-menu">
                <li><a href="dashboard.php" class="active">Dashboard</a></li>
                <li><a href="add-product.php">Add Product</a></li>
                <li><a href="../product.php" target="_blank">View Website</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    
        <div class="admin-content">
            <div class="content-header">
                <h2>Product Management</h2>
                <a href="add-product.php" class="btn btn-primary">Add New Product</a>
            </div>
    
            <?php if ($message): ?>
                <div class="alert alert-success"><?php echo $message; ?></div>
            <?php endif; ?>
            <?php if ($error): ?>
                <div class="alert alert-danger"><?php echo $error; ?></div>
            <?php endif; ?>
    
            <div class="table-container">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Category</th>
                            <th>Weight</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($products)): ?>
                            <tr>
                                <td colspan="6" style="text-align: center;">No products found.</td>
                            </tr>
                        <?php else: ?>
                            <?php foreach ($products as $product): ?>
                                <tr>
                                    <td><?php echo $product['id']; ?></td>
                                    <td><img src="../uploads/<?php echo $product['image']; ?>" alt="<?php echo $product['product_name']; ?>" class="table-img"></td>
                                    <td><?php echo $product['product_name']; ?></td>
                                    <td><span class="badge badge-<?php echo strtolower($product['category']); ?>"><?php echo $product['category']; ?></span></td>
                                    <td><?php echo $product['weight']; ?></td>
                                    <td class="actions">
                                        <a href="edit-product.php?id=<?php echo $product['id']; ?>" class="btn-edit">Edit</a>
                                        <a href="delete.php?id=<?php echo $product['id']; ?>" class="btn-delete" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </body>
    </html>
