<?php
class Cylinder extends Circle {
    public int $height;
    public function __construct(string $name, float|int $radius, int $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function caculateArea(): int|float
    {
        return parent::caculateArea() * 2 + parent::caculatePerimeter() * $this->height;
    }
    public function caculateVolume(): int|float {
        return parent::caculateArea() * $this->height;
    }
}