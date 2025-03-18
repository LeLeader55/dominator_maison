/*<?php
/************************************************
 *   1) CONNEXION À LA BASE DE DONNÉES
 ************************************************/
$servername = "localhost";  // Votre serveur MySQL
$username   = "u263498577_leader55";           // Votre nom d'utilisateur
$password   = "50541012dD@";                   // Votre mot de passe
$dbname     = "u263498577_leader55";           // Nom de la base

// Crée la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifie la connexion
if ($conn->connect_error) {
  die("Erreur de connexion: " . $conn->connect_error);
}

/************************************************
 *   2) TRAITER LE FORMULAIRE
 ************************************************/
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Récupère les champs du formulaire
  $nombre  = $_POST["nombre"]  ?? "";
  $telefono= $_POST["telefono"]?? "";
  $email   = $_POST["email"]   ?? "";
  $mensaje = $_POST["mensaje"] ?? "";

  // Prépare la requête INSERT
  $sql = "INSERT INTO LEAD (Nombre, Teléfono, CorreoElectronico, Mensaje)
          VALUES (?, ?, ?, ?)";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ssss", $nombre, $telefono, $email, $mensaje);

  // Exécute la requête
  if ($stmt->execute()) {
    // Succès
    echo "<p style='text-align:center; color:green;'>Formulario enviado con éxito!</p>";
  } else {
    // Erreur
    echo "<p style='text-align:center; color:red;'>Error: " . $stmt->error . "</p>";
  }

  $stmt->close();
}

// On peut fermer la connexion si on veut
// $conn->close();
?>