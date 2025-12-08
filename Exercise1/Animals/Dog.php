<?php

require_once "Animal.php";

class Dog extends Animal {

    private string $favFood;

    public function __construct(string $name, string $favFood) {
        parent::__construct($name);
        $this->favFood = $favFood;
    }

    public function talk() {
        return "Bark - Bark - Bark";
    }

    public function getFavFood() {
        return $this->favFood;
    } 
}

?>