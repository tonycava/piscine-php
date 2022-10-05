<?php

class Mojito
{
    public float $alcoholRate;

    public array $ingredients;

    public int $price;

    public function __construct()
    {
        $this->alcoholRate = 5.5;
        $this->ingredients = ["rum", "lime", "sparkling", "water", "mint", "sugar"];
        $this->price = 8;
    }

}