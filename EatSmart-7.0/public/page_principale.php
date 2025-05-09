<?php
require __DIR__ . '/includes/variable.php';
require __DIR__ . '/includes/header.php';
?>



    <section class="home-section">
    <h1>EatSmart : <br>
    Bien manger ? <span>Une nécessité ! </span></h1>
    </section>

    <section class="presentation" id="present">
        <div class="text-section">
            <h2>EatSmart <br> La santé dans l'assiette</h2>
            <p>
            Chez EatSmart, nous offrons une cuisine saine et équilibrée élaborée avec des ingrédients frais et locaux. Découvrez une alimentation naturelle pensée pour sublimer votre bien-être et redonner du plaisir à vos repas.
            </p>
        </div>
        <img src="assets/meal-5232255_1280.jpg" alt="Meal">
    </section>
    <section class="menu-section" id="menu-section">
        <div class="text-menu-section">
            <h2>Nos menus</h2>
            <p>Découvrez une sélection de snacks gourmands qui allient plaisir et qualité. Nos créations, élaborées à partir d'ingrédients frais et savoureux, offrent une pause équilibrée pour se faire plaisir tout en savourant des aliments bons pour vous.</p>
            <section class="menu">
            <ul class="plats">
                <h2>Snack gourmand</h2>
                <img src=<?php echo $sandwich[0 ]['image']; ?> alt="Photo snack gourmand " height="250px">
                <li>Nom : <?php echo $sandwich[0]['nom']; ?></li>
                <li><?php echo $sandwich[0]['description']; ?></li>
                <li><?php echo $sandwich[0]['Prix']; ?></li>
            </ul>
            <ul class="plats">
                <h2>Tex Mex</h2>
                <img src=<?php echo $texmex[0]['image']; ?> alt="Photo de samboussa" height="250px">
                <li>Nom : <?php echo $texmex[0]['nom']; ?></li>
                <li> <?php echo $texmex[0]['description']; ?></li>
                <li><?php echo $texmex[0]['Prix']; ?></li>
            </ul>
            <ul class="plats">
                <h2>Dessert</h2>
                <img src=<?php echo $dessert[0]['image']; ?> alt="Photo d'un pot de glace goût vanille" height="250px">
                <li>Nom : <?php echo $dessert[0]['nom']; ?></li>
                <li><?php echo $dessert[0]['description']; ?></li>
                <li><?php echo $dessert[0]['Prix']; ?></li>
            </ul>
        </section>
        </div>
        <div class="command-button"><a href="./commandes.php">Commandez maintenant !</a></div>
        
    </section>

    <section class="contact-section" id="contact-section">
        <div class="contact-text-section">
            <h2>Contact</h2>
            <p>Contactez EatSmart en quelques clics : <br>
    Adresse : Lorem Ipsum <br>
    Téléphone :06 00 00 00 00 <br>
    Email : contact@eatsmart.fr <br>
    
    Venez nous rejoindre et profiter d’une expèrience inédite avec notre chaîne de restaurant !</p>
        </div>
        <img src="./assets/Design sans titre.png" alt="" >
    </section>

    </body>
    <?php require __DIR__ . '/includes/footer.php'; ?>


    </html>