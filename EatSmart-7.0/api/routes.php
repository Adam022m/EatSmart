<?php

require_once __DIR__ . '/../public/includes/database.php';
require_once "../controllers/Controllers.php";

// Détection de la méthode HTTP et appel du bon contrôleur
$requestMethod = $_SERVER["REQUEST_METHOD"];

switch ($requestMethod) {
    case "GET":
        // 1. Filtrer par ID
        if (isset($_GET['id'])) {
            $id = (int) $_GET['id'];
            $stmt = $pdo->prepare("SELECT * FROM article WHERE id_article = ?");
            $stmt->execute([$id]);
            $plat = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($plat) {
                echo json_encode($plat);
            } else {
                http_response_code(404);
                echo json_encode(["message" => "Plat non trouvé"]);
            }
        }
        // 2. Filtrer par nom (recherche partielle, insensible à la casse)
        elseif (isset($_GET['nom'])) {
            $nom = '%' . $_GET['nom'] . '%';
            $stmt = $pdo->prepare("SELECT * FROM article WHERE nom LIKE ?");
            $stmt->execute([$nom]);
            $resultats = $stmt->fetchAll(PDO::FETCH_ASSOC);

            if (!empty($resultats)) {
                echo json_encode($resultats);
            } else {
                http_response_code(404);
                echo json_encode(["message" => "Aucun plat correspondant au nom"]);
            }
        }
        // 3. Sinon, tous les plats
        else {
            getPlats();
        }
        break;

    case "POST":
        createProduit();
        break;

    case "PUT":
        updateProduit();
        break;

    case "DELETE":
        deleteProduit();
        break;
}
?>