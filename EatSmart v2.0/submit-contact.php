<?php

// Récupérer les données du formulaire 
$fname = htmlspecialchars($_GET['fname']);
$lname = htmlspecialchars($_GET['lname']);
$object = htmlspecialchars($_GET['objet']);
$mail = ($_GET['mail']);
$message = htmlspecialchars($_GET['message']);

// Afficher les données récupérées
echo "<p><strong>Nom : </strong>" . $fname . "</p>";
echo "<p><strong>Prénom : </strong>" . $lname . "</p>";
echo "<p><strong>Objet : </strong>" . $object . "</p>";
echo "<p><strong>Email : </strong>" . $mail . "</p>";
echo "<p><strong>Message : </strong>" . $message . "</p>";
