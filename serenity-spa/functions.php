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
        'footer'  => __( 'Menu stopki', 'serenity-spa' ),
    ) );

    add_theme_support( 'automatic-feed-links' );
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

/**
 * Auto-create required pages on theme activation
 */
function serenity_create_pages() {
    $pages = array(
        'kontakt' => array(
            'title'    => 'Kontakt',
            'template' => 'page-kontakt.php',
        ),
        'o-nas' => array(
            'title'    => 'O nas',
            'template' => 'page-o-nas.php',
        ),
        'uslugi' => array(
            'title'    => 'Zabiegi',
            'template' => 'page-uslugi.php',
        ),
        'polityka-prywatnosci' => array(
            'title'    => 'Polityka prywatności',
            'template' => 'page-polityka-prywatnosci.php',
        ),
        'podziekowanie' => array(
            'title'    => 'Dziękujemy',
            'template' => 'page-podziekowanie.php',
        ),
    );

    foreach ( $pages as $slug => $page_data ) {
        $existing = get_page_by_path( $slug );
        if ( ! $existing ) {
            $page_id = wp_insert_post( array(
                'post_title'   => $page_data['title'],
                'post_name'    => $slug,
                'post_status'  => 'publish',
                'post_type'    => 'page',
                'post_content' => '',
            ) );
            if ( $page_id && ! is_wp_error( $page_id ) ) {
                update_post_meta( $page_id, '_wp_page_template', $page_data['template'] );
            }
        }
    }

    // Set privacy policy page
    $privacy = get_page_by_path( 'polityka-prywatnosci' );
    if ( $privacy ) {
        update_option( 'wp_page_for_privacy_policy', $privacy->ID );
    }
}
add_action( 'after_switch_theme', 'serenity_create_pages' );

/**
 * Breadcrumb Schema JSON-LD
 */
function serenity_breadcrumb_schema() {
    if ( is_front_page() ) return;

    $items = array();
    $items[] = array(
        '@type'    => 'ListItem',
        'position' => 1,
        'name'     => 'Strona główna',
        'item'     => home_url( '/' ),
    );

    if ( is_page() ) {
        $items[] = array(
            '@type'    => 'ListItem',
            'position' => 2,
            'name'     => get_the_title(),
            'item'     => get_permalink(),
        );
    }

    if ( count( $items ) > 1 ) {
        echo '<script type="application/ld+json">' . wp_json_encode( array(
            '@context'        => 'https://schema.org',
            '@type'           => 'BreadcrumbList',
            'itemListElement' => $items,
        ), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . '</script>' . "\n";
    }
}
add_action( 'wp_head', 'serenity_breadcrumb_schema' );

/**
 * Custom body class for subpages
 */
function serenity_body_classes( $classes ) {
    if ( is_page_template( 'page-kontakt.php' ) ) {
        $classes[] = 'page-contact';
    }
    if ( is_404() ) {
        $classes[] = 'page-404';
    }
    if ( ! is_front_page() ) {
        $classes[] = 'is-subpage';
    }
    return $classes;
}
add_filter( 'body_class', 'serenity_body_classes' );
