<?php
include 'layouts/header.php';
?>

<main class="main-content">

    <!-- ========== HERO SLIDER ========== -->
    <section class="hero-slider">
        <div class="swiper hero-swiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="<?php echo BASE_URL; ?>/assets/images/home-slider-1.jpg" alt="Strategic legal solutions" class="slide-image">
                    <div class="slide-content">
                        <div class="container">
                            <h1 class="slide-title">Strategic Legal Solutions for <i>Modern Industries</i></h1>
                            <p class="slide-description">We deliver world-class legal expertise at the intersection of entertainment, business, and dispute resolution—providing clarity, protection, and sustainable growth for our clients across industries.</p>
                        </div>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="<?php echo BASE_URL; ?>/assets/images/home-slider-2.jpg" alt="Legal excellence" class="slide-image">
                    <div class="slide-content">
                        <div class="container">
                            <h1 class="slide-title">Clarity. Protection. <i>Strategic Legal Excellence.</i></h1>
                            <p class="slide-description">Delivering world-class legal counsel across entertainment, business, and dispute resolution for clients who demand precision and results.</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Navigation arrows -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- ========== ABOUT US ========== -->
    <section id="aboutUs" class="section-about">
        <div class="container">
            <div class="about-grid">

                <div class="about-left-col">
                    <h2 class="about-headline">
                        Protecting ideas, resolving disputes, and
                        <i>powering sustainable business growth through strategic legal expertise.</i>
                    </h2>
                    <div class="about-media-wrapper">
                        <div class="about-media">
                            <img src="<?php echo BASE_URL; ?>/assets/images/about.jpg" alt="Stetson LLP Legal Expertise" loading="lazy">
                        </div>
                    </div>
                </div>

                <div class="about-text-col">
                    <div class="mission-vision-stack">
                        <div class="mv-card">
                            <strong>Our Mission</strong>
                            <p>At Stetson LLP, we provide strategic and world-class legal solutions at the intersection of entertainment, business, and dispute resolution, delivering clarity, protection, and sustainable growth for our clients across industries.</p>
                        </div>

                        <div class="mv-card">
                            <strong>Our Vision</strong>
                            <p>To be a leading African law firm recognized for excellence in entertainment law and a trusted full-service partner for complex commercial, corporate, real estate, and litigation matters.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ========== ATTORNEYS SECTION ========== -->
    <section id="attorneys" class="section-attorneys">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Meet Our Team</span>
                <h2 class="section-title">A focused team of legal professionals dedicated to protecting our clients' rights and achieving the best possible outcomes.</h2>
                <p class="section-description">Experienced attorneys committed to excellence and personalized client service</p>
            </div>

            <div class="team-grid">
                <!-- Team member 1 - Jane Ezeanaka-Okoye -->
                <a href="jane-okoye" class="team-card">
                    <div class="team-card-inner">
                        <div class="team-image-wrapper">
                            <img src="<?php echo BASE_URL; ?>/assets/images/Jane-Okoye-01.jpeg" alt="Jane Ezeanaka-Okoye" class="team-image">
                            <div class="team-overlay"></div>
                        </div>
                        <div class="team-info">
                            <div class="team-badge">Partner</div>
                            <h3 class="team-name">Jane Ezeanaka-Okoye</h3>
                            <p class="team-position">Attorney & Partner</p>
                            <div class="team-socials">
                                <!-- <span class="social-link" data-social="facebook" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://facebook.com', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </span> -->
                                <span class="social-link" data-social="twitter" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://x.com/africanjewel_?s=11', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                    </svg>
                                </span>
                                <span class="social-link" data-social="linkedin" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://www.linkedin.com/in/jane-ezeanaka-okoye-b70148a2/', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect x="2" y="9" width="4" height="12" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </span>
                                <span 
                                    class="social-link" 
                                    data-social="instagram"
                                    onclick="event.preventDefault(); event.stopPropagation(); window.open('https://www.instagram.com/africanjewel__', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M7.75 2C4.57 2 2 4.57 2 7.75v8.5C2 19.43 4.57 22 7.75 22h8.5C19.43 22 22 19.43 22 16.25v-8.5C22 4.57 19.43 2 16.25 2h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm6.5-.75a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0zM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Team member 2 - Uzodimma Danny Dubem -->
                <a href="uzodimma-danny-dubem" class="team-card">
                    <div class="team-card-inner">
                        <div class="team-image-wrapper">
                            <img src="<?php echo BASE_URL; ?>/assets/images/Uzodimma-Danny-Dubem.jpeg" alt="Uzodimma Danny Dubem" class="team-image">
                            <div class="team-overlay"></div>
                        </div>
                        <div class="team-info">
                            <div class="team-badge">Partner</div>
                            <h3 class="team-name">Uzodimma Danny Dubem</h3>
                            <p class="team-position">Attorney & Partner</p>
                            <div class="team-socials">
                                <!-- <span class="social-link" data-social="facebook" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://facebook.com', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </span> -->
                                <span class="social-link" data-social="twitter" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://x.com/itsdubem?s=11', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                    </svg>
                                </span>
                                <span class="social-link" data-social="linkedin" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://www.linkedin.com/in/uzodimma-danny-dubem-b2b65b238/', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect x="2" y="9" width="4" height="12" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Team member 3 - Obinna Ubani -->
                <a href="obinna-ubani" class="team-card">
                    <div class="team-card-inner">
                        <div class="team-image-wrapper">
                            <img src="<?php echo BASE_URL; ?>/assets/images/Obinna-Ubani-02.jpg" alt="Obinna Ubani" class="team-image">
                            <div class="team-overlay"></div>
                        </div>
                        <div class="team-info">
                            <div class="team-badge">Partner</div>
                            <h3 class="team-name">Obinna Ubani</h3>
                            <p class="team-position">Attorney & Partner</p>
                            <div class="team-socials">
                                <!-- <span class="social-link" data-social="facebook" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://facebook.com', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </span> -->
                                <span class="social-link" data-social="twitter" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://x.com/uba_ni?s=11', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                    </svg>
                                </span>
                                <span class="social-link" data-social="linkedin" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://www.linkedin.com/in/ubani-obinna-6a6b3a134/', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect x="2" y="9" width="4" height="12" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </span>
                                <span 
                                    class="social-link" 
                                    data-social="instagram"
                                    onclick="event.preventDefault(); event.stopPropagation(); window.open('https://www.instagram.com/obinnaubani', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M7.75 2C4.57 2 2 4.57 2 7.75v8.5C2 19.43 4.57 22 7.75 22h8.5C19.43 22 22 19.43 22 16.25v-8.5C22 4.57 19.43 2 16.25 2h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm6.5-.75a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0zM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Team member 4 - Praise Anyaoha -->
                <a href="praise-anyaoha" class="team-card">
                    <div class="team-card-inner">
                        <div class="team-image-wrapper">
                            <img src="<?php echo BASE_URL; ?>/assets/images/praise-anyaoha.jpeg" alt="Praise Anyaoha" class="team-image">
                            <div class="team-overlay"></div>
                        </div>
                        <div class="team-info">
                            <div class="team-badge">Partner</div>
                            <h3 class="team-name">Praise Anyaoha</h3>
                            <p class="team-position">Attorney & Partner</p>
                            <div class="team-socials">
                                <!-- <span class="social-link" data-social="facebook" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://facebook.com', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z" />
                                    </svg>
                                </span> -->
                                <span class="social-link" data-social="twitter" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://x.com/anyaohapraise?s=11', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z" />
                                    </svg>
                                </span>
                                <span class="social-link" data-social="linkedin" onclick="event.preventDefault(); event.stopPropagation(); window.open('https://www.linkedin.com/in/praise-anyaoha-b55660171/', '_blank');">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
                                        <rect x="2" y="9" width="4" height="12" />
                                        <circle cx="4" cy="4" r="2" />
                                    </svg>
                                </span>
                                <span
                                    class="social-link" 
                                    data-social="instagram"
                                    onclick="event.preventDefault(); event.stopPropagation(); window.open('https://www.instagram.com/praise_any', '_blank');"
                                >
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M7.75 2C4.57 2 2 4.57 2 7.75v8.5C2 19.43 4.57 22 7.75 22h8.5C19.43 22 22 19.43 22 16.25v-8.5C22 4.57 19.43 2 16.25 2h-8.5zM12 7a5 5 0 1 1 0 10 5 5 0 0 1 0-10zm6.5-.75a1.25 1.25 0 1 1-2.5 0 1.25 1.25 0 0 1 2.5 0zM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- ========== PRACTICE AREAS ========== -->
    <section id="practiceAreas" class="section-practice">
        <div class="container">
            <!-- Section Header -->
            <div class="practice-header">
                <span class="practice-tag">Areas of Expertise</span>
                <h2 class="practice-title">Comprehensive <span class="highlight">Legal Solutions</span> Across Industries</h2>
                <p class="practice-subtitle">Delivering strategic counsel and results-driven representation in key practice areas</p>
            </div>

            <div class="practice-grid">
                <!-- Practice Area 1 - Entertainment Law -->
                <div class="practice-card">
                    <div class="practice-icon">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M42.8681 0H12.5317C12.1434 0 11.8286 0.314719 11.8286 0.703125V23.9212C11.8286 24.3097 12.1434 24.6244 12.5317 24.6244C12.9201 24.6244 13.2349 24.3097 13.2349 23.9212V1.40625H42.1649V9.39C42.1649 9.77841 42.4797 10.0931 42.868 10.0931C43.2563 10.0931 43.5711 9.77841 43.5711 9.39V0.703125C43.5712 0.314719 43.2563 0 42.8681 0Z" fill="currentColor" />
                            <path d="M42.868 11.8447C42.4797 11.8447 42.1649 12.1594 42.1649 12.5479V41.8759C42.1649 44.4775 40.0483 46.5941 37.4467 46.5941H36.2031C35.9714 45.9151 35.7996 45.2172 35.6846 44.5076L36.931 45.3426C37.3885 45.6492 38.0255 45.3106 38.0255 44.7585V33.5855L38.3964 33.595C38.6265 33.6009 38.847 33.4926 38.9831 33.3054C39.1192 33.1182 39.1543 32.8761 39.0773 32.658L38.5499 31.1655L39.8538 30.268C40.0444 30.1369 40.1583 29.9202 40.1583 29.6888C40.1583 29.4574 40.0445 29.2409 39.8538 29.1096L38.5499 28.2122L39.0773 26.7197C39.1543 26.5015 39.1192 26.2594 38.9831 26.0722C38.8471 25.8851 38.6296 25.7764 38.3964 25.7826L36.814 25.8229L36.3633 24.3055C36.2974 24.0837 36.1267 23.9085 35.9065 23.8369C35.6866 23.7655 35.4453 23.8068 35.2616 23.9476L34.0052 24.9104L32.7488 23.9476C32.5651 23.8068 32.324 23.7656 32.1039 23.8369C31.8837 23.9085 31.713 24.0837 31.6471 24.3055L31.1965 25.8229L29.6141 25.7826C29.3822 25.7759 29.1634 25.885 29.0274 26.0722C28.8913 26.2594 28.8562 26.5015 28.9332 26.7197L29.4606 28.2122L28.1567 29.1096C27.9661 29.2408 27.8522 29.4574 27.8522 29.6888C27.8522 29.9202 27.966 30.1368 28.1567 30.268L29.4606 31.1655L28.9332 32.658C28.8562 32.8761 28.8913 33.1182 29.0274 33.3054C29.1634 33.4926 29.3816 33.6014 29.6141 33.595L29.985 33.5855V36.8531H17.8913C17.503 36.8531 17.1881 37.1678 17.1881 37.5562C17.1881 37.9446 17.503 38.2594 17.8913 38.2594H29.985V44.7585C29.985 45.3079 30.6202 45.65 31.0795 45.3426L34.0052 43.3825L34.1484 43.4784C34.2254 44.5395 34.4184 45.5835 34.7257 46.5941H6.5568C6.53692 46.5941 6.51864 46.5827 6.5133 46.5667C6.0633 45.2381 5.83521 43.8453 5.83521 42.4267C5.83521 41.0082 6.06339 39.6154 6.51339 38.2866C6.51874 38.2708 6.53702 38.2594 6.55689 38.2594H14.7339C15.1222 38.2594 15.437 37.9446 15.437 37.5562C15.437 37.1678 15.1222 36.8531 14.7339 36.8531H13.2349V27.0791C13.2349 26.6907 12.9201 26.376 12.5318 26.376C12.1435 26.376 11.8286 26.6907 11.8286 27.0791V36.8531H6.5568C5.93308 36.8531 5.38033 37.248 5.18139 37.8355C4.68208 39.3098 4.42896 40.8544 4.42896 42.4267C4.42896 43.999 4.68208 45.5436 5.18139 47.0179C5.38033 47.6055 5.93308 48.0004 6.5568 48.0004H37.4467C40.8237 48.0004 43.5712 45.2529 43.5712 41.8759V12.5479C43.5712 12.1594 43.2563 11.8447 42.868 11.8447Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="practice-number">01</div>
                    <h3>Entertainment Law</h3>
                    <p>Covers legal matters in the entertainment industry, including contracts, intellectual property rights, licensing, talent agreements, and disputes involving artists, producers, media companies, and content distribution.</p>
                    <a href="#" class="practice-link">Learn More <span>→</span></a>
                </div>

                <!-- Practice Area 2 - Corporate and Commercial Disputes -->
                <div class="practice-card">
                    <div class="practice-icon">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M27.3179 18.0527C27.8452 18.9727 28.8171 19.4963 29.8187 19.4963C30.2417 19.4963 30.6698 19.403 31.0719 19.2067C31.7791 18.8621 32.3027 18.2596 32.5459 17.5111C32.7887 16.7629 32.7191 15.9679 32.3496 15.2732L29.2654 9.47461H32.3379C32.7268 9.47461 33.0418 9.1593 33.0418 8.77075C33.0418 8.3822 32.7268 8.06726 32.3379 8.06726H28.6619C28.292 8.06726 27.9573 8.25659 27.7665 8.5741C27.5761 8.89124 27.5658 9.27576 27.7398 9.60242L31.1074 15.9338C31.296 16.2887 31.3315 16.6945 31.2074 17.0764C31.0833 17.4587 30.8163 17.766 30.4552 17.9421C29.7634 18.2798 28.9215 18.0209 28.5385 17.3533L25.515 12.0795C25.3898 11.8608 25.1569 11.7257 24.9045 11.7257H18.1036V1.31323H36.308C36.8617 1.31323 37.3923 1.48389 37.842 1.80725L43.1331 5.60779C43.3663 5.77551 43.5575 5.99963 43.686 6.25671L45.4014 9.68738C45.5241 9.93274 45.5889 10.2078 45.5889 10.4824V18.6204C45.5889 19.4224 44.9367 20.0746 44.135 20.0746C43.3334 20.0746 42.6808 19.4224 42.6808 18.6204V11.9605C42.6808 11.7166 42.5548 11.4902 42.3472 11.3621L37.6384 8.45068C37.2327 8.19983 36.7658 8.06726 36.2886 8.06726H35.1522C34.7637 8.06726 34.4487 8.3822 34.4487 8.77075C34.4487 9.1593 34.7637 9.47461 35.1522 9.47461H36.2886C36.5043 9.47461 36.7152 9.5343 36.8987 9.64783L36.9587 9.68482V14.3994C36.9587 15.9771 38.2423 17.2603 39.82 17.2603C40.3506 17.2603 40.8475 17.1149 41.2738 16.8622V18.6204C41.2738 20.198 42.5574 21.4816 44.135 21.4816C45.7127 21.4816 46.9962 20.198 46.9962 18.6204V10.4824C46.9962 9.99024 46.8798 9.49805 46.6597 9.05823L44.9447 5.6272C44.7144 5.16687 44.372 4.76514 43.9541 4.46484L38.6631 0.664307C37.9724 0.168457 37.1583 -0.09375 36.308 -0.09375H1.73474C1.34619 -0.09375 1.03125 0.221191 1.03125 0.609741C1.03125 0.998291 1.34619 1.31323 1.73474 1.31323H16.6967V15.91C16.6967 16.396 16.3015 16.7911 15.8156 16.7911H1.73474C1.34619 16.7911 1.03125 17.1064 1.03125 17.495C1.03125 17.8835 1.34619 18.1985 1.73474 18.1985H15.8156C17.0775 18.1985 18.104 17.172 18.104 15.91V13.1331H24.4973L27.3179 18.0527Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="practice-number">02</div>
                    <h3>Corporate & Commercial Disputes</h3>
                    <p>Involves resolving conflicts between businesses, shareholders, partners, or corporate entities. This includes contract breaches, partnership disagreements, shareholder rights issues, and other commercial litigation matters.</p>
                    <a href="#" class="practice-link">Learn More <span>→</span></a>
                </div>

                <!-- Practice Area 3 - Real Estate & Property Law -->
                <div class="practice-card">
                    <div class="practice-icon">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M46.8325 37.8724H44.3438V37.5699C44.3438 36.9613 43.8486 36.4662 43.2404 36.4662H32.851C35.3221 35.0555 37.385 33.0798 38.8967 30.739L40.4689 31.3162C40.8413 31.4528 41.2229 31.5176 41.5983 31.5176C42.9379 31.5176 44.1995 30.6921 44.6873 29.3632L45.2622 27.7976C45.3263 27.6226 45.3182 27.4292 45.2402 27.26C45.1619 27.0908 45.0194 26.9597 44.8444 26.8953L43.0342 26.231C42.371 25.9874 41.6635 25.9636 40.9973 26.1559C41.2233 25.3865 41.3979 24.5973 41.5177 23.7931H42.9785C44.7909 23.7931 46.2656 22.3187 46.2656 20.506V18.8383C46.2656 18.4501 45.9507 18.1351 45.5625 18.1351H43.6344C42.8478 18.1351 42.1252 18.4131 41.5587 18.8756C41.4177 17.7993 41.1786 16.7454 40.8446 15.7236H41.8575C43.6699 15.7236 45.1447 14.2489 45.1447 12.4365V10.7688C45.1447 10.3802 44.8297 10.0657 44.4415 10.0657H42.5134C41.0266 10.0657 39.7683 11.0577 39.3636 12.4142C39.0154 11.8132 38.6301 11.2295 38.2075 10.6659C37.8761 10.2235 37.5227 9.79761 37.1514 9.38928H37.526C39.3384 9.38928 40.8131 7.91455 40.8131 6.10217V4.43445C40.8131 4.0459 40.4982 3.73132 40.11 3.73132H38.1819C36.3695 3.73132 34.8948 5.20569 34.8948 7.01843V7.30591C33.9994 6.61194 33.0385 6.00403 32.0295 5.49353C33.3413 5.06177 34.2913 3.82544 34.2913 2.37085V0.703125C34.2913 0.314941 33.9763 0 33.5881 0H31.66C29.8477 0 28.3729 1.47473 28.3729 3.28711V4.95483C28.3729 5.06177 28.3975 5.16248 28.4403 5.2533C28.5011 5.47815 28.6721 5.66821 28.9109 5.74182C32.1416 6.74011 35.0435 8.78833 37.0825 11.5089C39.1901 14.3218 40.3041 17.6719 40.3041 21.1974C40.3041 28.0778 35.9561 34.199 29.4727 36.4662H28.7344C26.7275 36.4662 24.9749 37.5692 24.0469 39.2C23.1189 37.5692 21.3662 36.4662 19.3594 36.4662H18.5273C12.0443 34.199 7.69592 28.0778 7.69592 21.1974C7.69592 17.6719 8.80994 14.3218 10.9178 11.5089C12.9565 8.78833 15.8584 6.74011 19.0891 5.74182C19.3282 5.66821 19.4989 5.47815 19.5601 5.2533C19.6025 5.16284 19.6271 5.06177 19.6271 4.95483V3.28711C19.6271 1.47473 18.1527 0 16.34 0H14.4119C14.0237 0 13.7087 0.314941 13.7087 0.703125V2.37085C13.7087 3.82544 14.6587 5.06177 15.9708 5.49353C14.9615 6.00403 14.001 6.61194 13.1052 7.30591V7.01843C13.1052 5.20569 11.6309 3.73132 9.81848 3.73132H7.89001C7.50183 3.73132 7.18689 4.0459 7.18689 4.43445V6.10217C7.18689 7.91455 8.66162 9.38928 10.474 9.38928H10.8486C10.4769 9.79761 10.1239 10.2235 9.79248 10.6659C9.37024 11.2295 8.98462 11.8132 8.63635 12.4142C8.23169 11.0577 6.97302 10.0657 5.48657 10.0657H3.55847C3.17029 10.0657 2.85535 10.3802 2.85535 10.7688V12.4365C2.85535 14.2489 4.33008 15.7236 6.14246 15.7236H7.1554C6.82141 16.7457 6.58228 17.7993 6.44128 18.8756C5.87476 18.4131 5.15222 18.1351 4.3656 18.1351H2.4375C2.04932 18.1351 1.73438 18.4501 1.73438 18.8383V20.506C1.73438 22.3187 3.20911 23.7931 5.02148 23.7931H6.4823C6.60205 24.5973 6.77637 25.3865 7.00269 26.1559C6.33655 25.964 5.62866 25.9874 4.96582 26.231L3.15564 26.8953C2.98059 26.9597 2.83813 27.0908 2.75977 27.26C2.6814 27.4292 2.67371 27.6226 2.73779 27.7976L3.31274 29.3632C3.80054 30.6925 5.06177 31.5176 6.40173 31.5176C6.7771 31.5176 7.15869 31.4528 7.53113 31.3162L9.10291 30.739C10.615 33.0798 12.6779 35.0555 15.149 36.4662H4.85339C4.24512 36.4662 3.75 36.9613 3.75 37.5699V37.8724H1.16748C0.523682 37.8724 0 38.3961 0 39.0399V46.7007C0 47.4155 0.581909 47.9974 1.29712 47.9974H46.7029C47.4181 47.9974 48 47.4155 48 46.7007V39.0399C48 38.3961 47.4763 37.8724 46.8325 37.8724Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="practice-number">03</div>
                    <h3>Real Estate & Property Law</h3>
                    <p>Focuses on legal issues related to land and property transactions such as buying, selling, leasing, land title verification, property development, and resolving ownership or boundary disputes.</p>
                    <a href="#" class="practice-link">Learn More <span>→</span></a>
                </div>

                <!-- Practice Area 4 - Regulatory Compliance -->
                <div class="practice-card">
                    <div class="practice-icon">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.89 38.503H24.7031V4.83984H36.5775C36.9659 4.83984 37.2806 4.52513 37.2806 4.13672C37.2806 3.74831 36.9659 3.43359 36.5775 3.43359H3.55556C3.16716 3.43359 2.85244 3.74831 2.85244 4.13672V6.02091H0.703125C0.314719 6.02091 0 6.33563 0 6.72403V43.8642C0 44.2526 0.314719 44.5673 0.703125 44.5673H10.3744C10.7628 44.5673 11.0775 44.2526 11.0775 43.8642C11.0775 43.4758 10.7628 43.1611 10.3744 43.1611H1.40625V7.42716H2.85244V39.2062C2.85244 39.5946 3.16716 39.9093 3.55556 39.9093H37.89C38.2784 39.9093 38.5931 39.5946 38.5931 39.2062C38.5931 38.8178 38.2784 38.503 37.89 38.503Z" fill="currentColor" />
                            <path d="M47.297 6.02091H45.1477V4.13672C45.1477 3.74831 44.833 3.43359 44.4445 3.43359H39.7351C39.3467 3.43359 39.032 3.74831 39.032 4.13672C39.032 4.52513 39.3467 4.83984 39.7351 4.83984H43.7414V38.5029H41.0476C40.6592 38.5029 40.3445 38.8177 40.3445 39.2061C40.3445 39.5945 40.6592 39.9092 41.0476 39.9092H44.4445C44.833 39.9092 45.1477 39.5945 45.1477 39.2061V7.42716H46.5939V43.1611H24.5277V41.7479C24.5277 41.3595 24.213 41.0448 23.8246 41.0448C23.4362 41.0448 23.1215 41.3595 23.1215 41.7479V43.1611H13.532C13.1436 43.1611 12.8289 43.4758 12.8289 43.8642C12.8289 44.2526 13.1436 44.5673 13.532 44.5673H47.297C47.6854 44.5673 48.0001 44.2526 48.0001 43.8642V6.72403C48.0001 6.33563 47.6854 6.02091 47.297 6.02091Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="practice-number">04</div>
                    <h3>Regulatory Compliance</h3>
                    <p>Ensures that businesses operate according to laws, regulations, and industry standards set by government authorities. This includes corporate governance, licensing requirements, financial regulations, and risk management.</p>
                    <a href="#" class="practice-link">Learn More <span>→</span></a>
                </div>

                <!-- Practice Area 5 - Business Management -->
                <div class="practice-card">
                    <div class="practice-icon">
                        <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M37.89 38.503H24.7031V4.83984H36.5775C36.9659 4.83984 37.2806 4.52513 37.2806 4.13672C37.2806 3.74831 36.9659 3.43359 36.5775 3.43359H3.55556C3.16716 3.43359 2.85244 3.74831 2.85244 4.13672V6.02091H0.703125C0.314719 6.02091 0 6.33563 0 6.72403V43.8642C0 44.2526 0.314719 44.5673 0.703125 44.5673H10.3744C10.7628 44.5673 11.0775 44.2526 11.0775 43.8642C11.0775 43.4758 10.7628 43.1611 10.3744 43.1611H1.40625V7.42716H2.85244V39.2062C2.85244 39.5946 3.16716 39.9093 3.55556 39.9093H37.89C38.2784 39.9093 38.5931 39.5946 38.5931 39.2062C38.5931 38.8178 38.2784 38.503 37.89 38.503Z" fill="currentColor" />
                            <path d="M47.297 6.02091H45.1477V4.13672C45.1477 3.74831 44.833 3.43359 44.4445 3.43359H39.7351C39.3467 3.43359 39.032 3.74831 39.032 4.13672C39.032 4.52513 39.3467 4.83984 39.7351 4.83984H43.7414V38.5029H41.0476C40.6592 38.5029 40.3445 38.8177 40.3445 39.2061C40.3445 39.5945 40.6592 39.9092 41.0476 39.9092H44.4445C44.833 39.9092 45.1477 39.5945 45.1477 39.2061V7.42716H46.5939V43.1611H24.5277V41.7479C24.5277 41.3595 24.213 41.0448 23.8246 41.0448C23.4362 41.0448 23.1215 41.3595 23.1215 41.7479V43.1611H13.532C13.1436 43.1611 12.8289 43.4758 12.8289 43.8642C12.8289 44.2526 13.1436 44.5673 13.532 44.5673H47.297C47.6854 44.5673 48.0001 44.2526 48.0001 43.8642V6.72403C48.0001 6.33563 47.6854 6.02091 47.297 6.02091Z" fill="currentColor" />
                        </svg>
                    </div>
                    <div class="practice-number">05</div>
                    <h3>Business Management</h3>
                    <p>Involves the strategic planning, organization, and oversight of business operations to achieve company goals. It includes leadership, resource management, operational efficiency, and decision-making to improve business performance.</p>
                    <a href="#" class="practice-link">Learn More <span>→</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- ========== TESTIMONIALS SECTION ========== -->
    <section id="testimonials" class="section-testimonials">
        <div class="container">
            <div class="section-header">
                <span class="section-subtitle">Client Testimonials</span>
                <h2>Delivering trusted legal results through <i>experience, dedication,</i> and a <i>commitment to excellence.</i></h2>
            </div>

            <div class="testimonials-wrapper">
                <!-- Rating Card with Image Background -->
                <div class="rating-card">
                    <div class="rating-card-bg">
                        <img src="<?php echo BASE_URL; ?>/assets/images/bg-rate.webp" alt="Legal Excellence" class="rating-bg-image">
                        <div class="rating-card-overlay"></div>
                    </div>
                    <div class="rating-card-content">
                        <div class="rating-stars">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L15 8L22 9L17 14L18 21L12 17.5L6 21L7 14L2 9L9 8L12 2Z" fill="currentColor" />
                            </svg>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L15 8L22 9L17 14L18 21L12 17.5L6 21L7 14L2 9L9 8L12 2Z" fill="currentColor" />
                            </svg>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L15 8L22 9L17 14L18 21L12 17.5L6 21L7 14L2 9L9 8L12 2Z" fill="currentColor" />
                            </svg>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L15 8L22 9L17 14L18 21L12 17.5L6 21L7 14L2 9L9 8L12 2Z" fill="currentColor" />
                            </svg>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L15 8L22 9L17 14L18 21L12 17.5L6 21L7 14L2 9L9 8L12 2Z" fill="currentColor" />
                            </svg>
                        </div>
                        <div class="rating-value">
                            <span class="rating-number">4.9</span>
                            <span class="rating-out-of">/5.0</span>
                        </div>
                        <p class="rating-text">Built on client trust, with a strong track record of delivering practical and effective legal solutions.</p>
                    </div>
                </div>

                <!-- Testimonial Slider -->
                <div class="testimonial-slider">
                    <div class="swiper testimonial-swiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                                            <path d="M10 11H6C6 8.79 7.79 7 10 7V9C8.9 9 8 9.9 8 11H10V16H6V11H10ZM18 11H14C14 8.79 15.79 7 18 7V9C16.9 9 16 9.9 16 11H18V16H14V11H18Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <div class="testimonial-text">“I have relied on Danny Dubem Uzodimma of Stetson LLP for the legal management of my rental properties over the past three years. He has handled the preparation of tenancy agreements, rent administration, and related legal matters with professionalism and great attention to detail.”</div>
                                    <div class="testimonial-author">
                                        <div class="author-avatar">
                                            <span>NP</span>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-name">Ndubuisi Paul Jeremiah</div>
                                            <div class="author-title">Property Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                                            <path d="M10 11H6C6 8.79 7.79 7 10 7V9C8.9 9 8 9.9 8 11H10V16H6V11H10ZM18 11H14C14 8.79 15.79 7 18 7V9C16.9 9 16 9.9 16 11H18V16H14V11H18Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <div class="testimonial-text">“Danny handled the entire company registration and regulatory compliance process for my business with remarkable professionalism and efficiency. From incorporation to ensuring all the necessary filings and statutory requirements were properly in place before launch, he made what could have been a complicated process feel seamless.”</div>
                                    <div class="testimonial-author">
                                        <div class="author-avatar">
                                            <span>OE</span>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-name">Okafor Emmanuel</div>
                                            <div class="author-title">Business Owner</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                                            <path d="M10 11H6C6 8.79 7.79 7 10 7V9C8.9 9 8 9.9 8 11H10V16H6V11H10ZM18 11H14C14 8.79 15.79 7 18 7V9C16.9 9 16 9.9 16 11H18V16H14V11H18Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <div class="testimonial-text">“I engaged Danny to assist with a commercial dispute that had been ongoing for some time. He approached the matter with a clear strategy, communicated every step effectively, and ensured that my interests were properly protected throughout the process.”</div>
                                    <div class="testimonial-author">
                                        <div class="author-avatar">
                                            <span>CO</span>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-name">Chinedu Okeke</div>
                                            <div class="author-title">Business Consultant</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-card">
                                    <div class="testimonial-quote">
                                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none">
                                            <path d="M10 11H6C6 8.79 7.79 7 10 7V9C8.9 9 8 9.9 8 11H10V16H6V11H10ZM18 11H14C14 8.79 15.79 7 18 7V9C16.9 9 16 9.9 16 11H18V16H14V11H18Z" fill="currentColor" />
                                        </svg>
                                    </div>
                                    <div class="testimonial-text">“As a growing business, we needed ongoing legal guidance to support our operations and contracts. Danny has been instrumental in reviewing agreements, advising on compliance matters, and helping us avoid potential risks.”</div>
                                    <div class="testimonial-author">
                                        <div class="author-avatar">
                                            <span>AB</span>
                                        </div>
                                        <div class="author-info">
                                            <div class="author-name">Aisha Bello</div>
                                            <div class="author-title">Entrepreneur</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Simple Schema for Homepage -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LegalService",
  "name": "Stetson LLP",
  "url": "https://stetsonllp.com",
  "description": "Stetson LLP provides legal expertise in entertainment law, corporate disputes, real estate, and regulatory compliance.",
  "address": {
    "@type": "PostalAddress",
    "addressCountry": "NG"
  }
}
</script>

<?php
include 'layouts/footer.php';
?>