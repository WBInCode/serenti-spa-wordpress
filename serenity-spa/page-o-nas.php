<?php
/**
 * Template Name: O nas
 *
 * Narrative storytelling page — broken grid, overlapping images,
 * oversized year deco, stacking values, team with clip-path reveal,
 * parallax gallery strip, depth layers throughout
 */

get_header();
?>

<!-- ============================================
     HERO — Asymmetric + oversized year
     ============================================ -->
<section class="pg-about-hero">
  <div class="pg-about-hero__mesh" aria-hidden="true"></div>
  <div class="pg-about-hero__blob" aria-hidden="true"></div>

  <!-- Scale Surprise: oversized year -->
  <div class="pg-about-hero__year" aria-hidden="true">2012</div>

  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a>
      <span class="breadcrumbs__sep">·</span>
      <span aria-current="page">O nas</span>
    </nav>

    <div class="pg-about-hero__grid">
      <div class="pg-about-hero__text">
        <p class="t-tag">Nasza historia</p>
        <h1 class="t-display t-display--hero">
          Zaczęło się<br>od <em class="t-thin">jednej świeczki</em>
        </h1>
        <p class="t-body t-body--lg">
          W 2012 roku Marta Serena, certyfikowana terapeutka ajurwedyjska, otworzyła mały gabinet masażu na warszawskim Mokotowie. Jej podejście było proste: każdy zabieg to rytuał, nie usługa.
        </p>
      </div>

      <!-- Broken grid: overlapping image composition -->
      <div class="pg-about-hero__images">
        <div class="pg-about-hero__img pg-about-hero__img--main wow-wipe-left">
          <img src="https://images.unsplash.com/photo-1540555700478-4be289fbec6d?w=600&h=800&fit=crop&q=80"
               alt="Założycielka Serenity Spa" width="600" height="800" loading="eager">
        </div>
        <div class="pg-about-hero__img pg-about-hero__img--accent wow-scale-center">
          <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=300&h=380&fit=crop&q=80"
               alt="Kamienie do masażu" width="300" height="380" loading="eager">
        </div>
        <div class="pg-about-hero__img-label wow-blur-reveal">
          <span>✦</span> 12 lat doświadczenia
        </div>
      </div>
    </div>
  </div>

  <div class="pg-about-hero__vlabel t-vertical" aria-hidden="true">Historia · Serenity · 2012</div>
</section>

<!-- ============================================
     STORY CONTINUATION — Text + stats
     ============================================ -->
<section class="pg-about-story">
  <div class="container container--narrow">
    <div class="pg-about-story__content wow-blur-reveal">
      <p class="t-body t-body--lg" style="font-size: clamp(1.3rem, 2vw, 1.6rem); line-height: 1.7;">
        Klienci wracali. Polecali znajomym. Po dwóch latach jeden gabinet stał się czterema. Dziś Serenity Spa to <strong>500m² przestrzeni relaksu</strong> z zespołem ośmiu terapeutów i własną linią kosmetyków naturalnych.
      </p>
    </div>

    <!-- Oversized counter stats -->
    <div class="pg-about-story__stats wow-flip-in">
      <div class="pg-about-story__stat">
        <span class="pg-about-story__stat-num" data-count="8500">8 500</span>
        <span class="pg-about-story__stat-label">zadowolonych<br>klientów</span>
      </div>
      <div class="pg-about-story__stat-sep" aria-hidden="true">✦</div>
      <div class="pg-about-story__stat">
        <span class="pg-about-story__stat-num" data-count="500">500</span>
        <span class="pg-about-story__stat-unit">m²</span>
        <span class="pg-about-story__stat-label">przestrzeni<br>relaksu</span>
      </div>
      <div class="pg-about-story__stat-sep" aria-hidden="true">✦</div>
      <div class="pg-about-story__stat">
        <span class="pg-about-story__stat-num" data-count="24">24</span>
        <span class="pg-about-story__stat-label">unikalne<br>rytuały</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     VALUES — Dark section, bento cards
     ============================================ -->
<section class="pg-about-values section--dark">
  <!-- Decorative oversized text -->
  <div class="pg-about-values__deco" aria-hidden="true">Wartości</div>

  <div class="container">
    <div class="pg-about-values__header">
      <p class="t-tag" style="color: var(--accent-lavender);">Nasze wartości</p>
      <h2 class="t-display t-display--xl">
        W co <em class="t-thin">wierzymy</em>
      </h2>
    </div>

    <div class="pg-about-values__grid">
      <div class="pg-about-values__card pg-about-values__card--tall wow-slide-left" style="--i:0">
        <span class="pg-about-values__num">01</span>
        <h3>Uważność</h3>
        <p>Każdy dotyk, każdy zapach, każdy dźwięk w naszej przestrzeni jest świadomie dobrany. Nie ma miejsca na przypadek.</p>
        <div class="pg-about-values__card-visual">
          <img src="https://images.unsplash.com/photo-1470259078422-826894b933aa?w=400&h=300&fit=crop&q=80"
               alt="Świece w spa" width="400" height="300" loading="lazy">
        </div>
      </div>

      <div class="pg-about-values__card wow-blur-reveal" style="--i:1">
        <span class="pg-about-values__num">02</span>
        <h3>Indywidualność</h3>
        <p>Nie mamy szablonowych zabiegów. Każdy rytuał jest adaptowany do potrzeb konkretnej osoby.</p>
      </div>

      <div class="pg-about-values__card wow-slide-right" style="--i:2; background: rgba(184, 164, 214, 0.08); border-color: rgba(184, 164, 214, 0.12);">
        <span class="pg-about-values__num">03</span>
        <h3>Naturalność</h3>
        <p>Pracujemy wyłącznie z naturalnymi olejkami i organicznymi kosmetykami przyjaznymi środowisku.</p>
      </div>

      <div class="pg-about-values__card wow-flip-in" style="--i:3">
        <span class="pg-about-values__num">04</span>
        <h3>Cisza</h3>
        <p>W świecie ciągłego hałasu oferujemy coś cennego — przestrzeń, gdzie jedynym dźwiękiem jest Twój oddech.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     TEAM — Asymmetric grid with hover reveals
     ============================================ -->
<section class="pg-about-team">
  <div class="container">
    <div class="pg-about-team__header">
      <p class="t-tag wow-blur-reveal">Nasz zespół</p>
      <h2 class="t-display t-display--xl wow-blur-reveal">
        Ludzie <em class="t-thin">Serenity</em>
      </h2>
      <p class="t-body t-body--lg wow-blur-reveal" style="margin: 16px auto 0; text-align: center; max-width: 550px;">
        Każdy terapeuta przeszedł minimum 500 godzin szkoleń i posiada międzynarodowe certyfikaty.
      </p>
    </div>

    <!-- Asymmetric team grid — NOT a boring 4-col -->
    <div class="pg-about-team__grid">
      <div class="pg-about-team__member pg-about-team__member--lg wow-wipe-bottom">
        <div class="pg-about-team__photo">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=600&h=750&fit=crop&q=80"
               alt="Marta Serena" width="600" height="750" loading="lazy">
          <div class="pg-about-team__reveal">
            <p>Certyfikowana terapeutka ajurwedyjska z 15-letnim doświadczeniem. Specjalizacja: masaż gorącymi kamieniami.</p>
          </div>
        </div>
        <h3>Marta Serena</h3>
        <span>Założycielka & Główna Terapeutka</span>
      </div>

      <div class="pg-about-team__member wow-wipe-bottom" style="--i:1">
        <div class="pg-about-team__photo">
          <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=500&h=600&fit=crop&q=80"
               alt="Aleksandra Nowak" width="500" height="600" loading="lazy">
          <div class="pg-about-team__reveal">
            <p>Ekspert od deep tissue i terapii bólu przewlekłego. Certyfikat ITEC London.</p>
          </div>
        </div>
        <h3>Aleksandra Nowak</h3>
        <span>Senior Terapeutka</span>
      </div>

      <div class="pg-about-team__member wow-wipe-bottom" style="--i:2">
        <div class="pg-about-team__photo">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=600&fit=crop&q=80"
               alt="Kamil Zieliński" width="500" height="600" loading="lazy">
          <div class="pg-about-team__reveal">
            <p>Fizjoterapeuta sportowy. Pracował z zawodowcami. Specjalizacja: masaż głęboki tkanek.</p>
          </div>
        </div>
        <h3>Kamil Zieliński</h3>
        <span>Fizjoterapeuta</span>
      </div>

      <div class="pg-about-team__member wow-wipe-bottom" style="--i:3">
        <div class="pg-about-team__photo">
          <img src="https://images.unsplash.com/photo-1594824476967-48c8b964ac31?w=500&h=600&fit=crop&q=80"
               alt="Yuki Tanaka" width="500" height="600" loading="lazy">
          <div class="pg-about-team__reveal">
            <p>Urodzona w Kioto, szkoliła się w tradycyjnej japońskiej technice Shiatsu. Prowadzi refleksologię i rytuały zen.</p>
          </div>
        </div>
        <h3>Yuki Tanaka</h3>
        <span>Refleksolog & Shiatsu</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     GALLERY STRIP — Parallax marquee
     ============================================ -->
<section class="pg-about-gallery">
  <div class="pg-about-gallery__track">
    <img src="https://images.unsplash.com/photo-1470259078422-826894b933aa?w=600&h=400&fit=crop&q=80" alt="Strefa świec" width="600" height="400" loading="lazy">
    <img src="https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?w=600&h=400&fit=crop&q=80" alt="Basen" width="600" height="400" loading="lazy">
    <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=600&h=400&fit=crop&q=80" alt="Kamienie" width="600" height="400" loading="lazy">
    <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=600&h=400&fit=crop&q=80" alt="Relaks" width="600" height="400" loading="lazy">
    <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=600&h=400&fit=crop&q=80" alt="Gabinet" width="600" height="400" loading="lazy">
    <!-- Duplicates for seamless loop -->
    <img src="https://images.unsplash.com/photo-1470259078422-826894b933aa?w=600&h=400&fit=crop&q=80" alt="" width="600" height="400" loading="lazy" aria-hidden="true">
    <img src="https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?w=600&h=400&fit=crop&q=80" alt="" width="600" height="400" loading="lazy" aria-hidden="true">
    <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=600&h=400&fit=crop&q=80" alt="" width="600" height="400" loading="lazy" aria-hidden="true">
  </div>
</section>

<!-- ============================================
     FINAL CTA — Dark, dramatic
     ============================================ -->
<section class="pg-about-cta section--dark">
  <div class="pg-about-cta__blob pg-about-cta__blob--1" aria-hidden="true"></div>
  <div class="pg-about-cta__blob pg-about-cta__blob--2" aria-hidden="true"></div>

  <div class="container" style="text-align: center; position: relative; z-index: 2;">
    <p class="t-tag wow-blur-reveal" style="color: var(--accent-lavender);">Przekonaj się osobiście</p>
    <h2 class="t-display t-display--hero wow-blur-reveal">
      Czas na <em>Twój</em><br>moment ciszy
    </h2>
    <p class="t-body t-body--lg wow-blur-reveal" style="color: rgba(255,255,255,0.5); margin: 0 auto 40px;">
      Pierwszy rytuał z rabatem 15%.
    </p>
    <div class="wow-blur-reveal" style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
      <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn--light">
        Umów wizytę <span class="btn__arrow">→</span>
      </a>
      <a href="tel:+48123456789" class="btn btn--light" style="border-color: rgba(255,255,255,0.12);">
        +48 123 456 789
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
