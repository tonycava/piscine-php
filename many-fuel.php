<?php

class Car
{
    private $tank;

    public function setTank(int $tankLevel): self
    {
        $this->tank = $tankLevel;
        return $this;
    }

    public function getTank(): int
    {
        return $this->tank;
    }

    public function ride(float $kilo): self
    {
        $test = $kilo / 20;
        $this->tank -= $test;
        return $this;
    }


}

echo (new Car())->setTank(50)
    ->ride(10)
    ->getTank();