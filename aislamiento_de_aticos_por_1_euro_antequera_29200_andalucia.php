<?php
$url = basename($_SERVER['REQUEST_URI']); // récupère le nom du fichier

// Ex: aislamiento_de_aticos_por_1_euro_jerez_de_la_frontera_11401_andalucia.php

// Retire le .php
$url = str_replace('.php', '', $url);

// Expression régulière
if (preg_match('/euro_(.+)_(\d{5})_(.+)/', $url, $matches)) {
  $city_slug = $matches[1];        // jerez_de_la_frontera
  $postal_code = $matches[2];      // 11401
  $region_slug = $matches[3];      // andalucia

  // Optionnel : reconvertir le nom de la ville pour affichage (avec majuscules & espaces)
  $city = ucwords(str_replace('_', ' ', $city_slug));
  $region = ucwords(str_replace('_', ' ', $region_slug));
} else {
  // fallback si URL incorrecte
  $city = "Ville";
  $postal_code = "00000";
  $region = "Region";
}


$phone_number = "+33 6 22 90 60 82"; // À modifier selon la région si besoin


?>


<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Aislamiento de ático por solo 1€ en <?= $city ?> (<?= $postal_code ?>) | Subvención energética en
    <?= $region ?></title>

  <?php
  // Vérifie si les variables existent déjà, sinon utilise une meta-description par défaut
  echo '<meta name="description" content="Aislamiento de buhardillas a 1 euro en ' . htmlspecialchars($city) . ' con Empresa Certificada ✅ al ' . htmlspecialchars($phone_number) . '. Ahorra energía y dinero con subvenciones">';
  ?>

  <!-- Police Google -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="ressource/css/style.css?v=2.1.6" />

  <!-- BOOTSTRAP 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- BOOTSTRAP 5 JS (à placer juste avant </body>) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</head>

<body>


  <?php

  function spinnerTexteVille($texte)
  {
    return preg_replace_callback('/\{(.*?)\}/', function ($matches) {
      $options = explode('|', $matches[1]);
      return $options[array_rand($options)];
    }, $texte);
  }

  // -------------------------------------------------------------------- HEADER ---------------------------------------------------//
  require_once __DIR__ . "/ressource/php/header.php";

  ?>

  <section class="page-title-section" aria-label="Título de la página">
    <h1>AYUDAS 2025 - Aislamiento de áticos por 1 euro en <?= htmlspecialchars($city); ?>
      (<?= htmlspecialchars($postal_code); ?>)</h1>
    <p>Programa de aislamiento térmico subvencionado en la región de <?= htmlspecialchars($region); ?>.</p>
  </section>



  <?php

  require_once "ressource/php/hero.php";
  echo spinnerTexteHero($city);


  // BLOC HOW IT HWORKS
  ob_start();
  require_once __DIR__ . "/ressource/php/howItWorks.php";
  $bloc2 = ob_get_clean();
  // BLOC HOW IT HWORKS
  

  // ------------------------------------------------ AFFICHAGE TEXTE SEO ET SPIN --------------------------------------------------------//
  ob_start();

  require_once "ressource/php/texte.php";
  require_once "ressource/php/texte2.php";

  // Générer le texte avec les paramètres
  $texteGenere = afficherTexteAdaptation($city, $postal_code, $phone_number, $region);
  $texteGenere2 = afficherTexteAdaptation2($city, $postal_code, $phone_number, $region);


  // Appliquer le spinning sur l'ensemble du texte
  $variantes = [$texteGenere, $texteGenere2];
  $texteFinal = $variantes[array_rand($variantes)];
  echo $texteFinal;
  $bloc3 = ob_get_clean();

  ?>


  <!-- ------------------------------------------------ AFFICHAGE TEXTE SEO ET SPIN -------------------------------------------------------->




  <!-- ------------------------------------------------ AFFICHAGE TEXTE REALISATION AVEC VILLE -------------------------------------------------------->


  <?php
  ob_start();


  require_once "ressource/php/texteville.php";


  $currentCitySlug = $city;
  $currentRegionSlug = $region ?? '';

  // Charger le fichier JSON
  $jsonFile = __DIR__ . "/data/cities.json";
  $allCities = json_decode(file_get_contents($jsonFile), true);

  // Filtrage des villes de la région
  $relatedCities = array_filter($allCities, function ($v) use ($region, $city) {
    return slugify($v['region']) === slugify($region) && slugify($v['city']) !== slugify($city);
  });


  $texteGenere3 = afficherTexteVille($city, $postal_code, $phone_number, $region, $relatedCities);

  echo $texteGenere3;

  $bloc4 = ob_get_clean();


  ?>

  <!-- ------------------------------------------------ AFFICHAGE TEXTE REALISATION AVEC VILLE -------------------------------------------------------->
  <?php
  $blocs = [$bloc2, $bloc3, $bloc4];
  shuffle($blocs);

  foreach ($blocs as $bloc) {
    echo $bloc;
  }
  ?>

  <!-- : FAQ-->
  <?php require_once "ressource/php/faqville.php"; ?>
  <?php afficherFAQVille($city); ?>

  <!-- : FAQ-->



  <!-- S3 : CAROUSEL -------------------------------------------------------------------------------------------------------------------------------->
  <?php
  $directory = __DIR__ . '/ressource/images/carousel'; // chemin réel
  $webPath = 'ressource/images/carousel/'; // chemin visible depuis le navigateur
  
  // Récupérer toutes les images valides
  $images = glob($directory . '/*.{jpg,jpeg,png,gif,webp}', GLOB_BRACE);

  // Mélanger les images
  shuffle($images);

  // En prendre seulement 3
  $images = array_slice($images, 0, 3);
  ?>

  <section class="carousel-realizations" id="caroussel">
    <h2>Nuestras Realizaciones</h2>
    <div class="carousel-container">
      <div class="carousel-track">
        <?php foreach ($images as $index => $imagePath): ?>
          <div class="carousel-slide">
            <img src="<?= $webPath . basename($imagePath); ?>" alt="Réalisation <?= $index + 1 ?>" />
          </div>
        <?php endforeach; ?>
      </div> <!-- /.carousel-track -->

      <button class="carousel-button prev">‹</button>
      <button class="carousel-button next">›</button>
    </div> <!-- /.carousel-container -->
  </section>


  <script>
    // 1) Sélection des éléments
    const track = document.querySelector('.carousel-track');
    const slides = Array.from(track.children);
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    let currentIndex = 0;

    // 2) Fonction pour déplacer la piste
    function moveToSlide(index) {
      // Largeur d'une slide
      const slideWidth = slides[0].getBoundingClientRect().width;
      // Translate la track
      track.style.transform = `translateX(-${slideWidth * index}px)`;
    }

    // 3) Bouton Précedent
    prevButton.addEventListener('click', () => {
      if (currentIndex === 0) {
        currentIndex = slides.length - 1; // wrap-around
      } else {
        currentIndex--;
      }
      moveToSlide(currentIndex);
    });

    // 4) Bouton Suivant
    nextButton.addEventListener('click', () => {
      if (currentIndex === slides.length - 1) {
        currentIndex = 0; // wrap-around
      } else {
        currentIndex++;
      }
      moveToSlide(currentIndex);
    });

    // 5) Ajuster la position initiale de chaque slide (facultatif)
    //    on aligne les slides horizontalement
    slides.forEach((slide, i) => {
      slide.style.left = (slides[0].getBoundingClientRect().width * i) + 'px';
    });

    // Optionnel : re-calculer si resize
    window.addEventListener('resize', () => {
      moveToSlide(currentIndex);
      slides.forEach((slide, i) => {
        slide.style.left = (slides[0].getBoundingClientRect().width * i) + 'px';
      });
    });
  </script>
  <!-- : CAROUSEL -->


  <!-- : FOOOTER-->


  <?php require_once __DIR__ . "/ressource/php/footer.php"; ?>







  <!-- SCRIPT GOOGLE MAPS -->
  <script>
    function initMap() {
      // Coordonnées (ex: Madrid)
      var location = { lat: 40.4168, lng: -3.7038 };
      var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: location
      });
      new google.maps.Marker({
        position: location,
        map: map
      });
    }
  </script>
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=TA_CLE_API&callback=initMap"></script>
</body>

</html>