
<?php

require_once __DIR__ . '/includes/header.php';
// Initialiser une session cURL
$curl = curl_init();

// Définir l’URL de l’API locale
curl_setopt($curl, CURLOPT_URL, 'http://eatsmart/EatSmart-3.0/api/plats.php?');

// Indiquer que nous voulons récupérer le résultat sous forme de chaîne
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

// Exécuter la requête et récupérer la réponse JSON
$response = curl_exec($curl);

// Fermer la session cURL pour libérer les ressources
curl_close($curl);

// Vérifier si la requête a réussi
if ($response === false) {
    die("Erreur lors de la récupération des données de l’API.");
}

// Convertir la réponse JSON en tableau PHP associatif
$data = json_decode($response, true);

if (is_array($data)) {
    // Si c'est un tableau associatif (plat unique)
    if (isset($data['id_article'])) {
        // Afficher un seul plat
        echo "<a href='details.php?id=" . ($data['id_article'] ?? $data['id']) . "' target='blank'>";
        echo "ID : " . ($data['id_article'] ?? $data['id']) . "<br></a>";
        echo "Nom : " . ($data['nom'] ?? '-') . "<br>";
        echo "Prix : " . ($data['prix'] ?? '-') . " €<br><hr>";
    } else {
        // Sinon, on boucle sur une liste de plats
        foreach ($data as $plat) {
            echo "<a href='details.php?id=" . ($plat['id_article'] ?? $plat['id']) . "' target='blank'>";
            echo "ID : " . ($plat['id_article'] ?? $plat['id']) . "<br></a>";
            echo "Nom : " . ($plat['nom'] ?? '-') . "<br>";
            echo "Prix : " . ($plat['prix'] ?? '-') . " €<br><hr>";
        }
    }
} else {
    echo "Réponse inattendue :<br>";
    var_dump($data);

}


?>