<?php

require_once 'TecnicoRedes.php';
class Ejercicio2 {
    private $tecnicoRedes;

    public function __construct($tecnicoRedes) {
        $this->tecnicoRedes = $tecnicoRedes;
    }

    // Tests Persona.php methods
    public function start() {
        $this->tecnicoRedes->talk('ola k ase');
        echo '<br>';
        $this->tecnicoRedes->walk(2);
    }

}

$tecnicoRedes = new TecnicoRedes(5, 3);
$ejercicio2 = new Ejercicio2($tecnicoRedes);
$ejercicio2->start();