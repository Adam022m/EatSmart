    <?php
    require 'header.php';
    require 'variable.php';
    ?>

    <section class="menu">
        <ul>
            <h2>Sandwich</h2>
            <img src=<?php echo $sandwich[1]['image']; ?> alt="Photo d'un sandwich boursin " height="250px">
            <li>Nom : <?php echo $sandwich[1]['nom']; ?></li>
            <li><?php echo $sandwich[1]['description']; ?></li>
            <li><?php echo $sandwich[1]['Prix']; ?></li>
        </ul>
        <ul>
            <h2>Tex Mex</h2>
            <img src=<?php echo $texmex[0]['image']; ?> alt="Photo de samboussa">
            <li>Nom : <?php echo $texmex[0]['nom']; ?></li>
            <li> <?php echo $texmex[0]['description']; ?></li>
            <li><?php echo $texmex[1]['Prix']; ?></li>
        </ul>
        <ul>
            <h2>Dessert</h2>
            <img src=<?php echo $dessert[1]['image']; ?> alt="Photo d'un pot de glace goût vanille" height="80px">
            <li>Nom : <?php echo $dessert[1]['nom']; ?></li>
            <li><?php echo $dessert[1]['description']; ?></li>
            <li><?php echo $dessert[1]['Prix']; ?></li>
        </ul>
    </section>
    </body>
    <?php require 'footer.php'; ?>

    </html>