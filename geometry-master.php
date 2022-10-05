<?php

abstract class AbstractGeometry
{
    abstract public function area(): float|int;

    abstract public function perimeter(): int;
}

class Square extends AbstractGeometry
{
    private int $cote;

    public function __construct(int $width)
    {
        $this->cote = $width;
    }

    public function area(): float|int
    {
        return $this->cote * $this->cote;
    }

    public function perimeter(): int
    {
        return 4 * $this->cote;
    }
}

class Rectangle extends AbstractGeometry
{
    private int $width;
    private int $height;

    public function __construct(int $width, int $height)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area(): float|int
    {
        return $this->width * $this->height;
    }

    public function perimeter(): int
    {
        return 2 * ($this->width + $this->height);
    }
}

class Triangle extends AbstractGeometry
{
    private int $base;
    private int $cote1;
    private int $cote2;

    public function __construct(int $base, int $cote1, int $cote2)
    {
        $this->base = $base;
        $this->cote1 = $cote1;
        $this->cote2 = $cote2;
    }


    public function area(): float
    {
        return (sqrt(3) / 4) * ($this->cote1 * $this->cote1);
    }

    public function perimeter(): int
    {
        return $this->base + $this->cote1 + $this->cote2;
    }
}

echo (new Triangle(6, 6, 6))->area();