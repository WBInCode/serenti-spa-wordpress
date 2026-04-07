<?php
/**
 * Custom search form for Serenity Spa
 */
?>
<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label class="sr-only" for="search-field"><?php esc_html_e( 'Szukaj:', 'serenity-spa' ); ?></label>
  <div class="search-form__wrap">
    <input type="search"
           id="search-field"
           class="search-form__input"
           placeholder="<?php esc_attr_e( 'Szukaj zabiegów, artykułów...', 'serenity-spa' ); ?>"
           value="<?php echo get_search_query(); ?>"
           name="s"
           autocomplete="off">
    <button type="submit" class="search-form__btn" aria-label="<?php esc_attr_e( 'Szukaj', 'serenity-spa' ); ?>">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
        <circle cx="11" cy="11" r="8"/><path d="m21 21-4.3-4.3"/>
      </svg>
    </button>
  </div>
</form>
