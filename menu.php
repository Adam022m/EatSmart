<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>EatSmart : Mieux manger est une nécessité !</h1>
    </header>
    
    <?php 
    $sandwich = [[
        'nom' => 'Boursin',
        'description' => 'Escalope, sauce boursin, avec frites et boissons',
        'Prix' =>  '7,90€'
        'image' => '"./assets/sandwich boursin.jfif"'
    ],
    [ 
        'nom' => 'Suisse',
        'description' => 'Escalope ou tenders au choix, crème fraiche, avec frites et boissons',
        'Prix' => '6,50€',
        'image' = ''
    ],
    [
        'nom' => 'Curry',
        'description' => 'Escalope, sauce curry, avec frites et boissons',
        'Prix' => '6,90€',
        'image' => ''
    ]
    ] ;  
    $texmex = [[
        'nom' => 'Samboussa',
        'description' => 'Viande hachée pimentée enroulé d\'une fine pate croustillante',
        'Prix'=> '0,50€ l`\unité',
        'image' => '"./assets/samboussa.jfif"'
    ],
    [
        'nom' => 'Nems',
        'description' => 'Nems à l\'unité',
        'Prix' => '0,50€ l\'unité',
        'image' => ''
    ],
    [
        'nom' => 'Nuggets',
        'description' => 'Nuggets frits à l\'unité',
        'Prix' => '0,80€ l\'unité',
        'image' => ''
    ]
    ];
    $dessert = [[
        'nom' => 'Pot de glace au chocolat',
        'description' => 'Glace au chocolat dans un pot de 500ml, cuillère fournie',
        'Prix' => '1,50€',
        'image' => '"./assets/pot de glace artisanale.jfif"'
    ],
    [
        'nom' => 'Pot de glace à la vanille',
        'description' => 'Glace à la vanile dans un pot de 500ml, cuillère fournie',
        'Prix' => '1,50€',
        'image' => ''
    ]
    ];
    ?>

    <section class="menu">
        <ul>
            <h2>Sandwich</h2>
            <img src= <?php echo $dessert[0]['image']; ?> alt="Photo d'un sandwich boursin ">
            <li>Nom : <?php echo $sandwich[1]['nom']; ?></li>
            <li>Escalope, sauce boursin, avec frites et boissons</li>
            <li>Prix : 7,90€</li>
        </ul>
        <ul>
            <h2>Tex Mex</h2>
            <img src="./assets/samboussa.jfif" alt="Photo de samboussa">
            <li>Nom : <?php echo $texmex[0]['nom']; ?></li>
            <li> Viande hachée pimentée enroulé d'un d'une fine pate croustillante</li>
            <li>Prix : 1,00€ l'unité</li>
        </ul>
        <ul>
            <h2>Dessert</h2>
            <img src="./assets/pot de glace artisanale.jfif" alt="Photo d'un pot de glace artisanale" height="80px">
            <li>Nom : <?php echo $dessert[1]['nom']; ?></li>
            <li>Pôt de glaces avec différents goûts disponibles parmi lesquels : chocolat, vanille, fraise</li>
            <li>Prix : 2,00€</li>
        </ul>
    </section>
</body>
</html>