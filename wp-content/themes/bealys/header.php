<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo esc_attr(BEALYS_META_DESC); ?>">
    <meta name="keywords" content="<?php echo esc_attr(BEALYS_META_KW); ?>">
    <meta name="author" content="<?php echo esc_attr(BEALYS_NAME); ?>">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo esc_attr(BEALYS_NAME . ' - ' . BEALYS_TAGLINE); ?>">
    <meta property="og:description" content="<?php echo esc_attr(BEALYS_META_DESC); ?>">
    <meta property="og:type" content="business.business">
    <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri() . '/assets/images/og-image.jpg'); ?>">

    <!-- Schema.org Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "GroceryStore",
        "name": "<?php echo esc_js(BEALYS_NAME); ?>",
        "image": "<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo.png'); ?>",
        "description": "<?php echo esc_js(BEALYS_META_DESC); ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo esc_js(BEALYS_ADDRESS); ?>",
            "addressLocality": "<?php echo esc_js(BEALYS_CITY); ?>",
            "addressRegion": "<?php echo esc_js(BEALYS_PROVINCE); ?>",
            "postalCode": "<?php echo esc_js(BEALYS_POSTAL); ?>",
            "addressCountry": "CA"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": <?php echo BEALYS_LAT; ?>,
            "longitude": <?php echo BEALYS_LNG; ?>
        },
        "telephone": "<?php echo esc_js(BEALYS_PHONE); ?>",
        "openingHoursSpecification": [
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "opens": "10:00",
                "closes": "20:00"
            },
            {
                "@type": "OpeningHoursSpecification",
                "dayOfWeek": "Sunday",
                "opens": "11:00",
                "closes": "17:00"
            }
        ]
    }
    </script>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_template_directory_uri() . '/assets/images/favicon.png'); ?>">

    <?php if (BEALYS_GA_ID): ?>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo esc_attr(BEALYS_GA_ID); ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo esc_js(BEALYS_GA_ID); ?>');
    </script>
    <?php endif; ?>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <header class="site-header">
        <!-- Bannière en première position -->
        <div class="top-banner-section">
            <div class="container">
                <div class="header-banner-wrapper">
                    <div class="header-banner">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/banner.png'); ?>" alt="<?php echo esc_attr(BEALYS_NAME); ?>" class="banner-image">
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu de navigation -->
        <nav class="navbar">
            <div class="container">
                <button class="nav-toggle" aria-label="Toggle navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                <div class="nav-wrapper">
                    <ul class="nav-menu">
                        <li><a href="#accueil" class="nav-link">Accueil</a></li>
                        <li><a href="#produits" class="nav-link">Produits</a></li>
                        <li><a href="#services" class="nav-link">Services</a></li>
                        <li><a href="#a-propos" class="nav-link">À propos</a></li>
                        <li><a href="#contact" class="nav-link">Contact</a></li>
                    </ul>

                    <div class="nav-phone">
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', BEALYS_PHONE)); ?>" class="phone-link">
                            <svg class="phone-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <span><?php echo esc_html(BEALYS_PHONE); ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
