<?php
include_once __DIR__ . '/Models/Product.php';

$categoriaGatto = new Category('Cane');
$categoriaCane = new Category('Gatto');

$prodotto1 = new Product("aa", "aa", "aa", "o", $categoriaCane);
var_dump($prodotto1);