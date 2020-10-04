<?php
require_once 'Product.php';

class Soap extends Product {
    public $typeSoap;
    public $ingredients;

    public function __construct($_priceS, $_quantity, $_brand, $_name, $_typeSoap){
    parent::__construct($_priceS, $_quantity, $_brand, $_name);
    $this->typeSoap = $_typeSoap;
    }
}
?>
