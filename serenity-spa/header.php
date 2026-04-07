<!DOCTYPE html>
<html <?php language_attributes(); ?> class="wow-grain">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body <?php body_class( is_front_page() ? 'wow-color-shift' : '' ); ?>>
<?php wp_body_open(); ?>

<!-- Scroll Progress Bar -->
<div class="wow-progress-bar" aria-hidden="true"></div>

<!-- Preloader -->
<div class="wow-loader" aria-hidden="true">
  <div class="wow-loader__text"><?php bloginfo( 'name' ); ?></div>
</div>

<!-- Skip to content -->
<a href="#main" class="sr-only" style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;overflow:hidden;"><?php esc_html_e( 'Przejdź do treści', 'serenity-spa' ); ?></a>

<!-- ============================================
     NAVIGATION
     ============================================ -->
<nav class="nav" id="nav">
  <div class="nav__inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav__logo">
      <?php
      if ( has_custom_logo() ) {
          the_custom_logo();
      } else {
          bloginfo( 'name' );
      }
      ?>
    </a>
    <?php
    if ( has_nav_menu( 'primary' ) ) {
        wp_nav_menu( array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'nav__links',
            'menu_id'        => 'navLinks',
            'depth'          => 1,
        ) );
    } else {
    ?>
    <ul class="nav__links" id="navLinks">
      <?php if ( is_front_page() ) : ?>
        <li><a href="#philosophy">Filozofia</a></li>
        <li><a href="#services">Zabiegi</a></li>
        <li><a href="#process">Jak działamy</a></li>
        <li><a href="#gallery">Galeria</a></li>
        <li><a href="#about">O nas</a></li>
      <?php else : ?>
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a></li>
        <li><a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>">Zabiegi</a></li>
        <li><a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>">O nas</a></li>
        <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontakt</a></li>
      <?php endif; ?>
    </ul>
    <?php } ?>
    <a href="#book" class="nav__cta">Umów wizytę</a>
    <button class="nav__hamburger" id="hamburger" aria-label="Menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</nav>

<main id="main">
