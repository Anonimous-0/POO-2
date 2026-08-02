<?php

require_once __DIR__ . '/../model/roles.php';
require_once __DIR__ . '/../model/guerrero.php';
require_once __DIR__ . '/../model/mago.php';
require_once __DIR__ . '/../model/arquero.php';


class controladorPersonaje{
    private $vista;

     /** @param vista $vista */
     public function __construct(vista $vista){
        $this->vista = $vista;
     }

     public function demostrar(){

        $this->vista->mostrarTitulo('Personajes');


        $rol = array(
            new mago('Gandalf', 100, 50, 20),
            new guerrero('Conan', 120, 30, 25),
            new arquero('Legolas', 80, 15, 10)
        );

        $this->vista->mostrarSeparador();
        foreach ($rol as $rol){
            $this->vista->mostrarPersonaje($rol);
        }
        $this->vista->mostrarSeparador();
        echo "<h2>Personajes</h2>";
        echo "<br>Encapsulamiento: Atributos privados(nombre, vida, ataque, defensa)<br>";
        echo "Herencia: La clase roles es la clase padre de las clases mago, guerrero y arquero<br>";
        echo "Polimorfismo: El método atacar() es redefinido en cada clase hija<br>";
     }
}
