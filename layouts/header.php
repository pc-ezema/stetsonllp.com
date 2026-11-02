<?php
// layouts/header.php
require_once dirname(__DIR__) . '/config.php';
// Auto-detect which page is being viewed
$current_page = basename($_SERVER['PHP_SELF']);

// Set SEO variables based on current page
switch($current_page) {
    case 'index':
        $page_title = "Stetson LLP | Strategic Legal Excellence - Entertainment & Commercial Law Firm";
        $page_description = "Stetson LLP provides world-class legal expertise in entertainment law, corporate disputes, real estate, regulatory compliance, and business management. Trusted by leading artists and businesses across Africa.";
        $page_keywords = "entertainment law firm, commercial litigation lawyers, real estate attorneys, regulatory compliance, business management legal services, Nigerian law firm";
        $page_canonical = BASE_URL . "/";
        break;
        
    case 'jane-okoye':
        $page_title = "Jane Ezeanaka-Okoye | Entertainment Lawyer & Partner | Stetson LLP";
        $page_description = "Jane Ezeanaka-Okoye is an Entertainment Lawyer specializing in music law, intellectual property, artist agreements, and brand partnerships. Helping African talent build sustainable global careers.";
        $page_keywords = "entertainment lawyer, music law attorney, intellectual property lawyer, artist contracts, brand partnerships";
        $page_canonical = BASE_URL . "/jane-okoye";
        break;
        
    case 'obinna-ubani':
        $page_title = "Obinna Ubani | Entertainment Lawyer & Music Rights Expert | Stetson LLP";
        $page_description = "Obinna Ubani is an entertainment lawyer and music executive specializing in music rights management, publishing administration, catalog acquisition, and high-value entertainment transactions across Africa.";
        $page_keywords = "entertainment lawyer, music rights management, publishing administration, catalog acquisition, royalty collection";
        $page_canonical = BASE_URL . "/obinna-ubani";
        break;
        
    case 'praise-anyaoha':
        $page_title = "Praise Anyaoha | Entertainment Lawyer & Partner | Music Industry Expert | Stetson LLP";
        $page_description = "Praise Anyaoha is a Partner at Stetson LLP and leading entertainment lawyer specializing in music law, intellectual property, contract negotiation, and dispute resolution.";
        $page_keywords = "entertainment lawyer, music law attorney, intellectual property lawyer, contract negotiation, entertainment dispute resolution";
        $page_canonical = BASE_URL . "/praise-anyaoha";
        break;
        
    case 'uzodimma-danny-dubem':
        $page_title = "Uzodimma Danny Dubem | Commercial Litigation & Real Estate Attorney | Stetson LLP";
        $page_description = "Uzodimma Danny Dubem is a Commercial Litigation and Real Estate Attorney specializing in corporate disputes, property law, regulatory compliance, and entertainment business advisory.";
        $page_keywords = "commercial litigation lawyer, real estate attorney, corporate compliance expert, property law specialist, dispute resolution";
        $page_canonical = BASE_URL . "/uzodimma-danny-dubem";
        break;
    
    case 'publications':
        $page_title = "Publications | Stetson LLP - Legal Insights & Industry Updates";
        $page_description = "Explore Stetson LLP's publications, including legal insights, industry updates, and thought leadership articles on entertainment law, business disputes, real estate, and regulatory compliance.";
        $page_keywords = "legal publications, entertainment law articles, business dispute insights, real estate law updates, regulatory compliance news";
        $page_canonical = BASE_URL . "/publications";
        break;
        
    default:
        $page_title = "Stetson LLP | Strategic Legal Excellence";
        $page_description = "Stetson LLP provides world-class legal expertise in entertainment, business, dispute resolution, real estate, and regulatory compliance.";
        $page_keywords = "entertainment law, business law, dispute resolution, real estate law, regulatory compliance";
        $page_canonical = BASE_URL . "/" . $current_page;
}

// Set default values
$page_image = $page_image ?? BASE_URL . "/assets/images/stetson-og-image.jpg";
$page_author = "Stetson LLP";
$page_robots = "index, follow";
$page_url = BASE_URL . "/" . $current_page;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    
    <!-- Primary SEO Meta Tags -->
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="<?php echo $page_keywords; ?>">
    <meta name="author" content="<?php echo $page_author; ?>">
    <meta name="robots" content="<?php echo $page_robots; ?>">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="<?php echo $page_canonical; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $page_url; ?>">
    <meta property="og:title" content="<?php echo $page_title; ?>">
    <meta property="og:description" content="<?php echo $page_description; ?>">
    <meta property="og:image" content="<?php echo $page_image; ?>">
    <meta property="og:site_name" content="Stetson LLP">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo $page_url; ?>">
    <meta name="twitter:title" content="<?php echo $page_title; ?>">
    <meta name="twitter:description" content="<?php echo $page_description; ?>">
    <meta name="twitter:image" content="<?php echo $page_image; ?>">

    <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/main.css">
    <!-- Swiper CSS for carousel functionality -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="icon" sizes="192x192" href="<?php echo BASE_URL; ?>/assets/images/stetson-icon.png" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo BASE_URL; ?>/assets/images/stetson-icon.png" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>/assets/images/stetson-icon.png" type="image/x-icon" />
</head>

<body>

    <!-- ==================== HEADER ==================== -->
    <header class="site-header">
        <div class="header-container">
            <!-- Logo -->
            <div class="logo">
                <a href="index" class="logo-link">
                    <img src="<?php echo BASE_URL; ?>/assets/images/stetson-logo.png" alt="Stetson LLP" width="164" height="43">
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="main-navigation">
                <ul class="nav-menu">
                    <li><a href="index" class="active">Home</a></li>
                    <li><a href="index#aboutUs">About Us</a></li>
                    <li><a href="index#attorneys">Attorneys</a></li>
                    <li class="dropdown">
                        <a href="index#practiceAreas">Practice Areas <span class="dropdown-arrow">▼</span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Entertainment Law</a></li>
                            <li><a href="#">Corporate and Commercial Disputes</a></li>
                            <li><a href="#">Real Estate & Property Law</a></li>
                            <li><a href="#">Regulatory Compliance</a></li>
                            <li><a href="#">Business Management</a></li>
                        </ul>
                    </li>
                    <li><a href="index#testimonials">Testimonials</a></li>
                    <li><a href="publications">Publications</a></li>
                </ul>
            </nav>

            <!-- Header Tools (Contact & Search) -->
            <div class="header-tools">
                <a href="index#attorneys" class="btn btn-primary">Contact Us</a>
                <button class="search-toggle" aria-label="Search">
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.71795 2.03846C4.75283 2.03846 1.53846 5.25283 1.53846 9.21795C1.53846 13.1831 4.75283 16.3974 8.71795 16.3974C12.6831 16.3974 15.8974 13.1831 15.8974 9.21795C15.8974 5.25283 12.6831 2.03846 8.71795 2.03846ZM0 9.21795C0 4.40316 3.90316 0.5 8.71795 0.5C13.5327 0.5 17.4359 4.40316 17.4359 9.21795C17.4359 14.0327 13.5327 17.9359 8.71795 17.9359C3.90316 17.9359 0 14.0327 0 9.21795Z" fill="currentColor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M13.815 14.315C14.1155 14.0146 14.6025 14.0146 14.9029 14.315L19.7747 19.1868C20.0751 19.4872 20.0751 19.9743 19.7747 20.2747C19.4743 20.5751 18.9872 20.5751 18.6868 20.2747L13.815 15.4029C13.5146 15.1025 13.5146 14.6155 13.815 14.315Z" fill="currentColor" />
                    </svg>
                </button>
                <!-- Mobile menu toggle (visible on mobile) -->
                <button class="mobile-menu-toggle" aria-label="Menu">
                    <svg width="20" height="14" viewBox="0 0 20 14">
                        <path d="M0 1.28572C0 0.812334 0.38376 0.428574 0.857143 0.428574H19.1429C19.6162 0.428574 20 0.812334 20 1.28572C20 1.7591 19.6162 2.14286 19.1429 2.14286H0.857143C0.38376 2.14286 0 1.7591 0 1.28572ZM0 7C0 6.52663 0.38376 6.14286 0.857143 6.14286H19.1429C19.6162 6.14286 20 6.52663 20 7C20 7.47337 19.6162 7.85715 19.1429 7.85715H0.857143C0.38376 7.85715 0 7.47337 0 7ZM0 12.7143C0 12.2409 0.38376 11.8571 0.857143 11.8571H19.1429C19.6162 11.8571 20 12.2409 20 12.7143C20 13.1877 19.6162 13.5714 19.1429 13.5714H0.857143C0.38376 13.5714 0 13.1877 0 12.7143Z" fill="currentColor" />
                    </svg>
                </button>
            </div>
        </div>
    </header>