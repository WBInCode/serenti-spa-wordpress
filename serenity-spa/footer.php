<!-- ============================================
     FOOTER
     ============================================ -->
<footer class="footer">
  <div class="container">
    <div class="footer__grid">
      <div>
        <div class="footer__brand"><?php bloginfo( 'name' ); ?></div>
        <p class="footer__desc"><?php bloginfo( 'description' ); ?></p>
        <div class="footer__social">
          <a href="#" aria-label="Instagram">IG</a>
          <a href="#" aria-label="Facebook">FB</a>
          <a href="#" aria-label="TikTok">TK</a>
        </div>
      </div>
      <div class="footer__col">
        <div class="footer__col-title">Zabiegi</div>
        <ul>
          <li><a href="#">Masaż kamieniami</a></li>
          <li><a href="#">Aromaterapia</a></li>
          <li><a href="#">Masaż głęboki</a></li>
          <li><a href="#">Serenity Flow</a></li>
          <li><a href="#">Refleksologia</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <div class="footer__col-title">Informacje</div>
        <ul>
          <li><a href="<?php echo esc_url( home_url( '/o-nas/' ) ); ?>">O nas</a></li>
          <li><a href="<?php echo esc_url( home_url( '/uslugi/' ) ); ?>">Zabiegi</a></li>
          <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontakt</a></li>
          <li><a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Polityka prywatności</a></li>
        </ul>
      </div>
      <div class="footer__col">
        <div class="footer__col-title">Kontakt</div>
        <ul>
          <li><a href="tel:+48123456789">+48 123 456 789</a></li>
          <li><a href="mailto:kontakt@serenityspa.pl">kontakt@serenityspa.pl</a></li>
          <li><a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">ul. Spokojna 12<br>00-001 Warszawa</a></li>
          <li>Pn-Nd: 9:00 – 21:00</li>
        </ul>
      </div>
    </div>
    <div class="footer__bottom">
      <span>&copy; <?php echo esc_html( date( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?>. Wszelkie prawa zastrzeżone.</span>
      <span><a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Polityka prywatności</a> · <a href="<?php echo esc_url( home_url( '/kontakt/' ) ); ?>">Kontakt</a></span>
    </div>
  </div>
</footer>
</main>

<!-- Sticky Mobile CTA -->
<div class="mobile-cta">
  <a href="#book" class="btn">Zarezerwuj wizytę →</a>
</div>

<?php wp_footer(); ?>
</body>
</html>
