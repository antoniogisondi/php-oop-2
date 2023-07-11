<?php 
   class Games extends Product {
        public $size;
        public $features;

        public function __construct($name, $image, $price, $category, $size, $features){
            parent::__construct($name, $image, $price, $category);
            $this->size = $size;
            $this->features = $features;
        }
   }
?>