<?php
/*Seguint l’exercici anterior, imagina com ampliaries l’estructura que has creat per representar un Cercle i el seu corresponent càlcul d’àrea.*/

abstract class Shape {

    private float $height;
    private float $wide;

    public function __construct(float $height, float $wide) {
        $this-> height = $height;
        $this-> wide = $wide;
    }

    public function getHeight(): float {
        return $this-> height;
    }

    public function getWide(): float {
        return $this-> wide;
    }

    abstract public function calculateArea(): float;
}

class Triangle extends Shape {
    
    public function calculateArea(): float {
        return ($this->getWide() * $this->getHeight()) / 2;
    }
    
}

Class Rectangle extends Shape {

    public function calculateArea(): float {
        return $this->getWide() * $this->getHeight();
    }
}

class Circle extends Shape {

    protected float $radio;

    public function __construct(float $radio) {
        $this->radio = $radio;
        
    }

    public function calculateArea(): float {
        return round(pi() * pow($this->radio, 2), 2); 
    }
}


$circle = new Circle(20);
echo "The area of the circle is: " . $circle->calculateArea() . PHP_EOL;

$circle = new Circle(2);
echo "The area of the cicle is: " . $circle->calculateArea(). PHP_EOL;

$triangle = new Triangle(10, 5);
echo "The area of a triangle is: " . $triangle->calculateArea();

echo PHP_EOL;
$rectangle = new Rectangle(10, 5);
echo "The area of a rectangle is: " . $rectangle->calculateArea();

echo PHP_EOL;
echo "Rectangle height: " . $rectangle->getHeight() . PHP_EOL;
echo "Triangle wide: " . $triangle->getWide();


