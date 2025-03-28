<?php
function afficherFAQVille($city) {
    $faqQuestions = [
        "¿Cómo puedo obtener el aislamiento por 1€ en $city?",
        "¿Quién puede beneficiarse del programa en $city?",
        "¿Qué zonas de la casa se aíslan en $city?",
        "¿Hay requisitos fiscales para acceder al programa en $city?",
        "¿Cuánto cuesta realmente el servicio en $city?",
        "¿Qué documentos necesito para aplicar en $city?",
        "¿Cuánto tiempo tarda la instalación en $city?",
        "¿Hay técnicos certificados disponibles en $city?",
        "¿Cuál es la superficie mínima necesaria para aislar en $city?",
        "¿Los inquilinos pueden solicitar el programa en $city?",
        "¿Es obligatorio realizar un diagnóstico en $city?",
        "¿Cuánto ahorro se puede conseguir tras el aislamiento en $city?",
        "¿Cuándo empieza el programa en $city?",
        "¿Qué pasa si ya tengo un aislamiento parcial en $city?",
        "¿Puedo elegir los materiales de aislamiento en $city?",
        "¿El aislamiento afecta al valor de la propiedad en $city?",
        "¿Es necesario realizar obras importantes en $city?",
        "¿El programa incluye áticos o techos en $city?",
        "¿Cuál es la duración estimada del aislamiento en $city?",
        "¿Cómo puedo verificar mi elegibilidad en $city?",
        "¿Puedo beneficiar a mis padres que viven en $city?",
        "¿Qué empresas están autorizadas en $city?",
        "¿Este servicio es ecológico en $city?",
        "¿Qué pasa si no soy propietario en $city?",
        "¿Cuál es la prioridad de selección en $city?",
        "¿El aislamiento está subvencionado al 100% en $city?",
        "¿Cuándo podré tener una respuesta tras mi solicitud en $city?",
        "¿Es necesario un permis de obra en $city?",
        "¿El aislamiento es compatible con otras ayudas en $city?",
        "¿Hay testimonios de personas ya aisladas en $city?"
    ];

    $faqAnswers = [
        "Debes cumplir los criterios estatales y enviar tu solicitud online.",
        "Residentes con bajos ingresos o propietarios de viviendas antiguas son elegibles.",
        "Principalmente áticos, techos y paredes exteriores.",
        "Sí, el programa se basa en los umbrales fiscales establecidos.",
        "El coste para ti es simbólico: solo 1€ si cumples los requisitos.",
        "Necesitarás un documento de identidad y prueba de domicilio.",
        "Generalmente entre 1 y 2 días según el tamaño de la vivienda.",
        "Sí, trabajamos con técnicos certificados por el Estado.",
        "Se recomienda un mínimo de 30m², pero depende del diagnóstico.",
        "Sí, pero deben contar con la autorización del propietario.",
        "Sí, un diagnóstico gratuito se realiza antes de cualquier intervención.",
        "El ahorro puede llegar al 30% en calefacción anual.",
        "Ya está activo en muchas regiones, incluida $city.",
        "Podemos reforzar o completar el aislamiento existente.",
        "Sí, puedes elegir entre varias opciones según el devis.",
        "Sí, aumenta el valor energético de tu vivienda.",
        "No, el proceso es rápido y sin obras invasivas.",
        "Sí, los áticos están totalmente cubiertos por el programa.",
        "Los materiales duran entre 15 y 25 años en condiciones normales.",
        "Puedes llamarnos o rellenar el formulario online para saberlo.",
        "Sí, puedes aplicar por ellos si tienen un domicilio en $city.",
        "Solo empresas con homologación estatal pueden intervenir.",
        "Sí, usamos materiales con bajo impacto ambiental.",
        "Sí, con acuerdo del propietario y si eres residente.",
        "Se prioriza a familias numerosas y viviendas mal aisladas.",
        "Sí, el 100% del coste está cubierto si cumples los criterios.",
        "Normalmente en 3 a 7 días hábiles tras tu solicitud.",
        "No, en la mayoría de los casos no se necesita.",
        "Sí, puede combinarse con otras subvenciones locales.",
        "Sí, muchos residentes de $city ya se han beneficiado con éxito."
    ];

    shuffle($faqQuestions);
    shuffle($faqAnswers);

    $nbFaq = rand(2, 6);

    echo '<section class="faq-ville"><h2>Preguntas frecuentes en ' . htmlspecialchars($city) . '</h2><div class="faq-list" id="faq">';

    $faqJson = [
        "@context" => "https://schema.org",
        "@type" => "FAQPage",
        "mainEntity" => []
    ];

    for ($i = 0; $i < $nbFaq; $i++) {
        $q = $faqQuestions[$i];
        $a = $faqAnswers[$i];

        echo "<details><summary>$q</summary><p>$a</p></details>";

        $faqJson["mainEntity"][] = [
            "@type" => "Question",
            "name" => $q,
            "acceptedAnswer" => [
                "@type" => "Answer",
                "text" => $a
            ]
        ];
    }

    echo '</div></section>';
    echo '<script type="application/ld+json">' . json_encode($faqJson, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) . '</script>';
}
?>
