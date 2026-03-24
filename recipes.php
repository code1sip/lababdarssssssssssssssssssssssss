<?php
$pageTitle = "Delicious Rice Recipes";
$pageDescription = "Discover mouth-watering recipes made with Lababdar Organic Basmati Rice. From classic biryanis to creamy desserts, find your next favorite dish.";
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
            <i class="fas fa-utensils"></i> Recipe Collection
        </div>

        <h1>Delicious <span>Recipes</span></h1>

        <p class="page-hero-desc">
            Discover mouth-watering recipes made with Lababdar Organic Basmati Rice — from aromatic biryanis to delightful desserts.
        </p>

        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Recipes</span>
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
                <span class="section-label">Featured</span>
                <h2 class="section-title">Signature <span>Recipes</span></h2>
                <p class="section-subtitle">Our most loved recipes that bring out the best in Lababdar Basmati Rice.</p>
            </div>
            
            <div class="recipes-grid" id="biryani">
                <div class="recipe-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="recipe-image">
                        <img src="assets/images/recipes/biryani.jpg" alt="Classic Veg Biryani">
                        <span class="recipe-time"><i class="fas fa-clock"></i> 45 mins</span>
                    </div>
                    <div class="recipe-content">
                        <h3>Classic Veg Biryani</h3>
                        <p>Aromatic long-grain Lababdar Basmati layered with spiced vegetables, saffron, and fragrant herbs. A royal feast for your taste buds.</p>
                        <div class="recipe-meta">
                            <span class="recipe-difficulty">Medium</span>
                            <a href="#biryani-recipe" class="recipe-link">View Recipe <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card" data-aos="fade-up" data-aos-delay="100" id="jeera-rice">
                    <div class="recipe-image">
                        <img src="assets/images/recipes/jeera-rice.jpg" alt="Jeera Rice">
                        <span class="recipe-time"><i class="fas fa-clock"></i> 20 mins</span>
                    </div>
                    <div class="recipe-content">
                        <h3>Jeera Rice</h3>
                        <p>Simple, fragrant & restaurant-style jeera rice. The perfect accompaniment to your favorite curries and dals.</p>
                        <div class="recipe-meta">
                            <span class="recipe-difficulty">Easy</span>
                            <a href="#jeera-recipe" class="recipe-link">View Recipe <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card" data-aos="fade-up" data-aos-delay="200" id="kheer">
                    <div class="recipe-image">
                        <img src="assets/images/recipes/kheer.jpg" alt="Rice Kheer">
                        <span class="recipe-time"><i class="fas fa-clock"></i> 40 mins</span>
                    </div>
                    <div class="recipe-content">
                        <h3>Creamy Kheer</h3>
                        <p>Traditional Indian rice pudding made with aromatic Lababdar Basmati. A heavenly dessert for special occasions.</p>
                        <div class="recipe-meta">
                            <span class="recipe-difficulty">Easy</span>
                            <a href="#kheer-recipe" class="recipe-link">View Recipe <i class="fas fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cream" id="biryani-recipe">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Step by Step</span>
                <h2 class="section-title">Classic Veg <span>Biryani</span></h2>
                <p class="section-subtitle">The king of all rice dishes - learn to make restaurant-quality biryani at home.</p>
            </div>
            
            <div class="contact-grid" style="gap: 60px; align-items: start;">
                <div data-aos="fade-right">
                    <img src="assets/images/luxury_vegetable_biryani_dish.png" alt="Veg Biryani" style="width: 100%; border-radius: 25px; box-shadow: var(--shadow-hard); margin-bottom: 30px;">
                    
                    <div style="background: var(--white); border-radius: 20px; padding: 30px; box-shadow: var(--shadow-soft);">
                        <h4 style="font-family: 'Playfair Display', serif; font-size: 1.3rem; color: var(--primary-purple); margin-bottom: 20px;"><i class="fas fa-list" style="color: var(--gold); margin-right: 10px;"></i>Ingredients</h4>
                        <ul style="color: var(--text-light); line-height: 2.2; list-style: none;">
                            <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px; font-size: 0.8rem;"></i>2 cups Lababdar Basmati Rice</li>
                            <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px; font-size: 0.8rem;"></i>2 cups mixed vegetables</li>
                            <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px; font-size: 0.8rem;"></i>2 onions, sliced thin</li>
                            <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px; font-size: 0.8rem;"></i>1 cup yogurt</li>
                            <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px; font-size: 0.8rem;"></i>Biryani masala - 2 tbsp</li>
                            <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px; font-size: 0.8rem;"></i>Saffron strands</li>
                            <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px; font-size: 0.8rem;"></i>Ghee - 4 tbsp</li>
                            <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px; font-size: 0.8rem;"></i>Fresh mint & coriander</li>
                        </ul>
                    </div>
                </div>
                
                <div data-aos="fade-left">
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.5rem; color: var(--primary-purple); margin-bottom: 25px;"><i class="fas fa-fire" style="color: var(--gold); margin-right: 10px;"></i>Instructions</h4>
                    
                    <div class="timeline" style="padding-left: 30px;">
                        <div class="timeline-item" style="padding-bottom: 25px; padding-left: 30px;">
                            <div class="timeline-dot" style="left: -28px;"></div>
                            <h5 style="color: var(--primary-purple); margin-bottom: 8px;">Step 1: Prepare Rice</h5>
                            <p style="color: var(--text-light); line-height: 1.7;">Wash and soak Lababdar Basmati rice for 30 minutes. Drain and set aside.</p>
                        </div>
                        <div class="timeline-item" style="padding-bottom: 25px; padding-left: 30px;">
                            <div class="timeline-dot" style="left: -28px;"></div>
                            <h5 style="color: var(--primary-purple); margin-bottom: 8px;">Step 2: Fry Onions</h5>
                            <p style="color: var(--text-light); line-height: 1.7;">Heat ghee and fry sliced onions until golden brown. Set aside half for garnish.</p>
                        </div>
                        <div class="timeline-item" style="padding-bottom: 25px; padding-left: 30px;">
                            <div class="timeline-dot" style="left: -28px;"></div>
                            <h5 style="color: var(--primary-purple); margin-bottom: 8px;">Step 3: Cook Vegetables</h5>
                            <p style="color: var(--text-light); line-height: 1.7;">Add vegetables, yogurt, and biryani masala. Cook until vegetables are tender.</p>
                        </div>
                        <div class="timeline-item" style="padding-bottom: 25px; padding-left: 30px;">
                            <div class="timeline-dot" style="left: -28px;"></div>
                            <h5 style="color: var(--primary-purple); margin-bottom: 8px;">Step 4: Par-boil Rice</h5>
                            <p style="color: var(--text-light); line-height: 1.7;">Boil rice with whole spices until 70% cooked. Drain and set aside.</p>
                        </div>
                        <div class="timeline-item" style="padding-bottom: 25px; padding-left: 30px;">
                            <div class="timeline-dot" style="left: -28px;"></div>
                            <h5 style="color: var(--primary-purple); margin-bottom: 8px;">Step 5: Layer</h5>
                            <p style="color: var(--text-light); line-height: 1.7;">Layer rice over vegetables. Add saffron milk, mint, coriander, and fried onions.</p>
                        </div>
                        <div class="timeline-item" style="padding-bottom: 0; padding-left: 30px;">
                            <div class="timeline-dot" style="left: -28px;"></div>
                            <h5 style="color: var(--primary-purple); margin-bottom: 8px;">Step 6: Dum Cook</h5>
                            <p style="color: var(--text-light); line-height: 1.7;">Seal with dough, cook on low heat for 25 mins. Rest 5 mins before serving.</p>
                        </div>
                    </div>
                    
                    <div style="background: rgba(212, 175, 55, 0.1); border: 1px solid var(--gold); border-radius: 15px; padding: 20px; margin-top: 30px;">
                        <h5 style="color: var(--gold-dark); margin-bottom: 10px;"><i class="fas fa-lightbulb" style="margin-right: 8px;"></i>Pro Tip</h5>
                        <p style="color: var(--text-light); line-height: 1.7; margin: 0;">Use Lababdar Biryani Special rice for the best results. Its extra-long grains stay separate and absorb all the flavors perfectly.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="jeera-recipe">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Quick & Easy</span>
                <h2 class="section-title">Perfect <span>Jeera Rice</span></h2>
                <p class="section-subtitle">Restaurant-style cumin rice in just 20 minutes - the perfect side dish.</p>
            </div>
            
            <div class="contact-grid" style="gap: 60px; align-items: center;">
                <div data-aos="fade-right">
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.3rem; color: var(--primary-purple); margin-bottom: 20px;">Ingredients</h4>
                    <ul style="color: var(--text-light); line-height: 2.2; list-style: none; margin-bottom: 30px;">
                        <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px;"></i>1 cup Lababdar Basmati Rice</li>
                        <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px;"></i>2 cups water</li>
                        <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px;"></i>1 tbsp cumin seeds</li>
                        <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px;"></i>2 tbsp ghee</li>
                        <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px;"></i>Salt to taste</li>
                        <li><i class="fas fa-check" style="color: var(--green); margin-right: 10px;"></i>Fresh coriander for garnish</li>
                    </ul>
                    
                    <h4 style="font-family: 'Playfair Display', serif; font-size: 1.3rem; color: var(--primary-purple); margin-bottom: 20px;">Quick Steps</h4>
                    <ol style="color: var(--text-light); line-height: 2.2; padding-left: 20px;">
                        <li>Wash and soak rice for 20 minutes, drain</li>
                        <li>Heat ghee in a pot, add cumin seeds</li>
                        <li>When cumin splutters, add rice and saute</li>
                        <li>Add water and salt, bring to boil</li>
                        <li>Cover and cook on low for 12-15 mins</li>
                        <li>Fluff with fork, garnish with coriander</li>
                    </ol>
                </div>
                <div data-aos="fade-left">
                    <img src="assets/images/fragrant_jeera_cumin_rice.png" alt="Jeera Rice" style="width: 100%; border-radius: 25px; box-shadow: var(--shadow-hard);">
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark" id="kheer-recipe">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Dessert</span>
                <h2 class="section-title">Creamy <span>Rice Kheer</span></h2>
                <p class="section-subtitle">Traditional Indian rice pudding that melts in your mouth.</p>
            </div>
            
            <div class="contact-grid" style="gap: 60px; align-items: center;">
                <div data-aos="fade-right">
                    <img src="assets/images/creamy_rice_kheer_dessert.png" alt="Rice Kheer" style="width: 100%; border-radius: 25px; box-shadow: var(--shadow-luxury);">
                </div>
                <div data-aos="fade-left">
                    <div class="glass-card" style="margin-bottom: 30px;">
                        <h4 style="color: var(--white); font-family: 'Playfair Display', serif; margin-bottom: 15px;">Ingredients</h4>
                        <ul style="color: rgba(255,255,255,0.8); line-height: 2; list-style: none;">
                            <li><i class="fas fa-check" style="color: var(--gold); margin-right: 10px;"></i>1/4 cup Lababdar Basmati Rice</li>
                            <li><i class="fas fa-check" style="color: var(--gold); margin-right: 10px;"></i>1 litre full cream milk</li>
                            <li><i class="fas fa-check" style="color: var(--gold); margin-right: 10px;"></i>1/2 cup sugar</li>
                            <li><i class="fas fa-check" style="color: var(--gold); margin-right: 10px;"></i>Cardamom powder</li>
                            <li><i class="fas fa-check" style="color: var(--gold); margin-right: 10px;"></i>Saffron strands</li>
                            <li><i class="fas fa-check" style="color: var(--gold); margin-right: 10px;"></i>Chopped nuts for garnish</li>
                        </ul>
                    </div>
                    
                    <div class="glass-card">
                        <h4 style="color: var(--white); font-family: 'Playfair Display', serif; margin-bottom: 15px;">Method</h4>
                        <ol style="color: rgba(255,255,255,0.8); line-height: 2.2; padding-left: 20px;">
                            <li>Wash and soak rice for 30 minutes</li>
                            <li>Boil milk in a heavy bottom pan, stirring often</li>
                            <li>Add soaked rice, simmer on low heat</li>
                            <li>Stir occasionally until rice is fully cooked and milk thickens (25-30 mins)</li>
                            <li>Add sugar, cardamom, and saffron</li>
                            <li>Cook for 5 more minutes, garnish with nuts</li>
                            <li>Serve warm or chilled</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">More Recipes</span>
                <h2 class="section-title">Explore <span>More</span></h2>
                <p class="section-subtitle">Try these other delicious recipes with Lababdar Basmati Rice.</p>
            </div>
            
            <div class="recipes-grid">
                <div class="recipe-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="recipe-image" style="background: var(--gradient-purple);">
                        <span class="recipe-time"><i class="fas fa-clock"></i> 30 mins</span>
                    </div>
                    <div class="recipe-content">
                        <h3>Saffron Pulao</h3>
                        <p>Fragrant rice cooked with saffron, whole spices, and caramelized onions. Perfect for celebrations.</p>
                        <div class="recipe-meta">
                            <span class="recipe-difficulty">Easy</span>
                            <a href="#" class="recipe-link">Coming Soon</a>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="recipe-image" style="background: var(--gradient-purple);">
                        <span class="recipe-time"><i class="fas fa-clock"></i> 35 mins</span>
                    </div>
                    <div class="recipe-content">
                        <h3>Fried Rice</h3>
                        <p>Indo-Chinese style fried rice with vegetables and the perfect wok flavor. A family favorite.</p>
                        <div class="recipe-meta">
                            <span class="recipe-difficulty">Easy</span>
                            <a href="#" class="recipe-link">Coming Soon</a>
                        </div>
                    </div>
                </div>
                
                <div class="recipe-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="recipe-image" style="background: var(--gradient-purple);">
                        <span class="recipe-time"><i class="fas fa-clock"></i> 25 mins</span>
                    </div>
                    <div class="recipe-content">
                        <h3>Lemon Rice</h3>
                        <p>South Indian style tangy lemon rice with peanuts and curry leaves. Light and refreshing.</p>
                        <div class="recipe-meta">
                            <span class="recipe-difficulty">Easy</span>
                            <a href="#" class="recipe-link">Coming Soon</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cream">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Tips & Tricks</span>
                <h2 class="section-title">Chef's <span>Secrets</span></h2>
                <p class="section-subtitle">Professional tips to elevate your rice cooking game.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-icon"><i class="fas fa-water"></i></div>
                    <h3>Always Soak</h3>
                    <p>Soaking for 30 minutes helps grains absorb water evenly and cook to perfect texture.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon"><i class="fas fa-tint"></i></div>
                    <h3>Cold Water Rinse</h3>
                    <p>Rinse rice with cold water to remove excess starch and prevent stickiness.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon"><i class="fas fa-fire-alt"></i></div>
                    <h3>Low & Slow</h3>
                    <p>After boiling, reduce to lowest heat. Gentle cooking gives the best texture.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-utensil-spoon"></i></div>
                    <h3>Don't Stir</h3>
                    <p>Avoid stirring while cooking - it breaks grains. Use a fork to fluff after resting.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Nutritional Info</span>
                <h2 class="section-title">Healthy <span>Choices</span></h2>
                <p class="section-subtitle">Make informed choices with our recipe nutritional information.</p>
            </div>
            
            <div class="health-grid">
                <div class="glass-card" data-aos="fade-up" data-aos-delay="0" style="text-align: center;">
                    <h3 style="color: var(--gold); font-size: 2.5rem; margin-bottom: 10px;">356</h3>
                    <p style="color: var(--white);">Calories per 100g</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100" style="text-align: center;">
                    <h3 style="color: var(--gold); font-size: 2.5rem; margin-bottom: 10px;">0mg</h3>
                    <p style="color: var(--white);">Cholesterol</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200" style="text-align: center;">
                    <h3 style="color: var(--gold); font-size: 2.5rem; margin-bottom: 10px;">7.5g</h3>
                    <p style="color: var(--white);">Protein per 100g</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Pairing Guide</span>
                <h2 class="section-title">Perfect <span>Companions</span></h2>
                <p class="section-subtitle">Best dishes to pair with each rice preparation.</p>
            </div>
            
            <div class="health-grid">
                <div class="health-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="health-icon"><i class="fas fa-drumstick-bite"></i></div>
                    <div class="health-content">
                        <h3>With Biryani</h3>
                        <p>Raita, Mirchi ka Salan, Boiled Eggs, and a side of sliced onions with lemon.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="health-icon"><i class="fas fa-pepper-hot"></i></div>
                    <div class="health-content">
                        <h3>With Jeera Rice</h3>
                        <p>Dal Tadka, Paneer Butter Masala, Chole, or any rich North Indian curry.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="health-icon"><i class="fas fa-leaf"></i></div>
                    <div class="health-content">
                        <h3>With Pulao</h3>
                        <p>Kadhi Pakora, Mixed Vegetable Curry, or light Korma. Perfect for subtle flavors.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Ready to Cook <span>Something Amazing?</span></h2>
                <p>Get your Lababdar Basmati Rice today and start creating restaurant-quality dishes at home.</p>
                <div class="cta-buttons">
                    <a href="products.php" class="btn-primary"><i class="fas fa-shopping-bag"></i> Shop Now</a>
                    <a href="contact.php" class="btn-secondary"><i class="fas fa-envelope"></i> Contact Us</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
