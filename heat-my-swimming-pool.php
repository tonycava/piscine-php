<?php

interface PoolTempsInterface
{
    public function getActualTemp(): int;

    public function getLastDaysTemps(): array;

    public function setHeater(bool $active): bool;
}

class PoolTemps implements PoolTempsInterface
{


    private int $poolTemp;
    private array $poolTemps;

    public int $isActive;

    public function __construct(int $poolTemp, array $poolTemps)
    {
        $this->poolTemp = $poolTemp;
        $this->poolTemps = $poolTemps;
        $this->isActive = false;
    }


    public function getActualTemp(): int
    {
        return $this->poolTemp;
    }

    public function getLastDaysTemps(): array
    {
        return $this->poolTemps;
    }

    public function setHeater(bool $active): bool
    {
        $this->isActive = $active;
        return $this->isActive;
    }


    public function activateHeater()
    {
        $average = array_sum($this->poolTemps) / count($this->poolTemps);
        if ($average > 20 && $this->poolTemp >= 25) {
            $this->isActive = true;
        }

    }

}
