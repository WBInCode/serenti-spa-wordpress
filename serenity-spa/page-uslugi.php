<?php
/**
 * Template Name: Usługi
 *
 * Services listing — Bento grid with detailed service cards
 * Design DNA: Ethereal Gradient, Narrative Scroll
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
      <span aria-current="page">Zabiegi</span>
    </nav>
    <h1 class="t-display t-display--xl inner-hero__title">
      Nasze <em class="t-thin">rytuały</em>
    </h1>
    <p class="t-body t-body--lg inner-hero__subtitle">
      Każdy zabieg to spersonalizowane doświadczenie — od aromaterapii po głęboki masaż tkanek. Wybierz swój rytuał.
    </p>
  </div>
</section>

<!-- Services Grid -->
<section class="services-page">
  <div class="container">

    <!-- Service Card 1 — Full width featured -->
    <div class="service-featured wow-wipe-bottom">
      <div class="service-featured__image">
        <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=1000&h=600&fit=crop&q=80"
             alt="Rytuał Serenity Flow — autorski zabieg 120 minut"
             width="1000" height="600" loading="lazy">
      </div>
      <div class="service-featured__content">
        <span class="service-featured__badge">✦ Autorski rytuał</span>
        <h2 class="t-display t-display--lg">Serenity Flow</h2>
        <p class="t-body t-body--lg">
          Nasz flagowy 120-minutowy zabieg łączący masaż, aromaterapię i medytację dźwiękową. Podróż zmysłów zaprojektowana, by przywrócić głęboką równowagę ciała i umysłu.
        </p>
        <div class="service-featured__meta">
          <span>🕐 120 minut</span>
          <span>💰 od 420 zł</span>
        </div>
        <a href="#book-section" class="btn btn--primary">
          Zarezerwuj Serenity Flow <span class="btn__arrow">→</span>
        </a>
      </div>
    </div>

    <!-- Services Grid -->
    <div class="services-grid">

      <div class="service-card wow-blur-reveal" style="--i:0">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1540555700478-4be289fbec6d?w=600&h=400&fit=crop&q=80"
               alt="Masaż Gorącymi Kamieniami" width="600" height="400" loading="lazy">
        </div>
        <div class="service-card__body">
          <h3 class="service-card__title">Masaż Gorącymi Kamieniami</h3>
          <p>Bazaltowe kamienie nagrzane do idealnej temperatury rozpuszczają napięcia mięśniowe i przywracają przepływ energii. Idealny przy przewlekłym stresie.</p>
          <div class="service-card__footer">
            <span class="service-card__meta">90 min · od 280 zł</span>
            <a href="#book-section" class="service-card__link">Zarezerwuj →</a>
          </div>
        </div>
      </div>

      <div class="service-card wow-blur-reveal" style="--i:1">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=600&h=400&fit=crop&q=80"
               alt="Rytuał Aromaterapii" width="600" height="400" loading="lazy">
        </div>
        <div class="service-card__body">
          <h3 class="service-card__title">Rytuał Aromaterapii</h3>
          <p>Holistyczny zabieg łączący masaż z indywidualnie dobranym zestawem olejków eterycznych. Lawenda, eukaliptus, ylang-ylang — Twoje zmysły wybiorą.</p>
          <div class="service-card__footer">
            <span class="service-card__meta">75 min · od 220 zł</span>
            <a href="#book-section" class="service-card__link">Zarezerwuj →</a>
          </div>
        </div>
      </div>

      <div class="service-card wow-blur-reveal" style="--i:2">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?w=600&h=400&fit=crop&q=80"
               alt="Masaż Głęboki Tkanek" width="600" height="400" loading="lazy">
        </div>
        <div class="service-card__body">
          <h3 class="service-card__title">Masaż Głęboki Tkanek</h3>
          <p>Intensywna terapia manualna kierowana na przewlekłe napięcia i bóle mięśniowe. Precyzyjne techniki uwalniają głębokie warstwy tkanki.</p>
          <div class="service-card__footer">
            <span class="service-card__meta">60 min · od 250 zł</span>
            <a href="#book-section" class="service-card__link">Zarezerwuj →</a>
          </div>
        </div>
      </div>

      <div class="service-card wow-blur-reveal" style="--i:3">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1507652313519-d4e9174996dd?w=600&h=400&fit=crop&q=80"
               alt="Peeling Ciała" width="600" height="400" loading="lazy">
        </div>
        <div class="service-card__body">
          <h3 class="service-card__title">Peeling Ciała</h3>
          <p>Naturalny peeling solny lub cukrowy złuszcza martwy naskórek, stymuluje krążenie i przygotowuje skórę na dalsze zabiegi pielęgnacyjne.</p>
          <div class="service-card__footer">
            <span class="service-card__meta">45 min · od 160 zł</span>
            <a href="#book-section" class="service-card__link">Zarezerwuj →</a>
          </div>
        </div>
      </div>

      <div class="service-card wow-blur-reveal" style="--i:4">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=600&h=400&fit=crop&q=80"
               alt="Refleksologia Stóp" width="600" height="400" loading="lazy">
        </div>
        <div class="service-card__body">
          <h3 class="service-card__title">Refleksologia Stóp</h3>
          <p>Precyzyjna stymulacja punktów refleksyjnych na stopach przywracająca równowagę energetyczną całego organizmu. Prowadzona przez specjalistkę Shiatsu.</p>
          <div class="service-card__footer">
            <span class="service-card__meta">60 min · od 180 zł</span>
            <a href="#book-section" class="service-card__link">Zarezerwuj →</a>
          </div>
        </div>
      </div>

      <div class="service-card wow-blur-reveal" style="--i:5">
        <div class="service-card__image">
          <img src="https://images.unsplash.com/photo-1470259078422-826894b933aa?w=600&h=400&fit=crop&q=80"
               alt="Masaż Relaksacyjny" width="600" height="400" loading="lazy">
        </div>
        <div class="service-card__body">
          <h3 class="service-card__title">Masaż Relaksacyjny Klasyczny</h3>
          <p>Delikatny masaż całego ciała z olejkami roślinnymi. Idealny na pierwszy raz w spa lub jako cotygodniowy rytuał regeneracji.</p>
          <div class="service-card__footer">
            <span class="service-card__meta">60 min · od 190 zł</span>
            <a href="#book-section" class="service-card__link">Zarezerwuj →</a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- Booking CTA Section -->
<section class="services-cta section--dark" id="book-section">
  <div class="container">
    <div class="services-cta__inner">
      <div class="services-cta__text">
        <p class="t-tag wow-blur-reveal" style="color: var(--accent-lavender);">Zarezerwuj zabieg</p>
        <h2 class="t-display t-display--xl wow-blur-reveal">
          Wybierz swój <em class="t-thin">rytuał</em>
        </h2>
        <p class="t-body t-body--lg wow-blur-reveal">
          Zadzwoń lub wypełnij formularz — oddzwonimy w ciągu godziny, aby dopasować termin i szczegóły zabiegu.
        </p>
        <div class="wow-blur-reveal" style="display:flex; gap:16px; flex-wrap:wrap;">
          <a href="tel:+48123456789" class="btn btn--light">
            +48 123 456 789
          </a>
          <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn--light" style="border-color: rgba(255,255,255,0.15);">
            Formularz kontaktowy <span class="btn__arrow">→</span>
          </a>
        </div>
      </div>
      <div class="services-cta__image wow-wipe-left">
        <img src="https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?w=600&h=700&fit=crop&q=80"
             alt="Strefa relaksu Serenity Spa"
             width="600" height="700" loading="lazy">
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
