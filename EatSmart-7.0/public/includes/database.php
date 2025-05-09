<?php
$servername = "localhost";
$username = "root";
$password = "";
    
try {
    $pdo = new PDO("mysql:host=localhost;dbname=eatsmart", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo json_encode(["error" => "Connexion échouée : " . $e->getMessage()]);
    exit;
}
?>