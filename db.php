<?php 
$servaname = "localhost:3306";
$username = "root"; 
$password = "Admin2626???";
$dbname = "LibraryDB";

// Création de la connexion
$conn = new mysqli($servaname, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection successful!";
}

?>