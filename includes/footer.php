    </main>
<style>/* Footer Styles Updated with Background Image */
.luxury-footer {
    /* Background Image with Dark Overlay for Readability */
    background: linear-gradient(rgba(13, 13, 43, 0.6), rgba(13, 13, 43, 0.8)), 
                url('/assets/images/footer.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: scroll; /* Change to 'fixed' if you want a parallax effect */
    position: relative;
    overflow: hidden;
    padding-top: 0;
    border-top: 1px solid rgba(212, 175, 55, 0.2);
    color: black;
}

/* Ensure content stays above the background */
.footer-main, 
.footer-bottom {
    position: relative;
    z-index: 2;
}

/* Optional: Adding a soft glow over the image */
.footer-glow {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: radial-gradient(circle at 50% 20%, rgba(212, 175, 55, 0.1), transparent 70%);
    pointer-events: none;
    z-index: 1;
}

/* Wave adjustment to match the background color if needed */
.footer-top-wave svg {
    color: black;
}
.footer-upper {
    background-image: url('/assets/images/footer-uper.png');
    background-repeat: repeat;
    background-position: center;
}

</style>
    <footer class="luxury-footer ">
        
        <div class="footer-glow"></div>

        <div class="footer-main">
            <div class="container">
                <div class="footer-grid">
                    <div class="footer-brand">
                        <img src="assets/images/logo.png" alt="Lababdar" class="footer-logo">
                        <p class="footer-tagline">Savour The Taste</p>
                        <p class="footer-desc">Premium Organic Basmati Rice trusted by millions of families worldwide. Experience the authentic taste of India's finest grains.</p>
                        <div class="footer-certifications">
                            <div class="cert-badge"><i class="fas fa-certificate"></i> FSSAI</div>
                            <div class="cert-badge"><i class="fas fa-leaf"></i> Organic</div>
                            <div class="cert-badge"><i class="fas fa-dna"></i> GMO Free</div>
                        </div>
                    </div>

                    <div class="footer-links">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="index.php"><i class="fas fa-angle-right"></i> Home</a></li>
                            <li><a href="about.php"><i class="fas fa-angle-right"></i> About Us</a></li>
                            <li><a href="products.php"><i class="fas fa-angle-right"></i> Products</a></li>
                            <li><a href="recipes.php"><i class="fas fa-angle-right"></i> Recipes</a></li>
                            <li><a href="ingredients.php"><i class="fas fa-angle-right"></i> Ingredients</a></li>
                            <li><a href="distributor.php"><i class="fas fa-angle-right"></i> Distributors</a></li>
                        </ul>
                    </div>

                    <div class="footer-links">
                        <h4>Our Products</h4>
                        <ul>
                            <li><a href="products.php#organic-heritage"><i class="fas fa-angle-right"></i> Organic Heritage</a></li>
                            <li><a href="products.php#classic"><i class="fas fa-angle-right"></i> Classic Basmati</a></li>
                            <li><a href="products.php#royal"><i class="fas fa-angle-right"></i> Royal Basmati</a></li>
                            <li><a href="products.php#biryani"><i class="fas fa-angle-right"></i> Biryani Special</a></li>
                            <li><a href="products.php#everyday"><i class="fas fa-angle-right"></i> Everyday Rice</a></li>
                            <li><a href="products.php#brown"><i class="fas fa-angle-right"></i> Brown Rice</a></li>
                        </ul>
                    </div>

                    <div class="footer-contact">
                        <h4>Contact Us</h4>
                        <div class="contact-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <div>
                                <strong>Lababdar Foods</strong><br>
                                Punjab, India
                            </div>
                        </div>
                        <div class="contact-item">
    <i class="fas fa-envelope"></i>
    <a href="mailto:ngkglobaltade@gmail.com">ngkglobaltade@gmail.com</a>
</div>

<div class="contact-item">
    <i class="fas fa-phone-alt"></i>
    <a href="tel:+919659000031">+91 96590 00031</a>
</div>

<div class="footer-social">

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

                <div class="footer-newsletter">
                    <div class="newsletter-content">
                        <h4><i class="fas fa-envelope-open-text"></i> Subscribe to Our Newsletter</h4>
                        <p>Get recipes, offers & updates delivered to your inbox</p>
                    </div>
                    <form class="newsletter-form" action="#">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit"><span>Subscribe</span> <i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="footer-bottom-content">
                    <p>&copy; <?php echo date('Y'); ?> Lababdar Foods. All Rights Reserved.</p>
                    <div class="footer-bottom-links">
                        <a href="#">Privacy Policy</a>
                        <a href="#">Terms of Service</a>
                        <a href="#">Sitemap</a>
                    </div>
                    <p class="made-with">Made in India <img src="https://flagcdn.com/w20/in.png" alt="India" class="flag-icon"> with <i class="fas fa-heart" style="color: #e74c3c;"></i> | Website by <a href="https://digitaldots.in/" target="_blank" style="color: var(--gold); text-decoration: none;">Digital Dots</a></p>
                </div>
            </div>
        </div>
    </footer>

    <div class="back-to-top" id="back-to-top">
        <i class="fas fa-chevron-up"></i>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
