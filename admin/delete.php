<?php
require_once '../db.php';
require_once '../includes/auth_check.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($id > 0) {
    // Get image filename before deleting product
    $stmt = $pdo->prepare("SELECT image FROM products WHERE id = ?");
    $stmt->execute([$id]);
    $product = $stmt->fetch();

    if ($product) {
        $image_name = $product['image'];
        $upload_dir = '../uploads/';

        // Delete from database
        $stmt = $pdo->prepare("DELETE FROM products WHERE id = ?");
        if ($stmt->execute([$id])) {
            // Delete physical file from server
            if (file_exists($upload_dir . $image_name)) {
                unlink($upload_dir . $image_name);
            }
            header("Location: dashboard.php?msg=Product deleted successfully!");
            exit();
        } else {
            header("Location: dashboard.php?err=Failed to delete product from database.");
            exit();
        }
    } else {
        header("Location: dashboard.php?err=Product not found.");
        exit();
    }
} else {
    header("Location: dashboard.php");
    exit();
}
?>
