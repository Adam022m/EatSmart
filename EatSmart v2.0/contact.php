<?php require 'header.php'; ?>

<body>

    <h2>Nous contacter !</h2>
    <br>
    <form action="/submit-contact.php" method="get">
        <label for="fname">Nom</label>
        <input type="text" name="fname" id="">
        <br>
        <br>
        <label for="lname">Prénom</label>
        <input type="text" name="lname" id="">
        <br><br>
        <label for="objet">Objet</label>
        <textarea name="objet" id=""></textarea>
        <br><br>
        <label for="mail">Email</label>
        <input type="text" name="mail" id="">
        <br><br>
        <label for="message">Demande</label>
        <textarea name="message" id=""></textarea>
        <br><br>
        <input type="submit">


    </form>

    <?php require 'footer.php'; ?>
</body>

</html>