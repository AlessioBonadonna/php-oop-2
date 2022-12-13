<?php
class Category
{
    public $nome_categoria;
    public $elenco_prodotti = array();
    public function __construct($_nome_categoria, $_elenco_prodotti)
    {
        $this->nome_categoria = $_nome_categoria;
        $this->elenco_prodotti = $_elenco_prodotti;
    }
}