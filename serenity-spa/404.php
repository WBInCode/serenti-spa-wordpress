<?php
/**
 * 404 Template — Design DNA: Ethereal Gradient + Gradient Morph 404
 *
 * Animated gradient mesh bg + floating "404" with blur + glassmorphic search card
 */

get_header();
?>

<section class="wow-404" role="main">
  <!-- Animated gradient blobs -->
  <div class="wow-404__blob wow-404__blob--1" aria-hidden="true"></div>
  <div class="wow-404__blob wow-404__blob--2" aria-hidden="true"></div>
  <div class="wow-404__blob wow-404__blob--3" aria-hidden="true"></div>

  <div class="wow-404__content">
    <!-- Oversized 404 as visual element -->
    <div class="wow-404__number" aria-hidden="true">
      <span class="wow-404__digit wow-404__digit--outline">4</span>
      <span class="wow-404__digit wow-404__digit--filled">0</span>
      <span class="wow-404__digit wow-404__digit--outline">4</span>
    </div>

    <!-- Glassmorphic card -->
    <div class="wow-404__card">
      <h1 class="t-display t-display--lg wow-404__title">
        Ups, ta strona <em class="t-thin">nie istnieje</em>
      </h1>
      <p class="t-body t-body--lg wow-404__subtitle">
        Wygląda na to, że link się zmienił lub strona została usunięta. Nic się nie stało — pomożemy Ci wrócić na właściwą ścieżkę.
      </p>

      <div class="wow-404__search">
        <?php get_search_form(); ?>
      </div>

      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary wow-404__home-btn">
        Wróć na stronę główną <span class="btn__arrow">→</span>
      </a>

      <nav class="wow-404__popular" aria-label="<?php esc_attr_e( 'Popularne strony', 'serenity-spa' ); ?>">
        <p class="wow-404__popular-title">Może szukasz:</p>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a></li>
          <li><a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>">Nasze zabiegi</a></li>
          <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontakt</a></li>
          <li><a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>">O Serenity Spa</a></li>
        </ul>
      </nav>
    </div>
  </div>
</section>

<?php get_footer(); ?>
