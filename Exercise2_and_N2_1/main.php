<?php

require_once "Triangle.php";
require_once "Rectangle.php";
require_once "Circle.php";

$triangle = new Triangle(10, 5);
echo "The area of a triangle is: " . $triangle->calculateArea();

echo PHP_EOL;
$rectangle = new Rectangle(10, 5);
echo "The area of a rectangle is: " . $rectangle->calculateArea();

echo PHP_EOL;
echo "Rectangle height: " . $rectangle->getHeight() . PHP_EOL;
echo "Triangle wide: " . $triangle->getWide(). PHP_EOL;

$circle = new Circle(20);
echo "The area of the circle is: " . $circle->calculateArea() . PHP_EOL;

$circle = new Circle(2);
echo "The area of the cicle is: " . $circle->calculateArea(). PHP_EOL;

?>