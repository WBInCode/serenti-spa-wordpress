<?php
/**
 * Template Name: Usługi
 *
 * Services — featured hero ritual with broken-grid overlap,
 * bento asymmetric grid, perspective-tilt cards, varied scroll
 * animations, dark CTA section
 */

get_header();
?>

<!-- ============================================
     HERO — Featured ritual with broken grid
     ============================================ -->
<section class="pg-srv-hero">
  <div class="pg-srv-hero__mesh" aria-hidden="true"></div>
  <div class="pg-srv-hero__blob" aria-hidden="true"></div>

  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a>
      <span class="breadcrumbs__sep">·</span>
      <span aria-current="page">Zabiegi</span>
    </nav>

    <div class="pg-srv-hero__grid">
      <!-- Image side — broken grid overlap -->
      <div class="pg-srv-hero__visual">
        <div class="pg-srv-hero__img pg-srv-hero__img--main wow-wipe-left">
          <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=800&h=1000&fit=crop&q=80"
               alt="Rytuał Serenity Flow" width="800" height="1000" loading="eager">
        </div>
        <!-- Overlapping accent card -->
        <div class="pg-srv-hero__accent-card wow-scale-center">
          <span class="pg-srv-hero__accent-icon">✦</span>
          <span class="pg-srv-hero__accent-label">Autorski<br>rytuał</span>
          <span class="pg-srv-hero__accent-time">120 min</span>
        </div>
      </div>

      <!-- Text side -->
      <div class="pg-srv-hero__text">
        <p class="t-tag">Rytuał flagowy</p>
        <h1 class="t-display t-display--hero">
          Serenity<br><em class="t-thin">Flow</em>
        </h1>
        <p class="t-body t-body--lg">
          Nasz flagowy 120-minutowy zabieg łączący masaż, aromaterapię i medytację dźwiękową. Podróż zmysłów zaprojektowana, by przywrócić głęboką równowagę ciała i umysłu.
        </p>
        <div class="pg-srv-hero__price">
          <span class="pg-srv-hero__price-from">od</span>
          <span class="pg-srv-hero__price-amount">420 zł</span>
        </div>
        <a href="#book-section" class="btn btn--primary">
          Zarezerwuj Serenity Flow <span class="btn__arrow">→</span>
        </a>
      </div>
    </div>
  </div>

  <!-- Decorative oversized text -->
  <div class="pg-srv-hero__deco" aria-hidden="true">Rytuały</div>
  <div class="pg-srv-hero__vlabel t-vertical" aria-hidden="true">Zabiegi · Spa · Relaks</div>
</section>

<!-- ============================================
     BENTO — Asymmetric service grid
     ============================================ -->
<section class="pg-srv-bento">
  <div class="container">
    <div class="pg-srv-bento__header">
      <p class="t-tag wow-blur-reveal">Wszystkie zabiegi</p>
      <h2 class="t-display t-display--xl wow-blur-reveal">
        Wybierz swój <em class="t-thin">rytuał</em>
      </h2>
    </div>

    <div class="pg-srv-bento__grid">
      <!-- Card 1 — Large, spans 2 rows -->
      <div class="pg-srv-card pg-srv-card--tall wow-slide-left" style="--i:0">
        <div class="pg-srv-card__img">
          <img src="https://images.unsplash.com/photo-1540555700478-4be289fbec6d?w=600&h=800&fit=crop&q=80"
               alt="Masaż Gorącymi Kamieniami" width="600" height="800" loading="lazy">
          <div class="pg-srv-card__img-overlay"></div>
        </div>
        <div class="pg-srv-card__body">
          <span class="pg-srv-card__tag">Bestseller</span>
          <h3>Masaż Gorącymi<br>Kamieniami</h3>
          <p>Bazaltowe kamienie nagrzane do idealnej temperatury rozpuszczają napięcia mięśniowe i przywracają przepływ energii.</p>
          <div class="pg-srv-card__meta">
            <span>90 min</span>
            <span class="pg-srv-card__price">od 280 zł</span>
          </div>
          <a href="#book-section" class="pg-srv-card__link">Zarezerwuj <span>→</span></a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="pg-srv-card wow-blur-reveal" style="--i:1">
        <div class="pg-srv-card__img">
          <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=600&h=400&fit=crop&q=80"
               alt="Rytuał Aromaterapii" width="600" height="400" loading="lazy">
          <div class="pg-srv-card__img-overlay"></div>
        </div>
        <div class="pg-srv-card__body">
          <h3>Rytuał Aromaterapii</h3>
          <p>Masaż z indywidualnie dobranym zestawem olejków eterycznych — lawenda, eukaliptus, ylang-ylang.</p>
          <div class="pg-srv-card__meta">
            <span>75 min</span>
            <span class="pg-srv-card__price">od 220 zł</span>
          </div>
          <a href="#book-section" class="pg-srv-card__link">Zarezerwuj <span>→</span></a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="pg-srv-card wow-flip-in" style="--i:2">
        <div class="pg-srv-card__img">
          <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?w=600&h=400&fit=crop&q=80"
               alt="Masaż Głęboki Tkanek" width="600" height="400" loading="lazy">
          <div class="pg-srv-card__img-overlay"></div>
        </div>
        <div class="pg-srv-card__body">
          <h3>Masaż Głęboki Tkanek</h3>
          <p>Intensywna terapia manualna na przewlekłe napięcia. Precyzyjne techniki uwalniają głębokie warstwy tkanki.</p>
          <div class="pg-srv-card__meta">
            <span>60 min</span>
            <span class="pg-srv-card__price">od 250 zł</span>
          </div>
          <a href="#book-section" class="pg-srv-card__link">Zarezerwuj <span>→</span></a>
        </div>
      </div>

      <!-- Card 4 — Wide -->
      <div class="pg-srv-card pg-srv-card--wide wow-slide-right" style="--i:3">
        <div class="pg-srv-card__img">
          <img src="https://images.unsplash.com/photo-1507652313519-d4e9174996dd?w=900&h=400&fit=crop&q=80"
               alt="Peeling Ciała" width="900" height="400" loading="lazy">
          <div class="pg-srv-card__img-overlay"></div>
        </div>
        <div class="pg-srv-card__body">
          <h3>Peeling Ciała</h3>
          <p>Naturalny peeling solny lub cukrowy złuszcza martwy naskórek, stymuluje krążenie i przygotowuje skórę na dalsze zabiegi.</p>
          <div class="pg-srv-card__meta">
            <span>45 min</span>
            <span class="pg-srv-card__price">od 160 zł</span>
          </div>
          <a href="#book-section" class="pg-srv-card__link">Zarezerwuj <span>→</span></a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="pg-srv-card wow-wipe-bottom" style="--i:4">
        <div class="pg-srv-card__img">
          <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=600&h=400&fit=crop&q=80"
               alt="Refleksologia Stóp" width="600" height="400" loading="lazy">
          <div class="pg-srv-card__img-overlay"></div>
        </div>
        <div class="pg-srv-card__body">
          <h3>Refleksologia Stóp</h3>
          <p>Precyzyjna stymulacja punktów refleksyjnych przywracająca równowagę energetyczną organizmu. Technika Shiatsu.</p>
          <div class="pg-srv-card__meta">
            <span>60 min</span>
            <span class="pg-srv-card__price">od 180 zł</span>
          </div>
          <a href="#book-section" class="pg-srv-card__link">Zarezerwuj <span>→</span></a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="pg-srv-card wow-scale-center" style="--i:5">
        <div class="pg-srv-card__img">
          <img src="https://images.unsplash.com/photo-1470259078422-826894b933aa?w=600&h=400&fit=crop&q=80"
               alt="Masaż Relaksacyjny" width="600" height="400" loading="lazy">
          <div class="pg-srv-card__img-overlay"></div>
        </div>
        <div class="pg-srv-card__body">
          <span class="pg-srv-card__tag">Dla początkujących</span>
          <h3>Masaż Relaksacyjny</h3>
          <p>Delikatny masaż całego ciała z olejkami roślinnymi. Idealny na pierwszy raz w spa.</p>
          <div class="pg-srv-card__meta">
            <span>60 min</span>
            <span class="pg-srv-card__price">od 190 zł</span>
          </div>
          <a href="#book-section" class="pg-srv-card__link">Zarezerwuj <span>→</span></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     PROCESS — How it works strip
     ============================================ -->
<section class="pg-srv-process">
  <div class="container container--narrow">
    <h2 class="t-display t-display--lg wow-blur-reveal" style="text-align: center; margin-bottom: 48px;">
      Jak <em class="t-thin">to wygląda?</em>
    </h2>
    <div class="pg-srv-process__steps">
      <div class="pg-srv-process__step wow-blur-reveal" style="--i:0">
        <span class="pg-srv-process__num">01</span>
        <div>
          <h3>Konsultacja</h3>
          <p>Krótka rozmowa o Twoich potrzebach, napięciach i oczekiwaniach. Dopasowujemy rytuał.</p>
        </div>
      </div>
      <div class="pg-srv-process__step wow-blur-reveal" style="--i:1">
        <span class="pg-srv-process__num">02</span>
        <div>
          <h3>Przygotowanie</h3>
          <p>Strefa ciszy, herbata ziołowa, czas na wyciszenie. Twoje ciało zaczyna się odprężać jeszcze przed zabiegiem.</p>
        </div>
      </div>
      <div class="pg-srv-process__step wow-blur-reveal" style="--i:2">
        <span class="pg-srv-process__num">03</span>
        <div>
          <h3>Rytuał</h3>
          <p>Pełna uwaga terapeuty skupiona na Tobie. Zero pośpiechu, zero kompromisów.</p>
        </div>
      </div>
      <div class="pg-srv-process__step wow-blur-reveal" style="--i:3">
        <span class="pg-srv-process__num">04</span>
        <div>
          <h3>Regeneracja</h3>
          <p>Czas w strefie relaksu z herbatą i owocami. Twoje ciało potrzebuje chwili, by się zintegrować.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     CTA — Dark section with parallax
     ============================================ -->
<section class="pg-srv-cta section--dark" id="book-section">
  <div class="pg-srv-cta__blob pg-srv-cta__blob--1" aria-hidden="true"></div>
  <div class="pg-srv-cta__blob pg-srv-cta__blob--2" aria-hidden="true"></div>

  <!-- Decorative text -->
  <div class="pg-srv-cta__deco" aria-hidden="true">Rezerwuj</div>

  <div class="container">
    <div class="pg-srv-cta__grid">
      <div class="pg-srv-cta__text">
        <p class="t-tag wow-blur-reveal" style="color: var(--accent-lavender);">Zarezerwuj zabieg</p>
        <h2 class="t-display t-display--hero wow-blur-reveal">
          Twój czas<br>na <em class="t-thin">ciszę</em>
        </h2>
        <p class="t-body t-body--lg wow-blur-reveal" style="color: rgba(255,255,255,0.5);">
          Zadzwoń lub wypełnij formularz — oddzwonimy w ciągu godziny.
        </p>
        <div class="wow-blur-reveal" style="display:flex; gap:16px; flex-wrap:wrap;">
          <a href="tel:+48123456789" class="btn btn--light">
            +48 123 456 789
          </a>
          <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn--light" style="border-color: rgba(255,255,255,0.12);">
            Formularz kontaktowy <span class="btn__arrow">→</span>
          </a>
        </div>
      </div>
      <div class="pg-srv-cta__images">
        <div class="pg-srv-cta__img pg-srv-cta__img--1 wow-wipe-left">
          <img src="https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?w=500&h=650&fit=crop&q=80"
               alt="Strefa relaksu" width="500" height="650" loading="lazy">
        </div>
        <div class="pg-srv-cta__img pg-srv-cta__img--2 wow-scale-center">
          <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=280&h=350&fit=crop&q=80"
               alt="Kamienie" width="280" height="350" loading="lazy">
        </div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
