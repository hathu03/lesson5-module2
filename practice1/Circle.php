<?php
class Circle extends Shape {
    public int|float $radius;
    public function __construct(string $name, int|float $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function caculateArea(): int|float {
        return pi() * pow($this->radius, 2);
    }
    public function caculatePerimeter(): int|float {
        return pi() * $this->radius * 2;
    }
}
