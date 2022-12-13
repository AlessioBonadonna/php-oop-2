<?php
require 'Product.php';
class DogProduct extends Product
{
    public $dimensioni_dog;
    public $tipo_dog;
    public function __construct($_dimensioni_dog, $_tipo_dog)
    {
        $this->dimensioni_dog = $_dimensioni_dog;
        $this->tipo_dog = $_tipo_dog;
    }
}