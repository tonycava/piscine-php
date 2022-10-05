<?php

class Car
{
    private int $tank;

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
        $this->tank -= $kilo / 20;
        return $this;
    }


}