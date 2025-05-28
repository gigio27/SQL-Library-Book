<?php
$servername = "localhost";
$username = "root";
$password = "1234!";
$dbname = "LibraryDB"; // Nom exact de votre base de données

// Vérifier si l'extension MySQLi est chargée
if (!extension_loaded("mysqli")) {
    die("Erreur : l'extension MySQLi n'est pas activée.");
}

// Création de la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de connexion : " . $conn->connect_error);
}

?>
