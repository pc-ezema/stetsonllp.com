/* ============================================
   MAIN.JS - Stetson LLP | Modern Law Firm Theme
   ============================================ */

document.addEventListener("DOMContentLoaded", function () {
  // ========== MOBILE MENU FUNCTIONALITY - FIXED ==========
  // Get the hamburger button
  const mobileMenuToggle = document.querySelector(".mobile-menu-toggle");

  console.log("Mobile menu toggle found:", mobileMenuToggle); // Debug log

  if (mobileMenuToggle) {
    // Create mobile menu panel and overlay
    let mobileMenuPanel = document.querySelector(".mobile-menu-panel");
    let mobileOverlay = document.querySelector(".mobile-overlay");

    if (!mobileMenuPanel) {
      mobileMenuPanel = document.createElement("div");
      mobileMenuPanel.className = "mobile-menu-panel";
      document.body.appendChild(mobileMenuPanel);
    }

    if (!mobileOverlay) {
      mobileOverlay = document.createElement("div");
      mobileOverlay.className = "mobile-overlay";
      document.body.appendChild(mobileOverlay);
    }

    // Build mobile menu content
    const siteLogo = document.querySelector(".logo-link img");
    const desktopMenu = document.querySelector(".nav-menu");
    const contactBtn = document.querySelector(".header-tools .btn");

    let logoSrc = "/wp-content/uploads/stetson-logo.png";
    if (siteLogo) {
      logoSrc = siteLogo.src;
    }

    let menuHTML = `
      <div class="mobile-menu-header">
        <div class="mobile-menu-logo">
          <img src="${logoSrc}" alt="Stetson LLP">
        </div>
        <button class="close-mobile-menu" aria-label="Close menu">✕</button>
      </div>
      <div class="mobile-menu-nav">
        <ul>
    `;

    // Add menu items from desktop navigation
    if (desktopMenu) {
      const menuItems = desktopMenu.querySelectorAll(":scope > li");
      menuItems.forEach((item) => {
        const link = item.querySelector(":scope > a");
        const submenu = item.querySelector(".dropdown-menu");
        const hasSubmenu = submenu && submenu.children.length > 0;

        if (hasSubmenu) {
          let linkText = "";
          if (link) {
            // Remove the dropdown arrow span if it exists
            const linkClone = link.cloneNode(true);
            const arrowSpan = linkClone.querySelector(".dropdown-arrow");
            if (arrowSpan) arrowSpan.remove();
            linkText = linkClone.textContent.trim();
          }

          menuHTML += `
            <li class="menu-item-has-children">
              <a href="#" class="mobile-parent">
                ${linkText}
                <span class="mobile-toggle-icon">▼</span>
              </a>
              <ul class="mobile-submenu">
          `;

          const subItems = submenu.querySelectorAll("li");
          subItems.forEach((subItem) => {
            const subLink = subItem.querySelector("a");
            if (subLink) {
              menuHTML += `
                <li>
                  <a href="${subLink.getAttribute("href") || "#"}">
                    ${subLink.textContent.trim()}
                  </a>
                </li>
              `;
            }
          });

          menuHTML += `</ul></li>`;
        } else {
          const href = link ? link.getAttribute("href") || "#" : "#";
          const text = link ? link.textContent.trim() : "";
          menuHTML += `
            <li>
              <a href="${href}">
                ${text}
              </a>
            </li>
          `;
        }
      });
    } else {
      // Fallback menu items if desktop menu not found
      menuHTML += `
        <li><a href="index">Home</a></li>
        <li><a href="index#aboutUs">About Us</a></li>
        <li><a href="index#attorneys">Attorneys</a></li>
        <li class="menu-item-has-children">
          <a href="index#practiceAreas" class="mobile-parent">
            Practice Areas
            <span class="mobile-toggle-icon">▼</span>
          </a>
          <ul class="mobile-submenu">
            <li><a href="index#practiceAreas">Entertainment Law</a></li>
            <li><a href="index#practiceAreas">Corporate and Commercial Disputes</a></li>
            <li><a href="index#practiceAreas">Real Estate & Property Law</a></li>
            <li><a href="index#practiceAreas">Regulatory Compliance</a></li>
            <li><a href="index#practiceAreas">Business Management</a></li>
          </ul>
        </li>
        <li><a href="index#testimonials">Testimonials</a></li>
      `;
    }

    menuHTML += `
        </ul>
      </div>
      <div class="mobile-menu-footer">
        ${contactBtn ? `<a href="${contactBtn.getAttribute("href") || "#"}" class="btn btn-primary">${contactBtn.textContent.trim()}</a>` : '<a href="#" class="btn btn-primary">Contact Us</a>'}
        <div class="social-links">
          <a href="#" aria-label="Facebook">📘</a>
          <a href="#" aria-label="Twitter">🐦</a>
          <a href="#" aria-label="LinkedIn">💼</a>
          <a href="#" aria-label="Instagram">📷</a>
        </div>
      </div>
    `;

    mobileMenuPanel.innerHTML = menuHTML;

    // Open mobile menu function
    const openMobileMenu = (e) => {
      if (e) {
        e.preventDefault();
        e.stopPropagation();
      }
      console.log("Opening mobile menu"); // Debug log
      mobileMenuPanel.classList.add("active");
      mobileOverlay.classList.add("active");
      document.body.style.overflow = "hidden";
      document.body.style.position = "fixed";
      document.body.style.width = "100%";
      document.body.style.top = `-${window.scrollY}px`;
    };

    // Close mobile menu function
    const closeMobileMenu = () => {
      console.log("Closing mobile menu"); // Debug log
      const scrollY = document.body.style.top;
      mobileMenuPanel.classList.remove("active");
      mobileOverlay.classList.remove("active");
      document.body.style.overflow = "";
      document.body.style.position = "";
      document.body.style.width = "";
      document.body.style.top = "";
      if (scrollY) {
        window.scrollTo(0, parseInt(scrollY || "0") * -1);
      }
    };

    // Add click event to hamburger button
    mobileMenuToggle.addEventListener("click", openMobileMenu);
    mobileMenuToggle.addEventListener("touchstart", openMobileMenu);

    // Close button
    const closeBtn = mobileMenuPanel.querySelector(".close-mobile-menu");
    if (closeBtn) {
      closeBtn.addEventListener("click", closeMobileMenu);
      closeBtn.addEventListener("touchstart", closeMobileMenu);
    }

    // Close on overlay click
    mobileOverlay.addEventListener("click", closeMobileMenu);
    mobileOverlay.addEventListener("touchstart", closeMobileMenu);

    // Close on escape key
    document.addEventListener("keydown", function (e) {
      if (e.key === "Escape" && mobileMenuPanel.classList.contains("active")) {
        closeMobileMenu();
      }
    });

    // Mobile submenu toggle
    mobileMenuPanel.addEventListener("click", function (e) {
      const parentItem = e.target.closest(".menu-item-has-children");
      if (
        parentItem &&
        (e.target.closest(".mobile-parent") ||
          e.target.closest(".mobile-toggle-icon"))
      ) {
        e.preventDefault();
        e.stopPropagation();

        const submenu = parentItem.querySelector(".mobile-submenu");
        const toggleIcon = parentItem.querySelector(".mobile-toggle-icon");

        if (submenu) {
          // Close other open submenus
          const allSubmenus =
            mobileMenuPanel.querySelectorAll(".mobile-submenu");
          allSubmenus.forEach((menu) => {
            if (menu !== submenu && menu.classList.contains("active")) {
              menu.classList.remove("active");
              const otherIcon = menu
                .closest(".menu-item-has-children")
                ?.querySelector(".mobile-toggle-icon");
              if (otherIcon) {
                otherIcon.style.transform = "";
              }
            }
          });

          // Toggle current submenu
          submenu.classList.toggle("active");
          if (toggleIcon) {
            toggleIcon.style.transform = submenu.classList.contains("active")
              ? "rotate(180deg)"
              : "";
          }
        }
      }
    });

    // Close menu when clicking on navigation links
    const navLinks = mobileMenuPanel.querySelectorAll("a");
    navLinks.forEach((link) => {
      link.addEventListener("click", function (e) {
        const href = this.getAttribute("href");
        if (href && href !== "#" && href !== "") {
          closeMobileMenu();

          // If it's an anchor link, scroll smoothly
          if (href.startsWith("#")) {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
              setTimeout(() => {
                const headerOffset = 100;
                const elementPosition = target.getBoundingClientRect().top;
                const offsetPosition =
                  elementPosition + window.pageYOffset - headerOffset;
                window.scrollTo({
                  top: offsetPosition,
                  behavior: "smooth",
                });
              }, 300);
            }
          }
        }
      });
    });
  } else {
    console.log(
      "Mobile menu toggle not found - check if .mobile-menu-toggle exists in HTML",
    );
  }

  // ========== HERO SLIDER INITIALIZATION ==========
  const heroSlider = document.querySelector(".hero-swiper");
  if (heroSlider && typeof Swiper !== "undefined") {
    new Swiper(heroSlider, {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".hero-slider .swiper-button-next",
        prevEl: ".hero-slider .swiper-button-prev",
      },
      pagination: {
        el: ".hero-slider .swiper-pagination",
        clickable: true,
      },
      effect: "fade",
      fadeEffect: {
        crossFade: true,
      },
    });
  }

  // ========== TESTIMONIALS CAROUSEL INITIALIZATION ==========
  const testimonialSlider = document.querySelector(".testimonial-swiper");
  if (testimonialSlider && typeof Swiper !== "undefined") {
    new Swiper(testimonialSlider, {
      loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: false,
      },
      navigation: {
        nextEl: ".testimonial-slider .swiper-button-next",
        prevEl: ".testimonial-slider .swiper-button-prev",
      },
      slidesPerView: 1,
      spaceBetween: 30,
    });
  }

  // ========== BACK TO TOP BUTTON ==========
  const backToTopBtn = document.getElementById("back-to-top");
  if (backToTopBtn) {
    window.addEventListener("scroll", function () {
      if (window.pageYOffset > 300) {
        backToTopBtn.classList.add("visible");
      } else {
        backToTopBtn.classList.remove("visible");
      }
    });

    backToTopBtn.addEventListener("click", function () {
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    });
  }

  // ========== CURRENT YEAR IN COPYRIGHT ==========
  const yearSpan = document.getElementById("current-year");
  if (yearSpan) {
    yearSpan.textContent = new Date().getFullYear();
  }

  // ========== SMOOTH SCROLL FOR ANCHOR LINKS ==========
  const anchorLinks = document.querySelectorAll('a[href^="#"]:not([href="#"])');
  anchorLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      const targetId = this.getAttribute("href");
      if (targetId === "#") return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        e.preventDefault();

        const headerOffset = 100;
        const elementPosition = targetElement.getBoundingClientRect().top;
        const offsetPosition =
          elementPosition + window.pageYOffset - headerOffset;

        window.scrollTo({
          top: offsetPosition,
          behavior: "smooth",
        });

        // Close mobile menu if open
        const mobilePanel = document.querySelector(".mobile-menu-panel");
        const mobileOverlay = document.querySelector(".mobile-overlay");
        if (mobilePanel && mobilePanel.classList.contains("active")) {
          mobilePanel.classList.remove("active");
          mobileOverlay.classList.remove("active");
          document.body.style.overflow = "";
          document.body.style.position = "";
          document.body.style.width = "";
        }
      }
    });
  });
});

// ========== ADDITIONAL HELPER FUNCTIONS ==========
function preloadImages(images) {
  images.forEach((src) => {
    const img = new Image();
    img.src = src;
  });
}

// Preload critical images
if (document.querySelector(".hero-swiper")) {
  const heroImages = document.querySelectorAll(".hero-swiper .slide-image");
  const imageUrls = Array.from(heroImages).map((img) => img.src);
  if (imageUrls.length) preloadImages(imageUrls);
}

// Handle responsive video embeds
function makeResponsiveVideos() {
  const videos = document.querySelectorAll(
    'iframe[src*="youtube"], iframe[src*="vimeo"]',
  );
  videos.forEach((video) => {
    const container = document.createElement("div");
    container.className = "video-container";
    video.parentNode.insertBefore(container, video);
    container.appendChild(video);
  });
}

makeResponsiveVideos();

// Add CSS for video containers and mobile menu if not present
const style = document.createElement("style");
style.textContent = `
  .video-container {
    position: relative;
    padding-bottom: 56.25%;
    height: 0;
    overflow: hidden;
    max-width: 100%;
  }
  .video-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
  }
  .sticky {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
    animation: slideDown 0.4s ease forwards;
  }
  @keyframes slideDown {
    from {
      transform: translateY(-100%);
    }
    to {
      transform: translateY(0);
    }
  }
  .header-container.sticky {
    box-shadow: 0 4px 25px rgba(0, 0, 0, 0.08);
    min-height: 70px;
  }
  .header-container.sticky .logo-link img {
    max-height: 45px;
  }
  
  /* Mobile Menu Styles */
  .mobile-menu-panel {
    position: fixed;
    top: 0;
    left: 0;
    width: 85%;
    max-width: 400px;
    height: 100%;
    background: #ffffff;
    z-index: 10000;
    transform: translateX(-100%);
    transition: transform 0.3s ease-in-out;
    overflow-y: auto;
    box-shadow: 2px 0 20px rgba(0, 0, 0, 0.1);
  }
  .mobile-menu-panel.active {
    transform: translateX(0);
  }
  .mobile-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9999;
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
  }
  .mobile-overlay.active {
    opacity: 1;
    visibility: visible;
  }
  .mobile-menu-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px 24px;
    border-bottom: 1px solid #e5e9ef;
  }
  .mobile-menu-logo img {
    max-height: 40px;
    width: auto;
  }
  .close-mobile-menu {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: transparent;
    border: none;
    font-size: 24px;
    cursor: pointer;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #1a2c3e;
  }
  .mobile-menu-nav ul {
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .mobile-menu-nav li {
    border-bottom: 1px solid #e5e9ef;
  }
  .mobile-menu-nav li a {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 24px;
    font-size: 1rem;
    font-weight: 500;
    color: #1a2c3e;
    text-decoration: none;
  }
  .mobile-submenu {
    display: none;
    background: #f8f9fa;
    list-style: none;
    margin: 0;
    padding: 0;
  }
  .mobile-submenu.active {
    display: block;
  }
  .mobile-submenu li a {
    padding: 12px 24px 12px 40px;
    font-size: 0.9rem;
    font-weight: 400;
  }
  .mobile-toggle-icon {
    font-size: 12px;
    transition: transform 0.2s ease;
  }
  .mobile-menu-footer {
    padding: 24px;
    border-top: 1px solid #e5e9ef;
    margin-top: 20px;
  }
  .mobile-menu-footer .btn {
    width: 100%;
    justify-content: center;
    margin-bottom: 20px;
  }
  .social-links {
    display: flex;
    gap: 20px;
    justify-content: center;
  }
  .social-links a {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: #f0f0f0;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    font-size: 1.2rem;
    color: #1a2c3e;
  }
  @media (max-width: 576px) {
    .mobile-menu-panel {
      width: 100%;
      max-width: 100%;
    }
  }
`;
document.head.appendChild(style);

// Attorney Image Slider
document.addEventListener('DOMContentLoaded', function() {
    const sliderContainer = document.getElementById('attorneySlider');
    if (!sliderContainer) return;
    
    const slides = document.querySelectorAll('.slide');
    const dots = document.querySelectorAll('.dot');
    const prevBtn = document.getElementById('sliderPrev');
    const nextBtn = document.getElementById('sliderNext');
    
    let currentSlide = 0;
    let slideInterval;
    const autoPlayDelay = 5000; // 5 seconds
    
    function showSlide(index) {
        // Remove active class from all slides and dots
        slides.forEach(slide => slide.classList.remove('active'));
        dots.forEach(dot => dot.classList.remove('active'));
        
        // Add active class to current slide and dot
        slides[index].classList.add('active');
        if (dots[index]) dots[index].classList.add('active');
        
        currentSlide = index;
    }
    
    function nextSlide() {
        let next = currentSlide + 1;
        if (next >= slides.length) next = 0;
        showSlide(next);
    }
    
    function prevSlide() {
        let prev = currentSlide - 1;
        if (prev < 0) prev = slides.length - 1;
        showSlide(prev);
    }
    
    function startAutoPlay() {
        if (slideInterval) clearInterval(slideInterval);
        slideInterval = setInterval(nextSlide, autoPlayDelay);
    }
    
    function stopAutoPlay() {
        if (slideInterval) {
            clearInterval(slideInterval);
            slideInterval = null;
        }
    }
    
    // Event listeners for controls
    if (prevBtn) {
        prevBtn.addEventListener('click', function(e) {
            e.preventDefault();
            prevSlide();
            stopAutoPlay();
            startAutoPlay();
        });
    }
    
    if (nextBtn) {
        nextBtn.addEventListener('click', function(e) {
            e.preventDefault();
            nextSlide();
            stopAutoPlay();
            startAutoPlay();
        });
    }
    
    // Dot navigation
    if (dots.length) {
        dots.forEach((dot, index) => {
            dot.addEventListener('click', function() {
                showSlide(index);
                stopAutoPlay();
                startAutoPlay();
            });
        });
    }
    
    // Pause on hover
    const slider = document.querySelector('.attorney-image-slider');
    if (slider) {
        slider.addEventListener('mouseenter', stopAutoPlay);
        slider.addEventListener('mouseleave', startAutoPlay);
    }
    
    // Start autoplay
    startAutoPlay();
});

// Counter Animation
function animateCounters() {
  const counters = document.querySelectorAll('.counter');
  const speed = 200;

  counters.forEach(counter => {
    const target = parseInt(counter.getAttribute('data-target'));
    let count = 0;
    
    const updateCount = () => {
      const increment = target / speed;
      if (count < target) {
        count += increment;
        counter.innerText = Math.ceil(count);
        setTimeout(updateCount, 20);
      } else {
        counter.innerText = target;
      }
    };
    
    updateCount();
  });
}

// Scroll Reveal
function revealOnScroll() {
  const reveals = document.querySelectorAll('.reveal');
  
  reveals.forEach(reveal => {
    const windowHeight = window.innerHeight;
    const revealTop = reveal.getBoundingClientRect().top;
    const revealPoint = 150;
    
    if (revealTop < windowHeight - revealPoint) {
      reveal.classList.add('active');
    }
  });
}

// Typewriter Effect
function typewriterEffect() {
  const textElement = document.querySelector('.typewriter-text');
  if (!textElement) return;
  
  const texts = ['excellence.', 'integrity.', 'justice.', 'results.'];
  let textIndex = 0;
  let charIndex = 0;
  let currentText = '';
  
  function type() {
    if (charIndex < texts[textIndex].length) {
      currentText += texts[textIndex].charAt(charIndex);
      textElement.textContent = currentText;
      charIndex++;
      setTimeout(type, 100);
    } else {
      setTimeout(erase, 2000);
    }
  }
  
  function erase() {
    if (charIndex > 0) {
      currentText = currentText.slice(0, -1);
      textElement.textContent = currentText;
      charIndex--;
      setTimeout(erase, 50);
    } else {
      textIndex = (textIndex + 1) % texts.length;
      setTimeout(type, 500);
    }
  }
  
  type();
}

// Initialize all animations
document.addEventListener('DOMContentLoaded', () => {
  // Set up scroll reveal
  window.addEventListener('scroll', revealOnScroll);
  revealOnScroll();
  
  // Start counter when stats come into view
  const statsSection = document.querySelector('.about-stats');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounters();
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });
  
  if (statsSection) observer.observe(statsSection);
  
  // Start typewriter effect
  typewriterEffect();
});