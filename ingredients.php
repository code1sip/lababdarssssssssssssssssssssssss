<?php
$pageTitle = "Pure Ingredients";
$pageDescription = "Learn about the pure ingredients in Lababdar Organic Basmati Rice. 100% natural, no additives, no chemicals - just wholesome organic grains.";
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

        <div class="page-hero-label">
            <i class="fas fa-leaf"></i> Pure Ingredients
        </div>

        <h1>100% <span>Pure Basmati</span></h1>

        <p class="page-hero-desc">
            No colors, no flavors, no additives — only natural, wholesome basmati rice sourced from Punjab’s finest fields.
        </p>

        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Ingredients</span>
        </div>

    </div>

</section>
<style>
/* HERO BASE */
.page-hero {
    position: relative;
    height: 85vh;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
}

/* VIDEO */
.hero-video {
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* OVERLAY */
.hero-overlay {
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.3);
}

/* CONTENT */
.page-hero-content {
    position: relative;
    z-index: 2;
    text-align: center;
    max-width: 700px;
    padding: 20px;
}

/* LABEL */
.page-hero-label {
    display: inline-block;
    background: #0B3156;
    color: #fff;
    padding: 6px 14px; 
    border-radius: 20px;
    font-size: 13px;
    margin-bottom: 15px;
}

/* TITLE */
.page-hero-content h1 {
    font-size: 42px;
    color: #fff;
}

.page-hero-content h1 span {
    color: #d4af37;
}

/* DESC */
.page-hero-desc {
    color: #ddd;
    margin: 15px 0;
}

/* BREADCRUMB */
.breadcrumb {
    display: flex;
    justify-content: center;
    gap: 8px;
    color: #ccc;
    font-size: 13px;
}</style>
    <section class="section-pattern">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">The Truth</span>
                <h2 class="section-title">Simple <span>Purity</span></h2>
                <p class="section-subtitle">What you see is what you get - 100% pure organic basmati rice with nothing added and nothing taken away.</p>
            </div>
            
            <div class="contact-grid" style="gap: 80px; align-items: center;">
                <div data-aos="fade-right">
                    <img src="assets/images/organic_rice_grains_luxury_closeup.png" alt="Pure Rice Grains" style="width: 100%; border-radius: 25px; box-shadow: var(--shadow-hard);">
                </div>
                <div data-aos="fade-left">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 2.5rem; color: var(--primary-purple); margin-bottom: 25px;">One Ingredient Only</h3>
                    <p style="font-size: 1.8rem; color: var(--gold-dark); font-family: 'Cormorant Garamond', serif; font-style: italic; margin-bottom: 30px;">100% Pure Organic Basmati Rice</p>
                    <p style="color: var(--text-light); line-height: 1.9; margin-bottom: 30px;">That's it. No hidden ingredients, no processing aids, no additives. Just pure, naturally grown basmati rice that has been washed, aged, and packaged with care.</p>
                    <p style="color: var(--text-light); line-height: 1.9;">We believe in keeping things simple. Nature has already perfected basmati rice over thousands of years - we just ensure it reaches you in its purest form.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Free From</span>
                <h2 class="section-title">What We <span>Don't Add</span></h2>
                <p class="section-subtitle">Our commitment to purity means keeping harmful substances out of your food.</p>
            </div>
            
            <div class="features-grid">
                <div class="glass-card" data-aos="fade-up" data-aos-delay="0" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><i class="fas fa-times" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">No Added Sugar</h3>
                    <p style="color: rgba(255,255,255,0.8);">Naturally sweet from the grains themselves. Safe for diabetics and health-conscious families.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><i class="fas fa-times" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">No Cholesterol</h3>
                    <p style="color: rgba(255,255,255,0.8);">Zero cholesterol content. Heart-healthy rice for the whole family.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><i class="fas fa-times" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">No Preservatives</h3>
                    <p style="color: rgba(255,255,255,0.8);">No artificial preservatives. Natural aging and proper packaging keeps it fresh.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="300" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><i class="fas fa-times" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">No Pesticides</h3>
                    <p style="color: rgba(255,255,255,0.8);">Certified organic farming means zero pesticide residues in your rice.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">More Assurances</span>
                <h2 class="section-title">Complete <span>Purity</span></h2>
                <p class="section-subtitle">Additional harmful substances we keep away from your food.</p>
            </div>
            
            <div class="health-grid">
                <div class="health-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="health-icon"><i class="fas fa-ban"></i></div>
                    <div class="health-content">
                        <h3>No Chemicals</h3>
                        <p>Zero artificial chemicals in growing or processing. Pure organic methods throughout.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="health-icon"><i class="fas fa-ban"></i></div>
                    <div class="health-content">
                        <h3>No Colors</h3>
                        <p>The natural golden-white color comes from the grain itself. No artificial coloring added.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="health-icon"><i class="fas fa-ban"></i></div>
                    <div class="health-content">
                        <h3>No Flavors</h3>
                        <p>The signature aroma is 100% natural. No artificial flavors or fragrances added.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="health-icon"><i class="fas fa-ban"></i></div>
                    <div class="health-content">
                        <h3>Gluten Free</h3>
                        <p>Rice is naturally gluten-free. Safe for those with gluten sensitivity or celiac disease.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="health-icon"><i class="fas fa-ban"></i></div>
                    <div class="health-content">
                        <h3>No GMO</h3>
                        <p>Non-genetically modified traditional varieties. Nature's rice as it was meant to be.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="health-icon"><i class="fas fa-ban"></i></div>
                    <div class="health-content">
                        <h3>No Allergens</h3>
                        <p>Pure rice with no common allergens. Processed in dedicated rice-only facilities.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cream">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">The Journey</span>
                <h2 class="section-title">From Seed to <span>Table</span></h2>
                <p class="section-subtitle">Understanding how our pure rice is cultivated, processed, and delivered.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-icon"><i class="fas fa-seedling"></i></div>
                    <h3>Organic Seeds</h3>
                    <p>We start with heritage, non-GMO basmati seeds that have been preserved for generations.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon"><i class="fas fa-tractor"></i></div>
                    <h3>Organic Farming</h3>
                    <p>No synthetic fertilizers or pesticides. Natural composting and traditional farming methods only.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon"><i class="fas fa-water"></i></div>
                    <h3>Pure Water</h3>
                    <p>Irrigated with Himalayan river water, naturally filtered and mineral-rich.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-sun"></i></div>
                    <h3>Natural Aging</h3>
                    <p>Aged for 12-18 months naturally to develop aroma and optimal cooking properties.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Nutritional Facts</span>
                <h2 class="section-title">What Nature <span>Provides</span></h2>
                <p class="section-subtitle">Natural nutrition in every grain - no fortification needed.</p>
            </div>
            
            <div class="contact-grid" style="gap: 60px; align-items: center;">
                <div data-aos="fade-right">
                    <div class="glass-card">
                        <h4 style="color: var(--gold); font-family: 'Playfair Display', serif; margin-bottom: 25px; font-size: 1.5rem;">Nutrition Per 100g (Uncooked)</h4>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <span style="color: var(--white);">Energy</span>
                            <span style="color: var(--gold);">356 kcal</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <span style="color: var(--white);">Carbohydrates</span>
                            <span style="color: var(--gold);">78g</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <span style="color: var(--white);">Protein</span>
                            <span style="color: var(--gold);">7.5g</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <span style="color: var(--white);">Fat</span>
                            <span style="color: var(--gold);">0.6g</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid rgba(255,255,255,0.1);">
                            <span style="color: var(--white);">Fiber</span>
                            <span style="color: var(--gold);">1.4g</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 15px 0;">
                            <span style="color: var(--white);">Sodium</span>
                            <span style="color: var(--gold);">1mg</span>
                        </div>
                    </div>
                </div>
                <div data-aos="fade-left">
                    <h3 style="color: var(--white); font-family: 'Playfair Display', serif; font-size: 2rem; margin-bottom: 25px;">Naturally Nutritious</h3>
                    <p style="color: rgba(255,255,255,0.8); line-height: 1.9; margin-bottom: 20px;">Basmati rice naturally provides complex carbohydrates for sustained energy, plant-based protein for muscle health, and essential minerals for overall wellbeing.</p>
                    <ul style="color: rgba(255,255,255,0.8); line-height: 2.2; list-style: none;">
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 10px;"></i> Low sodium for heart health</li>
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 10px;"></i> Low fat content</li>
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 10px;"></i> Easily digestible carbs</li>
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 10px;"></i> Contains B vitamins</li>
                        <li><i class="fas fa-check-circle" style="color: var(--gold); margin-right: 10px;"></i> Trace minerals present</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Quality Control</span>
                <h2 class="section-title">Tested for <span>Purity</span></h2>
                <p class="section-subtitle">Rigorous testing ensures every pack meets our high standards.</p>
            </div>
            
            <div class="health-grid">
                <div class="health-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="health-icon"><i class="fas fa-vial"></i></div>
                    <div class="health-content">
                        <h3>Residue Testing</h3>
                        <p>Advanced chromatography tests for pesticide, herbicide, and chemical residues on every batch.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="health-icon"><i class="fas fa-microscope"></i></div>
                    <div class="health-content">
                        <h3>Microbial Testing</h3>
                        <p>Tested for harmful bacteria, mold, and yeast to ensure food safety standards.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="health-icon"><i class="fas fa-atom"></i></div>
                    <div class="health-content">
                        <h3>Heavy Metal Testing</h3>
                        <p>Screened for arsenic, lead, cadmium, and mercury. Only clean rice passes.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cream">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Transparency</span>
                <h2 class="section-title">Myth vs <span>Fact</span></h2>
                <p class="section-subtitle">Clearing up common misconceptions about basmati rice.</p>
            </div>
            
            <div style="max-width: 900px; margin: 0 auto;">
                <div class="health-card" data-aos="fade-up" style="flex-direction: column; margin-bottom: 20px;">
                    <h4 style="color: #e74c3c; margin-bottom: 15px;"><i class="fas fa-times-circle" style="margin-right: 10px;"></i>MYTH: All white rice is heavily processed</h4>
                    <p style="color: var(--text-light); line-height: 1.8;"><strong style="color: var(--green);">FACT:</strong> Our milling process gently removes only the husk and bran, preserving the grain's natural nutrition. No bleaching or artificial processing.</p>
                </div>
                <div class="health-card" data-aos="fade-up" style="flex-direction: column; margin-bottom: 20px;">
                    <h4 style="color: #e74c3c; margin-bottom: 15px;"><i class="fas fa-times-circle" style="margin-right: 10px;"></i>MYTH: Aromatic rice has added fragrance</h4>
                    <p style="color: var(--text-light); line-height: 1.8;"><strong style="color: var(--green);">FACT:</strong> Basmati's aroma comes from 2-acetyl-1-pyrroline, a naturally occurring compound that develops during grain maturation. No artificial fragrances added.</p>
                </div>
                <div class="health-card" data-aos="fade-up" style="flex-direction: column; margin-bottom: 20px;">
                    <h4 style="color: #e74c3c; margin-bottom: 15px;"><i class="fas fa-times-circle" style="margin-right: 10px;"></i>MYTH: Long-grain rice is genetically modified</h4>
                    <p style="color: var(--text-light); line-height: 1.8;"><strong style="color: var(--green);">FACT:</strong> Basmati's long grains are a natural characteristic developed over thousands of years of traditional cultivation. Our rice is 100% non-GMO.</p>
                </div>
                <div class="health-card" data-aos="fade-up" style="flex-direction: column;">
                    <h4 style="color: #e74c3c; margin-bottom: 15px;"><i class="fas fa-times-circle" style="margin-right: 10px;"></i>MYTH: Aged rice has preservatives</h4>
                    <p style="color: var(--text-light); line-height: 1.8;"><strong style="color: var(--green);">FACT:</strong> Rice aging is a natural process. Controlled temperature and humidity conditions allow starches to change structure, improving cooking quality without any additives.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Storage Guide</span>
                <h2 class="section-title">Keeping It <span>Pure</span></h2>
                <p class="section-subtitle">Tips to maintain the purity and freshness of your rice at home.</p>
            </div>
            
            <div class="features-grid">
                <div class="glass-card" data-aos="fade-up" data-aos-delay="0" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><i class="fas fa-temperature-low" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">Cool Place</h3>
                    <p style="color: rgba(255,255,255,0.8);">Store between 10-25°C. Avoid heat sources and direct sunlight.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><i class="fas fa-tint-slash" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">Keep Dry</h3>
                    <p style="color: rgba(255,255,255,0.8);">Moisture causes spoilage. Always use dry utensils when handling.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><i class="fas fa-box" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">Airtight Container</h3>
                    <p style="color: rgba(255,255,255,0.8);">Transfer to airtight container after opening to maintain freshness.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="300" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 20px;"><i class="fas fa-bug-slash" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">Bay Leaves</h3>
                    <p style="color: rgba(255,255,255,0.8);">Natural pest deterrent - add 2-3 bay leaves to your rice container.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Experience <span>Pure Basmati</span></h2>
                <p>Taste the difference that purity makes. Choose Lababdar for 100% natural, organic basmati rice.</p>
                <div class="cta-buttons">
                    <a href="products.php" class="btn-primary"><i class="fas fa-shopping-bag"></i> Shop Now</a>
                    <a href="contact.php" class="btn-secondary"><i class="fas fa-envelope"></i> Contact Us</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
