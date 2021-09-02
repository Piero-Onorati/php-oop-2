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
            if (is_null($_id)) {
                $this->id = $this->genId();
            }else{
                throw new Exception("The id field must be null. It will be generated automatically");
            }
            $this->name = $_name;
            $this->description = $_description;
            $this->price = $_price;
            $this->manufacturer = $_manufacturer;
            $this->image = $_image;
            $this->slug = $_slug;
        }

        public function genId(){
            $prefix='a0';
            $output= $prefix;
            $chars = range('a', 'z');
            $digits = range(0, 9);
            $parts = array_merge($chars, $digits);
            for ($i=0; $i < 8; $i++) { 
                $output .=  $parts[mt_rand(0, count($parts) - 1)];
            }
            return $output;
        }

       
        

    }