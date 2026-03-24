<?php
$pageTitle = "Contact Us";
$pageDescription = "Get in touch with Lababdar Foods. We're here to help with product inquiries, distributor partnerships, and customer support.";

$successMessage = '';
$errorMessage = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require_once 'config/database.php';
    
    $name = trim($_POST['name'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $subject = trim($_POST['subject'] ?? '');
    $message = trim($_POST['message'] ?? '');
    
    if (empty($name) || empty($email) || empty($subject) || empty($message)) {
        $errorMessage = 'Please fill in all required fields.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMessage = 'Please enter a valid email address.';
    } else {
        try {
            $db = Database::getInstance()->getConnection();
            $stmt = $db->prepare("INSERT INTO inquiries (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$name, $email, $phone, $subject, $message]);
            $successMessage = 'Thank you for your message! We will get back to you within 24 hours.';
        } catch (Exception $e) {
            $errorMessage = 'Sorry, there was an error sending your message. Please try again later.';
        }
    }
}

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
            <i class="fas fa-envelope"></i> Get In Touch
        </div>

        <h1>Contact <span>Us</span></h1>

        <p class="page-hero-desc">
            We're here to help. Reach out for product inquiries, distributor partnerships, or any questions.
        </p>

        <div class="breadcrumb">
            <a href="index.php">Home</a>
            <i class="fas fa-chevron-right"></i>
            <span>Contact</span>
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

    <section class="contact-form-section section-pattern">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <p style="color: var(--text-light); margin-bottom: 30px;">Fill out the form below and we'll get back to you within 24 hours.</p>
                    
                    <?php if ($successMessage): ?>
                    <div style="background: linear-gradient(135deg, #2E7D32 0%, #4CAF50 100%); color: white; padding: 20px; border-radius: 15px; margin-bottom: 25px; display: flex; align-items: center; gap: 15px;">
                        <i class="fas fa-check-circle" style="font-size: 1.5rem;"></i>
                        <span><?php echo htmlspecialchars($successMessage); ?></span>
                    </div>
                    <?php endif; ?>
                    
                    <?php if ($errorMessage): ?>
                    <div style="background: linear-gradient(135deg, #c62828 0%, #e53935 100%); color: white; padding: 20px; border-radius: 15px; margin-bottom: 25px; display: flex; align-items: center; gap: 15px;">
                        <i class="fas fa-exclamation-circle" style="font-size: 1.5rem;"></i>
                        <span><?php echo htmlspecialchars($errorMessage); ?></span>
                    </div>
                    <?php endif; ?>
                    
                    <form action="contact.php" method="POST" class="contact-submit-form">
                        <div class="form-group">
                            <label for="name">Your Name *</label>
                            <input type="text" id="name" name="name" placeholder="Enter your full name" required>
                        </div>
                        
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            <div class="form-group">
                                <label for="email">Email Address *</label>
                                <input type="email" id="email" name="email" placeholder="your@email.com" required>
                            </div>
                            <div class="form-group">
                                <label for="phone">Phone Number</label>
                                <input type="tel" id="phone" name="phone" placeholder="+91 XXXXX XXXXX">
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <select id="subject" name="subject" required>
                                <option value="">Select a subject</option>
                                <option value="Product Inquiry">Product Inquiry</option>
                                <option value="Order Related">Order Related</option>
                                <option value="Distributor Partnership">Distributor Partnership</option>
                                <option value="Feedback">Feedback</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Your Message *</label>
                            <textarea id="message" name="message" rows="5" placeholder="How can we help you?" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn-primary" style="width: 100%; justify-content: center;">
                            <i class="fas fa-paper-plane"></i> Send Message
                        </button>
                    </form>
                </div>
                
                <div class="contact-info-cards">
                    <div class="contact-card">
                        <div class="contact-card-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <h4>Our Location</h4>
                            <p><strong>Lababdar Foods</strong><br>Punjab, India</p>
                        </div>
                    </div>
                    
                 <div class="contact-card">
    <div class="contact-card-icon">
        <i class="fas fa-envelope"></i>
    </div>
    <div>
        <h4>Email Us</h4>
        <p>
            <a href="mailto:ngkglobaltade@gmail.com">ngkglobaltade@gmail.com</a><br>
        </p>
    </div>
</div>

<div class="contact-card">
    <div class="contact-card-icon">
        <i class="fas fa-phone-alt"></i>
    </div>
    <div>
        <h4>Call Us</h4>
        <p>
            <a href="tel:+919659000031">+91 96590 00031</a><br>
            Mon - Sat: 9:00 AM - 6:00 PM
        </p>
    </div>
</div>
                    
                    <div class="contact-card">
    <div class="contact-card-icon">
        <i class="fas fa-share-alt"></i>
    </div>

    <div>
        <h4>Follow Us</h4>

        <p>
            Stay connected with us on social platforms.<br>
        </p>

        <div class="contact-social-links">

            <a href="https://www.facebook.com/people/Lababdar-Foods/61586425373383/" target="_blank">
                <i class="fab fa-facebook-f"></i>
            </a>

            <a href="https://www.instagram.com/lababdar_basmatirice/" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="https://wa.me/919659000031" target="_blank">
                <i class="fab fa-whatsapp"></i>
            </a>

        </div>

    </div>
</div>
<style>.contact-social-links {
    margin-top: 10px;
}

.contact-social-links a {
    display: inline-block;
    margin-right: 10px;
    font-size: 16px;
    color: #0B3156;
    background: #f1f1f1;
    padding: 8px;
    border-radius: 50%;
    transition: 0.3s;
}

.contact-social-links a:hover {
    background: #d4af37;
    color: #fff;
    transform: translateY(-3px);
}</style>
                    
                    <div class="contact-card">
                        <div class="contact-card-icon"><i class="fas fa-handshake"></i></div>
                        <div>
                            <h4>Business Inquiries</h4>
                            <p>Distributor & bulk order inquiries:<br>
                            <a href="distributor.php">Become a Partner</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-dark">
        <div class="container">
            <div class="section-header">
                <span class="section-label">Connect</span>
                <h2 class="section-title">Follow Us on <span>Social Media</span></h2>
                <p class="section-subtitle">Stay updated with our latest news, recipes, and offers.</p>
            </div>
            
            <div class="cert-grid" style="grid-template-columns: repeat(5, 1fr);">
                <a href="#" class="cert-item" style="text-decoration: none;">
                    <div class="cert-icon"><i class="fab fa-facebook-f"></i></div>
                    <h4>Facebook</h4>
                    <p>Join our community</p>
                </a>
                <a href="#" class="cert-item" style="text-decoration: none;">
                    <div class="cert-icon"><i class="fab fa-instagram"></i></div>
                    <h4>Instagram</h4>
                    <p>Follow our journey</p>
                </a>
                <a href="#" class="cert-item" style="text-decoration: none;">
                    <div class="cert-icon"><i class="fab fa-twitter"></i></div>
                    <h4>Twitter</h4>
                    <p>Latest updates</p>
                </a>
                <a href="#" class="cert-item" style="text-decoration: none;">
                    <div class="cert-icon"><i class="fab fa-youtube"></i></div>
                    <h4>YouTube</h4>
                    <p>Watch our videos</p>
                </a>
                <a href="#" class="cert-item" style="text-decoration: none;">
                    <div class="cert-icon"><i class="fab fa-linkedin-in"></i></div>
                    <h4>LinkedIn</h4>
                    <p>Business connect</p>
                </a>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="section-header">
                <span class="section-label">Quick Help</span>
                <h2 class="section-title">Frequently Asked <span>Questions</span></h2>
                <p class="section-subtitle">Find quick answers to common questions.</p>
            </div>
            
            <div style="max-width: 900px; margin: 0 auto;">
                <div class="health-card" style="flex-direction: column; margin-bottom: 20px;">
                    <h4 style="color: var(--primary-purple); margin-bottom: 10px;"><i class="fas fa-question-circle" style="color: var(--gold); margin-right: 10px;"></i>Where can I buy Lababdar rice?</h4>
                    <p style="color: var(--text-light); line-height: 1.8;">Our products are available at major supermarkets, grocery stores, and online platforms across India. Contact us for specific retailer information in your area.</p>
                </div>
                <div class="health-card" style="flex-direction: column; margin-bottom: 20px;">
                    <h4 style="color: var(--primary-purple); margin-bottom: 10px;"><i class="fas fa-question-circle" style="color: var(--gold); margin-right: 10px;"></i>Do you ship internationally?</h4>
                    <p style="color: var(--text-light); line-height: 1.8;">Yes, we export to over 50 countries. For international orders, please contact our export team at exports@lababdar.com.</p>
                </div>
                <div class="health-card" style="flex-direction: column; margin-bottom: 20px;">
                    <h4 style="color: var(--primary-purple); margin-bottom: 10px;"><i class="fas fa-question-circle" style="color: var(--gold); margin-right: 10px;"></i>How can I become a distributor?</h4>
                    <p style="color: var(--text-light); line-height: 1.8;">Visit our <a href="distributor.php" style="color: var(--gold);">Distributor page</a> to learn about partnership opportunities and submit your application.</p>
                </div>
                <div class="health-card" style="flex-direction: column;">
                    <h4 style="color: var(--primary-purple); margin-bottom: 10px;"><i class="fas fa-question-circle" style="color: var(--gold); margin-right: 10px;"></i>What is your return policy?</h4>
                    <p style="color: var(--text-light); line-height: 1.8;">We stand behind our quality. If you're unsatisfied with your purchase, contact us within 7 days of delivery for assistance.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to <span>Partner With Us?</span></h2>
                <p>Join India's fastest-growing premium rice brand. Become a distributor and bring authentic basmati to your customers.</p>
                <div class="cta-buttons">
                    <a href="distributor.php" class="btn-primary"><i class="fas fa-handshake"></i> Become Partner</a>
                    <a href="products.php" class="btn-secondary"><i class="fas fa-box"></i> View Products</a>
                </div>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
