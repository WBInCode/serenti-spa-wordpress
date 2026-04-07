<?php
/**
 * Index fallback template.
 * WordPress requires index.php in every theme.
 */

get_header();
?>

<section style="padding: var(--section-pad-lg) 0;">
  <div class="container" style="text-align: center;">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
        <article>
          <h2 class="t-display t-display--xl"><?php the_title(); ?></h2>
          <div class="t-body t-body--lg" style="margin-top: 24px;">
            <?php the_content(); ?>
          </div>
        </article>
      <?php endwhile; ?>
    <?php else : ?>
      <h2 class="t-display t-display--xl">Nie znaleziono treści</h2>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
