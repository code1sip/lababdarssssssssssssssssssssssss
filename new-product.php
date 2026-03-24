<?php
$pageTitle = "Lababdar Heritage | Single Estate Organic Basmati Rice";
$pageDescription = "Discover the world's finest extra-long grain organic basmati rice by Lababdar. Naturally aged, farm-fresh, and available in multiple pack sizes.";
include 'includes/header.php';
?>

<!-- Modern Frameworks -->
<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<style>
    :root {
        --primary-navy: #0B3156;
        --gold: #D4AF37;
        --cream-bg: #FCF9F2;
        --text-dark: #1A1A1A;
    }

    body {
        font-family: 'Inter', sans-serif;
        color: var(--text-dark);
        overflow-x: hidden;
    }

    .serif { font-family: 'Playfair Display', serif; }

    /* Fix for potential layout "crashing" - Robust Flex/Grid setup */
    .hero-container {
        min-height: 80vh;
        display: flex;
        align-items: center;
        position: relative;
        background: var(--primary-navy);
        overflow: hidden;
    }

    .video-background {
        position: absolute;
        top: 50%;
        left: 50%;
        min-width: 100%;
        min-height: 100%;
        width: auto;
        height: auto;
        transform: translate(-50%, -50%);
        opacity: 0.3;
        object-fit: cover;
    }

    /* Elegant Floating Animation */
    @keyframes subtleFloat {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-15px); }
    }
    .float-product {
        animation: subtleFloat 4s ease-in-out infinite;
    }

    /* Section Spacing */
    .section-spacing { padding: 80px 0; }
    @media (max-width: 768px) { .section-spacing { padding: 50px 0; } }

    /* Custom Gradient */
    .gold-text {
        background: linear-gradient(135deg, #D4AF37 0%, #F2D388 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }

    .glass-effect {
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(0,0,0,0.05);
    }

    .weight-chip {
        transition: all 0.3s ease;
        border: 1px solid #E5E7EB;
    }
    .weight-chip:hover {
        border-color: var(--gold);
        color: var(--gold);
        background: #FFFDF9;
    }
</style>

<!-- 1. HERO SECTION (Dynamic & Responsive) -->
<section class="hero-container">
    <video autoplay muted loop playsinline class="video-background">
        <source src="assets/gif 2.mp4" type="video/mp4">
    </video>
    
    <div class="container mx-auto px-6 relative z-10 py-20">
        <div class="flex flex-col lg:flex-row items-center gap-12">
            <!-- Text Content -->
            <div class="lg:w-3/5 text-white" data-aos="fade-right">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-white/10 border border-white/20 text-xs font-semibold tracking-widest uppercase mb-6">
                    <span class="w-2 h-2 rounded-full bg-gold animate-pulse"></span>
                    Pure Organic Estate
                </div>
                <h1 class="serif text-5xl md:text-7xl mb-6 leading-tight">
                    Lababdar <span class="gold-text italic">Heritage</span>
                </h1>
                <p class="text-lg md:text-xl opacity-90 mb-10 max-w-xl leading-relaxed font-light">
                    Kashmir ki vaadiyon se ek anokha uphaar. Duniya ka sabse lamba, sugandhit aur shuddh organic Basmati chawal, jo har bhojan ko tyohar bana de.
                </p>
                <div class="flex flex-wrap gap-5">
                    <a href="#about-product" class="px-10 py-4 bg-[#D4AF37] text-white font-bold rounded-xl shadow-xl hover:bg-[#B8962D] transition-all transform hover:-translate-y-1">
                        Explore Full Details
                    </a>
                    <a href="contact.php" class="px-10 py-4 border border-white/30 text-white font-bold rounded-xl hover:bg-white/10 transition-all">
                        Bulk Enquiry
                    </a>
                </div>
            </div>
            
            <!-- Graphic Spot 1: Main Product Display -->
            <div class="lg:w-2/5 flex justify-center" data-aos="zoom-in" data-aos-delay="200">
                <div class="relative">
                    <img src="assets/images/products/organic-heritage-5kg.jpg" alt="Lababdar Heritage Pack" class="float-product max-w-[320px] md:max-w-[420px] drop-shadow-[0_35px_35px_rgba(0,0,0,0.5)]">
                    <!-- Trust Badge -->
                    <div class="absolute -bottom-5 -left-5 bg-white p-4 rounded-2xl shadow-2xl flex items-center gap-3">
                        <div class="w-10 h-10 bg-green-100 text-green-600 rounded-full flex items-center justify-center">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="text-left">
                            <p class="text-[10px] uppercase tracking-wider text-gray-400 font-bold">Certified</p>
                            <p class="text-xs font-bold text-navy">100% Organic</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 2. QUICK FEATURES GRID -->
<div class="bg-white py-12 border-b border-gray-100">
    <div class="container mx-auto px-6">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="flex items-center gap-4 group" data-aos="fade-up">
                <div class="w-12 h-12 rounded-2xl bg-gray-50 flex items-center justify-center text-gold group-hover:bg-gold group-hover:text-white transition-colors">
                    <i class="fas fa-ruler-vertical"></i>
                </div>
                <div>
                    <h4 class="font-bold text-navy">7.2mm+</h4>
                    <p class="text-xs text-gray-400">Extra Long Grains</p>
                </div>
            </div>
            <div class="flex items-center gap-4 group" data-aos="fade-up" data-aos-delay="100">
                <div class="w-12 h-12 rounded-2xl bg-gray-50 flex items-center justify-center text-gold group-hover:bg-gold group-hover:text-white transition-colors">
                    <i class="fas fa-clock"></i>
                </div>
                <div>
                    <h4 class="font-bold text-navy">18 Months</h4>
                    <p class="text-xs text-gray-400">Naturally Aged</p>
                </div>
            </div>
            <div class="flex items-center gap-4 group" data-aos="fade-up" data-aos-delay="200">
                <div class="w-12 h-12 rounded-2xl bg-gray-50 flex items-center justify-center text-gold group-hover:bg-gold group-hover:text-white transition-colors">
                    <i class="fas fa-wind"></i>
                </div>
                <div>
                    <h4 class="font-bold text-navy">Rich Aroma</h4>
                    <p class="text-xs text-gray-400">Signature Fragrance</p>
                </div>
            </div>
            <div class="flex items-center gap-4 group" data-aos="fade-up" data-aos-delay="300">
                <div class="w-12 h-12 rounded-2xl bg-gray-50 flex items-center justify-center text-gold group-hover:bg-gold group-hover:text-white transition-colors">
                    <i class="fas fa-tint-slash"></i>
                </div>
                <div>
                    <h4 class="font-bold text-navy">Pesticide Free</h4>
                    <p class="text-xs text-gray-400">Strict Organic Farming</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 3. PRODUCT SPECIFICATIONS SECTION -->
<section id="about-product" class="section-spacing bg-[#FFFDF9]">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row items-center gap-16">
            <!-- Graphic Spot 2: Quality Visual -->
            <div class="lg:w-1/2" data-aos="fade-right">
                <div class="relative group">
                    <div class="absolute inset-0 bg-gold rounded-[40px] rotate-3 group-hover:rotate-0 transition-transform"></div>
                    <img src="https://images.unsplash.com/photo-1586201375761-83865001e31c?auto=format&fit=crop&q=80&w=1000" alt="Rice Quality" class="relative z-10 rounded-[40px] shadow-2xl transition-transform group-hover:-translate-y-2">
                    <div class="absolute -bottom-8 -right-8 z-20 bg-white p-6 rounded-3xl shadow-xl">
                        <p class="serif text-3xl text-gold">2.5x</p>
                        <p class="text-[10px] font-bold uppercase text-gray-400">Cooked Elongation</p>
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="lg:w-1/2" data-aos="fade-left">
                <h2 class="serif text-4xl md:text-5xl text-navy mb-6 leading-tight">Ek Hi Quality,<br><span class="text-gold">Paanch Alag Sizes.</span></h2>
                <p class="text-gray-600 mb-8 leading-relaxed text-lg">
                    Hamara <strong>Organic Heritage Basmati</strong> ek hi single-estate quality standard par pack kiya jata hai. Aap chahe 1kg ka pack lein ya 30kg ka, aapko milta hai wahi world-class swad aur vishwas.
                </p>

                <div class="mb-10">
                    <h4 class="text-sm font-bold uppercase tracking-widest text-navy mb-4">Available Variants:</h4>
                    <div class="flex flex-wrap gap-3">
                        <?php 
                        $sizes = ["1 KG", "5 KG", "10 KG", "20 KG", "30 KG"];
                        foreach($sizes as $size): ?>
                            <span class="weight-chip px-6 py-3 rounded-xl font-bold text-sm cursor-default"><?php echo $size; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 pt-6 border-t border-gray-100">
                    <div>
                        <h5 class="font-bold text-navy mb-2 flex items-center gap-2">
                            <i class="fas fa-microchip text-gold"></i> Sorting Technique
                        </h5>
                        <p class="text-sm text-gray-500 leading-relaxed">Advanced computer-sorting used to ensure 100% uniformity in grain size.</p>
                    </div>
                    <div>
                        <h5 class="font-bold text-navy mb-2 flex items-center gap-2">
                            <i class="fas fa-boxes text-gold"></i> Vacuum Packed
                        </h5>
                        <p class="text-sm text-gray-500 leading-relaxed">Airtight packaging to lock in the natural mountain aroma for months.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 4. NUTRITION & HEALTH (Premium Data Layout) -->
<section class="section-spacing bg-white">
    <div class="container mx-auto px-6">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-16" data-aos="fade-up">
                <h2 class="serif text-4xl text-navy">Scientifically Healthier</h2>
                <p class="text-gray-500 mt-4">Pure Basmati is more than just taste; it's a superfood.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div class="space-y-4" data-aos="fade-right">
                    <div class="bg-gray-50 p-6 rounded-2xl flex justify-between items-center group hover:bg-navy hover:text-white transition-all">
                        <span class="font-semibold">Protein Content</span>
                        <span class="font-bold text-gold">7.5g <small class="text-[10px]">/ 100g</small></span>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-2xl flex justify-between items-center group hover:bg-navy hover:text-white transition-all">
                        <span class="font-semibold">Fat Content</span>
                        <span class="font-bold text-gold">0.6g <small class="text-[10px]">/ 100g</small></span>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-2xl flex justify-between items-center group hover:bg-navy hover:text-white transition-all">
                        <span class="font-semibold">Fiber</span>
                        <span class="font-bold text-gold">1.4g <small class="text-[10px]">/ 100g</small></span>
                    </div>
                    <div class="bg-gray-50 p-6 rounded-2xl flex justify-between items-center group hover:bg-navy hover:text-white transition-all">
                        <span class="font-semibold">Cholesterol</span>
                        <span class="font-bold text-green-500">0.0mg</span>
                    </div>
                </div>

                <div class="p-8 bg-navy rounded-[40px] text-white relative overflow-hidden shadow-2xl" data-aos="fade-left">
                    <div class="absolute top-0 right-0 opacity-10 p-10">
                        <i class="fas fa-heartbeat text-8xl"></i>
                    </div>
                    <h3 class="serif text-2xl mb-4 text-gold italic">Heart Safe & Diabetic Friendly</h3>
                    <p class="text-gray-300 leading-relaxed mb-6">
                        Humara chawal complex carbohydrates se bharpoor hai, jo sharir ko dheere-dheere energy deta hai. Iska Glycemic Index (GI) santulit hai, jo ise diabetics ke liye ek surakshit vikalp banata hai.
                    </p>
                    <ul class="space-y-3">
                        <li class="flex items-center gap-3 text-sm"><i class="fas fa-check text-gold"></i> Sodium Free</li>
                        <li class="flex items-center gap-3 text-sm"><i class="fas fa-check text-gold"></i> Non-GMO</li>
                        <li class="flex items-center gap-3 text-sm"><i class="fas fa-check text-gold"></i> Gluten Free</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5. GRAPHIC SPOT 3: FULL WIDTH IMMERSIVE -->
<section class="h-[60vh] relative flex items-center justify-center text-center">
    <div class="absolute inset-0 bg-cover bg-center bg-fixed" style="background-image: url('https://images.unsplash.com/photo-1536304993881-ff6e9eefa2a6?auto=format&fit=crop&q=80&w=1500');">
        <div class="absolute inset-0 bg-navy/70"></div>
    </div>
    <div class="relative z-10 px-6" data-aos="zoom-in">
        <h2 class="serif text-5xl md:text-7xl mb-8 text-gold">Dana Dana, Shuddhata.</h2>
        <p class="text-white text-xl md:text-2xl max-w-3xl mx-auto font-light leading-relaxed">
            Himalayan rivers ke taaze paani aur organic mitti ka nayaab sangam, jo sirf Lababdar Heritage hi pradan karta hai.
        </p>
    </div>
</section>

<!-- 6. COOKING GUIDE (Clean Layout) -->
<section class="section-spacing bg-white">
    <div class="container mx-auto px-6">
        <div class="text-center mb-20" data-aos="fade-up">
            <h2 class="serif text-4xl text-navy">Cooking Instructions</h2>
            <div class="w-20 h-1 bg-gold mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <div class="relative pt-10 px-6 pb-8 bg-gray-50 rounded-3xl" data-aos="fade-up" data-aos-delay="0">
                <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-white border-4 border-gold rounded-full flex items-center justify-center font-serif text-2xl text-navy shadow-lg">01</span>
                <h4 class="font-bold text-center mb-3">Soaking</h4>
                <p class="text-sm text-center text-gray-500 leading-relaxed">Rice ko 30-45 mins bhigo kar rakhein. Isse chawal ki lambai poori nikal kar aati hai.</p>
            </div>
            <div class="relative pt-10 px-6 pb-8 bg-gray-50 rounded-3xl" data-aos="fade-up" data-aos-delay="100">
                <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-white border-4 border-gold rounded-full flex items-center justify-center font-serif text-2xl text-navy shadow-lg">02</span>
                <h4 class="font-bold text-center mb-3">Ratios</h4>
                <p class="text-sm text-center text-gray-500 leading-relaxed">Har 1 cup chawal ke liye 2 cup taaza paani ka istemaal karein.</p>
            </div>
            <div class="relative pt-10 px-6 pb-8 bg-gray-50 rounded-3xl" data-aos="fade-up" data-aos-delay="200">
                <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-white border-4 border-gold rounded-full flex items-center justify-center font-serif text-2xl text-navy shadow-lg">03</span>
                <h4 class="font-bold text-center mb-3">Simmering</h4>
                <p class="text-sm text-center text-gray-500 leading-relaxed">Halki aanch par pakaein taaki khushbu aur nutrients chawal ke andar hi rahein.</p>
            </div>
            <div class="relative pt-10 px-6 pb-8 bg-gray-50 rounded-3xl" data-aos="fade-up" data-aos-delay="300">
                <span class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-16 h-16 bg-white border-4 border-gold rounded-full flex items-center justify-center font-serif text-2xl text-navy shadow-lg">04</span>
                <h4 class="font-bold text-center mb-3">Resting</h4>
                <p class="text-sm text-center text-gray-500 leading-relaxed">Banne ke baad 5 mins dhak kar rakhein, phir halki karchi se fluffy karein.</p>
            </div>
        </div>
    </div>
</section>

<!-- 7. GLOBAL CERTIFICATIONS (Trust Section) -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-6">
        <div class="flex flex-wrap justify-center items-center gap-12 md:gap-20 grayscale opacity-60 hover:grayscale-0 hover:opacity-100 transition-all duration-700">
            <div class="text-center">
                <i class="fas fa-certificate text-4xl text-navy mb-2"></i>
                <p class="text-[10px] font-bold uppercase tracking-widest">FSSAI Certified</p>
            </div>
            <div class="text-center">
                <i class="fas fa-leaf text-4xl text-navy mb-2"></i>
                <p class="text-[10px] font-bold uppercase tracking-widest">India Organic</p>
            </div>
            <div class="text-center">
                <i class="fas fa-globe text-4xl text-navy mb-2"></i>
                <p class="text-[10px] font-bold uppercase tracking-widest">USDA Organic</p>
            </div>
            <div class="text-center">
                <i class="fas fa-shield-alt text-4xl text-navy mb-2"></i>
                <p class="text-[10px] font-bold uppercase tracking-widest">HACCP Approved</p>
            </div>
        </div>
    </div>
</section>

<!-- 8. FAQ (Robust Accordion Style) -->
<section class="section-spacing bg-white">
    <div class="container mx-auto px-6 max-w-4xl">
        <div class="text-center mb-16">
            <h2 class="serif text-4xl text-navy">General FAQ</h2>
            <p class="text-gray-400 text-sm mt-2 tracking-widest uppercase">Everything you need to know</p>
        </div>
        
        <div class="space-y-4">
            <details class="group bg-gray-50 rounded-2xl overflow-hidden" open>
                <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                    <h4 class="font-bold text-navy">Lababdar Heritage doosre brands se behtar kyun hai?</h4>
                    <span class="transition group-open:rotate-180"><i class="fas fa-chevron-down"></i></span>
                </summary>
                <div class="p-6 pt-0 text-gray-500 text-sm leading-relaxed">
                    Hamara chawal sirf single-estate farm se aata hai, jiska matlab hai har dana ek hi jagah uga hai. Ye organic ageing (18 months) ke sath aata hai jo ise extra-long aur sugandhit banata hai.
                </div>
            </details>

            <details class="group bg-gray-50 rounded-2xl overflow-hidden">
                <summary class="flex justify-between items-center p-6 cursor-pointer list-none">
                    <h4 class="font-bold text-navy">Kya bulk order par special rate milte hain?</h4>
                    <span class="transition group-open:rotate-180"><i class="fas fa-chevron-down"></i></span>
                </summary>
                <div class="p-6 pt-0 text-gray-500 text-sm leading-relaxed">
                    Ji haan, hum hotels, restaurants aur caterers ko wholesale pricing pradan karte hain. Bulk enquiry ke liye contact page par form bharein.
                </div>
            </details>
        </div>
    </div>
</section>

<!-- 9. CONTACT CTA (High Conversion) -->
<section class="section-spacing">
    <div class="container mx-auto px-6 text-center">
        <div class="bg-navy rounded-[60px] p-12 md:p-24 text-white relative overflow-hidden shadow-2xl" style="background: var(--primary-navy);">
            <div class="absolute inset-0 opacity-10 pointer-events-none">
                <div class="absolute top-10 left-10 w-40 h-40 border-4 border-white rounded-full"></div>
                <div class="absolute bottom-10 right-10 w-80 h-80 border border-white rounded-full"></div>
            </div>
            
            <div class="relative z-10">
                <h2 class="serif text-4xl md:text-6xl mb-8 leading-tight">Ready to Experience <br><span class="text-gold">Heritage in Every Bite?</span></h2>
                <p class="text-lg text-gray-300 max-w-2xl mx-auto mb-12">
                    Chahe ghar ke liye ho ya business ke liye, shuddhata se samjhota kabhi na karein. Humse aaj hi judiye.
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-6">
                    <a href="contact.php" class="px-12 py-5 bg-gold text-white rounded-2xl font-bold shadow-xl hover:scale-105 transition-transform">
                        Send Bulk Enquiry
                    </a>
                    <a href="distributor.php" class="px-12 py-5 bg-white text-navy rounded-2xl font-bold hover:bg-gray-100 transition-all">
                        Become a Partner
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Scripts -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 1000,
        once: true,
        offset: 120,
        easing: 'ease-out-cubic'
    });
</script>

<?php include 'includes/footer.php'; ?>