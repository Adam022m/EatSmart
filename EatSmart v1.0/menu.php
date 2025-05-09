<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>

    <header>
        <h1>EatSmart : Mieux manger est une nécessité !</h1>
        <nav>
            <ul>
                <a href=""><li>Menu</li></a>
                <a href=""><li>Contact</li></a>
            </ul>
        </nav>
    </header>
    
    <?php 
    $sandwich = [[
        'nom' => 'Boursin',
        'description' => 'Description : Escalope, sauce boursin, avec frites et boissons',
        'Prix' =>  ' Prix : 7,90€',
        'image' => '"./assets/sandwich boursin.jfif"'
    ],
    [ 
        'nom' => 'Suisse',
        'description' => 'Description : Escalope ou tenders au choix, crème fraiche, avec frites et boissons',
        'Prix' => ' Prix : 6,50€',
        'image' => '"./assets/suisse sandwich.webp"'
    ],
    [
        'nom' => 'Curry',
        'description' => 'Description : Escalope, sauce curry, avec frites et boissons',
        'Prix' => ' Prix : 6,90€',
        'image' => '"./assets/curry sandwich.jfif"'
    ]
    ] ;  
    $texmex = [[
        'nom' => 'Samboussa',
        'description' => 'Description : Viande hachée pimentée enroulé d\'une fine pate croustillante',
        'Prix'=> ' Prix : 0,50€ l`\unité',
        'image' => '"./assets/samboussa.jfif"'
    ],
    [
        'nom' => 'Nems',
        'description' => 'Description : Nems à l\'unité',
        'Prix' => ' Prix : 0,50€ l\'unité',
        'image' => '"./assets/nems.jfif"'
    ],
    [
        'nom' => 'Nuggets',
        'description' => 'Description : Nuggets frits à l\'unité',
        'Prix' => ' Prix : 0,80€ l\'unité',
        'image' => '"./assets/nuggets.jfif"'
    ]
    ];
    $dessert = [[
        'nom' => 'Pot de glace au chocolat',
        'description' => 'Description : Glace au chocolat dans un pot de 500ml, cuillère fournie',
        'Prix' => ' Prix : 1,50€',
        'image' => '"./assets/pot glace chocolat.jfif"'
    ],
    [
        'nom' => 'Pot de glace à la vanille',
        'description' => 'Description : Glace à la vanile dans un pot de 500ml, cuillère fournie',
        'Prix' => 'Prix : 1,50€',
        'image' => '"./assets/pot glace vanille.jfif"'
    ]
    ];
    ?>

    <section class="menu">
        <ul>
            <h2>Sandwich</h2>
            <img src= <?php echo $sandwich[1]['image']; ?> alt="Photo d'un sandwich boursin " height ="250px">
            <li>Nom : <?php echo $sandwich[1]['nom']; ?></li>
            <li><?php echo $sandwich[1]['description']; ?></li>
            <li><?php echo $sandwich[1]['Prix']; ?></li>
        </ul>
        <ul>
            <h2>Tex Mex</h2>
            <img src= <?php echo $texmex[0]['image']; ?> alt="Photo de samboussa">
            <li>Nom : <?php echo $texmex[0]['nom']; ?></li>
            <li> <?php echo $texmex[0]['description']; ?></li>
            <li><?php echo $texmex[1]['Prix']; ?></li>
        </ul>
        <ul>
            <h2>Dessert</h2>
            <img src= <?php echo $dessert[1]['image']; ?> alt="Photo d'un pot de glace goût vanille" height="80px">
            <li>Nom : <?php echo $dessert[1]['nom']; ?></li>
            <li><?php echo $dessert[1]['description']; ?></li>
            <li><?php echo $dessert[1]['Prix']; ?></li>
        </ul>
    </section>
</body>
</html>