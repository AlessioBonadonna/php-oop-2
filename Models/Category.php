<?php

class Category
{
    // Attributi della categoria
    public $name;
    public $products;

    // Costruttore per impostare i valori iniziali della categoria
    public function __construct($_name)
    {
        $this->name = $_name;
        $this->products = array();
    }

    // Metodo per aggiungere un prodotto alla categoria
    public function addProduct($product)
    {
        $this->products[] = $product;
    }

    // Metodo per rimuovere un prodotto dalla categoria
    public function removeProduct($product)
    {
        $index = array_search($product, $this->products);
        if ($index !== false) {
            array_splice($this->products, $index, 1);
        }
    }
}