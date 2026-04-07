<?php
/**
 * Template Name: Podziękowanie
 *
 * Dramatic celebration page — full-viewport, animated checkmark,
 * depth blobs, oversized "Dziękujemy" deco, floating steps cards,
 * social proof badge, glassmorphic card
 */

get_header();
?>

<section class="pg-ty">
  <!-- Depth layer blobs -->
  <div class="pg-ty__blob pg-ty__blob--1" aria-hidden="true"></div>
  <div class="pg-ty__blob pg-ty__blob--2" aria-hidden="true"></div>
  <div class="pg-ty__blob pg-ty__blob--3" aria-hidden="true"></div>

  <!-- Oversized decorative text -->
  <div class="pg-ty__deco" aria-hidden="true">Dziękujemy</div>

  <div class="container">
    <div class="pg-ty__layout">

      <!-- Main card — glassmorphic -->
      <div class="pg-ty__card">
        <!-- Animated checkmark -->
        <div class="pg-ty__check">
          <svg width="100" height="100" viewBox="0 0 100 100" fill="none">
            <circle cx="50" cy="50" r="48" stroke="var(--accent-sage)" stroke-width="1.5" opacity="0.2"/>
            <circle class="pg-ty__circle" cx="50" cy="50" r="48" stroke="var(--accent-sage)" stroke-width="2" stroke-linecap="round"/>
            <polyline class="pg-ty__tick" points="30,52 45,67 70,37" stroke="var(--accent-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
          </svg>
        </div>

        <h1 class="t-display t-display--hero pg-ty__title">
          Wiadomość<br><em class="t-thin">wysłana</em>
        </h1>
        <p class="t-body t-body--lg pg-ty__subtitle">
          Odpowiemy w ciągu <strong>24 godzin</strong> — najczęściej dużo szybciej.
        </p>

        <!-- Social proof badge -->
        <div class="pg-ty__proof">
          <div class="pg-ty__proof-stars">★★★★★</div>
          <p>Dołączyłeś do <strong>8 500+</strong> zadowolonych klientów</p>
          <span>4.9 / 5 w Google</span>
        </div>
      </div>

      <!-- Steps — floating cards alongside -->
      <div class="pg-ty__steps">
        <h2 class="pg-ty__steps-title wow-blur-reveal">Co dalej?</h2>

        <div class="pg-ty__step wow-slide-left" style="--i:0">
          <span class="pg-ty__step-num">01</span>
          <div>
            <h3>Analizujemy</h3>
            <p>Sprawdzamy Twoje preferencje i dobieramy najlepszy rytuał.</p>
          </div>
        </div>

        <div class="pg-ty__step wow-slide-left" style="--i:1">
          <span class="pg-ty__step-num">02</span>
          <div>
            <h3>Kontaktujemy się</h3>
            <p>Zadzwonimy lub odepiszemy, aby potwierdzić szczegóły i termin.</p>
          </div>
        </div>

        <div class="pg-ty__step wow-slide-left" style="--i:2">
          <span class="pg-ty__step-num">03</span>
          <div>
            <h3>Witamy w Serenity</h3>
            <p>Przygotujemy Twój spersonalizowany rytuał. Nie musisz nic robić.</p>
          </div>
        </div>
      </div>

    </div>

    <!-- CTAs -->
    <div class="pg-ty__actions">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">
        Wróć na stronę główną <span class="btn__arrow">→</span>
      </a>
      <a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>" class="btn btn--ghost">
        Zobacz nasze zabiegi
      </a>
    </div>

    <!-- Social links -->
    <div class="pg-ty__social">
      <p>Śledź nas:</p>
      <a href="#" aria-label="Instagram">Instagram</a>
      <span aria-hidden="true">·</span>
      <a href="#" aria-label="Facebook">Facebook</a>
      <span aria-hidden="true">·</span>
      <a href="#" aria-label="TikTok">TikTok</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
