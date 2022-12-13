<?php
require_once __DIR__ . '/Product.php';
class Toys extends Product
{
    public $materiale;
    public function __construct($_name, $_price, $_img, $_descript, Category $_category, $_materiale)
    {
        parent::__construct($_name, $_price, $_img, $_descript, $_category);
        $this->materiale = $_materiale;
    }
}