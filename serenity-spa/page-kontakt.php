<?php
/**
 * Template Name: Kontakt
 *
 * Asymmetric broken-grid layout, overlapping elements, depth layers,
 * oversized decorative "Kontakt" outline, parallax floating images,
 * form with custom focus states + glow
 */

get_header();
?>

<!-- ============================================
     HERO — Asymmetric with oversized deco text
     ============================================ -->
<section class="pg-contact-hero">
  <div class="pg-contact-hero__mesh" aria-hidden="true"></div>
  <div class="pg-contact-hero__blob pg-contact-hero__blob--1" aria-hidden="true"></div>

  <!-- Oversized outlined deco -->
  <div class="pg-contact-hero__deco" aria-hidden="true">Kontakt</div>

  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a>
      <span class="breadcrumbs__sep">·</span>
      <span aria-current="page">Kontakt</span>
    </nav>
    <div class="pg-contact-hero__grid">
      <div class="pg-contact-hero__left">
        <h1 class="t-display t-display--hero pg-contact-hero__title">
          Porozmawiajmy
        </h1>
        <p class="t-body t-body--lg">
          Masz pytania, chcesz zarezerwować rytuał lub po prostu odwiedzić nas osobiście? Jesteśmy tu dla Ciebie.
        </p>
      </div>
      <div class="pg-contact-hero__visual">
        <div class="pg-contact-hero__img-wrap wow-wipe-left">
          <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=500&h=650&fit=crop&q=80"
               alt="Recepcja Serenity Spa" width="500" height="650" loading="eager">
        </div>
        <!-- Floating accent card overlapping the image -->
        <div class="pg-contact-hero__accent-card wow-blur-reveal">
          <span class="pg-contact-hero__accent-icon">✦</span>
          <div>
            <strong>Pn – Nd</strong><br>
            <span>9:00 – 21:00</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Vertical label -->
  <div class="pg-contact-hero__vlabel t-vertical" aria-hidden="true">Kontakt · Serenity Spa</div>
</section>

<!-- ============================================
     CONTACT INFO — Bento-style cards
     ============================================ -->
<section class="pg-contact-info">
  <div class="container">
    <div class="pg-contact-info__bento">
      <a href="tel:+48123456789" class="pg-contact-info__card pg-contact-info__card--lg wow-skew-up" style="--i:0">
        <div class="pg-contact-info__card-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        </div>
        <span class="pg-contact-info__card-label">Telefon</span>
        <span class="pg-contact-info__card-value t-display t-display--md">+48 123 456 789</span>
        <span class="pg-contact-info__card-hint">Kliknij, aby zadzwonić</span>
      </a>

      <a href="mailto:kontakt@serenityspa.pl" class="pg-contact-info__card wow-skew-up" style="--i:1">
        <div class="pg-contact-info__card-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
        </div>
        <span class="pg-contact-info__card-label">Email</span>
        <span class="pg-contact-info__card-value">kontakt@serenityspa.pl</span>
      </a>

      <div class="pg-contact-info__card wow-skew-up" style="--i:2">
        <div class="pg-contact-info__card-icon">
          <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <span class="pg-contact-info__card-label">Adres</span>
        <span class="pg-contact-info__card-value">ul. Spokojna 12<br>00-001 Warszawa</span>
      </div>

      <!-- Map card — spans 2 cols -->
      <div class="pg-contact-info__card pg-contact-info__card--map wow-wipe-bottom" style="--i:3">
        <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=900&h=400&fit=crop&q=80"
             alt="Lokalizacja Serenity Spa" width="900" height="400" loading="lazy">
        <div class="pg-contact-info__map-badge">
          <span>📍 ul. Spokojna 12, Warszawa</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     FORM + IMAGE — Broken grid overlap
     ============================================ -->
<section class="pg-contact-form section--dark">
  <div class="pg-contact-form__deco" aria-hidden="true">Napisz</div>
  <div class="container">
    <div class="pg-contact-form__grid">
      <!-- Overlapping image composition -->
      <div class="pg-contact-form__images">
        <div class="pg-contact-form__img pg-contact-form__img--1 wow-wipe-left">
          <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?w=500&h=700&fit=crop&q=80"
               alt="Terapeuta przygotowuje gabinet" width="500" height="700" loading="lazy">
        </div>
        <div class="pg-contact-form__img pg-contact-form__img--2 wow-scale-center">
          <img src="https://images.unsplash.com/photo-1470259078422-826894b933aa?w=300&h=400&fit=crop&q=80"
               alt="Świece w spa" width="300" height="400" loading="lazy">
        </div>
      </div>

      <!-- Form -->
      <div class="pg-contact-form__wrap">
        <p class="t-tag" style="color: var(--accent-lavender); margin-bottom: 20px;">Napisz do nas</p>
        <h2 class="t-display t-display--xl" style="margin-bottom: 12px;">
          Odpowiemy <em class="t-thin">w ciągu 24h</em>
        </h2>
        <p class="t-body t-body--lg" style="color: rgba(255,255,255,0.5); margin-bottom: 40px;">
          Opisz czego potrzebujesz, a my dobierzemy idealny rytuał.
        </p>

        <form class="contact-form contact-form--page" id="contactFormPage" novalidate>
          <div class="pg-contact-form__row">
            <div class="form-field form-field--dark">
              <input type="text" id="cf-name" name="name" placeholder=" " required autocomplete="name">
              <label for="cf-name">Imię i nazwisko</label>
            </div>
            <div class="form-field form-field--dark">
              <input type="tel" id="cf-phone" name="phone" placeholder=" " autocomplete="tel">
              <label for="cf-phone">Telefon</label>
            </div>
          </div>

          <div class="form-field form-field--dark">
            <input type="email" id="cf-email" name="email" placeholder=" " required autocomplete="email">
            <label for="cf-email">Adres email</label>
          </div>

          <div class="form-field form-field--dark">
            <select id="cf-subject" name="subject" required>
              <option value="" disabled selected>Temat wiadomości</option>
              <option value="rezerwacja">Rezerwacja zabiegu</option>
              <option value="pytanie">Pytanie o zabieg</option>
              <option value="karta">Karta podarunkowa</option>
              <option value="wspolpraca">Współpraca</option>
              <option value="inne">Inne</option>
            </select>
          </div>

          <div class="form-field form-field--dark">
            <textarea id="cf-message" name="message" placeholder=" " required rows="5"></textarea>
            <label for="cf-message">Twoja wiadomość</label>
          </div>

          <div style="display: flex; align-items: center; gap: 24px; flex-wrap: wrap;">
            <button type="submit" class="btn btn--light">
              Wyślij wiadomość <span class="btn__arrow">→</span>
            </button>
            <p class="contact-form__consent">
              Wysyłając, akceptujesz <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Politykę prywatności</a>.
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
