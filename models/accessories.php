<?php 
   class Accessories extends Product {
    public $material;
    public $size;

    public function __construct(String $_name, String $_image, Float $_price, String $_category, String $_material, Float $_size,){
       parent::__construct($_name, $_image, $_price, $_category);
       $this->materials = $_materials;
       $this->size = $size;
    }
   } 
?>