<?php

require './includes/header.php';
// Vérifier si un ID est passé en paramètre
if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("Aucun ID de plat fourni.");
}

$id = (int)$_GET['id'];

// Appel de l'API via cURL
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, "http://eatsmart/EatSmart-3.0/api/plats.php?id=$id");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($curl);
curl_close($curl);

// Vérifier la réponse
if ($response === false) {
    die("Erreur lors de la récupération des données de l'API.");
}

$data = json_decode($response, true);

// Vérifier si un plat a été trouvé
if (!isset($data['id_article'])) {
    echo "Aucun plat trouvé pour l'ID : $id";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails du plat</title>
    <link rel="stylesheet" href="/EatSmart-3.0/public/css/style.css"> <!-- Adapte ce chemin selon ton projet -->
</head>
<body>
    <section class="details">
    <h2>Détails du plat</h1>
    <p><strong>ID :</strong> <?= htmlspecialchars($data['id_article']) ?></p>
    <p><strong>Nom :</strong> <?= htmlspecialchars($data['nom']) ?></p>
    <p><strong>Prix :</strong> <?= htmlspecialchars($data['prix']) ?> €</p>
</body>
    </section>
</html>
