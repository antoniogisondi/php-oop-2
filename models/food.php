<?php 
    class Food extends Product {
        public $weight;
        public $ingredients;
        public function __construct( $name, $image, $price, $category, $weight, $ingredients){
            parent::__construct($name, $image, $price, $category);
                $this->weight = $weight;
                $this->ingredients = $ingredients;
            }
        }
?>