





<?php

// Fonction principale affichant le texte dynamique et les villes liées
function afficherTexteVille($city, $postal_code, $phone_number, $region, $relatedCities) {
    ob_start();

    $phrases = [
        'Recientemente, nuestro equipo hemos trabajado en ' . htmlspecialchars($city) . ' para {mejorar|optimizar|incrementar} la {eficiencia energética|capacidad de aislamiento} de muchas viviendas.',
        'La ciudad de ' . htmlspecialchars($city) . ' se {beneficia|aprovecha} del {aislamiento subvencionado|programa térmico financiado}.',
        'En ' . htmlspecialchars($city) . ', {ayudamos a reducir|contribuimos a reducir} el {consumo energético|uso de energía} de {numerosos hogares|muchas viviendas}.',
        'Gracias al {programa de aislamiento}, los residentes de ' . htmlspecialchars($city) . ' {disfrutan de|gozan de} un {mayor confort térmico|hogar más confortable}.',
        'Nuestro equipo ha {realizado|completado} intervenciones exitosas en toda la zona de ' . htmlspecialchars($city) . '.',
        'En ' . htmlspecialchars($city) . ', muchas familias han aislado sus buhardillas por tan solo 1 €.',
        'El aislamiento térmico realizado en ' . htmlspecialchars($city) . ' ha {permitido|logrado} {importantes ahorros|reducciones del gasto} en calefacción.',
        'Hemos instalado soluciones de aislamiento de alta eficiencia en ' . htmlspecialchars($city) . '.',
        'Los ciudadanos de ' . htmlspecialchars($city) . ' han podido beneficiarse de este servicio subvencionado ecológico.',
        'Con el aislamiento subvencionado, ' . htmlspecialchars($city) . ' avanza hacia una mayor eficiencia energética.',
        'En ' . htmlspecialchars($city) . ', {nuestros expertos|nuestro equipo|nuestros técnicos|nuestros profesionales} han {acompañado|asesorado|guiado|ayudado} a {decenas de familias|muchos hogares|numerosos residentes|varias viviendas} en su {transición energética|mejora térmica|reforma ecológica|optimización del confort}.',

'Gracias al apoyo estatal, ' . htmlspecialchars($city) . ' se {convierte en|transforma en|posiciona como|consolida como} una {ciudad modelo|referencia|localidad destacada|comuna ejemplar} en {eficiencia energética|renovación térmica|aislamiento subvencionado|ahorro ecológico}.',

'Las actuaciones realizadas en ' . htmlspecialchars($city) . ' han {generado|producido|facilitado|dado lugar a} una {reducción notable del consumo|mejora tangible del confort|bajada significativa en calefacción|optimización real del rendimiento térmico}.',

'En la zona de ' . htmlspecialchars($city) . ', {las soluciones aplicadas|las intervenciones|los proyectos realizados|las acciones térmicas} han sido {respetuosos con el medio ambiente|sostenibles|ecológicos|eficaces y duraderos}.',

'Los residentes de ' . htmlspecialchars($city) . ' han {apostado por|optado por|elegido|adoptado} un {sistema de aislamiento|modelo térmico|plan ecológico|dispositivo de ahorro} {seguro y subvencionado|rentable y sostenible|financiado y eficiente|avalado por el Estado}.',

'En ' . htmlspecialchars($city) . ', se han {instalado|implementado|colocado|aplicado} {materiales térmicos de alta gama|sistemas de aislamiento de calidad|soluciones eficaces y ecológicas|tecnologías de ahorro energético}.',

'El confort térmico en ' . htmlspecialchars($city) . ' ha {mejorado|evolucionado|aumentado|progresado} de forma {sustancial|notable|evidente|positiva} gracias al {plan estatal|programa CAE|sistema subvencionado|dispositivo oficial}.',

'Gracias al dispositivo CAE, ' . htmlspecialchars($city) . ' {recibe|acoge|se beneficia de|aprovecha} un {plan de aislamiento|proyecto de eficiencia|modelo de ahorro|programa ecológico} por tan solo 1 €.',

'En ' . htmlspecialchars($city) . ', la {temperatura interior|eficiencia térmica|calidad de vida|retención del calor} ha sido {optimizadas|mejoradas|incrementadas|reforzadas} sin {obras invasivas|costes ocultos|gastos adicionales|inversión elevada}.',

'Los trabajos en ' . htmlspecialchars($city) . ' cumplen con {todas las normativas|las exigencias del Estado|los criterios ecológicos|los estándares de calidad} para un {aislamiento duradero|hogar eficiente|entorno térmico estable|futuro sostenible}.',

'En ' . htmlspecialchars($city) . ', hemos {acompañado|atendido|informado|gestionado} {más de 100 casos|numerosas solicitudes|decenas de proyectos|cientos de demandas} de aislamiento por 1 €.',

'Los habitantes de ' . htmlspecialchars($city) . ' {ahora viven más cómodos|disfrutan de un mayor confort|notan la diferencia térmica|han ganado grados en invierno} gracias al {aislamiento subvencionado|plan estatal de eficiencia}.',

'La eficiencia energética en ' . htmlspecialchars($city) . ' {se ha disparado|ha mejorado notablemente|ha incrementado|ha sido optimizada} tras la {intervención|mejora|rehabilitación|renovación} térmica.',

'Muchos hogares en ' . htmlspecialchars($city) . ' han sido {renovados|aislados|optimizados|mejorados} gracias a {materiales sostenibles|soluciones ecológicas|técnicas certificadas|instalaciones profesionales}.',

'El proyecto “Aislamiento 1€” en ' . htmlspecialchars($city) . ' ha sido un {éxito total|modelo a seguir|gran avance|logro ecológico}.',

'Los técnicos en ' . htmlspecialchars($city) . ' han {realizado|ejecutado|instalado} {soluciones térmicas|barreras de aislamiento|sistemas eficientes|equipamiento ecológico} en tiempo récord.',

'Los trabajos en ' . htmlspecialchars($city) . ' se han realizado {sin adelantos|sin costes ocultos|sin compromiso financiero|100% subvencionados}.',

'En la comuna de ' . htmlspecialchars($city) . ', {el aislamiento térmico|la mejora energética|la rehabilitación} es {una realidad accesible|posible para todos|más fácil que nunca|al alcance de todos}.',

'Los beneficiarios de ' . htmlspecialchars($city) . ' han {validado su elegibilidad|accedido al programa|recibido apoyo|obtenido la ayuda} con solo {una llamada|una consulta|una validación rápida|una solicitud sencilla}.',

'Gracias a esta iniciativa en ' . htmlspecialchars($city) . ', {el ahorro energético es tangible|las facturas bajan mes a mes|la calefacción ya no es un lujo|el consumo se ha reducido drásticamente}.',



    ];


    shuffle($phrases);

    echo '<div class="text-adaptation"><div class="text-adaptation-content text-region-info">';

    $group = [];
    $groupSize = 0;

    foreach ($phrases as $index => $phrase) {
        if (empty($relatedCities)) continue;

        $randomCity = $relatedCities[array_rand($relatedCities)];
        $cityName = htmlspecialchars($randomCity['city']);
        $citySlug = strtolower(str_replace(' ', '-', $randomCity['city']));
        $cityCode = $randomCity['postal_code'];
        $regionSlug = strtolower(str_replace(' ', '-', $randomCity['region']));
        $link = "{$citySlug}_{$cityCode}_{$regionSlug}.php";
        $villeLink = '<a href="' . $link . '">' . $cityName . '</a>';

        $phraseWithCity = str_replace(htmlspecialchars($city), $villeLink, $phrase);
        $spinned = spinnerTexteVille($phraseWithCity);
        $group[] = $spinned;
        $groupSize++;

        if ($groupSize >= rand(3, 5) || $index === count($phrases) - 1) {
            echo '<p>' . implode(' ', $group) . '</p>';
            $group = [];
            $groupSize = 0;
        }
    }

    // Appel dynamique des villes par région en dessous du texte ville, dans la même div
    echo afficherVillesRegion(strtolower(str_replace(' ', '-', $region)));

    echo '</div></div>'; // fermeture des divs initiales

    return ob_get_clean();
}

// Fonction Spinner pour varier les textes
function spinnerTexteVille($texte) {
    return preg_replace_callback('/\{(.*?)\}/', function($matches) {
        $options = explode('|', $matches[1]);
        return $options[array_rand($options)];
    }, $texte);
}

// Affichage des villes par région
function afficherVillesRegion($regionSlug) {
    $jsonFile = __DIR__ . "/../../data/cities.json";
    if (!file_exists($jsonFile)) {
        return "<p>¡Archivo cities.json no encontrado!</p>";
    }

    $allData = json_decode(file_get_contents($jsonFile), true);
    if (!$allData) {
        return "<p>¡No se puede leer el archivo JSON!</p>";
    }

    $filtered = [];
    foreach ($allData as $row) {
        $rowSlug = strtolower(str_replace(' ', '-', $row['region']));
        if ($rowSlug === strtolower($regionSlug)) {
            $filtered[] = $row;
        }
    }

    if (empty($filtered)) {
        return "<p>No se encontraron ciudades para esta región.</p>";
    }

    ob_start(); ?>

    <div class='region-list'>
        <h3 class='regionTitle'>Ciudades cubiertas en la región de <?= htmlspecialchars(ucwords(str_replace('-', ' ', $regionSlug))); ?></h3>
        <div class='regionButtons'>
            <button id='btnPlus' onclick='showCities()'>+ Mostrar</button>
            <button id='btnMoins' onclick='hideCities()'>- Ocultar</button>
        </div>
        <div id='cityList' style="display:none;">
            <ul>
                <?php foreach ($filtered as $v): 
                    $citySlug  = strtolower(str_replace(' ', '-', $v['city']));
                    $cityLabel = "{$citySlug}_{$v['postal_code']}_{$regionSlug}";
                ?>
                <li><a href='<?= $cityLabel ?>.php'><?= htmlspecialchars($v['city']); ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>

    <script>
    function showCities() {
        document.getElementById('cityList').style.display = 'block';
    }
    function hideCities() {
        document.getElementById('cityList').style.display = 'none';
    }
    </script>

    <?php return ob_get_clean();
}
?>
