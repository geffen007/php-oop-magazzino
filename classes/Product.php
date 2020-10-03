<?php

class Product{
    public $priceS;
    public $qt;
    public $brand;
    public $type;

    public function __construct($_priceS, $_quantity, $_brand, $_type){
        $this->priceS = $_priceS;
        $this->qt = $_quantity;
        $this->brand = $_brand;
        $this->type = $_type;
    }
}
