<?php
require_once 'classes/Product.php';
require_once 'classes/Soap.php';
require_once 'classes/Razors.php';
require_once 'classes/Aftershave.php';


$razor = new Razor(34, 10, 'Muhle', 'R41', 'DE', 2019, 'steel');
var_dump($razor);

$soap = new Soap (35, 5, 'Fine', 'Platinum', 'Hard Soap');
var_dump($soap);


$soap->setQt(9);
echo $soap->getQt();
var_dump($soap);
