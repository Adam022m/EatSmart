<?php
require './includes/header.php';

?>
<section class="recherche">
    <h2>Rechercher un plat</h2>
    
    <form method="GET" action="">
        <input type="text" name="nom" placeholder="Nom du plat" required>
        <button type="submit">Envoyer</button>
    </form>
</section>

<?php
if (isset($_GET['nom'])) {
    $nom = urlencode($_GET['nom']);

    // Appel à l’API avec le nom
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "http://eatsmart/EatSmart-3.0/api/plats.php?nom=$nom");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    curl_close($curl);

    $data = json_decode($response, true);

    // Si un plat est trouvé
    if (is_array($data) && count($data) > 0 && isset($data[0]['id_article'])) {
        $id = $data[0]['id_article'];

        // Redirection vers plats.php?id=...
        header("Location: /EatSmart-3.0/public/details.php?id=" . $id);
        exit;
    } else {
        echo "<p>Aucun plat trouvé avec ce nom.</p>";
    }
}
?>