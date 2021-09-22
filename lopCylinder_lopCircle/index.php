<?php
class Circle {
    public string $radius;
    public string $color;

    public function __construct(string $radius, $color) {
        $this->radius = $radius;
        $this->color = $color;
    }
    public function Area() {
        return pi() * pow($this->radius, 2);
    }

}
