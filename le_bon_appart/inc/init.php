<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "altrh_php_intermediaire_amine";

// Établir la connexion à la base de données
$conn = mysqli_connect($servername, $username, $password, $database);

// Vérifier la connexion
if (!$conn) {
    die("Erreur de connexion à la base de données : " . mysqli_connect_error());
}
