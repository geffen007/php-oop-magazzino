<?php
require_once 'Product.php';

class AfterShave extends Product {
    public $typeAS;
    public $ingredients;

    public function __construct($_price, $_quantity, $_brand, $_name, $_typeAS, $_ingredients){
    parent::__construct($_priceS, $_quantity, $_brand, $_name);
    $this->typeAS = $_typeAS;
    $this->ingredients = $_ingredients;
    }
}
?>
