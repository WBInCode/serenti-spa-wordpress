<?php
/**
 * Search Results Template
 *
 * Design DNA consistency with inner-hero + results grid
 */

get_header();
?>

<!-- Inner Page Hero -->
<section class="inner-hero inner-hero--compact">
  <div class="inner-hero__mesh" aria-hidden="true"></div>
  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a>
      <span class="breadcrumbs__sep">·</span>
      <span aria-current="page">Wyniki wyszukiwania</span>
    </nav>
    <h1 class="t-display t-display--xl inner-hero__title">
      Wyniki dla: <em class="t-thin"><?php echo esc_html( get_search_query() ); ?></em>
    </h1>
    <p class="t-body t-body--lg inner-hero__subtitle">
      <?php
      $result_count = $wp_query->found_posts;
      if ( $result_count > 0 ) {
          printf(
              esc_html( _n( 'Znaleziono %d wynik', 'Znaleziono %d wyników', $result_count, 'serenity-spa' ) ),
              intval( $result_count )
          );
      } else {
          esc_html_e( 'Nie znaleziono żadnych wyników', 'serenity-spa' );
      }
      ?>
    </p>
  </div>
</section>

<!-- Search Results -->
<section class="search-results">
  <div class="container">

    <?php if ( have_posts() ) : ?>
      <div class="search-results__grid">
        <?php while ( have_posts() ) : the_post(); ?>
          <article class="search-result-card wow-blur-reveal">
            <?php if ( has_post_thumbnail() ) : ?>
              <div class="search-result-card__image">
                <?php the_post_thumbnail( 'medium_large' ); ?>
              </div>
            <?php endif; ?>
            <div class="search-result-card__body">
              <span class="search-result-card__type"><?php echo esc_html( get_post_type_object( get_post_type() )->labels->singular_name ); ?></span>
              <h2 class="search-result-card__title">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="search-result-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 25 ) ); ?></p>
              <a href="<?php the_permalink(); ?>" class="search-result-card__link">
                Czytaj więcej <span>→</span>
              </a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <div class="search-pagination">
        <?php
        the_posts_pagination( array(
            'mid_size'  => 2,
            'prev_text' => '← Poprzednia',
            'next_text' => 'Następna →',
        ) );
        ?>
      </div>

    <?php else : ?>

      <div class="search-empty wow-blur-reveal">
        <div class="search-empty__icon" aria-hidden="true">
          <svg width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="var(--accent-lavender)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>
          </svg>
        </div>
        <h2 class="t-display t-display--md">Brak wyników</h2>
        <p class="t-body t-body--lg">Spróbuj wpisać inne słowo kluczowe lub skorzystaj z poniższych linków.</p>
        <div class="search-empty__form">
          <?php get_search_form(); ?>
        </div>
        <nav class="search-empty__links">
          <p class="search-empty__links-title">Popularne strony:</p>
          <ul>
            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a></li>
            <li><a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>">Nasze zabiegi</a></li>
            <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontakt</a></li>
            <li><a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>">O Serenity Spa</a></li>
          </ul>
        </nav>
      </div>

    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>
