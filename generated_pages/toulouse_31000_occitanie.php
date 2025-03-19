
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
  <link rel="stylesheet" href="ressource/style.css" />

  
</head>
<body>

<?php
require_once __DIR__ . "/ressource/header.php";
require_once __DIR__ . "/ressource/hero.php"; 
require_once __DIR__ . "/ressource/howItWorks.php";



// ------------------------------------------------ AFFICHAGE TEXTE SEO ET SPIN --------------------------------------------------------//
require_once  "ressource/texte.php";
require_once  "ressource/texte2.php";



$pageName = basename(__FILE__, ".php");
$parts = explode('_', $pageName);


$city = ucfirst($parts[0] ?? "Ville inconnue"); // Libourne
$postal_code = $parts[1] ?? "00000"; // 33500
$region = str_replace('-', ' ', $parts[2] ?? "Région inconnue"); // Nouvelle-Aquitaine

// Numéro de téléphone par défaut ou spécifique par région (ex: base de données)
$phone_number = "+33 6 22 90 60 82"; // À modifier selon la région si besoin

// Générer le texte avec les paramètres
$texteGenere = afficherTexteAdaptation($city, $postal_code, $phone_number,$region);
$texteGenere2 = afficherTexteAdaptation2($city, $postal_code, $phone_number,$region);


// Appliquer le spinning sur l'ensemble du texte
$variantes = [$texteGenere, $texteGenere2];
$texteFinal = $variantes[array_rand($variantes)];
echo $texteFinal;


// ------------------------------------------------ AFFICHAGE TEXTE SEO ET SPIN --------------------------------------------------------//







?>



  <!-- S3 : CAROUSEL -->
  <?php
// Dossier contenant les images
$directory = "/../assets/images/";

// Scanner le dossier pour récupérer les fichiers image
$images = glob($directory . "*.{jpg,png,jpeg,gif}", GLOB_BRACE);

// Vérifier si des images existent
if (!$images) {
    die("Aucune image trouvée dans le dossier $directory");
}

// Mélanger les images aléatoirement
shuffle($images);

// Prendre seulement 3 images pour le carousel
$selectedImages = array_slice($images, 0, 3);
?>

<!-- CAROUSEL HTML -->
<section class="carousel-realizations">
  <h2>Nuestras Realizaciones</h2>
  <div class="carousel-container">
    <div class="carousel-track">

      <?php foreach ($selectedImages as $index => $image): ?>
        <div class="carousel-slide">
          <img src="<?php echo $image; ?>" alt="Realización <?php echo $index + 1; ?>">
        </div>
      <?php endforeach; ?>

    </div> <!-- /.carousel-track -->

    <!-- Boutons de navigation -->
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



  <?php
// ------------------------------------------------------------------ RECUP VILLE REGION ET ON AFFICHE ----------------------------------------------------


$pageName = basename(__FILE__, ".php");
// "libourne_33500_nouvelle-aquitaine"

$parts = explode('_', $pageName);
// [0] => libourne
// [1] => 33500
// [2] => nouvelle-aquitaine  (si tout se passe bien)

$regionSlugPage = $parts[2] ?? ""; 
// "nouvelle-aquitaine"

$regionPage = str_replace('-', ' ', $regionSlugPage);
// "nouvelle aquitaine"
$regionPage = ucwords($regionPage);
// "Nouvelle Aquitaine" (par exemple)

// 2) Charger cities.json
$jsonFile = __DIR__ . "/../data/cities.json";
if (!file_exists($jsonFile)) {
    die("Fichier cities.json introuvable !");
}
$allData = json_decode(file_get_contents($jsonFile), true);
if (!$allData) {
    die("Impossible de lire le JSON ou JSON invalide !");
}

// 3) Filtrer
$regionSlugPage = strtolower($regionSlugPage);
// ex: "nouvelle-aquitaine"
$filtered = [];
foreach ($allData as $row) {
    $rowSlug = strtolower(str_replace(' ', '-', $row['region']));
    if ($rowSlug === $regionSlugPage) {
        $filtered[] = $row;
    }
}
// 4) Affichage
if (!empty($filtered)) {
    echo "<h3 class='regionTitle'>Villes couvertes pour la région $regionPage</h3>";

    // Conteneur des deux boutons
    echo "<div class='regionButtons'>";
    echo "  <button id='btnPlus' onclick='showCities()'>+ Afficher</button>";
    echo "  <button id='btnMoins' onclick='hideCities()'>- Masquer</button>";
    echo "</div>";

    // Liste masquée au départ
    echo "<div id='cityList'>";
    echo "<ul>";
    foreach ($filtered as $v) {
        $citySlug  = strtolower(str_replace(' ', '-', $v['city']));
        $cityLabel = $citySlug . "_" . $v['postal_code'] . "_" . $regionSlugPage;

        // Lien cliquable
        $cityUrl = $cityLabel . ".php";
        echo "<li><a href='$cityUrl'>$cityLabel</a></li>";
    }
    echo "</ul>";
    echo "</div>";
} else {
    echo "Aucune ville trouvée pour la région « $regionPage ».";
}
?>

<script>
function showCities() {
  document.getElementById('cityList').style.display = 'block';
}
function hideCities() {
  document.getElementById('cityList').style.display = 'none';
}

// ------------------------------------------------------------------ RECUP VILLE REGION ET ON AFFICHE ----------------------------------------------------

</script>



<?php require_once __DIR__ . "/ressource/footer.php"; ?>




 


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
