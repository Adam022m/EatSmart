<?php
require_once __DIR__ . '/../public/includes/database.php';

function getPlats() {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM article");
    echo json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
}

function createProduit() {
    global $pdo;
    $input = json_decode(file_get_contents("php://input"), true);

    if (!isset($input["nom"]) || !isset($input["prix"])) {
        http_response_code(400);
        echo json_encode(["error" => "Données incomplètes"]);
        return;
    }

    $stmt = $pdo->prepare("INSERT INTO produits (nom, prix) VALUES (?, ?)");
    $stmt->execute([$input["nom"], $input["prix"]]);

    echo json_encode(["message" => "Produit ajouté"]);
}

function updateProduit() {
    global $pdo;
    $input = json_decode(file_get_contents("php://input"), true);

    if (!isset($input["id"]) || !isset($input["nom"]) || !isset($input["prix"])) {
        http_response_code(400);
        echo json_encode(["error" => "Données incomplètes"]);
        return;
    }

    $stmt = $pdo->prepare("UPDATE produits SET nom = ?, prix = ? WHERE id = ?");
    $stmt->execute([$input["nom"], $input["prix"], $input["id"]]);

    echo json_encode(["message" => "Produit mis à jour"]);
}

function deleteProduit() {
    global $pdo;
    $input = json_decode(file_get_contents("php://input"), true);

    if (!isset($input["id"])) {
        http_response_code(400);
        echo json_encode(["error" => "ID manquant"]);
        return;
    }

    $stmt = $pdo->prepare("DELETE FROM produits WHERE id = ?");
    $stmt->execute([$input["id"]]);

    echo json_encode(["message" => "Produit supprimé"]);
}
?>