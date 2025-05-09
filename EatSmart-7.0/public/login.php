<?php
require __DIR__ . '/includes/header.php';
require __DIR__ . '/includes/database.php';


    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $mdp = $_POST['pass'];
        if($email != "" && $mdp != "") {
            $req = $conn->query("SELECT * FROM users WHERE email = '$email' AND mdp = '$mdp'");
            $rep = $req->fetch();
            if($rep && isset($rep['id'])) {
                // c'est bon
                // echo"Vous êtes connecté";
                header("Location: dashboard.php");
            } 
            else {
                $error = "Email ou mdp incorrect";
                // echo $error
            }
        }
    }
?>


<section class="form-contact">
    <div class="preform login">
        <span>Page de connexion</span>
        <span>Veuillez-vous connecter :</span>
        <a href="./inscription.php">Pas encore inscrit ?</a>
    </div>
        <form method="post" action="">
            <input type="text" id="email" name="email" value="" placeholder="Tapez votre adresse e-mail*" required>
            <input type="password" id="pass" name="pass" value="" placeholder="Créer votre mot de passe*" required>
            <br>
            <input type="submit" value="Se connecter" name="ok">
        </form>
    </section>


<?php
    if($error) {
        ?>
        <p><?php echo $error; ?> </p>
        <?php
    }
    require __DIR__ . '/includes/footer.php';

?>