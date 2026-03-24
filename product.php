<?php
require_once 'db.php';

// Get filter and search parameters
$category_filter = isset($_GET['category']) ? clean_input($_GET['category']) : 'All';
$search_query = isset($_GET['search']) ? clean_input($_GET['search']) : '';

// Build the SQL query dynamically
$sql = "SELECT * FROM products WHERE 1=1";
$params = [];

if ($category_filter != 'All') {
    $sql .= " AND category = ?";
    $params[] = $category_filter;
}

if (!empty($search_query)) {
    $sql .= " AND product_name LIKE ?";
    $params[] = "%$search_query%";
}

$sql .= " ORDER BY created_at DESC";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lababdar Rice - Our Products</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="frontend-body">
    <header class="main-header">
        <div class="container">
            <div class="logo">
                <h1>Lababdar Rice</h1>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="product.php">Home</a></li>
                    <li><a href="admin/login.php">Admin Login</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="hero">
        <div class="container">
            <h2>Experience the Finest Quality Rice</h2>
            <p>From the heart of the fields to your dining table.</p>
        </div>
    </section>

    <main class="container">
        <div class="filter-search-bar">
            <div class="category-filters">
                <a href="product.php?category=All&search=<?php echo urlencode($search_query); ?>" class="filter-btn <?php echo $category_filter == 'All' ? 'active' : ''; ?>">All</a>
                <a href="product.php?category=Royal&search=<?php echo urlencode($search_query); ?>" class="filter-btn <?php echo $category_filter == 'Royal' ? 'active' : ''; ?>">Royal</a>
                <a href="product.php?category=Rozzana&search=<?php echo urlencode($search_query); ?>" class="filter-btn <?php echo $category_filter == 'Rozzana' ? 'active' : ''; ?>">Rozzana</a>
                <a href="product.php?category=Everyday&search=<?php echo urlencode($search_query); ?>" class="filter-btn <?php echo $category_filter == 'Everyday' ? 'active' : ''; ?>">Everyday</a>
            </div>
            <div class="search-box">
                <form action="product.php" method="GET">
                    <input type="hidden" name="category" value="<?php echo $category_filter; ?>">
                    <input type="text" name="search" placeholder="Search rice..." value="<?php echo $search_query; ?>">
                    <button type="submit">Search</button>
                </form>
            </div>
        </div>

        <div class="product-grid">
            <?php if (empty($products)): ?>
                <div class="no-products">
                    <p>No products found matching your criteria.</p>
                    <a href="product.php" class="btn btn-primary">View All Products</a>
                </div>
            <?php else: ?>
                <?php foreach ($products as $product): ?>
                    <div class="product-card">
                        <div class="product-image">
                            <img src="uploads/<?php echo $product['image']; ?>" alt="<?php echo $product['product_name']; ?>">
                            <span class="badge badge-<?php echo strtolower($product['category']); ?>"><?php echo $product['category']; ?></span>
                        </div>
                        <div class="product-info">
                            <h3><?php echo $product['product_name']; ?></h3>
                            <div class="product-meta">
                                <span><strong>Grain:</strong> <?php echo $product['grain_type']; ?></span>
                                <span><strong>Weight:</strong> <?php echo $product['weight']; ?></span>
                            </div>
                            <p class="product-desc"><?php echo $product['description']; ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </main>

    <footer class="main-footer">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> Lababdar Rice Brand. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
