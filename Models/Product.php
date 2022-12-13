<?php

class Product
{
    // Attributi
    public $image;
    public $title;
    public $price;
    public $category;

    // Costruttore
    public function __construct($image, $title, $price, $category)
    {
        $this->image = $image;
        $this->title = $title;
        $this->price = $price;
        $this->category = $category;
    }
}