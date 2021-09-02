<?php

    require_once __DIR__ . '/classes/Product.php';
    require_once __DIR__ . '/classes/Clothing.php';
    require_once __DIR__ . '/classes/Shoes.php';

    // Classe Genitore
    try {
        $prodotto = new Product(null,'lorem','ipsum', 'dolor', 'sit', 'amet',6);
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }
    
    var_dump($prodotto);

    //Classe Figlia CLOTHING

    try {
        $t_shirt = new Clothing(null,'Join Life','T-shirt in felpa blu in coordinato','Pull&Bear', 'https//', '...', 15.99 , 'S', 'maglietta');
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }

    $t_shirt->setInSale(true);


    var_dump($t_shirt);

    //Classe Figlia SHOES
    try {
        $scarpa = new Shoes(null,'Nike Jordan MA2','Sneakers beige pietra', 'Nike', 'https//', '...', 128.99, '40', 'sneakers');
    } catch (Exception $e) {
        echo 'Errore: ' . $e->getMessage();
    }

    $scarpa->setInSale(false);


    var_dump($scarpa);

    

