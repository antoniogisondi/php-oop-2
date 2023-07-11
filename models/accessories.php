<?php 
   class Accessories extends Product {
    public $materials;
    public $size;

    public function __construct($name, $image, $price, $category, $materials, $size,){
       parent::__construct($name, $image, $price, $category);
       $this->materials = $materials;
       $this->size = $size;
    }
   } 
?>