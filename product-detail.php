<?php
require_once 'db.php';

if (!isset($_GET['id'])) {
    die("Product not found");
}

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
$stmt->execute([$id]);
$product = $stmt->fetch();

if (!$product) {
    die("Product not found");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $product['product_name']; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container product-detail">

    <div class="detail-image">
        <img src="uploads/<?php echo $product['image']; ?>">
    </div>

    <div class="detail-info">
        <h1><?php echo $product['product_name']; ?></h1>

        <p><strong>Category:</strong> <?php echo $product['category']; ?></p>
        <p><strong>Grain Type:</strong> <?php echo $product['grain_type']; ?></p>
        <p><strong>Weight:</strong> <?php echo $product['weight']; ?></p>

        <p class="desc"><?php echo $product['description']; ?></p>

        <a href="product.php" class="btn">⬅ Back to Products</a>
    </div>

</div>

</body>
</html>


<style>
    .product-detail{
    display:flex;
    gap:40px;
    margin-top:40px;
}

.detail-image img{
    width:400px;
    border-radius:10px;
}

.detail-info{
    max-width:500px;
}

.detail-info h1{
    font-size:28px;
}

.desc{
    margin-top:15px;
    line-height:1.6;
}
</style>