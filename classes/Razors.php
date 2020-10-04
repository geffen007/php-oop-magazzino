<?php
require_once 'Product.php';

class Razor extends Product {
    public $typeRazor;
    public $year;
    public $materials;

    public function __construct($_priceS, $_quantity, $_brand, $_name, $_typeRazor, $_year, $_materials){
    parent::__construct($_priceS, $_quantity, $_brand, $_name);
    $this->typeRazor = $_typeRazor;
    $this->year = $_year;
    $this->materials = $_materials;
    }
}
?>
