<!DOCTYPE html>
<html lang="fr-CA">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo META_DESCRIPTION; ?>">
    <meta name="keywords" content="<?php echo META_KEYWORDS; ?>">
    <meta name="author" content="<?php echo BUSINESS_NAME; ?>">
    
    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="<?php echo SITE_NAME . ' - ' . SITE_TAGLINE; ?>">
    <meta property="og:description" content="<?php echo META_DESCRIPTION; ?>">
    <meta property="og:type" content="business.business">
    <meta property="og:url" content="<?php echo SITE_URL; ?>">
    <meta property="og:image" content="<?php echo SITE_URL; ?>/assets/images/og-image.jpg">
    
    <!-- Schema.org Markup -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "GroceryStore",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "image": "<?php echo SITE_URL; ?>/assets/images/logo.png",
        "description": "<?php echo META_DESCRIPTION; ?>",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "<?php echo BUSINESS_ADDRESS; ?>",
            "addressLocality": "<?php echo BUSINESS_CITY; ?>",
            "addressRegion": "<?php echo BUSINESS_PROVINCE; ?>",
            "postalCode": "<?php echo BUSINESS_POSTAL; ?>",
            "addressCountry": "CA"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": <?php echo BUSINESS_LAT; ?>,
            "longitude": <?php echo BUSINESS_LNG; ?>
        },
        "telephone": "<?php echo BUSINESS_PHONE; ?>",
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
    
    <title><?php echo SITE_NAME . ' - ' . SITE_TAGLINE; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="assets/images/favicon.png">
    
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css?v=7.3">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Pacifico&display=swap" rel="stylesheet">

    <?php if (!empty(GA_MEASUREMENT_ID)): ?>
    <!-- Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo GA_MEASUREMENT_ID; ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', '<?php echo GA_MEASUREMENT_ID; ?>');
    </script>
    <?php endif; ?>
</head>
<body>
    <header class="site-header">
        <!-- Bannière en première position -->
        <div class="top-banner-section">
            <div class="container">
                <div class="header-banner-wrapper">
                    <div class="header-banner">
                        <img src="assets/images/banner.png" alt="<?php echo SITE_NAME; ?>" class="banner-image">
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
                        <a href="tel:<?php echo str_replace(['(', ')', ' ', '-'], '', BUSINESS_PHONE); ?>" class="phone-link">
                            <svg class="phone-icon" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                            </svg>
                            <span><?php echo BUSINESS_PHONE; ?></span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
