<?php

class Cart
{
    protected $products;
    protected $total;

    public function __construct()
    {
        $this->products = [];
        $this->total = 0;
    }

    public function addProduct($product)
    {
        $this->products[] = $product;
        $this->total += $product->price;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function getTotal()
    {
        return $this->total;
    }
}
