<?php
/**
 * Template Name: O nas
 *
 * Storytelling about page — timeline, team, values
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
      <span aria-current="page">O nas</span>
    </nav>
    <h1 class="t-display t-display--xl inner-hero__title">
      Nasza <em class="t-thin">historia</em>
    </h1>
    <p class="t-body t-body--lg inner-hero__subtitle">
      Od jednego gabinetu do najbardziej cenionego spa w Warszawie — poznaj ludzi i wartości stojące za Serenity.
    </p>
  </div>
</section>

<!-- Story Section -->
<section class="about-story">
  <div class="container">
    <div class="about-story__grid">
      <div class="about-story__image wow-wipe-left">
        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbec6d?w=700&h=900&fit=crop&q=80"
             alt="Założycielka Serenity Spa w gabinecie"
             width="700" height="900" loading="lazy">
      </div>
      <div class="about-story__text">
        <p class="t-tag wow-blur-reveal">Nasza historia</p>
        <h2 class="t-display t-display--xl wow-blur-reveal">
          Zaczęło się od <em class="t-thin">jednej świeczki</em>
        </h2>
        <p class="t-body t-body--lg wow-blur-reveal">
          W 2012 roku Marta Serena, certyfikowana terapeutka ajurwedyjska, otworzyła mały gabinet masażu na warszawskim Mokotowie. Jej podejście było proste: każdy zabieg to rytuał, nie usługa.
        </p>
        <p class="t-body t-body--lg wow-blur-reveal">
          Klienci wracali. Polecali znajomym. Po dwóch latach jeden gabinet stał się czterema. Dziś Serenity Spa to 500m² przestrzeni relaksu z zespołem ośmiu terapeutów i własną linią kosmetyków naturalnych.
        </p>
        <div class="about-story__signature wow-blur-reveal">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=60&h=60&fit=crop&q=80"
               alt="Marta Serena" width="60" height="60" loading="lazy">
          <div>
            <strong>Marta Serena</strong>
            <span>Założycielka & Główna Terapeutka</span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Values Section — Dark -->
<section class="about-values section--dark">
  <div class="container">
    <div class="about-values__header">
      <p class="t-tag wow-blur-reveal" style="color: var(--accent-lavender);">Nasze wartości</p>
      <h2 class="t-display t-display--xl wow-blur-reveal">
        W co <em class="t-thin">wierzymy</em>
      </h2>
    </div>

    <div class="about-values__grid">
      <div class="about-values__card wow-blur-reveal" style="--i:0">
        <div class="about-values__card-num">01</div>
        <h3>Uważność</h3>
        <p>Każdy dotyk, każdy zapach, każdy dźwięk w naszej przestrzeni jest świadomie dobrany. Nie ma miejsca na przypadek.</p>
      </div>
      <div class="about-values__card wow-blur-reveal" style="--i:1">
        <div class="about-values__card-num">02</div>
        <h3>Indywidualność</h3>
        <p>Nie mamy szablonowych zabiegów. Każdy rytuał jest adaptowany do potrzeb, napięć i preferencji konkretnej osoby.</p>
      </div>
      <div class="about-values__card wow-blur-reveal" style="--i:2">
        <div class="about-values__card-num">03</div>
        <h3>Naturalność</h3>
        <p>Pracujemy wyłącznie z naturalnymi olejkami, organicznymi kosmetykami i materiałami przyjaznymi środowisku.</p>
      </div>
      <div class="about-values__card wow-blur-reveal" style="--i:3">
        <div class="about-values__card-num">04</div>
        <h3>Cisza</h3>
        <p>W świecie ciągłego hałasu oferujemy coś cennego — przestrzeń, gdzie jedynym dźwiękiem jest Twój oddech.</p>
      </div>
    </div>
  </div>
</section>

<!-- Stats Marquee -->
<section class="about-stats-bar">
  <div class="about-stats-bar__inner">
    <div class="about-stats-bar__item">
      <span class="about-stats-bar__number" data-count="12">12</span>
      <span class="about-stats-bar__label">lat doświadczenia</span>
    </div>
    <span class="about-stats-bar__dot" aria-hidden="true">✦</span>
    <div class="about-stats-bar__item">
      <span class="about-stats-bar__number" data-count="8500">8 500+</span>
      <span class="about-stats-bar__label">zadowolonych klientów</span>
    </div>
    <span class="about-stats-bar__dot" aria-hidden="true">✦</span>
    <div class="about-stats-bar__item">
      <span class="about-stats-bar__number" data-count="8">8</span>
      <span class="about-stats-bar__label">certyfikowanych terapeutów</span>
    </div>
    <span class="about-stats-bar__dot" aria-hidden="true">✦</span>
    <div class="about-stats-bar__item">
      <span class="about-stats-bar__number" data-count="24">24</span>
      <span class="about-stats-bar__label">unikalne rytuały</span>
    </div>
  </div>
</section>

<!-- Team Section -->
<section class="about-team">
  <div class="container">
    <div class="about-team__header">
      <p class="t-tag wow-blur-reveal">Nasz zespół</p>
      <h2 class="t-display t-display--xl wow-blur-reveal">
        Ludzie <em class="t-thin">Serenity</em>
      </h2>
      <p class="t-body t-body--lg wow-blur-reveal" style="margin: 16px auto 0; text-align: center;">
        Każdy terapeuta przeszedł minimum 500 godzin szkoleń i posiada międzynarodowe certyfikaty.
      </p>
    </div>

    <div class="about-team__grid">
      <div class="about-team__member wow-wipe-bottom">
        <div class="about-team__photo">
          <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=500&h=600&fit=crop&q=80"
               alt="Marta Serena — Założycielka" width="500" height="600" loading="lazy">
          <div class="about-team__overlay">
            <p>Certyfikowana terapeutka ajurwedyjska z 15-letnim doświadczeniem. Specjalizacja: masaż gorącymi kamieniami i aromaterapia.</p>
          </div>
        </div>
        <h3>Marta Serena</h3>
        <span>Założycielka & Główna Terapeutka</span>
      </div>

      <div class="about-team__member wow-wipe-bottom" style="--i:1">
        <div class="about-team__photo">
          <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=500&h=600&fit=crop&q=80"
               alt="Aleksandra Nowak — Terapeutka" width="500" height="600" loading="lazy">
          <div class="about-team__overlay">
            <p>Specjalistka medycyny naturalnej. Ekspert od deep tissue i terapii bólu przewlekłego. Certyfikat ITEC London.</p>
          </div>
        </div>
        <h3>Aleksandra Nowak</h3>
        <span>Senior Terapeutka</span>
      </div>

      <div class="about-team__member wow-wipe-bottom" style="--i:2">
        <div class="about-team__photo">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=500&h=600&fit=crop&q=80"
               alt="Kamil Zieliński — Fizjoterapeuta" width="500" height="600" loading="lazy">
          <div class="about-team__overlay">
            <p>Fizjoterapeuta i masażysta sportowy. Pracował z zawodowymi sportowcami. Specjalizacja: masaż głęboki tkanek.</p>
          </div>
        </div>
        <h3>Kamil Zieliński</h3>
        <span>Fizjoterapeuta & Masażysta</span>
      </div>

      <div class="about-team__member wow-wipe-bottom" style="--i:3">
        <div class="about-team__photo">
          <img src="https://images.unsplash.com/photo-1594824476967-48c8b964ac31?w=500&h=600&fit=crop&q=80"
               alt="Yuki Tanaka — Refleksolog" width="500" height="600" loading="lazy">
          <div class="about-team__overlay">
            <p>Urodzona w Kioto, szkoliła się w tradycyjnej japońskiej technice Shiatsu. W Serenity prowadzi refleksologię i rytuały zen.</p>
          </div>
        </div>
        <h3>Yuki Tanaka</h3>
        <span>Refleksolog & Shiatsu</span>
      </div>
    </div>
  </div>
</section>

<!-- Gallery strip -->
<section class="about-gallery">
  <div class="about-gallery__track">
    <img src="https://images.unsplash.com/photo-1470259078422-826894b933aa?w=600&h=400&fit=crop&q=80" alt="Wnętrze spa — strefa świec" width="600" height="400" loading="lazy">
    <img src="https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?w=600&h=400&fit=crop&q=80" alt="Basen relaksacyjny" width="600" height="400" loading="lazy">
    <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=600&h=400&fit=crop&q=80" alt="Kamienie do masażu" width="600" height="400" loading="lazy">
    <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=600&h=400&fit=crop&q=80" alt="Strefa relaksu" width="600" height="400" loading="lazy">
    <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=600&h=400&fit=crop&q=80" alt="Gabinet prywatny" width="600" height="400" loading="lazy">
  </div>
</section>

<!-- Final CTA -->
<section class="cta-break-simple">
  <div class="container">
    <div class="cta-break-simple__inner wow-scale-center">
      <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?w=1400&h=500&fit=crop&q=80"
           alt="Terapeuta Serenity Spa przy pracy" width="1400" height="500" loading="lazy">
      <div class="cta-break-simple__overlay">
        <h2 class="t-display t-display--lg">Przekonaj się <em class="t-thin">osobiście</em></h2>
        <p class="t-body t-body--lg" style="color: rgba(255,255,255,0.6); margin-bottom: 24px;">Pierwszy rytuał z rabatem 15%</p>
        <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>" class="btn btn--light">
          Umów wizytę <span class="btn__arrow">→</span>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
