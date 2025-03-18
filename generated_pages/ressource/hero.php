<?php require_once "hero.php"; ?>
  
  <!-- SECTION 1 : HERO -->
  <section class="hero">
    <h2>
      <span class="green">AYUDAS 2025</span> | Elegibilidad para el aislamiento de buhardillas a
      <span class="green">1 euro</span>
    </h2>
    <div class="hero-content">
      <div class="hero-left">
        <h3>¡Ahorra en tu factura de energía!</h3>
        <ul class="checklist">
          <li><img src="https://em-content.zobj.net/source/emoji-one/64/white-heavy-check-mark_2705.png" alt="check" />Consigue hasta un 80% de ahorro en tu factura de luz</li>
          <li><img src="https://em-content.zobj.net/source/emoji-one/64/white-heavy-check-mark_2705.png" alt="check" />Subvención del Estado 2025 para tu aislamiento</li>
          <li><img src="https://em-content.zobj.net/source/emoji-one/64/white-heavy-check-mark_2705.png" alt="check" />Mejora el confort térmico de tu hogar</li>
          <li><img src="https://em-content.zobj.net/source/emoji-one/64/white-heavy-check-mark_2705.png" alt="check" />Instalación realizada por expertos cualificados</li>
          <li><img src="https://em-content.zobj.net/source/emoji-one/64/white-heavy-check-mark_2705.png" alt="check" />Materiales de alta calidad con garantía de 25 años</li>
        </ul>
      </div>
      <div class="hero-right">
        <h3>Solicita tu presupuesto</h3>
        <!-- 3) Le formulaire pointe sur la même page (action="") -->
        <form id="formulario-hero" action="" method="POST">
          <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre" name="nombre" placeholder="Tu nombre" required />
          </div>
          <div class="form-group">
            <label for="telefono">Teléfono</label>
            <input type="tel" id="telefono" name="telefono" placeholder="Tu teléfono" required />
          </div>
          <div class="form-group">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="Tu correo electrónico" required />
          </div>
          <div class="form-group">
            <label for="mensaje">Mensaje (opcional)</label>
            <textarea id="mensaje" name="mensaje" rows="4" placeholder="Cuéntanos más sobre tu proyecto..."></textarea>
          </div>
          <!-- Bouton => .submit-btn => identique à .eligibility-btn -->
          <button type="submit" class="submit-btn">Enviar</button>
        </form>
      </div>

      <!-- AJOUT DE LA CARTE À DROITE -->
      <div class="hero-map">
        <h3>Localización</h3>
        <div id="map"></div>
      </div>
    </div>
  </section>