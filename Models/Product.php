<?php
class Product {
    public $nome;
    public $descrizione;
    public $prezzo;
    public $img_prodotto;

    function __construct($_nome,$_descrizione,$_prezzo,$_img_prodotto)
    {
        $this->nome = $_nome;
        $this->descrizione = $_descrizione;
        $this->prezzo = $_prezzo;
        $this->img_prodotto = $_img_prodotto;

    }

}