<?php
// Activer l'affichage des erreurs PHP
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Charger le fichier JSON contenant les villes
$json_file = "data/cities.json";
if (!file_exists($json_file)) {
    die("Le fichier JSON n'existe pas !");
}

$data = json_decode(file_get_contents($json_file), true);
if (!$data) {
    die("Erreur de lecture du fichier JSON !");
}

// Log fichier pour vérifier le bon déroulement
$log_file = "data/debug.log";
file_put_contents($log_file, "DÉMARRAGE DU SCRIPT...
", FILE_APPEND);

// Générer les pages avec le format d'URL souhaité
$urls = [];
foreach ($data as $location) {
    $city = htmlspecialchars($location['city']);
    $postal_code = htmlspecialchars($location['postal_code']);
    $region = htmlspecialchars($location['region']);
    $latitude = floatval($location['latitude']);
    $longitude = floatval($location['longitude']);
    $state_abv = htmlspecialchars($location['state_abv']);
    $state = htmlspecialchars($region);

    // Vérification des valeurs
    file_put_contents($log_file, "Ville: $city | LAT: $latitude | LNG: $longitude
", FILE_APPEND);

    // Nom du fichier selon le format demandé: nomdelaville_codepostale_region.html
    $formatted_city = strtolower(str_replace(' ', '', $city));
    $formatted_region = strtolower(str_replace(' ', '', $region));
    $file_name = "generated_pages/" . $formatted_city . "_" . $postal_code . "_" . $formatted_region . ".php";

    // Charger le template HTML et remplacer les valeurs
    $template = file_get_contents("template.php");
    $template = str_replace("[CITY]", ucfirst($city), $template);
    $template = str_replace("[POSTAL_CODE]", $postal_code, $template);
    $template = str_replace("[REGION]", ucfirst($region), $template);
    $template = str_replace("[LATITUDE]", strval($latitude), $template);
    $template = str_replace("[LONGITUDE]", strval($longitude), $template);
    $template = str_replace("[STATE_ABV]", $state_abv, $template);
    $template = str_replace("[STATE]", $state, $template);

    // Enregistrement du fichier
    file_put_contents($file_name, $template);

    // Ajouter l'URL à la liste
    $urls[] = "<li><a href='$file_name'>$file_name</a></li>";
}

// Affichage de la liste des pages générées
echo "<h1>Pages générées</h1><ul>";
echo implode("
", $urls);
echo "</ul>";

// Confirmer que tout s'est bien passé
file_put_contents($log_file, "✅ FIN DU SCRIPT - Toutes les pages ont été générées avec succès.
", FILE_APPEND);
?>
