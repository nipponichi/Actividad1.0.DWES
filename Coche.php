<?php

class Coche
{
    private $color, $marca, $modelo, $velocidad, $caballaje, $plazas;

    public function __construct($color, $marca, $modelo, $velocidad, $caballaje, $plazas)
    {
        $this->color = $color;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->caballaje = $caballaje;
        $this->plazas = $plazas;
    }

    // GETTERS
    public function getColor()
    {
        return $this->color;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getVelocidad()
    {
        return $this->velocidad;
    }
    public function getCaballaje()
    {
        return $this->caballaje;
    }
    public function getPlazas()
    {
        return $this->plazas;
    }

    // SETTERS
    public function setColor($color)
    {
        $this->color = $color;
    }
    public function setMarca($marca)
    {
        $this->marca = $marca;
    }
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }
    public function setVelocidad($velocidad)
    {
        $this->velocidad = $velocidad;
    }
    public function setCaballaje($caballaje)
    {
        $this->caballaje = $caballaje;
    }
    public function setPlazas($plazas)
    {
        $this->plazas = $plazas;
    }
    
    // Increase speed by one
    public function acelerate()
    {
        $this->velocidad++;
    }

    // Decrease speed by one
    public function brake()
    {
        $this->checkSpeed($this->velocidad) ? $this->velocidad-- : $this->velocidad;
    }

    // Prints speed on screen, we can use the method showMessage, but exercise ask about this method
    public function showSpeed()
    {
        echo $this->modelo.':<br> Speed: ' . $this->velocidad . ' km/h<br>';
    }

    // Check car atributtes
    public function showCar($coche)
    {
        // Check if $coche is an object and if is empty
        if (is_object($coche) && !empty($coche)) {
            $this->printCarAtributes($coche);
        } else {
            $this->showMessage('The car is empty or is not an object');
        }
    }

    // Mounts car information message
    public function printCarAtributes($coche)
    {
        $atributes = get_object_vars($coche);
        $message = '---- Car information: ----<br>';

        foreach ($atributes as $atributeName => $atributeValue) {
            $message.=(ucfirst($atributeName) . ': ' .$atributeValue.'<br>');
        }
        $message .= '------------------------------<br>';

        $this->showMessage($message);
    }

    // Check if speed is lower or equal to 0 before brake
    private function checkSpeed($velocidad)
    {
        if (!$velocidad <= 0) {
          return true;  
        }
        $this->showMessage('First, acelerate the car, please!');
        return false;
    }

    // Print messages on screen
    private function showMessage($message)
    {
        echo $message . '<br>';
    }

}
