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
            <a href="<?php echo ( function_exists('wc_get_page_id') ? get_permalink( wc_get_page_id('shop') ) : home_url('/shop/') ); ?>" class="btn-primary">Our Products</a>
        </div>
    </section>

    <!-- 2. QUICK ACCESS BADGES -->
    <section id="quick-access" class="quick-access-section">
        <div class="container">
            <h2 class="section-title">Quick Access</h2>
            <div class="quick-access-grid">
                <a href="https://skavtech.co.ke/product-category/cameras/" class="qa-item">
                    <div class="qa-badge badge-gold" aria-hidden="true">
                        <i class="fa-solid fa-camera" aria-hidden="true"></i>
                    </div>
                    <div class="qa-label">Cameras</div>
                </a>

                <a href="https://skavtech.co.ke/product-category/laptops-computers/desktops/" class="qa-item">
                    <div class="qa-badge badge-blue" aria-hidden="true">
                        <i class="fa-solid fa-desktop" aria-hidden="true"></i>
                    </div>
                    <div class="qa-label">Desktops</div>
                </a>

                <a href="https://skavtech.co.ke/product-category/accessories-peripherals/" class="qa-item">
                    <div class="qa-badge badge-gold" aria-hidden="true">
                        <i class="fa-solid fa-ear-listen" aria-hidden="true"></i>
                    </div>
                    <div class="qa-label">Accessories</div>
                </a>

                <a href="https://skavtech.co.ke/product-category/phones-tablets/phones/" class="qa-item">
                    <div class="qa-badge badge-blue" aria-hidden="true">
                        <i class="fa-solid fa-mobile" aria-hidden="true"></i>
                    </div>
                    <div class="qa-label">Phones</div>
                </a>

                <a href="https://skavtech.co.ke/product-category/printers-accessories/ink-tank-printers/" class="qa-item">
                    <div class="qa-badge badge-blue" aria-hidden="true">
                        <i class="fa-solid fa-print" aria-hidden="true"></i>
                    </div>
                    <div class="qa-label">Printers</div>
                </a>

                <a href="https://skavtech.co.ke/product-category/laptops-computers/laptops/" class="qa-item">
                    <div class="qa-badge badge-gold" aria-hidden="true">
                        <i class="fa-solid fa-laptop" aria-hidden="true"></i>
                    </div>
                    <div class="qa-label">Laptops</div>
                </a>

                <a href="#" class="qa-item" onclick="event.preventDefault();" aria-disabled="true">
                    <div class="qa-badge badge-blue" aria-hidden="true">
                        <i class="fa-solid fa-code" aria-hidden="true"></i>
                    </div>
                    <div class="qa-label">Software</div>
                </a>

                <a href="https://skavtech.co.ke/product-category/networking-servers/servers-storage/" class="qa-item">
                    <div class="qa-badge badge-gold" aria-hidden="true">
                        <i class="fa-solid fa-server" aria-hidden="true"></i>
                    </div>
                    <div class="qa-label">Servers</div>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. CLIENT LIST SECTION -->
    <section class="clients-section">
        <div class="clients-background" style="background-image: url('<?php echo $theme_path; ?>/images/SKAVTECH-SOLUTIONS.png');"></div>
        <div class="container clients-content">
            <h2 class="section-title">Our Valued Clients</h2>
            <ul class="client-list">
                <li class="client-item solid-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                    <span>Non-Governmental Organizations</span>
                </li>
                <li class="client-item outlined-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-regular fa-circle-check"></i></span>
                    <span>Universities</span>
                </li>
                <li class="client-item solid-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                    <span>Small & Medium-sized Businesses</span>
                </li>
                <li class="client-item outlined-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-regular fa-circle-check"></i></span>
                    <span>Schools</span>
                </li>
                <li class="client-item solid-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                    <span>Agricultural Institutions</span>
                </li>
                <li class="client-item outlined-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-regular fa-circle-check"></i></span>
                    <span>Research Institutions</span>
                </li>
                <li class="client-item solid-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                    <span>Public Institutions</span>
                </li>
                <li class="client-item outlined-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-regular fa-circle-check"></i></span>
                    <span>Professional Firms</span>
                </li>
                <li class="client-item solid-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                    <span>Financial Institutions (e.g. banks)</span>
                </li>
                <li class="client-item outlined-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-regular fa-circle-check"></i></span>
                    <span>Saccos</span>
                </li>
                <li class="client-item solid-check">
                    <span class="client-icon" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
                    <span>Manufacturing Companies</span>
                </li>
            </ul>
        </div>
    </section>

    <!-- 4. CERTIFICATES CAROUSEL -->
    <section class="certificates-section" style="background-image: url('<?php echo $theme_path; ?>/images/3439372_61769-scaled.jpg');">
        <div class="container">
            <h2 class="section-title">Authorized Partnerships & Certifications</h2>
            <div class="cert-carousel" aria-label="Authorized partnership and certification cards">
                <div class="cert-card" tabindex="0">
                    <img src="<?php echo $theme_path; ?>/images/Skavtech-Kaspersky-Certification.png" alt="Kaspersky United Partner Program certification" class="cert-img">
                </div>
                <div class="cert-card" tabindex="0">
                    <img src="<?php echo $theme_path; ?>/images/Lenovo-Authorized-Intelligent-Devices-Partner.png" alt="Lenovo 360 Authorized Intelligent Devices Partner certificate" class="cert-img">
                </div>
                <div class="cert-card" tabindex="0">
                    <img src="<?php echo $theme_path; ?>/images/HP-Business-Partner-Certificate-of-Partnership-skavtech-solutions-ltd-1-Copy_page-0001-scaled.jpg" alt="HP Business Partner 2024 certificate" class="cert-img">
                </div>
                <div class="cert-card" tabindex="0">
                    <img src="<?php echo $theme_path; ?>/images/HP-Certificate-of-Partnership.png" alt="HP Certificate of Partnership 2023" class="cert-img">
                </div>
                <div class="cert-card" tabindex="0">
                    <img src="<?php echo $theme_path; ?>/images/DELL-Authorized-Tier-Partner.png" alt="Dell Technologies Authorized Tier Partner 2023 certification" class="cert-img">
                </div>
            </div>
        </div>
    </section>

    <script>
    (function(){
        document.addEventListener('DOMContentLoaded', function(){
            var hc = document.querySelector('.hero-content');
            if(hc){
                setTimeout(function(){ hc.classList.add('animate'); }, 50);
            }

            var carousel = document.querySelector('.cert-carousel');
            if (!carousel) {
                return;
            }
            var cards = Array.prototype.slice.call(carousel.querySelectorAll('.cert-card'));

            function clearCardState() {
                cards.forEach(function(card){
                    card.classList.remove('focused', 'adjacent-left', 'adjacent-right');
                });
            }

            function setFocusedCard(card) {
                if (!card) {
                    clearCardState();
                    return;
                }
                clearCardState();
                card.classList.add('focused');
                var index = cards.indexOf(card);
                if (index > 0) {
                    cards[index - 1].classList.add('adjacent-left');
                }
                if (index < cards.length - 1) {
                    cards[index + 1].classList.add('adjacent-right');
                }
            }

            cards.forEach(function(card){
                card.addEventListener('mouseenter', function(){ setFocusedCard(card); });
                card.addEventListener('mouseleave', function(){ clearCardState(); });
                card.addEventListener('focus', function(){ setFocusedCard(card); });
                card.addEventListener('blur', function(){ clearCardState(); });
            });

            function updateCenteredCard() {
                var carouselRect = carousel.getBoundingClientRect();
                var centerX = carouselRect.left + carouselRect.width / 2;
                var closest = null;
                var closestDistance = Infinity;
                cards.forEach(function(card){
                    var rect = card.getBoundingClientRect();
                    var cardCenter = rect.left + rect.width / 2;
                    var distance = Math.abs(cardCenter - centerX);
                    if (distance < closestDistance) {
                        closestDistance = distance;
                        closest = card;
                    }
                });
                setFocusedCard(closest);
            }

            carousel.addEventListener('scroll', function(){
                window.requestAnimationFrame(updateCenteredCard);
            });
            updateCenteredCard();
        });
    })();
    </script>

</main>

<?php get_footer(); ?>