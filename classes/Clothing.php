<?php

    require_once 'Product.php';

    class Clothing extends Product
    {
        // Aggiungere attributo per le taglie (S, M, L, etc.)
        protected $clothing_size;
        //Aggiungere attrbuto per il tipo di abbigliamento (felpe, pantaloni, etc.)
        protected $clothing_category;


        function __construct($_id, $_name, $_description, $_price, $_manufacturer, $_image, $_slug, $_clothing_size, $_clothing_category){
            parent::__construct($_id, $_name, $_description, $_price, $_manufacturer, $_image, $_slug);
            $this->clothing_size = $_clothing_size;
            $this->clothing_category = $_clothing_category;
        }
    }
    