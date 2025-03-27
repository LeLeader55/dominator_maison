<?php
function afficherTexteAdaptation($city, $postal_code, $phone_number, $region) {
    ob_start();
    
    $blocs = ['<h4>Aislamiento gratuito ' . htmlspecialchars($city) . '</h4>
        <p>
  {¿Aislar las buhardillas por 1€?|¿Aislar el ático por solo 1€?|¿Un aislamiento térmico completo por 1€?|¿Renovar tu aislamiento por solo 1€?|¿Reforzar el aislamiento de tu hogar por 1€?|¿Aislamiento subvencionado por 1€?|¿Mejorar la eficiencia energética de tu hogar por solo 1€?|¿Un aislamiento de alta calidad por solo 1€?|¿Un aislamiento eficiente y económico?|¿Una solución térmica efectiva por 1€?}  
  {¡No, no es una estafa y sí es posible!|¡No, no es un fraude y sí puedes beneficiarte!|¡Es un programa real y completamente legal!|¡Sí, es oficial y sin trucos!|¡Es un beneficio garantizado por el Estado!|¡Es una ayuda certificada y 100% real!|¡Es una oportunidad única y sin trampa alguna!|¡Es un sistema aprobado y transparente!|¡No dudes, esta oferta es legítima!|¡Una solución confiable y verificada!}  

  {Aprovecha el programa de acompañamiento de certificados CAE|Benefíciate del sistema de certificación CAE|Sácale partido al plan estatal de ahorro energético|Accede a la financiación del programa de certificados CAE|Disfruta de la ayuda oficial para mejorar tu aislamiento|Solicita tu acceso al programa CAE sin compromiso|Obtén el aislamiento subvencionado a través del programa CAE|Aprovecha la iniciativa de eficiencia energética del Gobierno|Forma parte del plan de rehabilitación energética con CAE|Haz uso de los beneficios del programa de certificación CAE}  
  {creado por el Ministerio de Medio Ambiente|impulsado por el Ministerio de Transición Ecológica|respaldado por las autoridades medioambientales|financiado a través de normativas ecológicas|desarrollado por el Estado para fomentar la eficiencia energética|establecido por organismos oficiales para combatir el derroche energético|aprobado y regulado por entidades gubernamentales|implementado para reducir el impacto ambiental|gestionado por instituciones públicas para fomentar el ahorro energético|diseñado para apoyar la transición ecológica}  
  {para realizar obras de renovación sin costos ocultos.|para llevar a cabo mejoras en tu hogar sin gastos adicionales.|para acceder a una reforma térmica sin inversión inicial.|para reforzar el aislamiento de tu vivienda sin pagar de más.|para optimizar la eficiencia térmica sin desembolso previo.|para garantizar el confort térmico sin preocupaciones económicas.|para actualizar el aislamiento de tu casa sin coste alguno.|para realizar mejoras energéticas sin gastos imprevistos.|para rehabilitar tu hogar sin costes ocultos.|para modernizar el aislamiento de tu vivienda sin inversión extra.}  

  {Estas obras son financiadas por las empresas contaminantes|Las compañías emisoras de CO₂ costean estos aislamientos|Las industrias energéticas financian el programa de aislamiento|El sector energético cubre el coste de los trabajos de aislamiento|Las empresas de electricidad, gas y petróleo asumen estos gastos|Las compañías contaminantes pagan los proyectos de aislamiento|El sistema obliga a grandes empresas a subvencionar el aislamiento|Los fondos provienen de compañías sancionadas por el impuesto ecológico|Las industrias responsables de emisiones deben pagar estos trabajos|El programa está financiado por los principales actores del sector energético}  
  {para no pagar el impuesto de carbono.|para evitar sanciones por su impacto ambiental.|para cumplir con la normativa medioambiental.|para compensar su huella ecológica.|para ajustarse a las regulaciones energéticas.|para cumplir con los estándares ecológicos impuestos por el gobierno.|para contribuir a la reducción de emisiones.|para alinearse con los objetivos de sostenibilidad.|para reducir su carga fiscal relacionada con la contaminación.|para ajustarse a las directivas de transición ecológica.}  

  {No tienes ningún gasto por adelantado.|No necesitas pagar nada antes de empezar.|Cero inversión inicial, todo financiado.|No hay adelanto de dinero, el proceso está cubierto.|Sin desembolso previo, todo subvencionado.|No necesitas adelantar ni un euro.|El servicio es completamente gratuito hasta la finalización.|Sin pago inicial, el coste está cubierto.|No tienes que preocuparte por adelantar dinero.|Todo el procedimiento se realiza sin coste previo.}  

  {Para confirmar tu elegibilidad, contacta con nuestra empresa (RGE)|Verifica si puedes acceder al programa llamando a nuestra empresa RGE|Consulta con nuestros expertos si cumples los requisitos|Asegura tu acceso al beneficio comunicándote con nuestros especialistas|Habla con nuestros asesores para comprobar tu derecho al aislamiento|Pregunta a nuestros técnicos si puedes beneficiarte del aislamiento subvencionado|Verifica tu acceso al programa a través de nuestra empresa certificada|No pierdas la oportunidad, confirma tu elegibilidad con nosotros|Contacta con nuestros especialistas en eficiencia energética para saber más|Consulta con nuestro equipo RGE para confirmar si eres elegible}  
  {y así obtener una cita para un aislamiento por 1€.|y agenda tu diagnóstico gratuito para mejorar el aislamiento.|y consigue tu evaluación sin compromiso para aislar tu hogar.|y planifica tu cita para recibir el aislamiento subvencionado.|y accede a una revisión técnica sin coste para aislar tu vivienda.|y reserva tu intervención de aislamiento por solo 1€.|y obtén un presupuesto sin coste para aislar tu casa.|y asegura tu plaza en el programa de aislamiento térmico.|y recibe asistencia técnica gratuita para iniciar el proceso.|y programa la instalación del aislamiento con nuestro equipo.}
</p>',

'<h4>{Aislamiento de buhardillas perdidas a 1€ en|Aislamiento subvencionado de áticos por 1€ en|Aislamiento térmico de buhardillas sin coste en|Aislamiento sin pagar por adelantado en|Optimización térmica de áticos por solo 1€ en|Aislamiento de techos a coste mínimo en|Eficiencia térmica para buhardillas en|Mejora del aislamiento de tejados en|Reducción de pérdidas térmicas en áticos en|Plan de aislamiento para techos a 1€ en} ' . htmlspecialchars($city) . '</h4>
<p>
  {Aislamiento de tejados|Protección térmica para techos|Mejoras térmicas en tejados|Refuerzo del aislamiento de techos|Rehabilitación de cubiertas|Optimización térmica de tejados|Tratamiento térmico para techos|Reparación del aislamiento en techos|Aislamiento energético en cubiertas|Solución térmica para tejados}  
  ' . htmlspecialchars($city) . ':  
  {aislar correctamente tu tejado es una condición imprescindible para ganar unos 4°C adicionales en invierno sin aumentar la calefacción.|un correcto aislamiento de tu tejado te permitirá ganar hasta 4°C en invierno sin subir la calefacción.|aislar bien el techo ayuda a conservar hasta 4°C más en invierno sin aumentar el consumo.|el aislamiento adecuado de tejados permite aumentar la temperatura en invierno sin más gasto.|una buena cobertura térmica del tejado permite ganar calor sin gastar más.|la optimización del aislamiento en el tejado mantiene mejor el calor en invierno.|un tejado aislado eficientemente ayuda a reducir la necesidad de calefacción.|mejorando el aislamiento del tejado, puedes mantener el calor sin costes extra.|reducir las pérdidas térmicas del techo puede aumentar el confort invernal.|una cubierta térmica eficiente permite ganar grados sin mayor consumo.}  

  {No dudes en contactarnos para saber si tu vivienda cumple los requisitos para beneficiarse de este programa oficial y legal, cuyas obras son financiadas por las empresas contaminantes.|Llámanos para comprobar si puedes acceder a este plan aprobado y cubierto por las industrias.|Consulta con nuestros expertos si tu hogar es elegible para esta ayuda estatal.|Asegura tu acceso a este beneficio contactando con nuestros asesores.|Verifica con nosotros si puedes beneficiarte de este aislamiento totalmente cubierto.|Nuestro equipo te ayuda a determinar si puedes acceder a este aislamiento financiado.|Te guiamos para comprobar si tu casa cumple los requisitos del plan.|Comprueba con nosotros si tu vivienda puede acceder a este programa.|Confirma con nuestro equipo si puedes beneficiarte de este aislamiento sin coste.|Verifica si tu hogar es apto para este plan de eficiencia térmica.}
</p>',



'<p>
  {Aislamiento térmico|Aislamiento eficiente|Aislamiento energético|Revestimiento térmico|Protección térmica|Mejora del aislamiento|Refuerzo térmico|Aislamiento avanzado|Optimización energética|Reducción de pérdidas térmicas}  
  ' . htmlspecialchars($city) . ':  
  {proceder al aislamiento térmico de tu vivienda con lana de vidrio mineral|realizar el aislamiento térmico de tu hogar con lana de vidrio|optar por un aislamiento con lana mineral para mejorar la eficiencia|instalar aislamiento térmico ecológico con lana de vidrio|aplicar un revestimiento térmico de lana mineral en tu vivienda|mejorar el aislamiento de tu casa con lana de vidrio de alta calidad|cubrir térmicamente tu hogar con un material sostenible y eficiente|aplicar una solución de aislamiento térmico con lana de vidrio mineral|fortalecer la eficiencia energética de tu casa con lana de vidrio|instalar una barrera térmica efectiva con lana mineral}  
  {una solución ecológica, sana y duradera,|una opción natural, saludable y resistente,|un material sostenible, eficiente y certificado,|un producto ecológico, confiable y duradero,|un aislante de alta calidad, ecológico y seguro,|una alternativa respetuosa con el medio ambiente y de larga duración,|un sistema eficiente, saludable y con gran durabilidad,|un método de aislamiento certificado y de gran rendimiento,|una elección inteligente para mejorar la eficiencia térmica,|una técnica eficaz, resistente y respetuosa con el medio ambiente,}  
  {te permite ganar hasta un 30 % de rendimiento energético.|te ayuda a optimizar hasta un 30% el rendimiento térmico.|reduce las pérdidas de energía hasta en un 30%.|mejora la eficiencia térmica de tu hogar hasta un 30%.|aumenta la retención del calor en invierno hasta un 30%.|optimiza la climatización reduciendo hasta un 30% el consumo.|minimiza el desperdicio energético en un 30%.|maximiza la capacidad térmica de tu vivienda en un 30%.|te proporciona un 30% más de eficiencia energética.|mejora el aislamiento, logrando hasta un 30% de ahorro.}  

  {Gracias al programa de acompañamiento de certificados CEE, realizas tus renovaciones por tan solo 1€.|Mediante el plan de certificación CEE, puedes renovar tu aislamiento por 1€.|Aprovecha el sistema CEE para reformar el aislamiento de tu hogar por 1€.|El plan CEE te permite realizar estas mejoras térmicas con una inversión mínima de 1€.|Gracias a las subvenciones CEE, aislar tu vivienda solo te costará 1€.|Este programa de certificación CEE te brinda la oportunidad de aislar por solo 1€.|Con el apoyo del CEE, puedes mejorar el aislamiento de tu hogar por 1€.|El sistema de certificados CEE cubre el coste total, dejándote solo un gasto simbólico de 1€.|Con el respaldo de los CEE, tu reforma térmica solo te costará 1€.|Este programa estatal CEE te ofrece aislamiento eficiente por tan solo 1€.}  

  {Este programa de aislamiento de buhardillas perdidas no tiene costos ocultos.|El aislamiento de buhardillas dentro de este programa no conlleva costes extra.|No existen gastos adicionales en este plan de aislamiento de buhardillas.|Este plan de mejora térmica es completamente transparente y sin sorpresas.|El proceso de aislamiento no conlleva ningún gasto inesperado.|Puedes realizar el aislamiento sin preocuparte por costes adicionales.|La renovación térmica de buhardillas está totalmente cubierta.|Sin cargos ocultos: el aislamiento de buhardillas está financiado al 100%.|El aislamiento a través de este programa está garantizado sin gastos extras.|Tu reforma térmica está cubierta sin cobros ocultos ni costes adicionales.}  

  {Está aprobado por el Estado y proviene del dispositivo de certificados de ahorro energético (CAE).|Es un programa avalado por el Estado dentro del marco de ahorro energético CAE.|Cuenta con la certificación oficial del gobierno mediante el sistema CAE.|Es parte de la iniciativa estatal de certificación CAE para ahorro energético.|Este plan ha sido autorizado por organismos oficiales dentro del CAE.|El dispositivo de ahorro energético CAE respalda esta iniciativa.|Esta medida forma parte del plan de certificación CAE reconocido por el gobierno.|El Estado regula y supervisa este programa a través del sistema CAE.|Está incluido en el marco normativo CAE para eficiencia energética.|Forma parte del programa CAE, una estrategia aprobada por el gobierno.}  

  {Todo ya está financiado por las empresas contaminantes y pagas el euro simbólico al terminar las obras.|Los costes están completamente cubiertos por industrias contaminantes, dejando solo 1€ a pagar.|Las grandes empresas cubren el gasto total del aislamiento y solo pagas 1€.|Este programa se financia con fondos de empresas contaminantes y tu aportación es de solo 1€.|Las compañías responsables de emisiones financian el proyecto y solo debes pagar 1€.|El programa obliga a las industrias contaminantes a pagar el aislamiento, dejando solo 1€ para ti.|El coste del aislamiento es cubierto al 99%, pagando tú solo 1€ simbólico.|Empresas del sector energético financian este plan, dejando tu pago en solo 1€.|Tu única inversión será 1€, ya que el resto está financiado por grandes industrias.|Todo el proceso es cubierto por compañías energéticas y tú solo aportas 1€ simbólico.}  

  {Contáctanos al <?php echo htmlspecialchars($phone_number); ?> para confirmar tu elegibilidad y aprovechar este servicio oficial.|Llama al <?php echo htmlspecialchars($phone_number); ?> para verificar si puedes acceder a este beneficio.|Ponte en contacto con nosotros al <?php echo htmlspecialchars($phone_number); ?> para validar tu acceso al programa.|Consulta tu elegibilidad llamándonos al <?php echo htmlspecialchars($phone_number); ?> y aprovecha esta ayuda.|Comunícate al <?php echo htmlspecialchars($phone_number); ?> y asegura tu participación en este plan.|Solicita información sobre tu elegibilidad en el <?php echo htmlspecialchars($phone_number); ?>.|Consulta a nuestros asesores llamando al <?php echo htmlspecialchars($phone_number); ?> para obtener más detalles.|No pierdas esta oportunidad y contáctanos al <?php echo htmlspecialchars($phone_number); ?>.|Verifica si cumples con los requisitos llamando al <?php echo htmlspecialchars($phone_number); ?>.|Llámanos al <?php echo htmlspecialchars($phone_number); ?> y asegura tu acceso al aislamiento subvencionado.}  
</p>',

'<p>
  {Aislamiento de buhardillas|Rehabilitación térmica de buhardillas|Optimización térmica en áticos|Mejora del aislamiento de buhardillas|Refuerzo térmico en espacios superiores|Tratamiento térmico para buhardillas|Reducción de pérdidas térmicas en buhardillas|Protección térmica para áticos|Sistema de aislamiento para techos|Acondicionamiento térmico de buhardillas}  
  ' . htmlspecialchars($city) . ':  
  {realiza obras de aislamiento de tus buhardillas completamente financiadas por los proveedores de energía, electricidad y carburantes gracias a este programa.|benefíciate del aislamiento de buhardillas sin coste, cubierto por proveedores de energía.|obtén aislamiento gratuito para tus buhardillas con este plan financiado.|disfruta de la renovación térmica sin pagar nada, gracias a este programa.|protege tu hogar con aislamiento financiado por el sector energético.|mejora el aislamiento de tus buhardillas con ayuda de este programa.|recibe aislamiento térmico en tu hogar gracias a proveedores energéticos.|optimiza la climatización de tu vivienda sin coste con este plan.|refuerza el aislamiento de tu techo con fondos del sector energético.|asegura el confort térmico de tu hogar con aislamiento gratuito.}  
</p>',

    
'<p>
  {Certificado de ahorro energético|Bono de eficiencia energética|Certificado de eficiencia térmica|Subvención de ahorro energético|Plan de reducción de consumo energético}  
  ' . htmlspecialchars($city) . ':  
  {el dispositivo de certificados de ahorro energético (CAE), emitido por el Estado, te permite beneficiarte de obras de aislamiento de buhardillas perdidas por 1€.|el sistema de certificados CAE del Estado cubre el aislamiento de buhardillas por 1€.|los certificados CAE gubernamentales te permiten acceder al aislamiento de buhardillas sin coste.|este programa estatal de ahorro energético financia la renovación térmica de tu hogar.|el plan de ahorro energético estatal CAE te ofrece aislamiento gratuito para buhardillas.}  

  {Obligadas por la tasa de carbono, las empresas contaminantes (suministradores de gas, electricidad, combustible...) deben financiar completamente los trabajos de aislamiento térmico de buhardillas, sótanos o garajes de los hogares más modestos a través de empresas RGE como la nuestra.|Las industrias contaminantes están obligadas a costear el aislamiento térmico de los hogares modestos a través del CAE.|Las compañías de gas, electricidad y combustibles deben pagar el aislamiento de viviendas como parte del programa estatal.|Este sistema impone a las empresas emisoras la financiación total del aislamiento térmico en los hogares.|Las grandes empresas cubren estos trabajos para cumplir con la normativa de emisiones de CO₂.|Las compañías del sector energético financian el aislamiento para compensar su impacto ambiental.}  
</p>',

'<h4>{Aislamiento de buhardillas económico en|Aislamiento térmico accesible en|Optimización térmica económica en|Reforma de buhardillas a bajo coste en|Aislamiento subvencionado de buhardillas en}  
' . htmlspecialchars($city) . ' ' . htmlspecialchars($postal_code) . '</h4>
<p>
  {¿Deseas aislar tus buhardillas perdidas para <strong>reducir tu factura de calefacción</strong>?|¿Quieres mejorar el aislamiento de tus buhardillas para <strong>pagar menos en calefacción</strong>?|¿Te gustaría optimizar la temperatura de tu hogar y <strong>ahorrar en calefacción</strong>?|¿Buscas una solución para <strong>disminuir el coste de la calefacción</strong>?|¿Quieres reducir tu consumo energético con un <strong>aislamiento eficiente</strong>?}  

  {¿Te preguntas <strong>cómo aislar tu casa a un precio económico</strong>?|¿No sabes <strong>cómo mejorar el aislamiento sin gastar de más</strong>?|¿Buscas <strong>la mejor forma de aislar tu hogar sin grandes inversiones</strong>?|¿Quieres saber <strong>cómo optimizar la temperatura de tu casa sin gastar mucho</strong>?|¿Necesitas <strong>una solución económica para aislar tu hogar</strong>?}  

  {Con el programa de aislamiento por un euro, puedes llegar a ahorrar hasta un 30 % en tu factura gracias al aislamiento de tu tejado o suelo en la comuna de ' . htmlspecialchars($city) . '.|Gracias al plan de aislamiento por 1€, es posible reducir hasta un 30% el gasto en calefacción en ' . htmlspecialchars($city) . '.|Este sistema te permite disminuir tu consumo energético hasta en un 30% sin pagar más de 1€.|Aprovecha este plan oficial para ahorrar un 30% en calefacción mediante aislamiento térmico.|Con este programa, tu hogar podrá conservar mejor el calor y reducir hasta un 30% de consumo.}  
</p>',

'<p>
  {¡Por solo un euro tendrás una casa más fresca en verano y más cálida en invierno!|Con solo 1€, podrás mantener tu casa fresca en verano y acogedora en invierno.|Por un euro simbólico, optimizarás la temperatura de tu hogar todo el año.|Este aislamiento por 1€ mejora la eficiencia térmica en todas las estaciones.|Consigue un hogar más confortable en todas las épocas del año con este programa.}  

  {Imagina no pagar más que un euro para aislar por completo tu casa. Ahora es totalmente posible.|Ahora puedes aislar tu casa por solo 1€, sin ningún coste oculto.|Gracias a este sistema, aislar tu hogar cuesta solo 1€, sin gastos adicionales.|Este programa te permite renovar tu aislamiento sin pagar más que 1€.|La rehabilitación térmica de tu hogar es accesible por solo 1€.}  

  {¿Aún no conoces el dispositivo “Aislamiento 1€”?|¿Todavía no has oído hablar del programa “Aislamiento 1€”?|¿No estás informado sobre el plan “Aislamiento 1€”?|¿Te gustaría conocer más sobre el sistema “Aislamiento 1€”?|¿Quieres más detalles sobre el “Aislamiento 1€” y sus beneficios?}  

  {¿Te gustaría saber cuál es el <strong>coste de aislamiento por m² en ' . htmlspecialchars($city) . ' ' . htmlspecialchars($postal_code) . '</strong>, al igual que en el resto de Francia?|¿Quieres conocer el <strong>precio del aislamiento por metro cuadrado en ' . htmlspecialchars($city) . ' ' . htmlspecialchars($postal_code) . '</strong> y en otras regiones?|¿Buscas información sobre el <strong>coste del aislamiento térmico en ' . htmlspecialchars($city) . ' ' . htmlspecialchars($postal_code) . '</strong>?|¿Deseas saber cuánto cuesta el <strong>aislamiento por m² en ' . htmlspecialchars($city) . ' ' . htmlspecialchars($postal_code) . '</strong>?|¿Te interesa conocer el <strong>valor del aislamiento térmico en ' . htmlspecialchars($city) . ' ' . htmlspecialchars($postal_code) . '</strong>?}  

  {Nuestros profesionales te lo explican todo.|Nuestros asesores están listos para brindarte información detallada.|Nuestro equipo especializado está disponible para resolver tus dudas.|Te ofrecemos toda la información que necesites sin compromiso.|Nuestros expertos en aislamiento pueden aclarar todas tus inquietudes.}  

  {Confía en nosotros: siempre estaremos a tu disposición para orientarte, ayudarte y proporcionarte todos los consejos que necesites.|Cuenta con nuestro equipo para guiarte, asesorarte y ofrecerte la mejor solución.|Estamos aquí para acompañarte en todo el proceso y resolver tus dudas.|Nuestra misión es ayudarte a obtener el mejor aislamiento sin complicaciones.|Puedes confiar en nosotros para recibir apoyo en cada etapa del procedimiento.}  
</p>',

'<h4>{Aislamiento 1 euro: Calefacción económica en|Aislamiento térmico por 1€: Ahorro en calefacción en|Aislamiento subvencionado: Reduce tu gasto energético en|Plan de aislamiento por 1€: Confort térmico en|Aislamiento eficiente y económico en}  
' . htmlspecialchars($city) . '</h4>
<p>
  {Mejorando el rendimiento térmico de tu vivienda, no solo puedes reducir la factura, sino también ganar entre 3 y 4 grados de calor en invierno.|Aumentando la eficiencia térmica de tu hogar, puedes ahorrar en calefacción y disfrutar de 3 a 4 grados extra.|Con una mejor retención del calor, tu casa ganará entre 3 y 4 grados sin incrementar el consumo.|Este aislamiento permite que tu hogar conserve mejor el calor, aportando hasta 4 grados extra.|Optimizando el aislamiento térmico, conseguirás más confort y menor gasto en calefacción.}  

  {El “Aislamiento 1€” establecido por el Ministerio de Ecología te ofrece la posibilidad de conseguir un <strong>aislamiento de buhardillas</strong> por 1 euro, según tus ingresos.|El programa estatal “Aislamiento 1€” te permite aislar buhardillas por solo 1€, dependiendo de tu nivel de renta.|Gracias al plan “Aislamiento 1€”, puedes acceder a una reforma térmica casi gratuita.|Con este sistema del Ministerio de Ecología, el aislamiento de buhardillas está subvencionado.|Este programa nacional permite a ciertos hogares aislar sus buhardillas por 1€.}  
</p>',



'<p>
  {Optando por las obras de aislamiento de buhardillas a 1 euro podrás:|Al elegir el aislamiento de buhardillas por 1€, conseguirás:|Con el programa de aislamiento de buhardillas a 1€, podrás:|Accediendo al aislamiento de buhardillas por solo 1€, disfrutarás de:|Aprovechando el aislamiento de buhardillas subvencionado, obtendrás:}
</p>
<ul>
  <li>{Aislar tus buhardillas perdidas a un precio económico|Mejorar el aislamiento de tus buhardillas sin grandes costes|Optimizar la eficiencia térmica de tus buhardillas con una inversión mínima|Reforzar la protección térmica de tu hogar por un precio simbólico|Acceder a un aislamiento térmico de calidad sin gastos elevados}</li>
  <li>{Optimizar tu confort térmico|Aumentar el confort en tu vivienda|Mejorar la temperatura interior de tu hogar|Mantener un ambiente más cálido en invierno y fresco en verano|Disfrutar de una mejor climatización sin incrementar tu consumo energético}</li>
  <li>{Acceder a obras de calidad|Disfrutar de una instalación profesional y garantizada|Beneficiarte de trabajos de aislamiento certificados y eficaces|Asegurar un aislamiento óptimo con materiales de alta gama|Contar con una intervención realizada por expertos en eficiencia energética}</li>
  <li>{Utilizar materiales ecológicos de alto rendimiento|Apostar por un aislamiento con materiales sostenibles y eficientes|Beneficiarte de un aislamiento respetuoso con el medio ambiente|Elegir soluciones térmicas con materiales certificados y ecológicos|Acceder a un aislamiento con componentes de gran eficiencia energética}</li>
  <li>{Reducir tus facturas de calefacción|Ahorrar en consumo energético cada mes|Minimizar el gasto en climatización y calefacción|Disminuir el coste de tu energía con un aislamiento eficaz|Bajar tus facturas optimizando la eficiencia térmica de tu vivienda}</li>
</ul>',

'<h4>{Aislamiento de buhardillas con lana de roca mineral|Aislamiento térmico con lana de roca|Aislamiento ecológico de buhardillas con lana de roca|Aislamiento con lana de roca mineral de alta calidad|Revestimiento térmico con lana de roca}  
' . htmlspecialchars($city) . '</h4>
<p>
  {Aislamiento de vivienda gratuito en|Aislamiento térmico sin coste en|Optimización energética sin gastos en|Acondicionamiento térmico subvencionado en|Aislamiento sin adelantos en}  
  ' . htmlspecialchars($city) . ' (' . htmlspecialchars($postal_code) . '):  
  {aísla tu casa por la módica suma de 1€ gracias al programa nacional de aislamiento aprobado por el Estado.|aprovecha el plan estatal para aislar tu vivienda por solo 1€.|mejora el aislamiento de tu hogar con esta iniciativa gubernamental.|consigue un hogar más eficiente con este programa de aislamiento financiado.|optimiza el aislamiento térmico de tu casa por 1€, sin costes adicionales.}  

  {El programa de acompañamiento de certificados CEE te permite reducir tu factura de calefacción en 400€ al año renovando tus buhardillas por 1€.|Gracias a los certificados CEE, podrás ahorrar hasta 400€ anuales en calefacción al aislar tus buhardillas.|Este plan de eficiencia energética reduce tu gasto en calefacción en 400€ al año con un aislamiento adecuado.|Los certificados CEE cubren el aislamiento térmico, permitiéndote ahorrar hasta 400€ en climatización.|Este sistema financiado garantiza una reducción de 400€ anuales en calefacción al optimizar el aislamiento.}  

  {Contáctanos al ' . htmlspecialchars($phone_number) . ' para saber más sobre las condiciones de elegibilidad y adherirte a este programa legal, sin estafas ni costes ocultos.|Llámanos al ' . htmlspecialchars($phone_number) . ' para confirmar si puedes beneficiarte de este plan oficial.|Solicita información en el ' . htmlspecialchars($phone_number) . ' y descubre si eres elegible para este programa.|No dudes en contactarnos al ' . htmlspecialchars($phone_number) . ' para obtener más detalles sobre este aislamiento subvencionado.|Consulta con nuestros asesores en el ' . htmlspecialchars($phone_number) . ' y verifica si cumples con los requisitos para esta ayuda energética.}
</p>',

'<p>
  {Aislamiento de buhardillas perdidas en|Acondicionamiento térmico de buhardillas en|Optimización de aislamiento en buhardillas en|Reforma energética en buhardillas en|Mejora del aislamiento en buhardillas en}  
  ' . htmlspecialchars($city) . ':  
  {si deseas mejorar tu confort térmico y disminuir el consumo de calefacción, aislando tus buhardillas, llámanos para conocer cómo beneficiarte del programa aprobado por el Ministerio de Medio Ambiente y aislar tus buhardillas perdidas por tan solo 1€.|contacta con nosotros para descubrir cómo acceder a este aislamiento financiado y mejorar la eficiencia térmica de tu hogar.|no dudes en llamarnos para informarte sobre este plan y conseguir el aislamiento de tus buhardillas.|infórmate sobre cómo aislar tus buhardillas sin coste y optimizar la temperatura de tu hogar.|mejora la protección térmica de tu casa con este programa estatal y sin gastos extras.}  

  {Tras validar tu solicitud, el Estado emite un certificado de ahorro energético (CAE) para que las obras de aislamiento sean financiadas por las empresas contaminantes.|Si cumples los requisitos, el Estado te otorga un certificado CAE para que las industrias financien tu aislamiento.|Una vez aprobada tu solicitud, se emite un CAE que permite la cobertura total del aislamiento térmico.|El sistema de certificados CAE garantiza que las empresas emisoras financien tu aislamiento.|Gracias al CAE, las industrias contaminantes pagan la totalidad de tu renovación térmica.}  

  {Pagas tu euro al finalizar la renovación, en cheque o en efectivo.|Solo abonarás 1€ simbólico al terminar la instalación, sin gastos adicionales.|El único pago requerido es 1€, tras la finalización de las obras.|No hay adelantos de dinero: solo pagarás 1€ cuando el aislamiento esté terminado.|El pago de 1€ se realiza únicamente una vez concluidos los trabajos de aislamiento.}  
</p>

<p>
  {Más de 20 000 familias ya han aprovechado este programa oficial, así que no esperes más y contáctanos al ' . htmlspecialchars($phone_number) . ' para renovar tus buhardillas por tan solo 1€.|Miles de hogares han mejorado su eficiencia energética con este plan, llama al ' . htmlspecialchars($phone_number) . ' y únete.|Este programa ha beneficiado a más de 20 000 familias, no pierdas la oportunidad y llámanos al ' . htmlspecialchars($phone_number) . '.|No dejes pasar esta oportunidad: más de 20 000 personas han aislado su hogar por 1€, contáctanos al ' . htmlspecialchars($phone_number) . '.|Miles de viviendas ya disfrutan de este aislamiento subvencionado, llama ahora al ' . htmlspecialchars($phone_number) . ' y accede a él.}
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
function spinnerTexte($texte) {
   return preg_replace_callback('/\{(.*?)\}/', function($matches) {
       $options = explode('|', $matches[1]); // Sépare les variantes de texte
       return $options[array_rand($options)]; // Choisit une variante au hasard
   }, $texte);
}
  
  
  ?>  
