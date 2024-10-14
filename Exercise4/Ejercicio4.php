<?php

require_once 'Imac.php';
class Ejercicio4 {
    
    private $mac;

    public function __construct ($mac) {
        $this->mac = $mac;
    }
    
    public function start() {
        echo 'Marca: '. $this->mac->getMarca() .'<br>';
        echo 'Software: '. $this->mac->getSoftware() .'<br>';
    }

}

$mac = new Imac('macOS');
$ejercicio4 = new Ejercicio4($mac);
$ejercicio4->start();