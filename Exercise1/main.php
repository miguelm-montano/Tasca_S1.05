<?php

require_once "Animals/Dog.php";
require_once "Animals/Cat.php";

//Test
$dog = new Dog("Beto", "Chicken");
$cat = new Cat("Rhina", "Mini-ball");

echo $dog->talk() . PHP_EOL;
echo $cat->talk() . PHP_EOL;

echo $dog->getFavFood() . PHP_EOL;
echo $cat->getFavToy() . PHP_EOL;

?>