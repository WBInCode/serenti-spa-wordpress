<?php
/**
 * Template Name: Polityka prywatności
 *
 * Czytelny layout z TOC sidebar + czysta typografia
 */

get_header();
?>

<!-- Inner Page Hero -->
<section class="inner-hero inner-hero--compact">
  <div class="inner-hero__mesh" aria-hidden="true"></div>
  <div class="container">
    <nav class="breadcrumbs" aria-label="Breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Strona główna</a>
      <span class="breadcrumbs__sep">·</span>
      <span aria-current="page">Polityka prywatności</span>
    </nav>
    <h1 class="t-display t-display--xl inner-hero__title">
      Polityka <em class="t-thin">prywatności</em>
    </h1>
    <p class="t-body t-body--lg inner-hero__subtitle">
      Ostatnia aktualizacja: <?php echo esc_html( date( 'j F Y' ) ); ?>
    </p>
  </div>
</section>

<!-- Privacy Content -->
<section class="privacy-section">
  <div class="container">
    <div class="privacy-grid">

      <!-- Sticky TOC sidebar -->
      <aside class="privacy-toc wow-blur-reveal" aria-label="Spis treści">
        <p class="privacy-toc__title">Spis treści</p>
        <ul>
          <li><a href="#pp-admin">1. Administrator danych</a></li>
          <li><a href="#pp-scope">2. Zakres zbieranych danych</a></li>
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
      <div class="privacy-content wow-blur-reveal">

        <div id="pp-admin" class="privacy-content__section">
          <h2>1. Administrator danych osobowych</h2>
          <p>Administratorem Twoich danych osobowych jest <strong>Serenity Spa Sp. z o.o.</strong> z siedzibą przy ul. Spokojnej 12, 00-001 Warszawa, NIP: 1234567890, REGON: 123456789.</p>
          <p>W sprawach związanych z ochroną danych osobowych prosimy o kontakt pod adresem: <a href="mailto:rodo@serenityspa.pl">rodo@serenityspa.pl</a></p>
        </div>

        <div id="pp-scope" class="privacy-content__section">
          <h2>2. Zakres zbieranych danych</h2>
          <p>W ramach korzystania z naszej strony internetowej i usług możemy zbierać następujące dane:</p>
          <ul>
            <li>Imię i nazwisko</li>
            <li>Adres e-mail</li>
            <li>Numer telefonu</li>
            <li>Adres IP i dane dotyczące urządzenia</li>
            <li>Informacje o preferencjach zabiegowych (w ramach formularza rezerwacji)</li>
            <li>Dane zbierane automatycznie przez pliki cookies</li>
          </ul>
        </div>

        <div id="pp-purpose" class="privacy-content__section">
          <h2>3. Cel przetwarzania danych</h2>
          <p>Twoje dane osobowe przetwarzamy w celu:</p>
          <ul>
            <li>Realizacji usług i zabiegów spa</li>
            <li>Obsługi rezerwacji i kontaktu zwrotnego</li>
            <li>Wysyłki informacji marketingowych (za Twoją zgodą)</li>
            <li>Analizy statystycznej ruchu na stronie</li>
            <li>Zapewnienia bezpieczeństwa i prawidłowego funkcjonowania strony</li>
            <li>Realizacji obowiązków prawnych (np. rachunkowych)</li>
          </ul>
        </div>

        <div id="pp-basis" class="privacy-content__section">
          <h2>4. Podstawa prawna przetwarzania</h2>
          <p>Przetwarzanie Twoich danych odbywa się na podstawie:</p>
          <ul>
            <li><strong>Art. 6 ust. 1 lit. a RODO</strong> — Twoja zgoda (np. newsletter, marketing)</li>
            <li><strong>Art. 6 ust. 1 lit. b RODO</strong> — niezbędność do wykonania umowy (rezerwacja zabiegu)</li>
            <li><strong>Art. 6 ust. 1 lit. c RODO</strong> — obowiązek prawny (rachunkowość, podatki)</li>
            <li><strong>Art. 6 ust. 1 lit. f RODO</strong> — prawnie uzasadniony interes administratora (analityka, bezpieczeństwo)</li>
          </ul>
        </div>

        <div id="pp-recipients" class="privacy-content__section">
          <h2>5. Odbiorcy danych</h2>
          <p>Twoje dane mogą być przekazywane:</p>
          <ul>
            <li>Dostawcom usług hostingowych i IT</li>
            <li>Dostawcom usług płatniczych</li>
            <li>Firmom analitycznym (Google Analytics)</li>
            <li>Organom państwowym — wyłącznie na podstawie obowiązujących przepisów prawa</li>
          </ul>
          <p>Nie przekazujemy danych osobowych do państw trzecich poza EOG bez odpowiednich zabezpieczeń.</p>
        </div>

        <div id="pp-retention" class="privacy-content__section">
          <h2>6. Okres przechowywania danych</h2>
          <p>Twoje dane przechowujemy przez okres niezbędny do realizacji celów, dla których zostały zebrane:</p>
          <ul>
            <li>Dane z formularzy kontaktowych — do 12 miesięcy od ostatniego kontaktu</li>
            <li>Dane rezerwacyjne — przez okres świadczenia usługi + 5 lat (obowiązki rachunkowe)</li>
            <li>Dane marketingowe — do momentu wycofania zgody</li>
            <li>Logi serwera — do 12 miesięcy</li>
          </ul>
        </div>

        <div id="pp-rights" class="privacy-content__section">
          <h2>7. Twoje prawa</h2>
          <p>Zgodnie z RODO przysługują Ci następujące prawa:</p>
          <ul>
            <li><strong>Prawo dostępu</strong> do swoich danych osobowych</li>
            <li><strong>Prawo do sprostowania</strong> nieprawidłowych danych</li>
            <li><strong>Prawo do usunięcia</strong> danych („prawo do bycia zapomnianym")</li>
            <li><strong>Prawo do ograniczenia</strong> przetwarzania</li>
            <li><strong>Prawo do przenoszenia</strong> danych</li>
            <li><strong>Prawo do sprzeciwu</strong> wobec przetwarzania</li>
            <li><strong>Prawo do cofnięcia zgody</strong> w dowolnym momencie</li>
          </ul>
          <p>W celu realizacji swoich praw skontaktuj się z nami: <a href="mailto:rodo@serenityspa.pl">rodo@serenityspa.pl</a></p>
          <p>Masz również prawo wnieść skargę do Prezesa Urzędu Ochrony Danych Osobowych (PUODO).</p>
        </div>

        <div id="pp-cookies" class="privacy-content__section">
          <h2>8. Pliki cookies</h2>
          <p>Nasza strona wykorzystuje pliki cookies w celu:</p>
          <ul>
            <li>Zapewnienia prawidłowego funkcjonowania strony (cookies techniczne)</li>
            <li>Analizy ruchu na stronie (cookies analityczne — Google Analytics)</li>
            <li>Personalizacji treści i reklam (cookies marketingowe)</li>
          </ul>
          <p>Możesz zarządzać ustawieniami cookies w swojej przeglądarce. Wyłączenie cookies może wpłynąć na funkcjonowanie strony.</p>
        </div>

        <div id="pp-changes" class="privacy-content__section">
          <h2>9. Zmiany w polityce prywatności</h2>
          <p>Zastrzegamy sobie prawo do aktualizacji niniejszej Polityki Prywatności. O istotnych zmianach poinformujemy za pośrednictwem strony internetowej.</p>
        </div>

        <div id="pp-contact" class="privacy-content__section">
          <h2>10. Kontakt w sprawie danych osobowych</h2>
          <p>W przypadku pytań lub wątpliwości dotyczących przetwarzania danych osobowych, prosimy o kontakt:</p>
          <ul>
            <li>Email: <a href="mailto:rodo@serenityspa.pl">rodo@serenityspa.pl</a></li>
            <li>Telefon: <a href="tel:+48123456789">+48 123 456 789</a></li>
            <li>Adres: ul. Spokojna 12, 00-001 Warszawa</li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
