<?php

require_once "Shapes/Triangle.php";
require_once "Shapes/Rectangle.php";

$triangle = new Triangle(10, 5);
echo "The area of a triangle is: " . $triangle->calculateArea();

echo PHP_EOL;
$rectangle = new Rectangle(10, 5);
echo "The area of a rectangle is: " . $rectangle->calculateArea();

echo PHP_EOL;
echo "Rectangle height: " . $rectangle->getHeight() . PHP_EOL;
echo "Triangle width: " . $triangle->getWidth(). PHP_EOL;
?>