<?php
require __DIR__ . '/includes/header.php';
?>


<section class="form-contact">
    <div class="preform inscription">
        <span>Page d'inscription</span>
        <span>Veuillez-vous s'inscrire :</span>
        <a href="./login.php">Déjà inscrit ?</a>
    </div>
        <form method="post" action="./traitement.php">
            <input type="text" id="prenom" name="prenom" value="" placeholder="Entrez votre prénom*" required>
            <input type="text" id="nom" name="nom" value="" placeholder="Entrez votre nom*" required>
            <input type="text" id="email" name="email" value="" placeholder="Tapez votre adresse e-mail*" required>
            <input type="password" id="pass" name="pass" value="" placeholder="Créer votre mot de passe*" required>
            <!-- <textarea name="message" id="message" placeholder="Entrez votre message*"></textarea> -->
            <br>
            <input type="submit" value="M'inscrire" name="ok">
            <p>Les champs portant une * doivent être <span>obligatoirement remplis</span></p>
        </form>
    </section>


<?php
    require __DIR__ . '/includes/footer.php';
?>