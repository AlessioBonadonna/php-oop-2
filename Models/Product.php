<?php
include_once __DIR__ . '/Category.php';
class Product
{
    // Properties (variables)
    public $name;
    public $price;
    public $img;
    public $descrip;
    public $category;

    // Methods (functions)
    public function __construct($_name, $_price, $_img, $_descript, Category $_category)
    {
        $this->name = $_name;
        $this->price = $_price;
        $this->img = $_img;
        $this->descrip = $_descript;
        $this->category = $_category;
    }
    public function getTitle()
    {
        return $this->name;
    }
    public function getImg()
    {
        return $this->img;
    }
    public function getDesc()
    {
        return $this->descrip;
    }

    public function getPrezzo()
    {
        return $this->price;
    }
}