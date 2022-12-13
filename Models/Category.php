<?php

class Category
{
    public $specie;
    public $icon;
    public function __construct($_specie, $_icon)
    {
        $this->specie = $_specie;
        $this->icon = $_icon;
    }
    public function sgetIcon()
    {
        return $this->icon;
    }
}