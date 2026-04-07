<?php
/**
 * Template Name: Podziękowanie
 *
 * Thank you page — continuation of experience, not dead-end
 * SVG checkmark animation + next steps + social proof
 */

get_header();
?>

<section class="thankyou">
  <!-- Gradient blobs -->
  <div class="thankyou__blob thankyou__blob--1" aria-hidden="true"></div>
  <div class="thankyou__blob thankyou__blob--2" aria-hidden="true"></div>

  <div class="container">
    <div class="thankyou__card">

      <!-- Animated checkmark -->
      <div class="thankyou__check">
        <svg width="80" height="80" viewBox="0 0 80 80" fill="none">
          <circle cx="40" cy="40" r="38" stroke="var(--accent-sage)" stroke-width="2" opacity="0.3"/>
          <circle class="thankyou__circle" cx="40" cy="40" r="38" stroke="var(--accent-sage)" stroke-width="2.5" stroke-linecap="round"/>
          <polyline class="thankyou__tick" points="24,42 36,54 56,30" stroke="var(--accent-gold)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
        </svg>
      </div>

      <h1 class="t-display t-display--xl thankyou__title">
        Dziękujemy!
      </h1>
      <p class="t-body t-body--lg thankyou__subtitle">
        Twoja wiadomość dotarła do nas. Odpowiemy w ciągu <strong>24 godzin</strong> — najczęściej dużo szybciej.
      </p>

      <!-- Next steps -->
      <div class="thankyou__steps">
        <h2 class="thankyou__steps-title">Co dalej?</h2>
        <div class="thankyou__steps-grid">
          <div class="thankyou__step">
            <span class="thankyou__step-num">01</span>
            <h3>Sprawdzamy Twoją wiadomość</h3>
            <p>Nasz zespół analizuje Twoje preferencje i dobiera najlepszy zabieg.</p>
          </div>
          <div class="thankyou__step">
            <span class="thankyou__step-num">02</span>
            <h3>Kontaktujemy się z Tobą</h3>
            <p>Zadzwonimy lub odepiszemy, aby potwierdzić szczegóły i zaproponować termin.</p>
          </div>
          <div class="thankyou__step">
            <span class="thankyou__step-num">03</span>
            <h3>Witamy w Serenity</h3>
            <p>Przygotujemy Twój spersonalizowany rytuał relaksu. Nie musisz nic więcej robić.</p>
          </div>
        </div>
      </div>

      <!-- Social proof -->
      <div class="thankyou__proof">
        <p>Dołączyłeś do <strong>8 500+</strong> zadowolonych klientów Serenity Spa</p>
        <div class="thankyou__proof-stars">★★★★★ <span>4.9 / 5 w Google</span></div>
      </div>

      <!-- CTAs -->
      <div class="thankyou__actions">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn--primary">
          Wróć na stronę główną <span class="btn__arrow">→</span>
        </a>
        <a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>" class="btn btn--ghost">
          Zobacz nasze zabiegi
        </a>
      </div>

      <!-- Social links -->
      <div class="thankyou__social">
        <p>Śledź nas w social media:</p>
        <div class="thankyou__social-links">
          <a href="#" aria-label="Instagram">Instagram</a>
          <a href="#" aria-label="Facebook">Facebook</a>
          <a href="#" aria-label="TikTok">TikTok</a>
        </div>
      </div>

    </div>
  </div>
</section>

<?php get_footer(); ?>
