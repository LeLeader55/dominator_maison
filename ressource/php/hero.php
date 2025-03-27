<?php

// Fonction spinner adaptée spécifiquement pour la section HERO
function spinnerTexteHero($city = '') {
    $texteH2 = '<span class="green">{AYUDAS 2025|SUBVENCIONES 2025|APOYOS 2025|INICIATIVAS 2025|AYUDA ENERGÉTICA 2025|PLAN DE AISLAMIENTO 2025|PROGRAMA DE RENOVACIÓN 2025|BONIFICACIONES 2025}</span> |
    {Elegibilidad para el aislamiento de buhardillas a|Criterios para acceder al aislamiento de buhardillas por|Acceso al aislamiento subvencionado de buhardillas por|Verifica si puedes beneficiarte del aislamiento por|Consulta tu elegibilidad para aislamiento por|¿Eres apto para el aislamiento de buhardillas por|Revisa si calificas para aislamiento de buhardillas por|Comprobación de elegibilidad para aislamiento a}
    <span class="green">{1 euro|1 €|un euro|el simbólico euro|solo 1€|únicamente 1 euro|tan solo 1 €|1€ subvencionado}</span> en ' . htmlspecialchars($city);

    $h3 = '{¡Ahorra en tu factura de energía!|¡Reduce el coste de tu energía hoy mismo!|¡Disminuye tu gasto energético mensual!|¡Optimiza tu consumo eléctrico y ahorra!|¡Recorta tu factura de luz fácilmente!|¡Reduce hasta un 80% tu factura energética!|¡Gasta menos en calefacción y electricidad!|¡Empieza a ahorrar energía en casa ahora!}';

    $checklistItems = [
        '{Consigue hasta un 80% de ahorro en tu factura de luz|Reduce tu factura de luz hasta un 80%|Ahorra hasta un 80% en tu consumo eléctrico|Disminuye el gasto energético en un 80%|Logra una reducción del 80% en tu factura de electricidad|Obtén un ahorro del 80% en energía|Reduce tu consumo de luz con un ahorro de hasta el 80%|Recorta tu factura eléctrica hasta en un 80%}',

        '{Subvención del Estado 2025 para tu aislamiento|Ayuda estatal 2025 para el aislamiento térmico|Programa de subvención 2025 aprobado por el Estado|Apoyo gubernamental 2025 para renovar tu aislamiento|Aislamiento financiado por el Estado en 2025|Iniciativa estatal 2025 para mejorar el aislamiento|Bono estatal 2025 para tu aislamiento térmico|Plan nacional 2025 de aislamiento energético}',

        '{Mejora el confort térmico de tu hogar|Aumenta el bienestar térmico de tu casa|Haz tu hogar más confortable todo el año|Disfruta de una temperatura ideal en casa|Optimiza el ambiente térmico de tu vivienda|Incrementa el confort en invierno y verano|Asegura una mejor temperatura interior|Eleva la calidad térmica de tu hogar}',

        '{Instalación realizada por expertos cualificados|Trabajo efectuado por técnicos certificados|Montaje garantizado por profesionales RGE|Instalación profesional con operarios especializados|Obra ejecutada por personal cualificado|Aislamiento colocado por instaladores expertos|Servicio realizado por técnicos acreditados|Intervención llevada a cabo por profesionales certificados}',

        '{Materiales de alta calidad con garantía de 25 años|Uso de materiales premium garantizados 25 años|Aislantes duraderos y certificados con 25 años de garantía|Productos térmicos de calidad superior con respaldo de 25 años|Componentes aislantes con garantía oficial de 25 años|Material garantizado por 25 años de rendimiento térmico|Aislamiento de larga duración con garantía extendida|Tecnología aislante avanzada con garantía de 25 años}'
    ];

    $texte = preg_replace_callback('/\{(.*?)\}/', function($matches) {
        $options = explode('|', $matches[1]);
        return $options[array_rand($options)];
    }, $texteH2);

    ob_start();
?>

<!-- SECTION 1 : HERO -->
<section class="hero">
  <h2><?= $texte ?></h2>

  <div class="hero-content">
    <div class="hero-left">
      <h3><?= spinnerTexte($h3) ?></h3>
      <ul class="checklist">
        <?php foreach ($checklistItems as $item): ?>
          <li><img src="https://em-content.zobj.net/source/emoji-one/64/white-heavy-check-mark_2705.png" alt="check" /><?= spinnerTexte($item) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="hero-right">
      <h3>Solicita tu presupuesto</h3>
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
        <button type="submit" class="submit-btn">Enviar</button>
      </form>
    </div>

    <div class="hero-map">
      <h3>Localización</h3>
      <div id="map"></div>
    </div>
  </div>
</section>

<?php
    return ob_get_clean();