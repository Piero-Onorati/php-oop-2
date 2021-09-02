<?php

    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/Clothing.php';
    require_once __DIR__ . '/classes/Shoes.php';


    // Classe Genitore
    $prodotto = new Product(3,'lorem','ipsum', 6,'dolor', 'sit', 'amet');
    var_dump($prodotto);

    //Classe Figlia
    $t_shirt = new Clothing(3,'Join Life','T-shirt in felpa blu in coordinato', 15.99,'Pull&Bear', 'https//', '...', 'S', 'maglietta');
    var_dump($t_shirt);

    //Classe Figlia
    $scarpa = new Shoes(3,'Nike Jordan MA2','Sneakers beige pietra', 128.99,'Nike', 'https//', '...', '40', 'sneakers');
    var_dump($scarpa);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>