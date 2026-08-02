<?php

require_once __DIR__ . '/../model/roles.php';

class arquero extends roles
{

    private $flechaEnvenenada;

    public function __construct($nombre, $vida, $flechaEnvenenada, $defensa)
    {

        parent::__construct($nombre, $vida, $flechaEnvenenada, $defensa);
        $this->flechaEnvenenada = $flechaEnvenenada;
    }


    public function getFlechaEnvenenada()
    {
        return $this->flechaEnvenenada;
    }

    public function setFlechaEnvenenada($flechaEnvenenada)
    {
        $this->flechaEnvenenada = $flechaEnvenenada;
    }

    public function atacar() {}
}
