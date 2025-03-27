<?php
function afficherTexteAdaptation2($city, $postal_code, $phone_number,$region) {
    ob_start();
    
    $blocs = ['<h4>Aislamiento térmico subvencionado en ' . htmlspecialchars($city) . '</h4>
    <p>
      {¿Quieres reducir tus facturas de energía sin gastar una fortuna?|¿Sabías que puedes aislar tu vivienda por solo 1€?|¿Buscas una solución económica para mejorar el aislamiento térmico de tu hogar?|¿Necesitas aumentar la eficiencia energética de tu vivienda sin realizar una gran inversión?|¿Sabías que existe un programa que cubre hasta el 100% del aislamiento térmico?}
      {Gracias al programa de aislamiento térmico subvencionado, puedes aislar tus buhardillas por tan solo 1€.|Este sistema, aprobado por el Ministerio de Medio Ambiente, te permite mejorar el aislamiento de tu hogar casi sin coste.|Con esta iniciativa, puedes renovar tu aislamiento térmico de manera sencilla y económica.|Gracias a esta ayuda estatal, puedes reforzar el aislamiento de tu vivienda con una mínima inversión.|Esta subvención permite a los hogares mejorar su eficiencia energética sin gastos adicionales.}
    </p>',
    
    '<h4>¿Cómo funciona el aislamiento subvencionado en ' . htmlspecialchars($city) . '?</h4>
    <p>
      {El programa de aislamiento por 1€ está diseñado para ayudar a los hogares a reducir su consumo de calefacción.|Este plan estatal permite a las familias acceder a un aislamiento de calidad por un coste simbólico.|Gracias a esta iniciativa, miles de viviendas ya han optimizado su confort térmico.|El objetivo del programa es proporcionar un aislamiento térmico eficaz a los hogares que lo necesiten.|Con este plan, puedes ahorrar en calefacción y ganar en bienestar térmico.}
      {Las empresas contaminantes financian estos trabajos para compensar sus emisiones de CO₂.|El sistema está financiado por compañías energéticas obligadas a reducir su impacto ambiental.|Las empresas del sector energético deben cubrir el coste del aislamiento como parte de sus compromisos ecológicos.|Este programa es posible gracias a los fondos aportados por industrias responsables de emisiones.|Los proveedores de electricidad, gas y petróleo financian íntegramente la instalación del aislamiento térmico.}
    </p>',
    
    '<h4>Aislamiento térmico de buhardillas y tejados en ' . htmlspecialchars($city) . '</h4>
    <p>
      {El tejado es la principal fuente de pérdida de calor en una vivienda.|Un techo mal aislado puede representar hasta el 30% de las fugas de energía en un hogar.|Sin un buen aislamiento en el tejado, el calor se disipa rápidamente, aumentando el gasto en calefacción.|Reducir las pérdidas térmicas en el tejado es clave para un hogar eficiente.|Asegurar un aislamiento adecuado en la parte superior de la casa es fundamental para reducir las facturas.}
      {Gracias a este programa, puedes mejorar el aislamiento de tus buhardillas y tejados sin realizar una gran inversión.|Con este plan, puedes aislar la parte superior de tu casa con materiales de alta calidad.|Los trabajos incluyen la instalación de aislamiento en techos y suelos de buhardillas.|Este plan cubre la aplicación de aislamiento térmico en zonas clave de la vivienda.|Aislar buhardillas y tejados te ayuda a optimizar el confort térmico sin esfuerzo.}
    </p>',
    
    '<h4>Materiales de alta eficiencia para un aislamiento óptimo en ' . htmlspecialchars($city) . '</h4>
    <p>
      {Para garantizar el máximo rendimiento térmico, utilizamos materiales de última generación.|Los aislamientos instalados dentro del programa están certificados para ofrecer la mejor eficiencia.|Los materiales empleados en este aislamiento garantizan un ahorro energético significativo.|Cada proyecto se realiza con materiales ecológicos y de alto rendimiento.|Los aislamientos térmicos de este programa cumplen con los estándares más exigentes.}
      {Se emplean aislantes como la lana de roca y la lana de vidrio para maximizar la retención del calor.|La instalación de aislamiento con lana mineral ofrece excelentes propiedades térmicas.|Este tipo de aislamiento permite reducir hasta un 30% el consumo energético de la vivienda.|Con este sistema, se optimiza la eficiencia energética sin necesidad de cambios estructurales.|Estos materiales proporcionan una barrera eficaz contra el frío en invierno y el calor en verano.}
    </p>',
    
    '<h4>¿Cómo acceder al programa de aislamiento térmico en ' . htmlspecialchars($city) . '?</h4>
    <p>
      {Acceder a este programa es fácil y rápido.|Solicitar el aislamiento subvencionado solo requiere unos simples pasos.|Puedes beneficiarte de este plan en pocos días.|El proceso es completamente gratuito y sin compromiso.|Nuestros especialistas se encargan de todos los trámites administrativos.}
      {Para verificar tu elegibilidad, contáctanos al ' . htmlspecialchars($phone_number) . '.|Llámanos al ' . htmlspecialchars($phone_number) . ' para comprobar si puedes acceder a esta ayuda.|Ponte en contacto con nuestro equipo al ' . htmlspecialchars($phone_number) . ' para recibir más información.|Consulta con nuestros expertos en el ' . htmlspecialchars($phone_number) . ' y descubre si cumples los requisitos.|No pierdas esta oportunidad: llama ahora al ' . htmlspecialchars($phone_number) . '.}
    </p>',


    '<h4>Beneficios del aislamiento térmico subvencionado en ' . htmlspecialchars($city) . ', ' . htmlspecialchars($region) . ' (' . htmlspecialchars($postal_code) . ')</h4>
<p>
  {Invertir en aislamiento térmico es la mejor forma de reducir el gasto en calefacción.|Un hogar bien aislado permite ahorrar hasta un 30% en consumo energético.|Una vivienda sin pérdidas térmicas proporciona un mayor confort sin aumentar la factura.|El aislamiento térmico es la clave para una casa más eficiente y ecológica.|Reducir la demanda de energía mediante el aislamiento térmico es una decisión inteligente.}
  {Este programa te permite disfrutar de múltiples ventajas sin coste alguno.|El aislamiento subvencionado mejora el bienestar sin afectar tu presupuesto.|Gracias a esta iniciativa, puedes optimizar tu consumo energético sin esfuerzo.|Aprovechar esta ayuda estatal significa mayor confort con menor inversión.|Con esta solución, puedes disfrutar de un hogar más cálido en invierno y fresco en verano.}
</p>

<ul>
  <li>{Reduce el consumo energético y ahorra en calefacción.|Disminuye el gasto en energía sin renunciar al confort.|Evita pérdidas de calor y mantén una temperatura estable.|Optimiza la eficiencia térmica sin cambiar tu sistema de calefacción.|Aprovecha mejor el calor generado en el hogar.}</li>
  <li>{Mejora la calidad de vida con un ambiente más confortable.|Mantén una temperatura agradable en todas las estaciones.|Elimina la sensación de frío en invierno y calor en verano.|Garantiza un hogar más acogedor y saludable.|Crea un entorno térmico equilibrado en toda la casa.}</li>
  <li>{Contribuye a la sostenibilidad y al respeto por el medio ambiente.|Reduce tu huella de carbono con menor consumo energético.|Apostar por el aislamiento es invertir en un futuro más ecológico.|Minimiza las emisiones contaminantes asociadas al consumo de energía.|Mejora la eficiencia de tu hogar sin afectar al planeta.}</li>
  <li>{Evita la aparición de humedades y moho en paredes y techos.|Un buen aislamiento protege contra la condensación y el deterioro.|El aislamiento térmico previene problemas de humedad en la vivienda.|Mantén tu hogar seco y protegido con una correcta barrera térmica.|Evita filtraciones y mejora la resistencia de los muros.}</li>
</ul>',

'<h4>¿Qué zonas de la casa se pueden aislar con este programa en ' . htmlspecialchars($city) . ', ' . htmlspecialchars($region) . '?</h4>
<p>
  {El programa de aislamiento subvencionado no solo cubre buhardillas y tejados.|Además de buhardillas, este plan permite aislar otras áreas clave de la casa.|Las mejoras térmicas incluyen diferentes zonas de la vivienda.|Existen varias opciones para reforzar el aislamiento térmico.|Este programa cubre múltiples áreas críticas de pérdida de calor.}
  {Los trabajos pueden aplicarse en techos, paredes y suelos.|El aislamiento se instala en espacios estratégicos para mayor eficiencia.|Cada intervención se adapta a la estructura de la vivienda.|El equipo de especialistas determina la mejor solución para cada hogar.|Los trabajos varían según las necesidades energéticas del inmueble.}
</p>

<ul>
  <li>{Buhardillas y áticos: evita la fuga de calor por la parte superior de la casa.|Refuerzo térmico en buhardillas para mejorar el confort interior.|Los áticos mal aislados son una gran fuente de pérdida de calor.|Aislar la buhardilla es una de las formas más efectivas de ahorrar energía.|Optimiza el aislamiento del techo para una mejor climatización.}</li>
  <li>{Forjados sanitarios: mejora la temperatura del suelo en invierno.|Evita el frío que sube desde el suelo con aislamiento en el forjado.|Un forjado mal aislado puede aumentar el gasto energético.|Reduce el impacto del frío en invierno con un suelo bien aislado.|Mantén una temperatura más estable en tu hogar con aislamiento de forjados.}</li>
  <li>{Paredes exteriores: evita la entrada de frío y calor desde el exterior.|El aislamiento de muros mejora la eficiencia energética de la casa.|Minimiza las oscilaciones térmicas con un revestimiento adecuado.|Protege tu vivienda contra temperaturas extremas.|Reduce la transferencia de calor entre el interior y el exterior.}</li>
  <li>{Garajes y sótanos: elimina zonas frías dentro del hogar.|Un garaje mal aislado puede afectar la temperatura de la casa.|Mejorar el aislamiento en sótanos evita filtraciones de frío.|Los espacios sin calefacción pueden beneficiarse del aislamiento térmico.|Un sótano aislado contribuye a la eficiencia global de la vivienda.}</li>
</ul>',

'<h4>¿Cuánto puedes ahorrar con el aislamiento subvencionado en ' . htmlspecialchars($city) . ', ' . htmlspecialchars($region) . ' (' . htmlspecialchars($postal_code) . ')?</h4>
<p>
  {El ahorro en calefacción puede superar los 400€ anuales con un aislamiento adecuado.|Una vivienda bien aislada reduce el consumo hasta un 30%.|Gracias a este programa, puedes disfrutar de un hogar más eficiente y económico.|Cada hogar puede beneficiarse de un ahorro energético significativo.|La reducción del gasto en calefacción es uno de los mayores beneficios de este plan.}
  {Este programa garantiza un confort térmico óptimo sin inversiones costosas.|Con esta iniciativa, puedes aprovechar el calor sin derrochar energía.|Mejorar el aislamiento significa gastar menos en calefacción y aire acondicionado.|La eficiencia energética es clave para reducir las facturas mensuales.|Menos pérdidas de calor implican un menor uso de la calefacción.}
</p>',

'<h4>¿Cómo solicitar el aislamiento subvencionado en ' . htmlspecialchars($city) . ', ' . htmlspecialchars($region) . '?</h4>
<p>
  {Solicitar esta ayuda es un proceso rápido y sin complicaciones.|Acceder a este beneficio es más fácil de lo que imaginas.|Puedes comenzar el proceso en pocos minutos.|No hay trámites complejos ni pagos anticipados.|El proceso es transparente y sin sorpresas.}
  {Nuestros expertos te guiarán paso a paso en la solicitud.|Nuestro equipo se encarga de todos los aspectos administrativos.|No tienes que preocuparte por la gestión de la ayuda.|Nos encargamos de todo para que disfrutes de un hogar más eficiente.|Los especialistas del programa te explicarán cada detalle.}
</p>

<p>
  {Para recibir más información, contáctanos al ' . htmlspecialchars($phone_number) . '.|Llama ahora al ' . htmlspecialchars($phone_number) . ' y asegura tu acceso a este beneficio.|Habla con nuestros asesores en el ' . htmlspecialchars($phone_number) . ' y confirma tu elegibilidad.|Solicita tu evaluación gratuita llamando al ' . htmlspecialchars($phone_number) . '.|No pierdas esta oportunidad: llama hoy mismo al ' . htmlspecialchars($phone_number) . '.}
</p>',


'<h4>Aislamiento subvencionado en ' . htmlspecialchars($city) . ', ' . htmlspecialchars($region) . ' (' . htmlspecialchars($postal_code) . '): confort y ahorro energético</h4>

<p>
  {¿Te gustaría mejorar la eficiencia térmica de tu hogar sin gastar una fortuna?|¿Sabías que puedes aislar tu vivienda con un coste mínimo?|¿Quieres reducir tu factura energética y mejorar tu confort?|¿Buscas una solución económica para mantener el calor en invierno?|El aislamiento térmico ya no es un lujo, sino una inversión inteligente.}  
  {Nuestro programa de aislamiento subvencionado en ' . htmlspecialchars($city) . ' te permite reducir el consumo de calefacción y aire acondicionado.|Gracias a las ayudas oficiales, puedes disfrutar de un hogar más eficiente sin coste inicial.|El aislamiento financiado por el programa de eficiencia energética te ayuda a ahorrar mes a mes.|No pierdas la oportunidad de aislar tu casa por tan solo 1€.|Este programa gubernamental cubre el coste del aislamiento para miles de familias en ' . htmlspecialchars($region) . '.}
</p>',

'<h4>¿Por qué aislar tu vivienda en ' . htmlspecialchars($city) . ', ' . htmlspecialchars($region) . '?</h4>

<ul>
  <li>{Reduce las pérdidas de calor y mejora el confort en casa.|Mantén una temperatura estable sin necesidad de subir la calefacción.|Evita la sensación de frío en invierno y el calor sofocante en verano.|Disfruta de un hogar más acogedor con menos gasto energético.|Un aislamiento eficiente mejora la calidad de vida en cualquier estación.}</li>
  <li>{Ahorra hasta un 30% en tus facturas de energía.|Menos consumo significa más dinero en tu bolsillo.|El aislamiento térmico es la clave para reducir el gasto en calefacción.|Evita el desperdicio de energía y paga menos cada mes.|Con una vivienda bien aislada, necesitarás menos calefacción y aire acondicionado.}</li>
  <li>{Contribuye a la protección del medio ambiente.|Menos consumo de energía significa menos emisiones de CO₂.|Haz que tu casa sea más ecológica y eficiente.|Ayuda a combatir el cambio climático con un menor uso de recursos.|Optar por un aislamiento eficiente reduce el impacto ambiental de tu hogar.}</li>
  <li>{Accede a materiales aislantes de alta calidad.|Las soluciones de aislamiento utilizadas cumplen con los estándares más exigentes.|Utilizamos materiales certificados para garantizar la máxima eficiencia.|El aislamiento se realiza con técnicas innovadoras para un rendimiento duradero.|Nuestra empresa selecciona los mejores materiales para una protección óptima.}</li>
</ul>',

'<h4>¿Cómo funciona el programa de aislamiento en ' . htmlspecialchars($city) . '?</h4>

<p>
  {Este programa de aislamiento subvencionado está diseñado para que puedas mejorar tu hogar sin preocupaciones.|Las ayudas para el aislamiento permiten financiar los trabajos sin coste adicional.|Gracias al sistema de certificados energéticos, las empresas contaminantes pagan los trabajos de aislamiento.|El Estado ha creado este programa para facilitar el acceso a un aislamiento de calidad.|No necesitas adelantar dinero: el aislamiento está cubierto por las ayudas disponibles.}  
  {Para beneficiarte de esta oferta, solo necesitas verificar tu elegibilidad y programar una visita técnica.|El proceso es rápido y sencillo: consulta si cumples los requisitos y agenda una inspección.|Nuestros técnicos evaluarán tu vivienda para determinar la mejor solución de aislamiento.|Cada hogar tiene necesidades diferentes, y por eso realizamos un estudio personalizado.|Confirma tu elegibilidad hoy mismo y empieza a ahorrar en energía cuanto antes.}
</p>

<h4>Materiales de aislamiento disponibles en ' . htmlspecialchars($city) . ', ' . htmlspecialchars($region) . '</h4>

<p>
  {Dependiendo de tu tipo de vivienda, aplicamos la mejor solución de aislamiento.|No todas las casas necesitan el mismo tipo de aislamiento: analizamos cuál es el más adecuado.|Utilizamos materiales eficientes y ecológicos para garantizar el máximo rendimiento.|Los aislamientos utilizados son certificados y cumplen con las normativas vigentes.|Cada solución de aislamiento está pensada para ofrecer durabilidad y máxima eficiencia.}  
  {Entre los materiales utilizados se encuentran la lana de roca, la lana de vidrio y las espumas aislantes.|Las soluciones más populares incluyen aislantes minerales y materiales ecológicos.|Seleccionamos materiales que ofrecen un alto rendimiento térmico y acústico.|El aislamiento se realiza con técnicas modernas para mejorar la eficiencia de tu vivienda.|Optamos por materiales respetuosos con el medio ambiente y con excelente capacidad aislante.}
</p>',

'<h4>Aprovecha el aislamiento por 1€ en ' . htmlspecialchars($city) . '</h4>

<p>
  {Miles de familias en ' . htmlspecialchars($region) . ' ya han aislado su hogar por solo 1€.|Este programa ha permitido a muchas viviendas mejorar su eficiencia energética.|Más de 20.000 hogares han accedido a este beneficio sin pagar grandes sumas.|Cada vez más personas aprovechan la oportunidad de aislar su casa casi gratis.|No te quedes atrás: esta ayuda está disponible solo por tiempo limitado.}  
  {Contacta con nosotros en ' . htmlspecialchars($phone_number) . ' y consulta cómo beneficiarte.|Llámanos hoy mismo y verifica si puedes acceder al programa de aislamiento.|Nuestros asesores están disponibles para explicarte todo el proceso sin compromiso.|No dejes pasar esta oportunidad y confirma tu acceso a este programa oficial.|Infórmate sin compromiso llamando al ' . htmlspecialchars($phone_number) . '.}
</p>',

'<h4>¿Quién puede beneficiarse del aislamiento subvencionado en ' . htmlspecialchars($city) . '?</h4>

<p>
  {Este programa está dirigido a hogares que desean mejorar su eficiencia energética.|Si tu vivienda tiene más de 15 años, puedes acceder a esta subvención.|Las familias con ingresos moderados pueden beneficiarse de esta ayuda.|Este plan está disponible para propietarios y algunos inquilinos.|Consulta si tu hogar cumple los requisitos y aprovecha esta oportunidad.}  
  {Cada caso se estudia de manera personalizada para determinar la elegibilidad.|Verificamos si tu situación cumple con los criterios del programa.|Nuestros expertos pueden ayudarte a comprobar si eres apto para esta subvención.|No todos los hogares califican, pero podemos asesorarte sobre otras opciones disponibles.|Consulta con nuestros asesores para saber si puedes acceder al aislamiento subvencionado.}
</p>',

'<h4>Aislamiento sostenible y ahorro garantizado en ' . htmlspecialchars($city) . ', ' . htmlspecialchars($region) . '</h4>

<p>
  {El futuro del confort y la eficiencia energética está en el aislamiento térmico.|Invertir en aislamiento es la mejor decisión para ahorrar en el largo plazo.|Una casa bien aislada es una casa más económica y confortable.|El aislamiento subvencionado es una gran oportunidad para optimizar tu vivienda.|Cada euro invertido en aislamiento se traduce en un gran ahorro energético.}  
  {No dejes pasar esta oportunidad única para reducir tu consumo energético.|Aprovecha las ayudas disponibles y disfruta de un hogar mejor aislado.|Con un buen aislamiento, tu casa se mantendrá a la temperatura ideal todo el año.|Evita las pérdidas de calor y optimiza el consumo de calefacción y aire acondicionado.|Si buscas confort, ahorro y sostenibilidad, el aislamiento es la mejor opción.}
</p>

<p>
  {Para más información, contacta con nosotros en el ' . htmlspecialchars($phone_number) . '.|Nuestros asesores están disponibles para responder a todas tus preguntas.|Consulta hoy mismo si puedes acceder a este programa de aislamiento subvencionado.|Aprovecha esta ayuda gubernamental para optimizar el aislamiento de tu hogar.|Contáctanos sin compromiso y descubre cómo mejorar la eficiencia de tu vivienda.}
</p>',




    ];
    
 
 // 🔹 Mélanger les blocs de texte
 shuffle($blocs);


   // 🔹 Affichage des blocs en version spinnée
   echo '<section class="text-adaptation"><div class="text-adaptation-content">';
   foreach ($blocs as $bloc) {
       echo spinnerTexte($bloc);
   }
   echo '</div></section>';

   return ob_get_clean();
}

// 🔹 Fonction de spinning (remplace les {options} par une sélection aléatoire)
function spinnerTexte2($texte) {
   return preg_replace_callback('/\{(.*?)\}/', function($matches) {
       $options = explode('|', $matches[1]); // Sépare les variantes de texte
       return $options[array_rand($options)]; // Choisit une variante au hasard
   }, $texte);
}
  
  
  ?>  
