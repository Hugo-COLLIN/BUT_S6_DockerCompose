<?php
$servername = "mariadb";
$username = "myuser";
$password = "mypassword";
$database = "mydatabase";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}
echo "Connexion réussie à la base de données MariaDB";
?>
