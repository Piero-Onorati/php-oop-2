<?php

    /**
     * Details
     */

    trait Details
    {
        protected $in_sale;
        protected $sale;

        public function setInSale($_in_sale){
            $this->in_sale = $_in_sale;
        
            if ($_in_sale == true) {
                $this->sale = 0.5;
            }
        }

        public function getInSale(){
            return $this->sale;
        }
    }
    