<?php

    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/Clothing.php';
    require_once __DIR__ . '/classes/Shoes.php';

    // Classe Genitore
    try {
        $prodotto = new Product(null,'lorem','ipsum', 6,'dolor', 'sit', 'amet');
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }
    
    var_dump($prodotto);

    //Classe Figlia CLOTHING

    try {
        $t_shirt = new Clothing(null,'Join Life','T-shirt in felpa blu in coordinato', 15.99,'Pull&Bear', 'https//', '...', 'S', 'maglietta');
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }

    $t_shirt->setInSale(true);
    $t_shirt->getInSale();

    var_dump($t_shirt);

    //Classe Figlia SHOES
    try {
        $scarpa = new Shoes(null,'Nike Jordan MA2','Sneakers beige pietra', 128.99,'Nike', 'https//', '...', '40', 'sneakers');
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }

    $scarpa->setInSale(false);
    $scarpa->getInSale();

    var_dump($scarpa);

    

