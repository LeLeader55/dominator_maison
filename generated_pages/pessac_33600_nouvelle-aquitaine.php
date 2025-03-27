
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Elegibilidad Aislamiento de Buhardillas</title>
  <!-- Police Google -->
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap"
    rel="stylesheet"
  />
  <link rel="stylesheet" href="ressource/css/style.css?v=2.1.6" />

  
</head>
<body>

<?php

$pageName = basename(__FILE__, ".php");
$parts = explode('_', $pageName);


$city = ucfirst($parts[0] ?? "Ville inconnue"); // Libourne
$postal_code = $parts[1] ?? "00000"; // 33500
$region = str_replace('-', ' ', $parts[2] ?? "Région inconnue"); // Nouvelle-Aquitaine

// Numéro de téléphone par défaut ou spécifique par région (ex: base de données)
$phone_number = "+33 6 22 90 60 82"; // À modifier selon la région si besoin


// -------------------------------------------------------------------- HEADER ---------------------------------------------------//
require_once __DIR__ . "/ressource/php/header.php";

?>

<section class="page-title-section" aria-label="Título de la página">
  <h1>AYUDAS 2025 - Aislamiento de áticos por 1 euro en <?= htmlspecialchars($city); ?> (<?= htmlspecialchars($postal_code); ?>)</h1>
  <p>Programa de aislamiento térmico subvencionado en la región de <?= htmlspecialchars($region); ?>.</p>
</section>



<?php

require_once __DIR__ . "/ressource/php/hero.php"; 
require_once __DIR__ . "/ressource/php/howItWorks.php";



// ------------------------------------------------ AFFICHAGE TEXTE SEO ET SPIN --------------------------------------------------------//
require_once  "ressource/php/texte.php";
require_once  "ressource/php/texte2.php";





// Générer le texte avec les paramètres
$texteGenere = afficherTexteAdaptation($city, $postal_code, $phone_number,$region);
$texteGenere2 = afficherTexteAdaptation2($city, $postal_code, $phone_number,$region);


// Appliquer le spinning sur l'ensemble du texte
$variantes = [$texteGenere, $texteGenere2];
$texteFinal = $variantes[array_rand($variantes)];
echo $texteFinal;
?>

<!-- ------------------------------------------------ AFFICHAGE TEXTE SEO ET SPIN -------------------------------------------------------->




<!-- ------------------------------------------------ AFFICHAGE TEXTE REALISATION AVEC VILLE -------------------------------------------------------->


<?php
require_once  "ressource/php/texteville.php";

$currentPage = basename(__FILE__, ".php");
$parts = explode('_', $currentPage);
$currentCitySlug = $parts[0];
$currentRegionSlug = $parts[2] ?? '';

// Charger le fichier JSON
$jsonFile = __DIR__ . "/data/cities.json";
$allCities = json_decode(file_get_contents($jsonFile), true);

// Filtrage des villes de la région
$relatedCities = array_filter($allCities, function ($city) use ($currentRegionSlug, $currentCitySlug) {
  $regionSlug = strtolower(str_replace(' ', '-', $city['region']));
  $citySlug = strtolower(str_replace(' ', '-', $city['city']));
  return $regionSlug === $currentRegionSlug && $citySlug !== $currentCitySlug;
});


$texteGenere3 = afficherTexteVille($city, $postal_code, $phone_number, $region, $relatedCities);

echo $texteGenere3;



?>

<!-- ------------------------------------------------ AFFICHAGE TEXTE REALISATION AVEC VILLE -------------------------------------------------------->






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

<section class="carousel-realizations">
  <h2>Nuestras Realizaciones</h2>
  <div class="carousel-container">
    <div class="carousel-track">
      <?php foreach ($images as $index => $imagePath): ?>
        <div class="carousel-slide">
          <img 
            src="<?= $webPath . basename($imagePath); ?>" 
            alt="Réalisation <?= $index + 1 ?>" 
          />
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
  <!-- S3 : CAROUSEL -->



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
