<?php
// Activer l'affichage des erreurs PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Fonction de "slugify" pour transformer noms de ville/region en format URL-safe
function slugify($string) {
    $string = iconv('UTF-8', 'ASCII//TRANSLIT', $string);          // enlever les accents
    $string = preg_replace('/[^a-zA-Z0-9\s]/', '', $string);       // enlever caractères spéciaux
    $string = preg_replace('/\s+/', '_', $string);                 // espaces → underscore
    return strtolower(trim($string));                              // minuscule et propre
}

// Charger le fichier JSON contenant les villes
$json_file = "data/cities.json";
if (!file_exists($json_file)) {
    die("❌ Le fichier JSON n'existe pas !");
}

$data = json_decode(file_get_contents($json_file), true);
if (!$data) {
    die("❌ Erreur de lecture du fichier JSON !");
}

// Fichier de log
$log_file = "data/debug.log";
file_put_contents($log_file, "🟢 DÉMARRAGE DU SCRIPT...\n", FILE_APPEND);

// Générer les pages
$urls = [];

foreach ($data as $location) {
    $city = htmlspecialchars($location['city']);
    $postal_code = htmlspecialchars($location['postal_code']);
    $region = htmlspecialchars($location['region']);
    $latitude = floatval($location['latitude']);
    $longitude = floatval($location['longitude']);
    $state_abv = htmlspecialchars($location['state_abv']);
    $state = htmlspecialchars($region);

    // Slugifier pour les noms de fichier
    $formatted_city = slugify($city);
    $formatted_region = slugify($region);
    $file_name = "aislamiento_de_aticos_por_1_euro_{$formatted_city}_{$postal_code}_{$formatted_region}.php";

    // Log debug
    file_put_contents($log_file, "📄 Génération : $file_name (Ville: $city | LAT: $latitude | LNG: $longitude)\n", FILE_APPEND);

    // Charger le template et remplacer les balises
    $template = file_get_contents("template.php");
    $template = str_replace("[CITY]", ucfirst($city), $template);
    $template = str_replace("[POSTAL_CODE]", $postal_code, $template);
    $template = str_replace("[REGION]", ucfirst($region), $template);
    $template = str_replace("[LATITUDE]", strval($latitude), $template);
    $template = str_replace("[LONGITUDE]", strval($longitude), $template);
    $template = str_replace("[STATE_ABV]", $state_abv, $template);
    $template = str_replace("[STATE]", $state, $template);

    // Sauvegarde du fichier
    file_put_contents($file_name, $template);

    // Ajouter à la liste d’URLs
    $urls[] = "<li><a href='$file_name'>$file_name</a></li>";
}

// Affichage des fichiers générés
echo "<h1>Pages générées</h1><ul>";
echo implode("\n", $urls);
echo "</ul>";

// Fin du log
file_put_contents($log_file, "✅ FIN DU SCRIPT - Toutes les pages ont été générées avec succès.\n", FILE_APPEND);



// Génération du sitemap.xml avec <lastmod>
$sitemap = '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
$sitemap .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

foreach ($urls as $urlTag) {
    preg_match("/href='(.*?)'/", $urlTag, $matches);
    if (isset($matches[1])) {
        $fileNameOnly = $matches[1];
        $filePath = __DIR__ . '/' . $fileNameOnly;

        $lastmod = file_exists($filePath)
            ? date("Y-m-d", filemtime($filePath))
            : date("Y-m-d");

        $loc = htmlspecialchars("https://www.tonsite.com/" . $fileNameOnly);

        $sitemap .= "  <url>\n";
        $sitemap .= "    <loc>$loc</loc>\n";
        $sitemap .= "    <lastmod>$lastmod</lastmod>\n";
        $sitemap .= "    <changefreq>weekly</changefreq>\n";
        $sitemap .= "    <priority>0.8</priority>\n";
        $sitemap .= "  </url>\n";
    }
}

$sitemap .= '</urlset>';

file_put_contents("sitemap.xml", $sitemap);
file_put_contents($log_file, "✅ Sitemap généré avec <lastmod>\n", FILE_APPEND);


?>
