<?php

class Product{
    public $priceS;
    public $qt;
    public $brand;
    public $name;

    public function __construct($_priceS, $_quantity, $_brand, $_name){
        $this->priceS = $_priceS;
        $this->qt = $_quantity;
        $this->brand = $_brand;
        $this->name = $_name;
    }

    public function setQt($_quantity){
        $this->qt = $_quantity;
    }

    public function getQt(){
    if(empty($this->qt)){
    die("non hai prodotti in magazzino");
    }
    return $this->qt;
    }
}
