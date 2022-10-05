<?php

class Mojito
{
    private float $alcoholRate;

    private array $ingredients;

    private int $price;

    public function __construct()
    {
        $this->alcoholRate = 5.5;
        $this->ingredients = ["rum", "lime", "sparkling", "water", "mint", "sugar"];
        $this->price = 8;
    }

}