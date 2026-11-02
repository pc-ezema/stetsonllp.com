<?php
session_start(); // This MUST be the first line, no spaces or HTML before it
include 'layouts/header.php';
?>

<!-- Attorney Profile Page - Praise Anyaoha -->
<main class="attorney-profile">
    
    <!-- Hero Section -->
    <section class="attorney-hero">
        <div class="attorney-hero-bg" style="background-image: url('<?php echo BASE_URL; ?>/assets/images/praise-anyaoha.jpeg');">
            <div class="attorney-hero-overlay"></div>
        </div>
        <div class="container">
            <div class="attorney-hero-content">
                <h1 class="attorney-name">Praise Anyaoha</h1>
                <div class="attorney-title">Partner | Entertainment Lawyer</div>
            </div>
        </div>
    </section>

    <!-- Profile Content -->
    <section class="attorney-content">
        <div class="container">
            <div class="attorney-grid">
                <!-- Left Column - Profile Image & Contact -->
                <div class="attorney-sidebar">
                    <div class="attorney-image-slider">
                        <div class="slider-container" id="attorneySlider">
                            <div class="slider-track">
                                <div class="slide active">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/praise-anyaoha.jpeg" alt="Praise Anyaoha - Portrait">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/praise-anyaoha.jpeg" alt="Praise Anyaoha - Professional">
                                </div>
                                <div class="slide">
                                    <img src="<?php echo BASE_URL; ?>/assets/images/praise-anyaoha.jpeg" alt="Praise Anyaoha - Award">
                                </div>
                            </div>
                            
                            <!-- Slider Navigation Buttons -->
                            <button class="slider-nav prev" id="sliderPrev">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            <button class="slider-nav next" id="sliderNext">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path d="M9 18L15 12L9 6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                            
                            <!-- Slider Dots -->
                            <div class="slider-dots">
                                <span class="dot active" data-slide="0"></span>
                                <span class="dot" data-slide="1"></span>
                                <span class="dot" data-slide="2"></span>
                                <span class="dot" data-slide="3"></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-info">
                        <a href="mailto:praiseanyaoha@stetsonllp.com" class="contact-email">
                            <svg width="16" height="20" viewBox="0 0 24 24">
                                <path d="M22 6L12 13 2 6h20zM2 8v10h20V8l-10 7-10-7z" fill="currentColor"></path>
                            </svg>
                            praiseanyaoha@stetsonllp.com
                        </a>
                        
                        <a href="tel:+2349025980624" class="contact-phone">
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor">
                                <path d="M9.16667 0.666667C9.16667 0.298477 9.46514 0 9.83333 0C13.2391 0 16 2.76091 16 6.16667C16 6.53486 15.7015 6.83333 15.3333 6.83333C14.9651 6.83333 14.6667 6.53486 14.6667 6.16667C14.6667 3.49729 12.5027 1.33333 9.83333 1.33333C9.46514 1.33333 9.16667 1.03486 9.16667 0.666667Z"/>
                                <path d="M9.16667 4.33333C9.16667 3.96514 9.46514 3.66667 9.83333 3.66667C11.214 3.66667 12.3333 4.78595 12.3333 6.16667C12.3333 6.53486 12.0349 6.83333 11.6667 6.83333C11.2985 6.83333 11 6.53486 11 6.16667C11 5.52233 10.4777 5 9.83333 5C9.46514 5 9.16667 4.70152 9.16667 4.33333Z"/>
                                <path d="M0.666667 0C1.03486 0 1.33333 0.298477 1.33333 0.666667C1.33333 8.39865 7.60135 14.6667 15.3333 14.6667C15.7015 14.6667 16 14.9651 16 15.3333C16 15.7015 15.7015 16 15.3333 16C6.86497 16 0 9.13503 0 0.666667C0 0.298477 0.298477 0 0.666667 0Z"/>
                                <path d="M0 0.666667C0 0.298477 0.298477 0 0.666667 0H3.41667C4.79738 0 5.91667 1.11929 5.91667 2.5V4.37103C5.91667 5.30016 5.4014 6.15264 4.57875 6.58453L2.50433 7.6736C2.17834 7.84475 1.77533 7.71922 1.60418 7.39322C1.43303 7.06723 1.55856 6.66422 1.88456 6.49307L3.95897 5.404C4.34287 5.20245 4.58333 4.80463 4.58333 4.37103V2.5C4.58333 1.85567 4.061 1.33333 3.41667 1.33333H0.666667C0.298477 1.33333 0 1.03486 0 0.666667Z"/>
                                <path d="M15.3333 16C15.7015 16 16 15.7015 16 15.3333V12.5833C16 11.2026 14.8807 10.0833 13.5 10.0833H11.629C10.6998 10.0833 9.84736 10.5986 9.41547 11.4212L8.3264 13.4957C8.15525 13.8217 8.28078 14.2247 8.60678 14.3958C8.93277 14.567 9.33579 14.4414 9.50693 14.1154L10.596 12.041C10.7975 11.6571 11.1954 11.4167 11.629 11.4167H13.5C14.1443 11.4167 14.6667 11.939 14.6667 12.5833V15.3333C14.6667 15.7015 14.9651 16 15.3333 16Z"/>
                            </svg>
                            +234 902 598 0624
                        </a>
                    </div>
                    
                    <div class="social-links">
                        <!-- <a href="#" class="social-link" aria-label="Facebook">
                            <svg viewBox="0 0 512 512" fill="currentColor">
                                <path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/>
                            </svg>
                        </a> -->
                        <a href="https://x.com/anyaohapraise?s=11" class="social-link" aria-label="Twitter">
                            <svg viewBox="0 0 512 512" fill="currentColor">
                                <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                            </svg>
                        </a>
                        <a href="https://www.linkedin.com/in/praise-anyaoha-b55660171/" class="social-link" aria-label="LinkedIn">
                            <svg viewBox="0 0 448 512" fill="currentColor">
                                <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z"/>
                            </svg>
                        </a>
                        <a href="https://www.instagram.com/praise_any" class="social-link" aria-label="Instagram">
                            <svg viewBox="0 0 448 512" fill="currentColor">
                                <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                            </svg>
                        </a>
                    </div>
                    
                    <div class="practice-areas">
                        <h3 class="practice-title">Practice Areas</h3>
                        <ul class="practice-list">
                            <li><a href="#">Entertainment Law</a></li>
                        </ul>
                    </div>
                    
                    <div class="expertise-badge">
                        <div class="badge-icon">⭐</div>
                        <div class="badge-text">
                            <strong>Trusted Advisor</strong>
                            <span>Prominent Artists • Influencers • Creative Businesses</span>
                            <span class="badge-subtitle">Landmark Deals Across Africa</span>
                        </div>
                    </div>
                </div>
                
                <!-- Right Column - Bio & Contact Form -->
                <div class="attorney-main">
                    <div class="attorney-bio">
                        <p class="bio-lead">Praise Anyaoha is a Partner at Stetson LLP and a leading entertainment lawyer with a distinguished focus on the music and creative industries. He is widely recognized within Nigeria's entertainment sector as a trusted advisor to prominent artists, influencers, and businesses, and has played a central role in structuring landmark deals across Africa.</p>
                        
                        <p>His practice encompasses intellectual property strategy, contract negotiation, music business and commercial transactions, with particular strength in resolving disputes in the entertainment and media space. Praise is known for aligning legal protections with business objectives, ensuring that creative assets are both safeguarded and maximized.</p>
                        
                        <p>With deep expertise in the entertainment industry, Praise has been instrumental in helping artists and creatives navigate complex contractual relationships, protect their intellectual property, and build sustainable careers. His approach combines legal precision with a genuine understanding of the creative process, making him a trusted partner for talent at all stages of their careers.</p>
                        
                        <p>Praise regularly advises on recording agreements, publishing deals, endorsement contracts, licensing arrangements, and artist management structures. He is particularly skilled at resolving disputes in the entertainment space, often finding creative solutions that preserve relationships while protecting his clients' interests.</p>
                        
                        <p>As a thought leader in African entertainment law, Praise is frequently invited to speak at industry events and contribute to discussions on the future of creative industries on the continent. His commitment to empowering artists and creators through sound legal strategy has earned him a reputation as one of Nigeria's premier entertainment lawyers.</p>
                    </div>
                    
                    <!-- Contact Form -->
                    <div class="contact-form-wrapper">
                        <h3 class="form-title">Get in touch</h3>
                        <p class="form-description">Complete the form below to schedule your consultation and discuss your legal needs directly.</p>
                        
                        <?php if (isset($_SESSION['contact_success'])): ?>
                            <div class="contact-message <?php echo $_SESSION['contact_success'] ? 'success' : 'error'; ?>">
                                <?php echo $_SESSION['contact_message'] ?? ($_SESSION['contact_success'] ? 'Form submitted successfully!' : 'An error occurred.'); ?>
                            </div>
                        <?php endif; ?>
                        
                        <?php if (isset($_SESSION['contact_errors']) && is_array($_SESSION['contact_errors'])): ?>
                            <div class="contact-message error">
                                <ul>
                                    <?php foreach ($_SESSION['contact_errors'] as $error): ?>
                                        <li><?php echo htmlspecialchars($error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        
                        <?php
                        // Clear session variables
                        unset($_SESSION['contact_success']);
                        unset($_SESSION['contact_message']);
                        unset($_SESSION['contact_errors']);
                        ?>
                        
                        <form action="contact-handler.php" method="post" class="attorney-contact-form">
                            <input type="hidden" name="receiver_email" value="praiseanyaoha@stetsonllp.com">
                            <input type="hidden" name="receiver_name" value="Stetson LLP - Praise Anyaoha">
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="text" name="your-name" placeholder="First Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="your-last-name" placeholder="Last Name" required>
                                </div>
                            </div>
                            
                            <div class="form-row">
                                <div class="form-group">
                                    <input type="email" name="your-email" placeholder="Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" name="phone" placeholder="Phone Number" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <select name="case" required>
                                    <option value="">Type of case</option>
                                    <option value="Entertainment Law">Entertainment Law</option>
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <textarea name="your-message" rows="5" placeholder="Kindly provide enough information about your case..."></textarea>
                            </div>
                            
                            <button type="submit" class="submit-btn">Submit Request →</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Simple Schema for Praise Anyaoha -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Attorney",
  "name": "Praise Anyaoha",
  "jobTitle": "Partner, Entertainment Lawyer",
  "worksFor": {
    "@type": "Organization",
    "name": "Stetson LLP"
  },
  "url": "https://stetsonllp.com/praise-anyaoha",
  "email": "praiseanyaoha@stetsonllp.com"
}
</script>

<?php
include 'layouts/footer.php';
?>praise-anyaocha