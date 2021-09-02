<?php

    require_once 'Product.php';
    require_once __DIR__.'/../traits/Details.php';

    /**
     * class Shoes - classe figlia
    */

    class Shoes extends Product 
    {
        use Details;
        
        // Aggiungere attributo per le taglie (36, 37, 38, 39, etc.)
        protected $shoe_size;
        //Aggiungere attrbuto per il tipo di scarpa (boots, stringate, sneakers, etc.)
        protected $shoe_category;

        function __construct($_id, $_name, $_description, $_price, $_manufacturer, $_image, $_slug, $_shoe_size, $_shoe_category){
            parent::__construct($_id, $_name, $_description, $_price, $_manufacturer, $_image, $_slug);
            $this->shoe_size = $_shoe_size;
            $this->shoe_category = $_shoe_category;

        }
    }
    