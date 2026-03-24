<?php
$pageTitle = "About Us - Our Story";
$pageDescription = "Learn about Lababdar Foods - India's trusted organic rice brand. Discover our journey, mission, and commitment to delivering nature's finest basmati rice.";
include 'includes/header.php';
?>

   <section class="page-hero">
    
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="hero-video">
        <source src="assets/gif%202.mp4" type="video/mp4">
    </video>

    <!-- Overlay (Dark effect for readability) -->
    <div class="hero-overlay"></div>

    <!-- Content -->
    <div class="page-hero-content" style=" background: rgba(0, 0, 0, 0.); padding:20px; background-radius:20px;">
        <div class="page-hero-label" style="    background-color: #0B3156;">
            <i class="fas fa-seedling"></i> Our Story
        </div>
        <h1>About <span style="   background-color: #0B3156;">Lababdar</span></h1>
        <p class="page-hero-desc">
            Dedicated to delivering nature's finest Basmati rice since 1998. A legacy of purity, quality, and trust.
        </p>

        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span style="">About Us</span>
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
                <span class="section-label">Our Heritage</span>
                <h2 class="section-title">A Legacy of <span>Excellence</span></h2>
                <p class="section-subtitle">For over 25 years, Lababdar has been synonymous with premium quality basmati rice, trusted by millions of families across India and the world.</p>
            </div>
            
            <div class="contact-grid" style="gap: 60px; align-items: center;">
<div data-aos="fade-right">

    <div class="led-frame">
        
        <video autoplay muted loop playsinline>
            <source src="assets/videos/rice-video.mp4" type="video/mp4">
        </video>

    </div>

</div>
<style>/* LED FRAME */
.led-frame {
    position: relative;
    border-radius: 25px;
    padding: 8px;
    background: #000;
    box-shadow: 
        0 0 10px rgba(212,175,55,0.4),
        0 0 25px rgba(212,175,55,0.2),
        0 20px 40px rgba(0,0,0,0.4);
    overflow: hidden;
}

/* VIDEO */
.led-frame video {
    width: 100%;
    height: 100%;
    border-radius: 18px;
    object-fit: cover;
}

/* GLOW BORDER */
.led-frame::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 25px;
    padding: 2px;
    background: linear-gradient(45deg, #d4af37, #fff, #d4af37);
    -webkit-mask: 
        linear-gradient(#000 0 0) content-box, 
        linear-gradient(#000 0 0);
    -webkit-mask-composite: xor;
    mask-composite: exclude;
    animation: glowBorder 3s linear infinite;
}

/* ANIMATION */
@keyframes glowBorder {
    0% { filter: hue-rotate(0deg); }
    100% { filter: hue-rotate(360deg); }
}

/* HOVER EFFECT */
.led-frame:hover {
    transform: scale(1.02);
    transition: 0.3s;
}</style>
                <div data-aos="fade-left">
                    <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; color: var(--primary-purple); margin-bottom: 20px;">Our Beginning</h3>
                    <p style="color: var(--text-light); line-height: 1.9; margin-bottom: 20px;">Lababdar Foods began with a simple vision - to bring the purest, most authentic basmati rice from Punjab's fertile fields to dining tables across the world. What started as a small family business has grown into one of India's most trusted rice brands.</p>
                    <p style="color: var(--text-light); line-height: 1.9; margin-bottom: 30px;">We work closely with trusted farmers who follow organic farming practices - no pesticides, no chemicals, only purity. Every grain is naturally aged, processed with care, and packed in world-class hygienic facilities.</p>
                    <div class="slide-badges" style="margin-bottom: 0;">
                        <div class="slide-badge" style="background: rgba(26, 26, 78, 0.1); border-color: var(--primary-purple); color: var(--primary-purple);"><i class="fas fa-calendar" style="color: var(--gold-dark);"></i> Est. 1998</div>
                        <div class="slide-badge" style="background: rgba(26, 26, 78, 0.1); border-color: var(--primary-purple); color: var(--primary-purple);"><i class="fas fa-users" style="color: var(--gold-dark);"></i> 500+ Farmers</div>
                        <div class="slide-badge" style="background: rgba(26, 26, 78, 0.1); border-color: var(--primary-purple); color: var(--primary-purple);"><i class="fas fa-globe" style="color: var(--gold-dark);"></i> 50+ Countries</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Vision & Mission</span>
                <h2 class="section-title">Our <span>Purpose</span></h2>
                <p class="section-subtitle">Guided by our commitment to quality and health, we strive to make a positive impact on lives through the food we provide.</p>
            </div>
            
            <div class="health-grid">
                <div class="glass-card" data-aos="fade-up" data-aos-delay="0" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 25px;"><i class="fas fa-bullseye" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white); font-family: 'Playfair Display', serif; font-size: 1.5rem; margin-bottom: 15px;">Our Mission</h3>
                    <p style="color: rgba(255,255,255,0.8); line-height: 1.9;">To provide families with healthier, premium, and chemical-free rice that nourishes both body and soul. We believe every meal should be pure, nutritious, and delicious.</p>
                </div>
                
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 25px;"><i class="fas fa-eye" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white); font-family: 'Playfair Display', serif; font-size: 1.5rem; margin-bottom: 15px;">Our Vision</h3>
                    <p style="color: rgba(255,255,255,0.8); line-height: 1.9;">To make Lababdar India's most trusted organic rice brand and a global symbol of quality, purity, and authentic Indian heritage.</p>
                </div>
                
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200" style="text-align: center;">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2); margin: 0 auto 25px;"><i class="fas fa-heart" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white); font-family: 'Playfair Display', serif; font-size: 1.5rem; margin-bottom: 15px;">Our Values</h3>
                    <p style="color: rgba(255,255,255,0.8); line-height: 1.9;">Integrity, quality, sustainability, and care for our customers, farmers, and the environment guide every decision we make.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="timeline-section" style="margin-bottom:0px; padding:20px;">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Our Journey</span>
                <h2 class="section-title">The Lababdar <span>Timeline</span></h2>
                <p class="section-subtitle">From humble beginnings to becoming a household name - our journey of passion and dedication.</p>
            </div>
            
            <!--<div class="timeline">-->
            <!--    <div class="timeline-item" data-aos="fade-up">-->
            <!--        <div class="timeline-dot"></div>-->
            <!--        <div class="timeline-year">1998</div>-->
            <!--        <div class="timeline-content">-->
            <!--            <h3>The Beginning</h3>-->
            <!--            <p>Lababdar Foods was founded in Punjab with a vision to bring the finest organic basmati rice to Indian homes. Started with 50 partner farmers and a commitment to quality.</p>-->
            <!--        </div>-->
            <!--    </div>-->
                
            <!--    <div class="timeline-item" data-aos="fade-up">-->
            <!--        <div class="timeline-dot"></div>-->
            <!--        <div class="timeline-year">2005</div>-->
            <!--        <div class="timeline-content">-->
            <!--            <h3>FSSAI Certification</h3>-->
            <!--            <p>Received FSSAI certification, marking our commitment to food safety. Expanded our farmer network to 200+ organic farmers across Punjab.</p>-->
            <!--        </div>-->
            <!--    </div>-->
                
            <!--    <div class="timeline-item" data-aos="fade-up">-->
            <!--        <div class="timeline-dot"></div>-->
            <!--        <div class="timeline-year">2010</div>-->
            <!--        <div class="timeline-content">-->
            <!--            <h3>Organic Certification</h3>-->
            <!--            <p>Achieved 100% organic certification for all products. Launched the premium Organic Heritage line that became our flagship product.</p>-->
            <!--        </div>-->
            <!--    </div>-->
                
            <!--    <div class="timeline-item" data-aos="fade-up">-->
            <!--        <div class="timeline-dot"></div>-->
            <!--        <div class="timeline-year">2015</div>-->
            <!--        <div class="timeline-content">-->
            <!--            <h3>International Expansion</h3>-->
            <!--            <p>Began exporting to international markets. Reached 25+ countries across Middle East, Europe, and North America.</p>-->
            <!--        </div>-->
            <!--    </div>-->
                
            <!--    <div class="timeline-item" data-aos="fade-up">-->
            <!--        <div class="timeline-dot"></div>-->
            <!--        <div class="timeline-year">2020</div>-->
            <!--        <div class="timeline-content">-->
            <!--            <h3>Modern Facility</h3>-->
            <!--            <p>Inaugurated state-of-the-art processing facility with solar power. Introduced eco-friendly packaging and water conservation practices.</p>-->
            <!--        </div>-->
            <!--    </div>-->
                
            <!--    <div class="timeline-item" data-aos="fade-up">-->
            <!--        <div class="timeline-dot"></div>-->
            <!--        <div class="timeline-year">2024</div>-->
            <!--        <div class="timeline-content">-->
            <!--            <h3>Today & Beyond</h3>-->
            <!--            <p>Serving millions of families worldwide with 500+ partner farmers. Continuing our legacy of purity and excellence into the future.</p>-->
            <!--        </div>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </section>
<section class="full-img-wrapper body-w">
  <img src="/assets/images/about.png" alt="Origin Lababdar Rice">
</section>
<style>
    /* remove default gap */
.body-w {
  margin: 0;
  padding: 0;
}

.full-img-wrapper {
  width: 100%;
  height: 800px;
  margin: 0;
  padding: 0;
}

.full-img-wrapper img {
  width: 100%;
  height: auto;   /* IMPORTANT: no crop */
  display: block;
}
</style>
    <section>
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Our Philosophy</span>
                <h2 class="section-title">Core <span>Pillars</span></h2>
                <p class="section-subtitle">The principles that guide every grain of rice from our fields to your table.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-icon"><i class="fas fa-gem"></i></div>
                    <h3>Quality Without Compromise </h3>
                    <p>We never compromise on quality. Each batch is tested for purity, aroma, grain length, and nutritional value before packaging.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon"><i class="fas fa-hands-helping"></i></div>
                    <h3>Farmer Partnership</h3>
                    <p>We work directly with farmers, ensuring fair prices and sustainable practices that benefit the entire community.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon"><i class="fas fa-leaf"></i></div>
                    <h3>Environmental Care</h3>
                    <p>From organic farming to eco-packaging, we minimize our environmental footprint at every step.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-users"></i></div>
                    <h3>Customer First</h3>
                    <p>Your satisfaction is served in every grain—aromatic, pure, and crafted to perfection.</p>
                </div>
            </div>
        </div>
    </section>

   <section class="section-cream">
    <div class="container">

        <div class="section-header" data-aos="fade-up">
            <span class="section-label">Our People</span>
            <h2 class="section-title">Farmer <span>Partners</span></h2>
            <p class="section-subtitle">
                Empowering farming communities while delivering premium quality basmati rice.
            </p>
        </div>
        
        <div class="contact-grid" style="gap: 60px; align-items: center;">

            <!-- LEFT CONTENT -->
            <div data-aos="fade-right">
                
                <h3 style="font-family: 'Playfair Display', serif; font-size: 2rem; color: var(--primary-purple); margin-bottom: 20px;">
                    Empowering 500+ Farming Families Across Punjab
                </h3>

                <p style="color: var(--text-light); line-height: 1.9; margin-bottom: 20px;">
                    We work hand-in-hand with over 500 dedicated farmers, ensuring every grain of basmati is grown with care, purity, and responsibility. By supporting their livelihoods, we deliver quality you can trust.
                </p>

                <ul style="color: var(--text-light); line-height: 2.2; list-style: none;">

                    <li>
                        <i class="fas fa-check-circle" style="color: var(--green); margin-right: 10px;"></i>
                        Fair and transparent pricing that rewards farmers
                    </li>

                    <li>
                        <i class="fas fa-check-circle" style="color: var(--green); margin-right: 10px;"></i>
                        Training in sustainable and organic farming practices
                    </li>

                    <li>
                        <i class="fas fa-check-circle" style="color: var(--green); margin-right: 10px;"></i>
                        Access to modern tools and advanced equipment
                    </li>

                    <li>
                        <i class="fas fa-check-circle" style="color: var(--green); margin-right: 10px;"></i>
                        Healthcare support for farmer families
                    </li>

                    <li>
                        <i class="fas fa-check-circle" style="color: var(--green); margin-right: 10px;"></i>
                        Educational assistance for their children
                    </li>

                </ul>

            </div>

            <!-- RIGHT IMAGE -->
            <div data-aos="fade-left">
                <img src="assets/images/sustainable_organic_rice_farming.png" alt="Farmer Partners" style="width: 100%; border-radius: 25px; box-shadow: var(--shadow-hard);">
            </div>

        </div>

    </div>
</section>

    <section class="section-dark">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Manufacturing</span>
                <h2 class="section-title">World-Class <span>Facility</span></h2>
                <p class="section-subtitle">Our state-of-the-art processing facility ensures the highest standards of hygiene, quality, and efficiency.</p>
            </div>
            
            <div class="features-grid">
                <div class="glass-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2);"><i class="fas fa-industry" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">Modern Machinery</h3>
                    <p style="color: rgba(255,255,255,0.7);">Latest milling and sorting technology from Japan and Germany for perfect grain quality.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2);"><i class="fas fa-solar-panel" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">Solar Powered</h3>
                    <p style="color: rgba(255,255,255,0.7);">100% solar-powered facility reducing our carbon footprint significantly.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2);"><i class="fas fa-shield-alt" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">Hygiene Standards</h3>
                    <p style="color: rgba(255,255,255,0.7);">HACCP certified with strict hygiene protocols at every production stage.</p>
                </div>
                <div class="glass-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon" style="background: rgba(212, 175, 55, 0.2);"><i class="fas fa-flask" style="color: var(--gold);"></i></div>
                    <h3 style="color: var(--white);">Quality Lab</h3>
                    <p style="color: rgba(255,255,255,0.7);">In-house laboratory for comprehensive quality testing and analysis.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Quality Assurance</span>
                <h2 class="section-title">Lab <span>Excellence</span></h2>
                <p class="section-subtitle">Rigorous testing at every stage ensures only the finest rice reaches your table.</p>
            </div>
            
            <div class="health-grid">
                <div class="health-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="health-icon"><i class="fas fa-vial"></i></div>
                    <div class="health-content">
                        <h3>Purity Testing</h3>
                        <p>Every batch is tested for chemical residues, pesticides, and adulterants using advanced chromatography.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="health-icon"><i class="fas fa-ruler-combined"></i></div>
                    <div class="health-content">
                        <h3>Grain Analysis</h3>
                        <p>Computer vision technology measures grain length, uniformity, and appearance for consistent quality.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="health-icon"><i class="fas fa-nose"></i></div>
                    <div class="health-content">
                        <h3>Aroma Testing</h3>
                        <p>Expert panels and electronic nose technology verify the signature basmati aroma profile.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="health-icon"><i class="fas fa-microscope"></i></div>
                    <div class="health-content">
                        <h3>Microbial Testing</h3>
                        <p>Comprehensive microbiological analysis ensures food safety and extended shelf life.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="health-icon"><i class="fas fa-fire"></i></div>
                    <div class="health-content">
                        <h3>Cooking Tests</h3>
                        <p>Sample cooking tests verify texture, elongation ratio, and taste before batch approval.</p>
                    </div>
                </div>
                <div class="health-card" data-aos="fade-up" data-aos-delay="500">
                    <div class="health-icon"><i class="fas fa-clipboard-check"></i></div>
                    <div class="health-content">
                        <h3>Certification</h3>
                        <p>All products undergo third-party certification for organic, GMO-free, and FSSAI compliance.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-cream">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Sustainability</span>
                <h2 class="section-title">Ethical <span>Sourcing</span></h2>
                <p class="section-subtitle">We are committed to ethical practices that benefit our farmers, communities, and the environment.</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="feature-icon"><i class="fas fa-water"></i></div>
                    <h3>Water Stewardship</h3>
                    <p>Advanced irrigation techniques reduce water usage by 40% while maintaining optimal crop health.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-icon"><i class="fas fa-tree"></i></div>
                    <h3>Biodiversity</h3>
                    <p>Organic farming practices promote soil health and support local ecosystems and wildlife.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-icon"><i class="fas fa-recycle"></i></div>
                    <h3>Zero Waste</h3>
                    <p>Rice husks and byproducts are repurposed for energy and animal feed, eliminating waste.</p>
                </div>
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-icon"><i class="fas fa-heart"></i></div>
                    <h3>Community Support</h3>
                    <p>Investment in local schools, healthcare, and infrastructure for farming communities.</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Leadership</span>
                <h2 class="section-title">Our <span>Team</span></h2>
                <p class="section-subtitle">Meet the passionate leaders driving Lababdar's mission of purity and quality.</p>
            </div>
            
            <div class="team-grid">
                <div class="team-card" data-aos="fade-up" data-aos-delay="0">
                    <div class="team-avatar"><i class="fas fa-user"></i></div>
                    <h3>Mr. Rajinder Singh</h3>
                    <p class="position">Founder & Chairman</p>
                    <p>25+ years of experience in organic agriculture and food processing.</p>
                </div>
                <div class="team-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="team-avatar"><i class="fas fa-user"></i></div>
                    <h3>Mrs. Harpreet Kaur</h3>
                    <p class="position">Managing Director</p>
                    <p>Leading operations and international expansion strategies.</p>
                </div>
                <div class="team-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="team-avatar"><i class="fas fa-user"></i></div>
                    <h3>Dr. Vikram Sharma</h3>
                    <p class="position">Head of Quality</p>
                    <p>Food scientist ensuring world-class quality standards.</p>
                </div>
                <div class="team-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="team-avatar"><i class="fas fa-user"></i></div>
                    <h3>Ms. Anika Malhotra</h3>
                    <p class="position">Marketing Director</p>
                    <p>Building the Lababdar brand across global markets.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Recognition</span>
                <h2 class="section-title">Awards & <span>Achievements</span></h2>
                <p class="section-subtitle">Industry recognition for our commitment to quality and excellence.</p>
            </div>
            
            <div class="cert-grid">
                <div class="cert-item" data-aos="zoom-in" data-aos-delay="0">
                    <div class="cert-icon"><i class="fas fa-trophy"></i></div>
                    <h4>Best Organic Rice 2023</h4>
                    <p>India Food Awards</p>
                </div>
                <div class="cert-item" data-aos="zoom-in" data-aos-delay="100">
                    <div class="cert-icon"><i class="fas fa-award"></i></div>
                    <h4>Excellence in Export</h4>
                    <p>APEDA India</p>
                </div>
                <div class="cert-item" data-aos="zoom-in" data-aos-delay="200">
                    <div class="cert-icon"><i class="fas fa-medal"></i></div>
                    <h4>Green Business Award</h4>
                    <p>Sustainability Summit</p>
                </div>
                <div class="cert-item" data-aos="zoom-in" data-aos-delay="300">
                    <div class="cert-icon"><i class="fas fa-star"></i></div>
                    <h4>Consumer Choice Award</h4>
                    <p>FICCI India</p>
                </div>
                <div class="cert-item" data-aos="zoom-in" data-aos-delay="400">
                    <div class="cert-icon"><i class="fas fa-crown"></i></div>
                    <h4>Premium Brand 2024</h4>
                    <p>Food & Beverage India</p>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <span class="section-label">Global Presence</span>
                <h2 class="section-title">Worldwide <span>Reach</span></h2>
                <p class="section-subtitle">From Punjab to the world - Lababdar rice is enjoyed in over 50 countries.</p>
            </div>
            
            <div class="stats-section" style="background: var(--cream); border-radius: 30px; margin: 0;">
                <div class="container">
                    <div class="stats-grid">
                        <div class="stat-item" data-aos="zoom-in" data-aos-delay="0">
                            <span class="stat-number" style="background: var(--gradient-purple); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">50+</span>
                            <span class="stat-label" style="color: var(--text-dark);">Export Countries</span>
                        </div>
                        <div class="stat-item" data-aos="zoom-in" data-aos-delay="100">
                            <span class="stat-number" style="background: var(--gradient-purple); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">1000+</span>
                            <span class="stat-label" style="color: var(--text-dark);">Retail Partners</span>
                        </div>
                        <div class="stat-item" data-aos="zoom-in" data-aos-delay="200">
                            <span class="stat-number" style="background: var(--gradient-purple); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">28</span>
                            <span class="stat-label" style="color: var(--text-dark);">States in India</span>
                        </div>
                        <div class="stat-item" data-aos="zoom-in" data-aos-delay="300">
                            <span class="stat-number" style="background: var(--gradient-purple); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">24/7</span>
                            <span class="stat-label" style="color: var(--text-dark);">Customer Support</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="fade-up">
                <h2>Join Our <span>Journey</span></h2>
                <p>Be part of the Lababdar family. Experience the finest organic basmati rice and taste the difference that quality makes.</p>
                <div class="cta-buttons">
                    <a href="products.php" class="btn-primary"><i class="fas fa-shopping-bag"></i> Explore Products</a>
                    <a href="contact.php" class="btn-secondary"><i class="fas fa-envelope"></i> Contact Us</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
