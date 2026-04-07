<?php
/**
 * Template Name: Strona główna Spa
 *
 * Główny szablon strony głównej Serenity Spa.
 */

get_header();
?>

<!-- ============================================
     HERO — Variant R: Ambient Morph
     ============================================ -->
<section class="hero" id="hero">
  <div class="hero__mesh" aria-hidden="true"></div>
  <div class="hero__blob hero__blob--1" aria-hidden="true"></div>
  <div class="hero__blob hero__blob--2" aria-hidden="true"></div>
  <div class="hero__blob hero__blob--3" aria-hidden="true"></div>

  <div class="hero__float hero__float--1 wow-wipe-left" aria-hidden="true">
    <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=400&h=560&fit=crop&q=80" alt="" width="400" height="560" loading="eager">
  </div>
  <div class="hero__float hero__float--2 wow-slide-right" aria-hidden="true">
    <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?w=300&h=400&fit=crop&q=80" alt="" width="300" height="400" loading="eager">
  </div>

  <div class="hero__content">
    <p class="t-tag hero__tag">Luksusowe Spa & Masaże</p>
    <h1 class="t-display t-display--hero hero__title">
      Odkryj <em>spokój</em><br>którego szukasz
    </h1>
    <p class="t-body t-body--lg hero__subtitle">
      Rytuały relaksu inspirowane naturą. Zabiegi, które przywracają harmonię ciała i umysłu w sercu miasta.
    </p>
    <div>
      <a href="#book" class="btn btn--primary">
        Zarezerwuj rytuał <span class="btn__arrow">→</span>
      </a>
    </div>
    <div class="hero__trust">
      <span class="hero__trust-stars">★★★★★</span>
      <span>4.9 / 5 — 320+ opinii Google</span>
    </div>
  </div>
</section>

<!-- ============================================
     PHILOSOPHY
     ============================================ -->
<section class="philosophy" id="philosophy">
  <div class="container">
    <div class="philosophy__grid">
      <div class="philosophy__image wow-wipe-left">
        <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=700&h=900&fit=crop&q=80"
             alt="Wnętrze Serenity Spa z kamieniami do masażu i świecami"
             width="700" height="900" loading="lazy">
        <div class="philosophy__image-label wow-blur-reveal">
          ✦ 12 lat doświadczenia
        </div>
      </div>
      <div class="philosophy__text">
        <p class="t-tag wow-blur-reveal">Nasza filozofia</p>
        <h2 class="t-display t-display--xl wow-blur-reveal">
          Twoje ciało<br><em class="t-thin">pamięta stres</em>
        </h2>
        <p class="t-body t-body--lg wow-blur-reveal">
          Codzienne napięcie odkłada się w mięśniach, ścięgnach i myślach. W Serenity Spa wierzymy, że prawdziwy relaks zaczyna się od uważności — każdy zabieg jest rytuałem, nie procedurą.
        </p>
        <a href="#services" class="btn btn--primary wow-blur-reveal">
          Poznaj nasze rytuały <span class="btn__arrow">→</span>
        </a>
        <div class="philosophy__stats wow-blur-reveal">
          <div class="stat">
            <div class="stat__number" data-count="12">12</div>
            <div class="stat__label">Lat<br>doświadczenia</div>
          </div>
          <div class="stat">
            <div class="stat__number" data-count="8500">8 500+</div>
            <div class="stat__label">Zadowolonych<br>klientów</div>
          </div>
          <div class="stat">
            <div class="stat__number" data-count="24">24</div>
            <div class="stat__label">Unikalne<br>rytuały</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     SERVICES — Bento Grid
     ============================================ -->
<section class="services" id="services">
  <div class="container">
    <div class="services__header">
      <p class="t-tag wow-blur-reveal">Nasze zabiegi</p>
      <h2 class="t-display t-display--xl wow-blur-reveal">
        Rytuały <em class="t-thin">stworzone dla Ciebie</em>
      </h2>
      <p class="t-body t-body--lg wow-blur-reveal" style="margin: 16px auto 0;">
        Każdy zabieg jest spersonalizowanym doświadczeniem — od aromaterapii po głęboki masaż tkanek.
      </p>
    </div>

    <div class="bento">
      <div class="bento__card bento__card--1 bento__card--image wow-wipe-bottom"
           style="background-image: url('https://images.unsplash.com/photo-1540555700478-4be289fbec6d?w=900&h=600&fit=crop&q=80');">
        <div class="bento__card-content">
          <div class="bento__card-title">Masaż Gorącymi Kamieniami</div>
          <div class="bento__card-desc">90 minut głębokiego relaksu z bazaltowymi kamieniami i olejkami eterycznymi</div>
          <div class="bento__card-price">od 280 zł</div>
        </div>
      </div>

      <div class="bento__card bento__card--2 bento__card--text wow-slide-right" style="--i:1">
        <div>
          <div class="bento__text-title">Rytuał Aromaterapii</div>
          <div class="bento__text-desc">Holistyczny zabieg łączący masaż z dobranym indywidualnie zestawem olejków.</div>
        </div>
        <div class="bento__text-price">od 220 zł</div>
      </div>

      <div class="bento__card bento__card--3 bento__card--text wow-slide-right" style="--i:2; background: var(--bg-sage);">
        <div>
          <div class="bento__text-title">Masaż Głęboki Tkanek</div>
          <div class="bento__text-desc">Intensywna terapia manualna kierowana na przewlekłe napięcia i bóle mięśniowe.</div>
        </div>
        <div class="bento__text-price">od 250 zł</div>
      </div>

      <div class="bento__card bento__card--4 bento__card--image wow-blur-reveal"
           style="background-image: url('https://images.unsplash.com/photo-1507652313519-d4e9174996dd?w=500&h=400&fit=crop&q=80');">
        <div class="bento__card-content">
          <div class="bento__card-title">Peeling Ciała</div>
          <div class="bento__card-price">od 160 zł</div>
        </div>
      </div>

      <div class="bento__card bento__card--5 bento__card--image wow-scale-center"
           style="background-image: url('https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=900&h=500&fit=crop&q=80');">
        <div class="bento__card-content">
          <div class="bento__card-title">Rytuał Signature — „Serenity Flow"</div>
          <div class="bento__card-desc">Nasz autorski 120-minutowy zabieg łączący masaż, aromaterapię i medytację dźwiękową</div>
          <div class="bento__card-price">od 420 zł</div>
        </div>
      </div>

      <div class="bento__card bento__card--6 bento__card--text wow-blur-reveal" style="background: var(--bg-lavender);">
        <div>
          <div class="bento__text-title">Refleksologia Stóp</div>
          <div class="bento__text-desc">Precyzyjna stymulacja punktów refleksyjnych przywracająca równowagę energetyczną.</div>
        </div>
        <div class="bento__text-price">od 180 zł</div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     PROCESS — How It Works
     ============================================ -->
<section class="process" id="process">
  <div class="container">
    <div class="process__header">
      <p class="t-tag wow-blur-reveal">Jak to działa</p>
      <h2 class="t-display t-display--xl wow-blur-reveal">
        Twoja droga <em class="t-thin">do relaksu</em>
      </h2>
    </div>

    <div class="timeline">
      <div class="timeline__line" aria-hidden="true">
        <svg width="2" height="100%" preserveAspectRatio="none">
          <line x1="1" y1="0" x2="1" y2="100%" />
        </svg>
      </div>

      <div class="timeline__step wow-slide-left" style="--i:0">
        <div class="timeline__dot">01</div>
        <div class="timeline__text">
          <h3>Konsultacja online</h3>
          <p>Wypełnij krótki formularz lub zadzwoń. Dopasujemy rytuał do Twoich potrzeb i preferencji — nawet przed wizytą.</p>
        </div>
      </div>

      <div class="timeline__step wow-slide-left" style="--i:1">
        <div class="timeline__dot">02</div>
        <div class="timeline__text">
          <h3>Powitanie i diagnoza</h3>
          <p>Na miejscu nasz terapeuta przeprowadzi krótki wywiad ciała — sprawdzi napięcia, postawę i samopoczucie.</p>
        </div>
      </div>

      <div class="timeline__step wow-slide-left" style="--i:2">
        <div class="timeline__dot">03</div>
        <div class="timeline__text">
          <h3>Rytuał — czas na Ciebie</h3>
          <p>Zamknij oczy. Aromatyczne olejki, ciepłe kamienie i precyzyjne dłonie terapeuty — to Twój moment.</p>
        </div>
      </div>

      <div class="timeline__step wow-slide-left" style="--i:3">
        <div class="timeline__dot">04</div>
        <div class="timeline__text">
          <h3>Herbata i zalecenia</h3>
          <p>Po zabiegu zrelaksujesz się przy autorskiej herbacie ziołowej. Otrzymasz indywidualne zalecenia na dni po wizycie.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     CTA BREAK — Book now
     ============================================ -->
<section class="cta-break" id="book">
  <div class="container">
    <div class="cta-break__inner wow-scale-center">
      <div class="cta-break__image">
        <img src="https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?w=700&h=600&fit=crop&q=80"
             alt="Basen relaksacyjny w Serenity Spa"
             width="700" height="600" loading="lazy">
      </div>
      <div class="cta-break__content">
        <p class="t-tag">Zarezerwuj wizytę</p>
        <h2 class="t-display t-display--lg">
          Pozwól sobie <em class="t-thin">na chwilę ciszy</em>
        </h2>
        <p class="t-body t-body--lg">
          Wybierz termin, który Ci odpowiada. Oddzwonimy w ciągu godziny, aby potwierdzić rezerwację.
        </p>

        <form class="contact-form" id="contactForm" novalidate>
          <div style="display:grid; gap:16px; margin-bottom:16px;">
            <div class="form-field">
              <input type="text" id="fname" name="fname" placeholder=" " required autocomplete="given-name">
              <label for="fname">Imię</label>
            </div>
            <div class="form-field">
              <input type="tel" id="phone" name="phone" placeholder=" " required autocomplete="tel">
              <label for="phone">Telefon</label>
            </div>
            <div class="form-field">
              <select id="service" name="service" required>
                <option value="" disabled selected>Wybierz zabieg</option>
                <option value="hot-stones">Masaż Gorącymi Kamieniami</option>
                <option value="aromatherapy">Rytuał Aromaterapii</option>
                <option value="deep-tissue">Masaż Głęboki Tkanek</option>
                <option value="signature">Serenity Flow (Signature)</option>
                <option value="body-scrub">Peeling Ciała</option>
                <option value="reflexology">Refleksologia Stóp</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn--light">
            Wyślij rezerwację <span class="btn__arrow">→</span>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     GALLERY — Horizontal Scroll
     ============================================ -->
<section class="gallery" id="gallery">
  <div class="gallery__header">
    <div>
      <p class="t-tag wow-blur-reveal">Galeria</p>
      <h2 class="t-display t-display--xl wow-blur-reveal">
        Nasza <em class="t-thin">przestrzeń</em>
      </h2>
    </div>
    <div class="gallery__header-right wow-blur-reveal">
      <p class="t-body" style="color: var(--text-muted); font-size: 0.85rem;">Przewiń w bok →</p>
    </div>
  </div>

  <div class="gallery__track">
    <div class="gallery__item">
      <img src="https://images.unsplash.com/photo-1470259078422-826894b933aa?w=500&h=650&fit=crop&q=80"
           alt="Strefa relaksu ze świecami" width="500" height="650" loading="lazy">
      <div class="gallery__item-overlay">
        <span class="gallery__item-label">Strefa świec</span>
      </div>
    </div>
    <div class="gallery__item">
      <img src="https://images.unsplash.com/photo-1600334089648-b0d9d3028eb2?w=500&h=650&fit=crop&q=80"
           alt="Gabinet masażu" width="500" height="650" loading="lazy">
      <div class="gallery__item-overlay">
        <span class="gallery__item-label">Gabinet prywatny</span>
      </div>
    </div>
    <div class="gallery__item">
      <img src="https://images.unsplash.com/photo-1596178060671-7a80dc8059ea?w=500&h=650&fit=crop&q=80"
           alt="Basen relaksacyjny" width="500" height="650" loading="lazy">
      <div class="gallery__item-overlay">
        <span class="gallery__item-label">Strefa wodna</span>
      </div>
    </div>
    <div class="gallery__item">
      <img src="https://images.unsplash.com/photo-1544161515-4ab6ce6db874?w=500&h=650&fit=crop&q=80"
           alt="Kamienie do masażu" width="500" height="650" loading="lazy">
      <div class="gallery__item-overlay">
        <span class="gallery__item-label">Hot stones</span>
      </div>
    </div>
    <div class="gallery__item">
      <img src="https://images.unsplash.com/photo-1507652313519-d4e9174996dd?w=500&h=650&fit=crop&q=80"
           alt="Zabiegi na twarz" width="500" height="650" loading="lazy">
      <div class="gallery__item-overlay">
        <span class="gallery__item-label">Zabiegi twarzy</span>
      </div>
    </div>
    <div class="gallery__item">
      <img src="https://images.unsplash.com/photo-1515377905703-c4788e51af15?w=500&h=650&fit=crop&q=80"
           alt="Relaks w spa" width="500" height="650" loading="lazy">
      <div class="gallery__item-overlay">
        <span class="gallery__item-label">Strefa ciszy</span>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     TESTIMONIALS — Marquee
     ============================================ -->
<section class="testimonials" id="testimonials">
  <div class="container">
    <div class="testimonials__header">
      <p class="t-tag wow-blur-reveal">Opinie klientów</p>
      <h2 class="t-display t-display--xl wow-blur-reveal">
        Mówią <em class="t-thin">o nas</em>
      </h2>
    </div>
  </div>

  <div class="marquee">
    <div class="marquee__inner">
      <div class="marquee__card">
        <div class="marquee__stars">★★★★★</div>
        <p class="marquee__quote">„Masaż gorącymi kamieniami w Serenity to czysta magia. Po godzinie czułam się jakby minął tydzień wakacji."</p>
        <div class="marquee__author">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=80&h=80&fit=crop&q=80" alt="Anna K." width="80" height="80" loading="lazy">
          <div>
            <div class="marquee__author-name">Anna Kowalska</div>
            <div class="marquee__author-role">Stała klientka od 3 lat</div>
          </div>
        </div>
      </div>
      <div class="marquee__card">
        <div class="marquee__stars">★★★★★</div>
        <p class="marquee__quote">„Atmosfera, zapachy, profesjonalizm — wszystko na najwyższym poziomie. Wreszcie spa, które rozumie czego potrzebuję."</p>
        <div class="marquee__author">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&q=80" alt="Marek B." width="80" height="80" loading="lazy">
          <div>
            <div class="marquee__author-name">Marek Borkowski</div>
            <div class="marquee__author-role">Manager IT</div>
          </div>
        </div>
      </div>
      <div class="marquee__card">
        <div class="marquee__stars">★★★★★</div>
        <p class="marquee__quote">„Serenity Flow to doświadczenie, które zmienia perspektywę. 120 minut absolutnej ciszy i odnowy. Wracam co miesiąc."</p>
        <div class="marquee__author">
          <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=80&h=80&fit=crop&q=80" alt="Kasia P." width="80" height="80" loading="lazy">
          <div>
            <div class="marquee__author-name">Katarzyna Pawłowska</div>
            <div class="marquee__author-role">Architektka wnętrz</div>
          </div>
        </div>
      </div>
      <div class="marquee__card">
        <div class="marquee__stars">★★★★★</div>
        <p class="marquee__quote">„Polecam każdemu kto potrzebuje prawdziwego resetu. Terapeuci słuchają i dobierają zabieg idealnie pod moje napięcia."</p>
        <div class="marquee__author">
          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Tomek W." width="80" height="80" loading="lazy">
          <div>
            <div class="marquee__author-name">Tomasz Wiśniewski</div>
            <div class="marquee__author-role">Przedsiębiorca</div>
          </div>
        </div>
      </div>
      <!-- Duplicate for seamless loop -->
      <div class="marquee__card">
        <div class="marquee__stars">★★★★★</div>
        <p class="marquee__quote">„Masaż gorącymi kamieniami w Serenity to czysta magia. Po godzinie czułam się jakby minął tydzień wakacji."</p>
        <div class="marquee__author">
          <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?w=80&h=80&fit=crop&q=80" alt="Anna K." width="80" height="80" loading="lazy">
          <div>
            <div class="marquee__author-name">Anna Kowalska</div>
            <div class="marquee__author-role">Stała klientka od 3 lat</div>
          </div>
        </div>
      </div>
      <div class="marquee__card">
        <div class="marquee__stars">★★★★★</div>
        <p class="marquee__quote">„Atmosfera, zapachy, profesjonalizm — wszystko na najwyższym poziomie. Wreszcie spa, które rozumie czego potrzebuję."</p>
        <div class="marquee__author">
          <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=80&h=80&fit=crop&q=80" alt="Marek B." width="80" height="80" loading="lazy">
          <div>
            <div class="marquee__author-name">Marek Borkowski</div>
            <div class="marquee__author-role">Manager IT</div>
          </div>
        </div>
      </div>
      <div class="marquee__card">
        <div class="marquee__stars">★★★★★</div>
        <p class="marquee__quote">„Serenity Flow to doświadczenie, które zmienia perspektywę. 120 minut absolutnej ciszy i odnowy. Wracam co miesiąc."</p>
        <div class="marquee__author">
          <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=80&h=80&fit=crop&q=80" alt="Kasia P." width="80" height="80" loading="lazy">
          <div>
            <div class="marquee__author-name">Katarzyna Pawłowska</div>
            <div class="marquee__author-role">Architektka wnętrz</div>
          </div>
        </div>
      </div>
      <div class="marquee__card">
        <div class="marquee__stars">★★★★★</div>
        <p class="marquee__quote">„Polecam każdemu kto potrzebuje prawdziwego resetu. Terapeuci słuchają i dobierają zabieg idealnie pod moje napięcia."</p>
        <div class="marquee__author">
          <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=80&h=80&fit=crop&q=80" alt="Tomek W." width="80" height="80" loading="lazy">
          <div>
            <div class="marquee__author-name">Tomasz Wiśniewski</div>
            <div class="marquee__author-role">Przedsiębiorca</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============================================
     ABOUT — Dark section
     ============================================ -->
<section class="section--dark" id="about">
  <div class="container">
    <div class="about__grid">
      <div class="about__images">
        <div class="about__img wow-wipe-bottom">
          <img src="https://images.unsplash.com/photo-1519823551278-64ac92734fb1?w=500&h=620&fit=crop&q=80"
               alt="Terapeuta w Serenity Spa" width="500" height="620" loading="lazy">
        </div>
        <div class="about__img wow-blur-reveal">
          <img src="https://images.unsplash.com/photo-1470259078422-826894b933aa?w=500&h=620&fit=crop&q=80"
               alt="Strefa relaksu ze świecami" width="500" height="620" loading="lazy">
        </div>
      </div>
      <div class="about__text">
        <p class="t-tag wow-blur-reveal">O Serenity</p>
        <h2 class="t-display t-display--xl wow-blur-reveal">
          Tworzymy <em class="t-thin">przestrzeń ciszy</em>
        </h2>
        <p class="t-body t-body--lg wow-blur-reveal">
          Serenity Spa powstało z przekonania, że w codziennym pędzie brakuje nam momentu zatrzymania. Nasz zespół 8 certyfikowanych terapeutów łączy tradycje ajurwedyjskie z nowoczesną fizjoterapią.
        </p>
        <p class="t-body t-body--lg wow-blur-reveal">
          Każdy gabinet zaprojektowano tak, aby działał na zmysły — od temperatury światła po kompozycję zapachów. To nie wizyta w spa. To rytuał.
        </p>
        <a href="#book" class="btn btn--light wow-blur-reveal">
          Poznaj nas bliżej <span class="btn__arrow">→</span>
        </a>
      </div>
    </div>
  </div>
  <div class="about__deco wow-slide-right" aria-hidden="true">Serenity</div>
</section>

<!-- ============================================
     FINAL CTA
     ============================================ -->
<section class="final-cta">
  <div class="final-cta__blob final-cta__blob--1" aria-hidden="true"></div>
  <div class="final-cta__blob final-cta__blob--2" aria-hidden="true"></div>

  <div class="final-cta__content container">
    <p class="t-tag wow-blur-reveal" style="color: var(--accent-lavender);">Zarezerwuj teraz</p>
    <h2 class="t-display t-display--hero wow-blur-reveal">
      Czas na <em>Twój</em><br>moment ciszy
    </h2>
    <p class="t-body t-body--lg wow-blur-reveal">
      Zadzwoń lub zarezerwuj online — pierwszy rytuał z rabatem 15%.
    </p>
    <div class="wow-blur-reveal" style="display:flex; gap:16px; justify-content:center; flex-wrap:wrap;">
      <a href="#book" class="btn btn--light">
        Zarezerwuj online <span class="btn__arrow">→</span>
      </a>
      <a href="tel:+48123456789" class="btn btn--light" style="border-color: rgba(255,255,255,0.15);">
        +48 123 456 789
      </a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
