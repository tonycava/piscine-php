<?php

class Car
{
    private float $tank;

    public function setTank($tankLevel): self
    {
        $this->tank = $tankLevel;
        return $this;
    }

    public function getTank(): float
    {
        return $this->tank;
    }

    public function ride($kilo): self
    {
        $test = $kilo / 20;
        $this->tank -= $test;
        return $this;
    }


}

var_dump((new Car())->setTank(50)
    ->ride(10)
    ->getTank());