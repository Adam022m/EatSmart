<?php
require 'database.php';


if(isset($_POST['ok'])) {
   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $email = $_POST['email'];
   $mdp = $_POST['pass'];

   $requete = $conn->prepare("INSERT INTO users VALUES (0, :nom, :prenom, :email, :mdp)");
   $requete->execute(
    array(
        "nom" => $nom,
        "prenom" => $prenom,
        "email" => $email,
        "mdp" => $mdp
    )
    );

    echo "Enregistrement réussie";
}
?>