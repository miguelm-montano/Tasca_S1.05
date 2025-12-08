<?php

require_once "Shape.php";

class Circle extends Shape {

    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;  
    }

    public function getRadius() {
        return $this->radius;
    }

    public function calculateArea(): float {
        return round(pi() * pow($this->radius, 2), 2); 
    }
}

?>