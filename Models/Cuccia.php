<?php
require_once __DIR__ . '/Product.php';
class Cuccia extends Product
{
    public  $size;
    public function __construct($_name, $_price, $_img, $_descript, Category $_category, $_size)
    {
        parent::__construct($_name, $_price, $_img, $_descript, $_category);
        $this->size = $_size;
    }
    public function getSize()
    {
        return $this->size;
    }
}