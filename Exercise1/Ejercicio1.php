<?php

require_once 'Coche.php';

class Ejercicio1 {

    private $coche1, $coche2;


    public function __construct($coche1,$coche2) {
        $this->coche1 = $coche1;
        $this->coche2 = $coche2;
    }
    public function start() {
        $this->coche1->showCar($this->coche1);
        echo '<br>';
        $this->coche2->showCar($this->coche2);
        echo '<br>_______________<br>Coche1 test:<br>_______________<br>';
        $this->testCar($this->coche1, 'Verde', 2);

        echo '<br>_______________<br>Coche2 test:<br>_______________<br>';
        $this->testCar($this->coche2, 'Rosa', 4);

        echo '<br>_______________<br>Ended test<br>_______________<br>';
        $this->coche1->showCar($this->coche1);
        echo '<br>';
        $this->coche2->showCar($this->coche2);
    }
    
    // Tests Coche.php methods
    private function testCar($coche, $color, $plazas){
        $coche->showCar($coche);
        $coche->acelerate();
        $coche->showSpeed();
        $coche->brake();
        $coche->showSpeed();
        $coche->brake();
        $coche->showSpeed();
        $coche->acelerate();
        $coche->showSpeed();
        $coche->brake();
        $coche->showSpeed();
        $coche->brake();
        $coche->showSpeed();
        $coche->setColor($color);
        $coche->setPlazas($plazas);
    }
}

$coche1 = new Coche("Rojo", "Toyota", "Corolla", 0, 150, 5);
$coche2 = new Coche("Amarillo", "Mitsubishi", "Galant", 0, 170, 5);

$ejercicio1 = new Ejercicio1($coche1, $coche2);
$ejercicio1->start();