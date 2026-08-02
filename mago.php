<?php

require_once __DIR__ . '/../model/roles.php';


class mago extends roles
{
    private $nivelHechizo;

    public function __construct($nombre, $vida, $nivelHechizo, $defensa)
    {
        parent::__construct($nombre, $vida, $nivelHechizo, $defensa);
        $this->nivelHechizo = $nivelHechizo;
    }

    //GETTER

    public function getnivelHechizo()
    {
        return $this->nivelHechizo;
    }

    //SETTER

    public function setnivelHechizo($nivelHechizo)
    {
        $this->nivelHechizo = max(0, $nivelHechizo);
    }

    public function atacar()
    {

        if ($this->nivelHechizo < 25) {

            return "{$this->getnivelHechizo()} no posee el nivel de ataque recomendado";
        }

        $this->setnivelHechizo($this->nivelHechizo - 40);
        $danio = $this->getAtaque() * 2;
        return "{$this->getNombre()} Nivel aceptable para pelear, el daño realizado por golpe es {$danio}";
    }
}
