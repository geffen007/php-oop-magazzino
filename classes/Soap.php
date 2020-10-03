<?php
require_once 'Product.php';

class Soap extends Product {
    public $typeSoap;
    public $ingredients;

    public function __construct($_priceS, $_quantity, $_brand, $_type, $_typeSoap){
    parent::__construct($_priceS, $_quantity, $_brand, $_type);
    $this->typeSoap = $_typeSoap;
    }
}
?>
