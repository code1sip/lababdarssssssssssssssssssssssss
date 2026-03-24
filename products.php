<?php
$pageTitle = "Premium Product Range";
$pageDescription = "Explore Lababdar's premium range of organic basmati rice - Organic Heritage, Classic, Royal, Biryani Special and more. Available in 1KG to 30KG packs.";
include 'includes/header.php';
?>

   
     <section class="page-hero">

    <!-- Background Video -->
    <video autoplay muted loop playsinline class="hero-video">
        <source src="assets/gif 2.mp4" type="video/mp4">
    </video>

    <!-- Overlay -->
    <div class="hero-overlay"></div>

    <!-- Content -->
    <div class="page-hero-content">

        <div class="page-hero-label"style=" background-color: #0B3156;">
            <i class="fas fa-box"></i> Our Products
        </div>

        <h1>Premium <span>Product Range</span></h1>

        <p class="page-hero-desc">
            Discover our curated collection of organic basmati rice, crafted for every occasion and every palate.
        </p>

        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Products</span>
        </div>

    </div>

</section>
<style>
.page-hero {
    position: relative;
    height: 90vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    color: #fff;
}

.hero-video {
    position: absolute;
    top: 59%;
    left: 50%;
    width: 100%;
    height: 100%;
    object-fit: cover;
    transform: translate(-50%, -50%);
    z-index: 1;
}

.hero-overlay {
    position: absolute;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.1); /* dark overlay */
    z-index: 2;
}

.page-hero-content {
    position: relative;
    z-index: 3;
    text-align: center;
    max-width: 700px;
}

</style>

    <section class="section-pattern">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Our Collection</span>
                <h2 class="section-title">Crafted for <span>Excellence</span></h2>
                <p class="section-subtitle">Each variety is carefully selected, aged, and processed to deliver the perfect rice experience.</p>
            </div>
            
            <div class="products-grid" style="gap: 40px;">
                <div class="product-card" id="organic-heritage" data-aos="zoom-in" data-aos-delay="0" style="background: var(--white); border: 2px solid transparent;">
                    <div class="product-image">
                        <img src="assets/images/products/organic-heritage-5kg.jpg" alt="Organic Heritage Basmati Rice">
                    </div>
                    <h3 style="color: var(--primary-purple);">Organic Heritage Basmati</h3>
                    <p style="color: var(--text-light);">Our flagship product - world's extra long and beautiful basmati with premium quality. Perfect for special occasions and everyday luxury.</p>
                    <div class="product-sizes" style="margin-bottom: 20px;">
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">1 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">5 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">10 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">20 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">30 KG</span>
                    </div>
                    <a href="#" class="btn-primary" style="width: 100%; justify-content: center;">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="product-card" id="classic" data-aos="zoom-in" data-aos-delay="100" style="background: var(--white); border: 2px solid transparent;">
                    <div class="product-image">
                        <img src="assets/images/products/organic-heritage-1kg.jpg" alt="Classic Basmati Rice">
                    </div>
                    <h3 style="color: var(--primary-purple);">Classic Basmati</h3>
                    <p style="color: var(--text-light);">Traditional basmati taste for everyday cooking excellence. Long grains, perfect texture, and authentic aroma for daily meals.</p>
                    <div class="product-sizes" style="margin-bottom: 20px;">
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">1 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">5 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">10 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">25 KG</span>
                    </div>
                    <a href="#" class="btn-primary" style="width: 100%; justify-content: center;">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="product-card" id="royal" data-aos="zoom-in" data-aos-delay="200" style="background: var(--white); border: 2px solid transparent;">
                    <div class="product-image">
                        <img src="assets/images/products/organic-heritage-5kg.jpg" alt="Royal Basmati Rice">
                    </div>
                    <h3 style="color: var(--primary-purple);">Royal Basmati</h3>
                    <p style="color: var(--text-light);">Premium aged grains for special occasions and celebrations. Extra-long, naturally aromatic, fit for royalty.</p>
                    <div class="product-sizes" style="margin-bottom: 20px;">
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">1 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">5 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">10 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">20 KG</span>
                    </div>
                    <a href="#" class="btn-primary" style="width: 100%; justify-content: center;">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="product-card" id="biryani" data-aos="zoom-in" data-aos-delay="300" style="background: var(--white); border: 2px solid transparent;">
                    <div class="product-image">
                        <img src="assets/images/products/organic-heritage-1kg.jpg" alt="Biryani Special Rice">
                    </div>
                    <h3 style="color: var(--primary-purple);">Biryani Special</h3>
                    <p style="color: var(--text-light);">Specially selected for aromatic biryanis and pulaos. Stays fluffy and separate, absorbs flavors perfectly.</p>
                    <div class="product-sizes" style="margin-bottom: 20px;">
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">1 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">5 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">10 KG</span>
                        <span style="background: rgba(26, 26, 78, 0.1); color: var(--primary-purple); border-color: var(--primary-purple);">25 KG</span>
                    </div>
                    <a href="#" class="btn-primary" style="width: 100%; justify-content: center;">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark" id="more-products">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">More Varieties</span>
                <h2 class="section-title">Extended <span>Range</span></h2>
                <p class="section-subtitle">Explore our complete collection to find the perfect rice for your needs.</p>
            </div>
            
            <div class="products-grid">
                <div class="product-card" id="everyday" data-aos="zoom-in" data-aos-delay="0">
                    <div class="product-image">
                        <img src="assets/images/products/organic-heritage-5kg.jpg" alt="Everyday Rice">
                    </div>
                    <h3>Feast Rozzana</h3>
                    <p>Premium everyday rice for daily cooking. Affordable quality without compromise.</p>
                    <div class="product-sizes">
                        <span>1 KG</span>
                        <span>5 KG</span>
                        <span>10 KG</span>
                        <span>25 KG</span>
                    </div>
                    <a href="#" class="product-link">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="product-card" id="brown" data-aos="zoom-in" data-aos-delay="100">
                    <div class="product-image">
                        <img src="assets/images/products/organic-heritage-1kg.jpg" alt="Brown Rice">
                    </div>
                    <h3>Organic Brown Rice</h3>
                    <p>Unpolished whole grain rice packed with fiber and nutrients for health-conscious families.</p>
                    <div class="product-sizes">
                        <span>1 KG</span>
                        <span>5 KG</span>
                    </div>
                    <a href="#" class="product-link">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="product-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="product-image">
                        <img src="assets/images/products/organic-heritage-5kg.jpg" alt="Pulao Rice">
                    </div>
                    <h3>Pulao Special</h3>
                    <p>Specially selected for aromatic pulaos and festival cooking. Perfect grain separation.</p>
                    <div class="product-sizes">
                        <span>1 KG</span>
                        <span>5 KG</span>
                        <span>10 KG</span>
                    </div>
                    <a href="#" class="product-link">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
                
                <div class="product-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="product-image">
                        <img src="assets/images/products/organic-heritage-1kg.jpg" alt="Sella Rice">
                    </div>
                    <h3>Golden Sella</h3>
                    <p>Par-boiled basmati with golden color. Extra fluffy and non-sticky, perfect for restaurants.</p>
                    <div class="product-sizes">
                        <span>5 KG</span>
                        <span>10 KG</span>
                        <span>25 KG</span>
                    </div>
                    <a href="#" class="product-link">View Details <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="product-features">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Quality Assurance</span>
                <h2 class="section-title">Every Grain <span>Perfected</span></h2>
                <p class="section-subtitle">What makes Lababdar rice stand out from the rest.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-icon"><i class="fas fa-ruler-combined"></i></div>
                    <h3>Extra Long Grains</h3>
                    <p>Each grain measures 7mm+ length, elongating to nearly double when cooked for the perfect presentation.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon"><i class="fas fa-wind"></i></div>
                    <h3>Natural Aroma</h3>
                    <p>Authentic basmati fragrance that fills your kitchen with the signature scent of premium rice.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon"><i class="fas fa-clock"></i></div>
                    <h3>Aged to Perfection</h3>
                    <p>Naturally aged for 12-18 months to develop optimal cooking properties and enhanced flavor.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-feather"></i></div>
                    <h3>Fluffy & Non-Sticky</h3>
                    <p>Every grain stays separate and fluffy after cooking, perfect for biryanis, pulaos, and everyday meals.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cream">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Nutritional Value</span>
                <h2 class="section-title">Health <span>Benefits</span></h2>
                <p class="section-subtitle">Naturally nutritious rice that's good for your health and taste buds.</p>
            </div>
            
            <div class="contact-grid" style="gap: 60px; align-items: center;">
                <div data-aos="fade-right">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; color: var(--primary-purple); margin-bottom: 25px;">Nutrition Per 100g Serving</h3>
                    <div style="background: var(--white); border-radius: 20px; padding: 30px; box-shadow: var(--shadow-soft);">
                        <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid #eee;">
                            <span style="font-weight: 600; color: var(--primary-purple);">Calories</span>
                            <span style="color: var(--text-light);">356 kcal</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid #eee;">
                            <span style="font-weight: 600; color: var(--primary-purple);">Carbohydrates</span>
                            <span style="color: var(--text-light);">78g</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid #eee;">
                            <span style="font-weight: 600; color: var(--primary-purple);">Protein</span>
                            <span style="color: var(--text-light);">7.5g</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid #eee;">
                            <span style="font-weight: 600; color: var(--primary-purple);">Fat</span>
                            <span style="color: var(--text-light);">0.6g</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid #eee;">
                            <span style="font-weight: 600; color: var(--primary-purple);">Fiber</span>
                            <span style="color: var(--text-light);">1.4g</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0;">
                            <span style="font-weight: 600; color: var(--primary-purple);">Cholesterol</span>
                            <span style="color: var(--green); font-weight: 600;">0mg</span>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <div class="health-grid" style="grid-template-columns: 1fr;">
                        <div class="health-card">
                            <div class="health-icon"><i class="fas fa-heart"></i></div>
                            <div class="health-content">
                                <h3>Heart Healthy</h3>
                                <p>Zero cholesterol and low fat content supports cardiovascular health.</p>
                            </div>
                        </div>
                        <div class="health-card">
                            <div class="health-icon"><i class="fas fa-tint-slash"></i></div>
                            <div class="health-content">
                                <h3>Diabetic Friendly</h3>
                                <p>No added sugars with moderate glycemic index for better blood sugar control.</p>
                            </div>
                        </div>
                        <div class="health-card">
                            <div class="health-icon"><i class="fas fa-bolt"></i></div>
                            <div class="health-content">
                                <h3>Energy Source</h3>
                                <p>Complex carbohydrates provide sustained energy throughout the day.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Cooking Tips</span>
                <h2 class="section-title">Perfect <span>Every Time</span></h2>
                <p class="section-subtitle">Follow these simple steps for perfect fluffy rice every time.</p>
            </div>
            
            <div class="features-grid">
                <div class="glass-card" data-aos="fade-up" data-aos-delay="0" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><span style="color: var(--gold); font-family: 'Playfair Display', serif; font-size: 2rem;">1</span></div>
                    <h3 style="color: var(--white);">Rinse Well</h3>
                    <p style="color: rgba(255,255,255,0.8);">Wash rice under running water 2-3 times until water runs clear.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><span style="color: var(--gold); font-family: 'Playfair Display', serif; font-size: 2rem;">2</span></div>
                    <h3 style="color: var(--white);">Soak</h3>
                    <p style="color: rgba(255,255,255,0.8);">Soak for 30 minutes for best results and optimal grain elongation.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><span style="color: var(--gold); font-family: 'Playfair Display', serif; font-size: 2rem;">3</span></div>
                    <h3 style="color: var(--white);">Right Ratio</h3>
                    <p style="color: rgba(255,255,255,0.8);">Use 1 cup rice to 4 cups water for perfectly cooked grains.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="300" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><span style="color: var(--gold); font-family: 'Playfair Display', serif; font-size: 2rem;">4</span></div>
                    <h3 style="color: var(--white);">Rest & Serve</h3>
                    <p style="color: rgba(255,255,255,0.8);">Cook 6-7 mins on medium flame. Rest 10 mins. Serve warm.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Packaging</span>
                <h2 class="section-title">Premium <span>Packaging</span></h2>
                <p class="section-subtitle">Our packaging is designed to preserve freshness and quality from our facility to your kitchen.</p>
            </div>
            
            <div class="health-grid">
                <div class="health-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="health-icon"><i class="fas fa-shield-alt"></i></div>
                    <div class="health-content">
                        <h3>Vacuum Sealed</h3>
                        <p>Airtight packaging prevents moisture and preserves natural aroma and freshness.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="health-icon"><i class="fas fa-sun"></i></div>
                    <div class="health-content">
                        <h3>UV Protected</h3>
                        <p>Special coating protects rice from UV degradation during storage and transit.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="health-icon"><i class="fas fa-recycle"></i></div>
                    <div class="health-content">
                        <h3>Eco-Friendly</h3>
                        <p>Recyclable packaging materials reduce environmental impact responsibly.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="health-icon"><i class="fas fa-qrcode"></i></div>
                    <div class="health-content">
                        <h3>QR Traceability</h3>
                        <p>Scan to trace your rice back to the farm it was grown on.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="health-icon"><i class="fas fa-lock"></i></div>
                    <div class="health-content">
                        <h3>Tamper Evident</h3>
                        <p>Safety seals ensure your rice hasn't been opened or tampered with.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="health-icon"><i class="fas fa-award"></i></div>
                    <div class="health-content">
                        <h3>Food-Grade Material</h3>
                        <p>BPA-free, food-grade packaging materials safe for your family.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cream">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Storage Tips</span>
                <h2 class="section-title">Keep It <span>Fresh</span></h2>
                <p class="section-subtitle">Simple tips to maintain the quality and freshness of your Lababdar rice.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-icon"><i class="fas fa-temperature-low"></i></div>
                    <h3>Cool & Dry</h3>
                    <p>Store in a cool, dry place away from direct sunlight. Ideal temperature: 10-25°C.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon"><i class="fas fa-box"></i></div>
                    <h3>Airtight Container</h3>
                    <p>After opening, transfer to an airtight container to maintain freshness.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon"><i class="fas fa-tint-slash"></i></div>
                    <h3>Avoid Moisture</h3>
                    <p>Keep away from water and high humidity areas to prevent spoilage.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-calendar-alt"></i></div>
                    <h3>Use Within 18 Months</h3>
                    <p>Best consumed within 18 months of packaging for optimal quality and taste.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Certifications</span>
                <h2 class="section-title">Quality <span>Guaranteed</span></h2>
                <p class="section-subtitle">Our products are certified by leading national and international bodies.</p>
            </div>
            
            <div class="cert-grid">
                <div class="cert-item" data-aos="zoom-in" data-aos-delay="0">
                    <div class="cert-icon"><i class="fas fa-certificate"></i></div>
                    <h4>FSSAI</h4>
                    <p>Food Safety Certified</p>
                </div>
                <div class="cert-item" data-aos="zoom-in" data-aos-delay="100">
                    <div class="cert-icon"><i class="fas fa-leaf"></i></div>
                    <h4>India Organic</h4>
                    <p>Certified Organic</p>
                </div>
                <div class="cert-item" data-aos="zoom-in" data-aos-delay="200">
                    <div class="cert-icon"><i class="fas fa-globe"></i></div>
                    <h4>USDA Organic</h4>
                    <p>US Market Certified</p>
                </div>
                <div class="cert-item" data-aos="zoom-in" data-aos-delay="300">
                    <div class="cert-icon"><i class="fas fa-euro-sign"></i></div>
                    <h4>EU Organic</h4>
                    <p>European Standard</p>
                </div>
                <div class="cert-item" data-aos="zoom-in" data-aos-delay="400">
                    <div class="cert-icon"><i class="fas fa-shield-alt"></i></div>
                    <h4>HACCP</h4>
                    <p>Hazard Analysis Certified</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">FAQ</span>
                <h2 class="section-title">Common <span>Questions</span></h2>
                <p class="section-subtitle">Find answers to frequently asked questions about our products.</p>
            </div>
            
            <div style="max-width: 900px; margin: 0 auto;">
                <div class="health-card" data-aos="fade-up" data-aos-delay="0" style="flex-direction: column;">
                    <h3 style="color: var(--primary-purple); margin-bottom: 15px;"><i class="fas fa-question-circle" style="color: var(--gold); margin-right: 10px;"></i>What is the shelf life of Lababdar rice?</h3>
                    <p style="color: var(--text-light); line-height: 1.8;">Our rice has a shelf life of 18 months from the date of packaging when stored properly in a cool, dry place. The manufacturing and expiry dates are clearly printed on each pack.</p>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="100" style="flex-direction: column;">
                    <h3 style="color: var(--primary-purple); margin-bottom: 15px;"><i class="fas fa-question-circle" style="color: var(--gold); margin-right: 10px;"></i>Is Lababdar rice suitable for diabetics?</h3>
                    <p style="color: var(--text-light); line-height: 1.8;">Yes, our rice has no added sugar and is naturally suitable for diabetics when consumed as part of a balanced diet. However, we recommend consulting with your healthcare provider for personalized dietary advice.</p>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="200" style="flex-direction: column;">
                    <h3 style="color: var(--primary-purple); margin-bottom: 15px;"><i class="fas fa-question-circle" style="color: var(--gold); margin-right: 10px;"></i>Where can I buy Lababdar rice?</h3>
                    <p style="color: var(--text-light); line-height: 1.8;">Our products are available at major retail stores, supermarkets, and online platforms across India. For bulk orders, please contact our distributor team.</p>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="300" style="flex-direction: column;">
                    <h3 style="color: var(--primary-purple); margin-bottom: 15px;"><i class="fas fa-question-circle" style="color: var(--gold); margin-right: 10px;"></i>Do you offer bulk/wholesale pricing?</h3>
                    <p style="color: var(--text-light); line-height: 1.8;">Yes, we offer competitive wholesale pricing for restaurants, hotels, and distributors. Please visit our distributor page or contact us directly for pricing and partnership details.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Experience <span>Premium Quality?</span></h2>
                <p>Find Lababdar rice at your nearest store or become a distribution partner to bring the finest basmati to your customers.</p>
                <div class="cta-buttons">
                    <a href="contact.php" class="btn-primary"><i class="fas fa-map-marker-alt"></i> Find Store</a>
                    <a href="distributor.php" class="btn-secondary"><i class="fas fa-handshake"></i> Become Partner</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
