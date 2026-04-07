<?php
/**
 * Template Name: Polityka prywatności
 *
 * Clean legal page with visual polish — decorative sidebar accent,
 * scroll progress, highlighted callouts, better hierarchy
 */

get_header();
?>

<!-- ============================================
     HERO — Compact with decorative accent
     ============================================ -->
<section class="pg-priv-hero">
  <div class="pg-priv-hero__mesh" aria-hidden="true"></div>
  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a>
      <span class="breadcrumbs__sep">·</span>
      <span aria-current="page">Polityka prywatności</span>
    </nav>
    <h1 class="t-display t-display--xl">
      Polityka <em class="t-thin">prywatności</em>
    </h1>
    <p class="t-body t-body--lg" style="color: var(--text-secondary);">
      Ostatnia aktualizacja: <?php echo esc_html( date( 'j F Y' ) ); ?>
    </p>
  </div>
</section>

<!-- ============================================
     CONTENT — TOC + article
     ============================================ -->
<section class="pg-priv">
  <div class="container">
    <div class="pg-priv__grid">

      <!-- Sticky TOC sidebar -->
      <aside class="pg-priv__toc" aria-label="Spis treści">
        <p class="pg-priv__toc-title">Spis treści</p>
        <ul>
          <li><a href="#pp-admin">1. Administrator danych</a></li>
          <li><a href="#pp-scope">2. Zakres danych</a></li>
          <li><a href="#pp-purpose">3. Cel przetwarzania</a></li>
          <li><a href="#pp-basis">4. Podstawa prawna</a></li>
          <li><a href="#pp-recipients">5. Odbiorcy danych</a></li>
          <li><a href="#pp-retention">6. Okres przechowywania</a></li>
          <li><a href="#pp-rights">7. Twoje prawa</a></li>
          <li><a href="#pp-cookies">8. Pliki cookies</a></li>
          <li><a href="#pp-changes">9. Zmiany w polityce</a></li>
          <li><a href="#pp-contact">10. Kontakt</a></li>
        </ul>
      </aside>

      <!-- Content -->
      <article class="pg-priv__content">

        <div id="pp-admin" class="pg-priv__section">
          <h2>1. Administrator danych osobowych</h2>
          <p>Administratorem Twoich danych osobowych jest <strong>Serenity Spa Sp. z o.o.</strong> z siedzibą przy ul. Spokojnej 12, 00-001 Warszawa, NIP: 1234567890, REGON: 123456789.</p>
          <p>W sprawach związanych z ochroną danych osobowych prosimy o kontakt pod adresem: <a href="mailto:rodo@serenityspa.pl">rodo@serenityspa.pl</a></p>
        </div>

        <div id="pp-scope" class="pg-priv__section">
          <h2>2. Zakres zbieranych danych</h2>
          <p>W ramach korzystania z naszej strony i usług możemy zbierać:</p>
          <ul>
            <li>Imię i nazwisko</li>
            <li>Adres e-mail</li>
            <li>Numer telefonu</li>
            <li>Adres IP i dane dotyczące urządzenia</li>
            <li>Informacje o preferencjach zabiegowych</li>
            <li>Dane zbierane automatycznie przez pliki cookies</li>
          </ul>
        </div>

        <div id="pp-purpose" class="pg-priv__section">
          <h2>3. Cel przetwarzania danych</h2>
          <p>Twoje dane przetwarzamy w celu:</p>
          <ul>
            <li>Realizacji usług i zabiegów spa</li>
            <li>Obsługi rezerwacji i kontaktu zwrotnego</li>
            <li>Wysyłki informacji marketingowych (za Twoją zgodą)</li>
            <li>Analizy statystycznej ruchu na stronie</li>
            <li>Zapewnienia bezpieczeństwa strony</li>
            <li>Realizacji obowiązków prawnych</li>
          </ul>
        </div>

        <div id="pp-basis" class="pg-priv__section">
          <h2>4. Podstawa prawna przetwarzania</h2>
          <div class="pg-priv__callout">
            <p>Przetwarzanie odbywa się na podstawie RODO — rozporządzenia Parlamentu Europejskiego i Rady (UE) 2016/679.</p>
          </div>
          <ul>
            <li><strong>Art. 6 ust. 1 lit. a</strong> — Twoja zgoda (newsletter, marketing)</li>
            <li><strong>Art. 6 ust. 1 lit. b</strong> — niezbędność do wykonania umowy</li>
            <li><strong>Art. 6 ust. 1 lit. c</strong> — obowiązek prawny</li>
            <li><strong>Art. 6 ust. 1 lit. f</strong> — prawnie uzasadniony interes administratora</li>
          </ul>
        </div>

        <div id="pp-recipients" class="pg-priv__section">
          <h2>5. Odbiorcy danych</h2>
          <p>Twoje dane mogą być przekazywane:</p>
          <ul>
            <li>Dostawcom usług hostingowych i IT</li>
            <li>Dostawcom usług płatniczych</li>
            <li>Firmom analitycznym (Google Analytics)</li>
            <li>Organom państwowym — wyłącznie na podstawie przepisów prawa</li>
          </ul>
          <div class="pg-priv__callout">
            <p>Nie przekazujemy danych osobowych do państw trzecich poza EOG bez odpowiednich zabezpieczeń.</p>
          </div>
        </div>

        <div id="pp-retention" class="pg-priv__section">
          <h2>6. Okres przechowywania danych</h2>
          <ul>
            <li>Dane z formularzy kontaktowych — do 12 miesięcy od ostatniego kontaktu</li>
            <li>Dane rezerwacyjne — okres świadczenia usługi + 5 lat</li>
            <li>Dane marketingowe — do momentu wycofania zgody</li>
            <li>Logi serwera — do 12 miesięcy</li>
          </ul>
        </div>

        <div id="pp-rights" class="pg-priv__section">
          <h2>7. Twoje prawa</h2>
          <div class="pg-priv__callout pg-priv__callout--accent">
            <p>Jako użytkownikowi przysługuje Ci pełen zakres praw wynikających z RODO.</p>
          </div>
          <ul>
            <li><strong>Prawo dostępu</strong> do swoich danych</li>
            <li><strong>Prawo do sprostowania</strong> nieprawidłowych danych</li>
            <li><strong>Prawo do usunięcia</strong> danych</li>
            <li><strong>Prawo do ograniczenia</strong> przetwarzania</li>
            <li><strong>Prawo do przenoszenia</strong> danych</li>
            <li><strong>Prawo do sprzeciwu</strong> wobec przetwarzania</li>
            <li><strong>Prawo do cofnięcia zgody</strong> w dowolnym momencie</li>
          </ul>
          <p>Kontakt: <a href="mailto:rodo@serenityspa.pl">rodo@serenityspa.pl</a>. Masz również prawo wnieść skargę do PUODO.</p>
        </div>

        <div id="pp-cookies" class="pg-priv__section">
          <h2>8. Pliki cookies</h2>
          <p>Nasza strona wykorzystuje pliki cookies:</p>
          <ul>
            <li><strong>Techniczne</strong> — prawidłowe funkcjonowanie strony</li>
            <li><strong>Analityczne</strong> — Google Analytics</li>
            <li><strong>Marketingowe</strong> — personalizacja treści</li>
          </ul>
          <p>Możesz zarządzać ustawieniami cookies w przeglądarce.</p>
        </div>

        <div id="pp-changes" class="pg-priv__section">
          <h2>9. Zmiany w polityce prywatności</h2>
          <p>Zastrzegamy sobie prawo do aktualizacji niniejszej Polityki. O istotnych zmianach poinformujemy na stronie.</p>
        </div>

        <div id="pp-contact" class="pg-priv__section">
          <h2>10. Kontakt w sprawie danych</h2>
          <ul>
            <li>Email: <a href="mailto:rodo@serenityspa.pl">rodo@serenityspa.pl</a></li>
            <li>Telefon: <a href="tel:+48123456789">+48 123 456 789</a></li>
            <li>Adres: ul. Spokojna 12, 00-001 Warszawa</li>
          </ul>
        </div>

      </article>
    </div>
  </div>
</section>

<?php get_footer(); ?>
