<?php
require_once __DIR__ . '/Product.php';
class Food extends Product
{
    public $nome_food;
    public $peso;
    public $ingredienti;
    public function __construct($_name, $_price, $_img, $_descript, Category $_category, $_nome_food, $_peso, $_ingredienti)
    {
        parent::__construct($_name, $_price, $_img, $_descript, $_category);
        $this->nome_food = $_nome_food;
        $this->peso = $_peso;
        $this->ingredienti = $_ingredienti;
    }
}