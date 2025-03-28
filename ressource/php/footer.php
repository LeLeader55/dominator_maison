<?php require_once "footer.php"; ?>

 
<!-- FOOTER -->
<footer class="footer-dark">
  <div class="footer-container">
    <!-- ÉLÉMENT 1 : BLOC TÉLÉPHONE -->
    <div class="footer-item phone-block">
      <div class="footer-phone-wrapper">
        <a href="tel:+33622906082" class="footer-phone pulse-ring">
          📞 +33 6 22 90 60 82
        </a>
      </div>
    </div>

    <!-- ÉLÉMENT 2 : AVIS -->
    <div class="footer-item rating-block">
      <p class="footer-trust">✔ Certificado por entidades oficiales</p>
      <div class="rating-stars">
        ⭐⭐⭐⭐⭐
        <span class="rating-note">4,9/5 - 160 opiniones</span>
      </div>
    </div>

    <!-- ÉLÉMENT 3 : BOUTON ÉLIGIBILIDAD -->
    <div class="footer-item">
      <a href="#formulario-hero" class="eligibility-btn pulse-btn">
        ✅ Verificar mi elegibilidad
      </a>
    </div>
  </div>
  <div class="footer-bottom">
    <p>© 2025 Programa de Renovación Energética</p>
    <p>Hecho con ❤️ para un futuro sostenible</p>
  </div>


  <script>
  const btn = document.getElementById('openBurgerMenu');
  const menu = document.getElementById('burgerSlideMenu');

  btn.addEventListener('click', function () {
    menu.classList.toggle('open');
  });

  // Ferme le menu si on clique en dehors
  document.addEventListener('click', function (e) {
    if (!menu.contains(e.target) && !btn.contains(e.target)) {
      menu.classList.remove('open');
    }
  });
</script>
</footer>