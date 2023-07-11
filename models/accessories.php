<?php 
   class Accessories extends Product {
    public $material;
    public $size;

    public function __construct($name, $image, $price, $category, $material, $size,){
       parent::__construct($name, $image, $price, $category);
       $this->materials = $materials;
       $this->size = $size;
    }
   } 
?>