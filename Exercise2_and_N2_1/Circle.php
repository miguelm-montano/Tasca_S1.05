<?php

require_once "Shape.php";

class Circle extends Shape {

    private float $radio;

    public function __construct(float $radio) {
        $this->radio = $radio;
        
    }

    public function getRadio() {
        return $this->radio;
    }

    public function calculateArea(): float {
        return round(pi() * pow($this->radio, 2), 2); 
    }
}

?>