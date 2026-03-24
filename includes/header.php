<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo isset($pageDescription) ? $pageDescription : 'Lababdar - Premium Organic Basmati Rice. Savour The Taste of India\'s finest extra-long grain basmati rice. Zero cholesterol, 100% organic, pesticide free.'; ?>">
    <meta name="keywords" content="basmati rice, organic rice, premium rice, long grain rice, Indian rice, Lababdar">
    <meta name="author" content="Lababdar Foods">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title><?php echo isset($pageTitle) ? $pageTitle . ' | Lababdar' : 'Lababdar - Savour The Taste'; ?></title>
    <?php
$url = 'https://' . $_SERVER['HTTP_HOST'] . strtok($_SERVER['REQUEST_URI'], '?');

if (substr($url, -1) != '/') {
    $url .= '/';
}
?>

<link rel="canonical" href="<?php echo htmlspecialchars($url, ENT_QUOTES, 'UTF-8'); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" type="image/png" href="assets/images/logo.png">
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FoodEstablishment",
  "name": "Lababdar Foods",
  "image": "https://lababdarfoods.com/assets/images/logo.png",
  "@id": "https://lababdarfoods.com/",
  "url": "https://lababdarfoods.com/",
  "telephone": "+91 98765 43210",
  "email": "info@lababdar.com",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Punjab",
    "addressCountry": "IN"
  },
  "description": "Premium Organic Basmati Rice trusted by millions of families worldwide. Authentic taste of India's finest grains.",
  "sameAs": []
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "Organic Basmati Rice",
  "image": "https://lababdarfoods.com/assets/images/logo.png",
  "description": "Premium quality organic basmati rice with authentic taste and aroma.",
  "brand": {
    "@type": "Brand",
    "name": "Lababdar Foods"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Lababdar Foods",
  "url": "https://lababdarfoods.com/",
  "logo": "https://lababdarfoods.com/assets/images/logo.png",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+91 98765 43210",
    "contactType": "customer support"
  }
}
</script>
</head>
<body>
    <!-- Floating Rice Particles Background -->
    <div class="particles-bg" id="particles-bg"></div>
    
    <!-- Top Header Bar -->
    <div class="top-header">
        <div class="top-header-container">
            <div class="top-header-left">
                <div class="top-header-item">
                    <i class="fas fa-phone-alt"></i>
                    <span>+91 96590 00031</span>
                </div>
                <div class="top-header-divider"></div>
                <div class="top-header-item">
                    <i class="fas fa-envelope"></i>
                    <span>ngkglobaltade@gmail.com</span>
                </div>
                <div class="top-header-divider"></div>
                <div class="top-header-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Punjab, India</span>
                </div>
            </div>
            <div class="top-header-center">
                <div class="top-header-marquee">
                    <span><i class="fas fa-star"></i> Premium Organic Basmati Rice</span>
                    <span><i class="fas fa-certificate"></i> FSSAI Certified</span>
                    <span><i class="fas fa-truck"></i> Pan-India Delivery</span>
                    <span><i class="fas fa-leaf"></i> 100% Pesticide Free</span>
                    <span><i class="fas fa-award"></i> Export Quality</span>
                    <span><i class="fas fa-star"></i> Premium Organic Basmati Rice</span>
                    <span><i class="fas fa-certificate"></i> FSSAI Certified</span>
                    <span><i class="fas fa-truck"></i> Pan-India Delivery</span>
                    <span><i class="fas fa-leaf"></i> 100% Pesticide Free</span>
                    <span><i class="fas fa-award"></i> Export Quality</span>
                </div>
            </div>
            <div class="top-header-right">
               <div class="top-header-social">

    <!-- FACEBOOK -->
    <a href="https://www.facebook.com/people/Lababdar-Foods/61586425373383/" target="_blank" aria-label="Facebook">
        <i class="fab fa-facebook-f"></i>
    </a>

    <!-- INSTAGRAM -->
    <a href="https://www.instagram.com/lababdar_basmatirice/" target="_blank" aria-label="Instagram">
        <i class="fab fa-instagram"></i>
    </a>

    <!-- WHATSAPP -->
    <a href="https://wa.me/919659000031" target="_blank" aria-label="WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

</div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header id="main-header">
        <div class="header-glow"></div>
        <div class="nav-container">
            <a href="index.php" class="logo">
                <div class="logo-wrapper">
                    <img src="assets/images/logo.png" alt="Lababdar" class="logo-img">
                    <div class="logo-text">
                        <span class="logo-brand">Lababdar</span>
                        <span class="logo-tagline">Savour The Taste</span>
                    </div>
                </div>
            </a>
            
            <nav class="nav-menu" id="nav-menu">
                <ul>
                    <li><a href="index.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>"><span>Home</span></a></li>
                    <li><a href="about.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>"><span>About Us</span></a></li>
                    <li><a href="products.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'products.php' ? 'active' : ''; ?>"><span>Products</span></a></li>
                    <li><a href="recipes.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'recipes.php' ? 'active' : ''; ?>"><span>Recipes</span></a></li>
                    <li><a href="ingredients.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'ingredients.php' ? 'active' : ''; ?>"><span>Ingredients</span></a></li>
                    <li><a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>"><span>Contact</span></a></li>
                </ul>
            </nav>

            <div class="nav-right">
                <a href="distributor.php" class="nav-cta">
                    <span class="cta-text">Become Distributor</span>
                    <span class="cta-icon"><i class="fas fa-arrow-right"></i></span>
                </a>
                <div class="mobile-toggle" id="mobile-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </header>

    <main>
