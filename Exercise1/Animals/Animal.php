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

?>