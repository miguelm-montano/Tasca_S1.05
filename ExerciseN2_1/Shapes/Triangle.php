<?php

require_once "Shape.php";

class Triangle extends Shape {

    private float $height;
    private float $width;

    public function __construct(float $height, float $width) {
        $this->height = $height;
        $this->width = $width;
    }

    public function getWidth(): float {
        return $this->width;
    }

    public function getHeight(): float {
        return $this->height;
    }
    
    public function calculateArea(): float {
        return ($this->width * $this->height) / 2;
    }
}

?>