<?php
/**
 * Template Name: Custom Skavtech Homepage
 */
get_header(); 
// This gets the path to your active theme folder where we will eventually put these files
$theme_path = get_stylesheet_directory_uri(); 
?>

<main id="primary" class="site-main">

    <!-- 1. HERO SECTION -->
    <section class="hero-section" style="background-image: url('<?php echo $theme_path; ?>/images/skavtech.png');">
        <div class="hero-overlay"></div>
        <div class="hero-content slide-in-left">
            <h1>SKAVTECH SOLUTIONS: LEADERS IN IT SOLUTIONS FOR YOUR BUSINESS</h1>
            <p>Providing the latest and most reliable hardware solutions to businesses of all sizes.</p>
            <a href="#quick-access" class="btn-primary">Our Products</a>
        </div>
    </section>

    <!-- 2. QUICK ACCESS BUTTONS -->
    <section id="quick-access" class="quick-access-section">
        <div class="container">
            <h2 class="section-title">Quick Access</h2>
            <div class="quick-access-grid">
                <a href="https://skavtech.co.ke/product-category/cameras/" class="qa-btn">Cameras</a>
                <a href="https://skavtech.co.ke/product-category/laptops-computers/desktops/" class="qa-btn">Desktops</a>
                <a href="https://skavtech.co.ke/product-category/accessories-peripherals/" class="qa-btn">Accessories</a>
                <a href="https://skavtech.co.ke/product-category/phones-tablets/phones/" class="qa-btn">Phones</a>
                <a href="https://skavtech.co.ke/product-category/printers-accessories/ink-tank-printers/" class="qa-btn">Printers</a>
                <a href="https://skavtech.co.ke/product-category/laptops-computers/laptops/" class="qa-btn">Laptops</a>
                <a href="https://skavtech.co.ke/product-category/networking-servers/servers-storage/" class="qa-btn">Servers</a>
                <a href="#" class="qa-btn">Software</a>
            </div>
        </div>
    </section>

    <!-- 3. CLIENT LIST SECTION -->
    <section class="clients-section">
        <div class="clients-background" style="background-image: url('<?php echo $theme_path; ?>/images/SKAVTECH-SOLUTIONS.png');"></div>
        <div class="container clients-content">
            <h2 class="section-title">Our Valued Clients</h2>
            <ul class="client-list">
                <li>Non-Governmental Organizations</li>
                <li>Universities</li>
                <li>Small & Medium-sized Businesses</li>
                <li>Schools</li>
                <li>Agricultural Institutions</li>
                <li>Research Institutions</li>
                <li>Public Institutions</li>
                <li>Professional Firms</li>
                <li>Financial Institutions eg. banks</li>
                <li>Saccos</li>
                <li>Manufacturing Companies</li>
            </ul>
        </div>
    </section>

    <!-- 4. CERTIFICATES CAROUSEL -->
    <section class="certificates-section" style="background-image: url('<?php echo $theme_path; ?>/images/3439372_61769-scaled.jpg');">
        <div class="container">
            <h2 class="section-title">Authorized Partnerships & Certifications</h2>
            <div class="cert-carousel">
                <img src="<?php echo $theme_path; ?>/images/DELL-Authorized-Tier-Partner.png" alt="Dell 2023" class="cert-img">
                <img src="<?php echo $theme_path; ?>/images/HP-Business-Partner-Certificate-of-Partnership-skavtech-solutions-ltd-1-Copy_page-0001-scaled.jpg" alt="HP 2024" class="cert-img">
                <img src="<?php echo $theme_path; ?>/images/HP-Certificate-of-Partnership.png" alt="HP 2023" class="cert-img">
                <img src="<?php echo $theme_path; ?>/images/Lenovo-Authorized-Intelligent-Devices-Partner.png" alt="Lenovo 2023" class="cert-img">
                <img src="<?php echo $theme_path; ?>/images/Skavtech-Kaspersky-Certification.png" alt="Kaspersky Sky" class="cert-img">
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>