<?php
/**
 * Serenity Spa — functions.php
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

define( 'SERENITY_VERSION', '1.0.0' );

/**
 * Theme setup
 */
function serenity_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary' => __( 'Menu główne', 'serenity-spa' ),
    ) );
}
add_action( 'after_setup_theme', 'serenity_setup' );

/**
 * Enqueue styles & scripts
 */
function serenity_enqueue_assets() {
    // Google Fonts
    wp_enqueue_style(
        'serenity-google-fonts',
        'https://fonts.googleapis.com/css2?family=Instrument+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Instrument+Serif:ital@0;1&display=swap',
        array(),
        null
    );

    // Theme stylesheet
    wp_enqueue_style(
        'serenity-style',
        get_stylesheet_uri(),
        array( 'serenity-google-fonts' ),
        SERENITY_VERSION
    );

    // Theme JavaScript
    wp_enqueue_script(
        'serenity-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        SERENITY_VERSION,
        true
    );
}
add_action( 'wp_enqueue_scripts', 'serenity_enqueue_assets' );

/**
 * Add preconnect for Google Fonts
 */
function serenity_resource_hints( $urls, $relation_type ) {
    if ( 'preconnect' === $relation_type ) {
        $urls[] = array(
            'href' => 'https://fonts.googleapis.com',
        );
        $urls[] = array(
            'href'        => 'https://fonts.gstatic.com',
            'crossorigin' => 'anonymous',
        );
    }
    return $urls;
}
add_filter( 'wp_resource_hints', 'serenity_resource_hints', 10, 2 );

/**
 * Add Schema.org JSON-LD to head
 */
function serenity_schema_jsonld() {
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "HealthAndBeautyBusiness",
        "name": "Serenity Spa",
        "description": "Luksusowe rytuały relaksu, masaże i zabiegi SPA",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "ul. Spokojna 12",
            "addressLocality": "Warszawa",
            "postalCode": "00-001"
        },
        "telephone": "+48 123 456 789",
        "openingHours": "Mo-Su 09:00-21:00",
        "priceRange": "$$"
    }
    </script>
    <?php
}
add_action( 'wp_head', 'serenity_schema_jsonld' );
