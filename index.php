<?php

    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/Clothing.php';
    require_once __DIR__ . '/classes/Shoes.php';


    // Classe Genitore
    $prodotto = new Product(3,'lorem','ipsum', 6,'dolor', 'sit', 'amet');
    var_dump($prodotto);

    //Classe Figlia CLOTHING

    $t_shirt = new Clothing(3,'Join Life','T-shirt in felpa blu in coordinato', 15.99,'Pull&Bear', 'https//', '...', 'S', 'maglietta');

    $t_shirt->setInSale(true);
    $t_shirt->getInSale();

    var_dump($t_shirt);

    //Classe Figlia SHOES

    $scarpa = new Shoes(3,'Nike Jordan MA2','Sneakers beige pietra', 128.99,'Nike', 'https//', '...', '40', 'sneakers');

    $scarpa->setInSale(false);
    $scarpa->getInSale();
    
    var_dump($scarpa);

    

