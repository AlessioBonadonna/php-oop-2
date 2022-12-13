<?php
require 'Product.php';
class CatProduct extends Product
{
    public $dimensioni_cat;
    public $tipo_cat;
    public function __construct($_dimensioni_cat, $_tipo_cat)
    {
        $this->dimensioni_cat = $_dimensioni_cat;
        $this->tipo_cat = $_tipo_cat;
    }
}