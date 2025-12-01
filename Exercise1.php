<?php
/*Necessitem crear un tipus de dades que representi un animal. Els animals tenen un nom i "parlen". Hem de tenir en compte, però, que no és el mateix el so de la “parla” d’un gos, que el d’un gat, per exemple. Per tant, necessitem crear altres tipus de dades que ens ajudin a programar aquests comportaments entre diferents animals.*/

abstract class Animal {

    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    abstract public function talk();  
    
}

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

$dog = new Dog("Beto", "Chicken");
$cat = new Cat("Rhina", "Mini-ball");

echo $dog->talk() . PHP_EOL;
echo $cat->talk() . PHP_EOL;

echo $dog->getFavFood() . PHP_EOL;
echo $cat->getFavToy() . PHP_EOL;


?>