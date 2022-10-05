<?php

class Mojito
{
    public float $alcoholRate;

    public array $ingredients;

    public int $price;

    public function __construct()
    {
        $alcoholRate = 5.5;
        $ingredients = ["rum", "lime", "sparkling", "water", "mint", "sugar"];
        $price = 8;
    }

}