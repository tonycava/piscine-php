<?php

abstract class AbstractGeometry
{
    abstract public function area();

    abstract public function perimeter();
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
    private int $side1;
    private int $side2;
    private int $side3;

    public function __construct(int $side1, int $side2, int $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }


    public function area(): float
    {
        $p = $this->perimeter() / 2;
        return sqrt($p * ($p - $this->side1) * ($p - $this->side2) * ($p - $this->side3));
    }

    public function perimeter(): int
    {
        return $this->side1 + $this->side2 + $this->side3;
    }
}

echo (new Triangle(6, 6, 6))->area();