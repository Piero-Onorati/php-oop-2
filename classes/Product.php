<?php

    class Product {
        public $id;
        public $name;
        public $description;
        public $price;
        public $manufacturer;
        public $image;
        public $slug;

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