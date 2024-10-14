<?php

include 'Persona.php';

class Informatico extends Persona {
    private $lenguajes, $experienciaProgramador;

    public function setLenguajes($lenguajes) {
        $this->lenguajes = $lenguajes;
    }

    public function setExperienciaProgramador($experienciaProgramador) {
        $this->experienciaProgramador = $experienciaProgramador;
    }

    public function getLenguajes() {
        return $this->lenguajes;
    }

    public function getExperienciaProgramador() {
        return $this->experienciaProgramador;
    }

    public function programar($lenguaje, $experiencia) {
        return $lenguaje * $experiencia;
    }

    public function repararOrdernador($tools, $fixingDifficulty) {
        return $tools * $fixingDifficulty;
    }

    public function hacerOfimatica($textSize, $experienciaProgramador) {
        return $textSize * $experienciaProgramador;
    }
}