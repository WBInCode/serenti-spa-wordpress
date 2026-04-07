<?php
/**
 * Template Name: Kontakt
 *
 * Strona kontaktu — Split Screen layout: lewa = dane + mapa, prawa = formularz
 * Design DNA: Ethereal Gradient consistency
 */

get_header();
?>

<!-- Inner Page Hero -->
<section class="inner-hero">
  <div class="inner-hero__mesh" aria-hidden="true"></div>
  <div class="inner-hero__blob inner-hero__blob--1" aria-hidden="true"></div>
  <div class="inner-hero__blob inner-hero__blob--2" aria-hidden="true"></div>
  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a>
      <span class="breadcrumbs__sep">·</span>
      <span aria-current="page">Kontakt</span>
    </nav>
    <h1 class="t-display t-display--xl inner-hero__title">
      Skontaktuj się <em class="t-thin">z nami</em>
    </h1>
    <p class="t-body t-body--lg inner-hero__subtitle">
      Masz pytania lub chcesz umówić wizytę? Napisz, zadzwoń lub odwiedź nas osobiście.
    </p>
  </div>
</section>

<!-- Contact Split Section -->
<section class="contact-section">
  <div class="container">
    <div class="contact-grid">

      <!-- Left: Info + Map -->
      <div class="contact-info wow-blur-reveal">
        <div class="contact-info__block">
          <div class="contact-info__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <div>
            <h3>Telefon</h3>
            <a href="tel:+48123456789">+48 123 456 789</a>
          </div>
        </div>

        <div class="contact-info__block">
          <div class="contact-info__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="16" x="2" y="4" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
          </div>
          <div>
            <h3>Email</h3>
            <a href="mailto:kontakt@serenityspa.pl">kontakt@serenityspa.pl</a>
          </div>
        </div>

        <div class="contact-info__block">
          <div class="contact-info__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/><circle cx="12" cy="10" r="3"/></svg>
          </div>
          <div>
            <h3>Adres</h3>
            <p>ul. Spokojna 12<br>00-001 Warszawa</p>
          </div>
        </div>

        <div class="contact-info__block">
          <div class="contact-info__icon">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <div>
            <h3>Godziny otwarcia</h3>
            <p>Poniedziałek – Niedziela<br>9:00 – 21:00</p>
          </div>
        </div>

        <!-- Embedded Map -->
        <div class="contact-map wow-wipe-bottom">
          <img src="https://images.unsplash.com/photo-1524661135-423995f22d0b?w=800&h=400&fit=crop&q=80"
               alt="Lokalizacja Serenity Spa na mapie Warszawy"
               width="800" height="400" loading="lazy">
          <div class="contact-map__overlay">
            <span>📍 ul. Spokojna 12, Warszawa</span>
          </div>
        </div>
      </div>

      <!-- Right: Form -->
      <div class="contact-form-wrap wow-slide-right">
        <div class="contact-form-card">
          <h2 class="t-display t-display--md">Napisz do nas</h2>
          <p class="t-body" style="color: var(--text-secondary); margin-bottom: 32px;">
            Odpowiemy w ciągu 24 godzin. Możesz też zadzwonić bezpośrednio.
          </p>

          <form class="contact-form contact-form--page" id="contactFormPage" novalidate>
            <div class="form-field form-field--light">
              <input type="text" id="cf-name" name="name" placeholder=" " required autocomplete="name">
              <label for="cf-name">Imię i nazwisko</label>
            </div>

            <div class="form-field form-field--light">
              <input type="email" id="cf-email" name="email" placeholder=" " required autocomplete="email">
              <label for="cf-email">Adres email</label>
            </div>

            <div class="form-field form-field--light">
              <input type="tel" id="cf-phone" name="phone" placeholder=" " autocomplete="tel">
              <label for="cf-phone">Telefon (opcjonalnie)</label>
            </div>

            <div class="form-field form-field--light">
              <select id="cf-subject" name="subject" required>
                <option value="" disabled selected>Temat wiadomości</option>
                <option value="rezerwacja">Rezerwacja zabiegu</option>
                <option value="pytanie">Pytanie o zabieg</option>
                <option value="karta">Karta podarunkowa</option>
                <option value="wspolpraca">Współpraca</option>
                <option value="inne">Inne</option>
              </select>
            </div>

            <div class="form-field form-field--light">
              <textarea id="cf-message" name="message" placeholder=" " required rows="5"></textarea>
              <label for="cf-message">Twoja wiadomość</label>
            </div>

            <button type="submit" class="btn btn--primary" style="width:100%; justify-content:center;">
              Wyślij wiadomość <span class="btn__arrow">→</span>
            </button>

            <p class="contact-form__consent">
              Wysyłając formularz, akceptujesz naszą
              <a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Politykę prywatności</a>.
            </p>
          </form>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CTA Break -->
<section class="cta-break-simple">
  <div class="container">
    <div class="cta-break-simple__inner wow-scale-center">
      <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=1400&h=500&fit=crop&q=80"
           alt="Wnętrze gabinetu Serenity Spa" width="1400" height="500" loading="lazy">
      <div class="cta-break-simple__overlay">
        <h2 class="t-display t-display--lg">Zadzwoń i umów się <em class="t-thin">już dziś</em></h2>
        <a href="tel:+48123456789" class="btn btn--light">
          +48 123 456 789 <span class="btn__arrow">→</span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
