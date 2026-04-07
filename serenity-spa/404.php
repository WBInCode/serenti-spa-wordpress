<?php
/**
 * 404 Template — Design DNA: Ethereal Gradient + Gradient Morph
 *
 * Oversized typography as visual, parallax blobs, glassmorphic search,
 * floating decorative text, stagger load reveal
 */

get_header();
?>

<section class="p404" role="main">
  <!-- Depth layer 1: Animated gradient blobs -->
  <div class="p404__blob p404__blob--1" aria-hidden="true"></div>
  <div class="p404__blob p404__blob--2" aria-hidden="true"></div>
  <div class="p404__blob p404__blob--3" aria-hidden="true"></div>

  <!-- Depth layer 2: Oversized decorative "lost" text  -->
  <div class="p404__deco" aria-hidden="true">zagubiona</div>

  <!-- Depth layer 3: Content -->
  <div class="p404__content">

    <!-- Oversized 404 as VISUAL element — outlined + filled mix -->
    <div class="p404__visual" aria-hidden="true">
      <span class="p404__char p404__char--outline" style="--i:0">4</span>
      <span class="p404__char p404__char--gold" style="--i:1">0</span>
      <span class="p404__char p404__char--outline" style="--i:2">4</span>
    </div>

    <!-- Glassmorphic card — offset from center for broken grid -->
    <div class="p404__card">
      <div class="p404__card-inner">
        <p class="t-tag" style="margin-bottom: 16px;">Strona nie znaleziona</p>
        <h1 class="t-display t-display--lg p404__title">
          Wygląda na to, że <em class="t-thin">zabłądziłeś</em>
        </h1>
        <p class="t-body t-body--lg">
          Nic się nie stało — pozwól, że pomożemy Ci wrócić do strefy komfortu.
        </p>

        <div class="p404__search">
          <?php get_search_form(); ?>
        </div>

        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">
          Wróć do Serenity <span class="btn__arrow">→</span>
        </a>
      </div>

      <nav class="p404__links" aria-label="<?php esc_attr_e( 'Popularne strony', 'serenity-spa' ); ?>">
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a></li>
          <li><a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>">Nasze zabiegi</a></li>
          <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontakt</a></li>
          <li><a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>">O Serenity</a></li>
        </ul>
      </nav>
    </div>
  </div>

  <!-- Floating accent image — depth layer -->
  <div class="p404__float" aria-hidden="true">
    <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=280&h=380&fit=crop&q=80"
         alt="" width="280" height="380" loading="eager">
  </div>

  <!-- Vertical label -->
  <div class="p404__vlabel t-vertical" aria-hidden="true">Strona · 404 · Nie znaleziono</div>
</section>

<?php get_footer(); ?>
