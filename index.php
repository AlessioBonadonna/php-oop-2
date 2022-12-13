<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Category.php';

$prodotto1 = new Product("cane", "di", "dio", "ladro");
var_dump($prodotto1);
