<!-- ========== FOOTER ========== -->
<footer class="site-footer">
    <div class="footer-container">
        <div class="footer-top">
            <div class="footer-column">
                <div class="footer-logo">
                    <img src="<?php echo BASE_URL; ?>/assets/images/stetson-logo.png" alt="Stetson LLP" width="180" height="47">
                </div>
                <p class="footer-description">Stetson LLP provides world-class legal expertise at the intersection of entertainment, business, and dispute resolution—delivering clarity, protection, and sustainable growth for our clients across industries.</p>
                <div class="footer-social">
                    <!-- <a href="#" aria-label="Facebook"><svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z" fill="currentColor" />
                        </svg></a> -->
                    <a href="https://x.com/stetsonllp?s=11" aria-label="Twitter"><svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z" fill="currentColor" />
                        </svg></a>
                    <a href="https://www.linkedin.com/company/stetson-llp/" aria-label="LinkedIn"><svg width="24" height="24" viewBox="0 0 24 24">
                            <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2zM4 2a2 2 0 110 4 2 2 0 010-4z" fill="currentColor" />
                        </svg></a>
                    <a href="https://www.instagram.com/stetsonllp?igsh=MXdyY2gweWFrMHM0ZQ==" aria-label="Instagram"><svg width="24" height="24" viewBox="0 0 24 24">
                            <rect x="2" y="2" width="20" height="20" rx="5" ry="5" fill="currentColor" />
                            <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zM17.5 6.5h.01" fill="currentColor" />
                        </svg></a>
                </div>
            </div>
            <div class="footer-column">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index">Home</a></li>
                    <li><a href="index#aboutUs">About Us</a></li>
                    <li><a href="index#attorneys">Attorneys</a></li>
                    <li><a href="index#testimonials">Testimonials</a></li>
                    <li><a href="index#attorneys">Contact Us</a></li>
                    <li></li><a href="publications">Publications</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Practice Areas</h4>
                <ul>
                    <li><a href="index#attorneys">Entertainment Law</a></li>
                    <li><a href="index#attorneys">Corporate & Commercial Disputes</a></li>
                    <li><a href="index#attorneys">Real Estate & Property Law</a></li>
                    <li><a href="index#attorneys">Regulatory Compliance</a></li>
                    <li><a href="index#attorneys">Business Management</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h4>Contact Us</h4>
                <ul class="contact-info">
                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" fill="currentColor" />
                            <circle cx="12" cy="10" r="3" fill="currentColor" />
                        </svg>
                        <span>Keji Close, Dideolu estate, Ogba. Lagos</span>
                    </li>

                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24">
                            <path d="M4 4h16v16H4z" fill="none"/>
                            <path d="M4 6l8 6 8-6" fill="currentColor"/>
                            <path d="M4 6v12h16V6" fill="currentColor" opacity="0.3"/>
                        </svg>
                        <span>
                            <a href="mailto:stetsonllp@gmail.com">stetsonllp@gmail.com</a>
                        </span>
                    </li>

                    <li>
                        <svg width="20" height="20" viewBox="0 0 24 24">
                            <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zM4 12c0-4.41 3.59-8 8-8s8 3.59 8 8-3.59 8-8 8-8-3.59-8-8z" fill="currentColor" />
                            <polygon points="12.5 7 11 7 11 13 16 13 16 11.5 12.5 11.5 12.5 7" fill="currentColor" />
                        </svg>
                        <span>Mon - Fri: 9:00 AM - 6:00 PM</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <span id="current-year"></span> Stetson LLP. All rights reserved.</p>
        </div>
    </div>
    <button id="back-to-top" class="back-to-top" aria-label="Back to top">
        <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path d="M12 19V5M5 12l7-7 7 7" />
        </svg>
    </button>
</footer>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="<?php echo BASE_URL; ?>/assets/js/main.js" defer></script>
<script>
    document.getElementById('current-year').textContent = new Date().getFullYear();
    // Initialize Swiper sliders
    new Swiper('.hero-swiper', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        }
    });
    new Swiper('.testimonial-swiper', {
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        },
        slidesPerView: 1
    });
</script>

</body>
</html>