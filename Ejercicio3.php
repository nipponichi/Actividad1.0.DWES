<?php

require_once 'Configuracion.php';

class Ejercicio3 {
    public function start() {
        Configuracion::setColor('Rojo');
        Configuracion::setNewsletter(false);
        Configuracion::setEntorno('Producción');
    }

    public function configure() {
        echo 'Color: ' . Configuracion::getColor() . '<br>';
        echo 'Newsletter: ' . (Configuracion::getNewsletter() ? 'Sí' : 'No') . '<br>';
        echo 'Entorno: ' . Configuracion::getEntorno() . '<br>';

    }
}


$ejercicio3 = new Ejercicio3();
$ejercicio3->start();
$ejercicio3->configure();

/*

- ¿Cómo hacemos referencia a esta clase? ¿debemos instanciarla?

    > Al ser atributos y métodos estáticos, no es necesario instanciar la clase y 
    accedemos a ellos directamente utilizando el nomrbe de la clase seguido de :: (Scope Resolution Operator).
    Las propiedades estáticas son accedidas con la palabra reservada self en lugar de this,
    ya que no accedemos a ellas a través de instancias, sino referenciando a la clase en sí misma. 

*/