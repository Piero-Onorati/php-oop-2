<?php

    /**
     * class Product - classe genitore
    */


    class Product {
        protected $id;
        protected $name;
        protected $description;
        protected $price;
        protected $manufacturer;
        protected $image;
        protected $slug;

        function __construct($_id, $_name, $_description, $_price, $_manufacturer, $_image, $_slug ){
            $this->id = $_id;
            $this->name = $_name;
            $this->description = $_description;
            $this->price = $_price;
            $this->manufacturer = $_manufacturer;
            $this->image = $_image;
            $this->slug = $_slug;
        }

    }