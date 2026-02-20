<?php
/**
 * Fonctions du thème Bealys
 */

// Informations du commerce
define('BEALYS_NAME',     'Marché Bealys');
define('BEALYS_TAGLINE',  'Épicerie africaine, caribéenne et latino');
define('BEALYS_ADDRESS',  '197B, boulevard du Séminaire Nord');
define('BEALYS_CITY',     'Saint-Jean-sur-Richelieu');
define('BEALYS_PROVINCE', 'QC');
define('BEALYS_POSTAL',   'J3B 5L1');
define('BEALYS_PHONE',    '(450) 272-7780');
define('BEALYS_EMAIL',    'info@bealys.ca');
define('BEALYS_LAT',      '45.3168');
define('BEALYS_LNG',      '-73.2650');

// Heures d'ouverture
define('BEALYS_HOURS_WEEKDAY', 'Lundi au samedi : 10h - 20h');
define('BEALYS_HOURS_SUNDAY',  'Dimanche : 11h - 17h');

// Réseaux sociaux
define('BEALYS_FACEBOOK', 'https://www.facebook.com/people/March%C3%A9-Bealys/61580487257235/');
define('BEALYS_TIKTOK',   'https://www.tiktok.com/@march.bealys');

// SEO
define('BEALYS_META_DESC', 'Marché Bealys - Votre épicerie africaine, caribéenne et latino à Saint-Jean-sur-Richelieu. Produits frais, service traiteur, transfert d\'argent Ria. Petits prix, grand accueil !');
define('BEALYS_META_KW',   'épicerie africaine, produits caribéens, produits latinos, marché africain, épicerie latino, Saint-Jean-sur-Richelieu, produits exotiques, service traiteur africain, transfert argent Ria');

// Google Analytics
define('BEALYS_GA_ID', 'G-F79X7B823T');

/**
 * Configuration du thème
 */
function bealys_setup() {
    load_theme_textdomain('bealys', get_template_directory() . '/languages');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'comment-form', 'gallery', 'caption']);
}
add_action('after_setup_theme', 'bealys_setup');

/**
 * Enqueue des styles et scripts
 */
function bealys_enqueue_assets() {
    $uri = get_template_directory_uri();
    $ver = '1.0.0';

    // Google Fonts
    wp_enqueue_style(
        'bealys-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Pacifico&display=swap',
        [],
        null
    );

    // Feuille de style principale
    wp_enqueue_style('bealys-main', $uri . '/assets/css/style.css', ['bealys-fonts'], $ver);

    // Script principal
    wp_enqueue_script('bealys-script', $uri . '/assets/js/script.js', [], $ver, true);
}
add_action('wp_enqueue_scripts', 'bealys_enqueue_assets');
