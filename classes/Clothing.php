<?php

    require_once 'Product.php';
    require_once __DIR__.'/../traits/Details.php';

    /**
     * class Clothing - classe figlia
    */

    class Clothing extends Product
    {
        use Details;

        // Aggiungere attributo per le taglie (S, M, L, etc.)
        protected $clothing_size;
        //Aggiungere attrbuto per il tipo di abbigliamento (felpe, pantaloni, etc.)
        protected $clothing_category;

        protected $new_price = 0;

        function __construct($_id, $_name, $_description, $_manufacturer, $_image, $_slug, $_price, $_clothing_size, $_clothing_category ){
            parent::__construct($_id, $_name, $_description, $_manufacturer, $_image, $_slug, $_price);
            
            $this->clothing_size = $_clothing_size;
            $this->clothing_category = $_clothing_category;
        }

    }
    