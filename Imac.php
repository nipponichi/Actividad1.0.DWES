<?php

require_once 'ImacInterface.php';
//define('MARCA', 'Apple');
class Imac implements ImacInterface{
    private const MARCA = 'Apple';
    private $marca, $software;

    public function __construct($software){
        $this->marca = self::MARCA;
        $this->software = $software;
    }
    public function getMarca() {
        return $this->marca;
    }

    public function getSoftware() {
        return $this->software;
    }

    public function setSoftware($software) {
        $this->software = $software;
    }

}