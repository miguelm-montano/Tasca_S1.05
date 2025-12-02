<?php

require_once "Animal.php";

class Cat extends Animal {
    
    private string $favToy;

    public function __construct(string $name, string $favToy) {
        parent::__construct($name);
        $this->favToy = $favToy;
    }

    public function talk() {
        return "Meow_Meooow";
    }

    public function getFavToy() {
        return $this->favToy;
    }
}

?>