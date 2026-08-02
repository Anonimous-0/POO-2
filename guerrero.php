<?php
require_once __DIR__ . '/../model/roles.php';


class guerrero extends roles {

private $furia;

public function  __construct($nombre, $vida, $furia, $defensa, ){
    parent::__construct($nombre, $vida, $furia, $defensa);
    $this->furia = $furia;

}

    //GETTER
    public function getFuria(){
        return $this->furia;
    }

    //SETTER
    public function setFuria($furia){
        $this->furia = max(0, $furia);
    }

    public function atacar(){

        if($this->furia < 10){

            return "{$this->getFuria()} no posee el nivel de ataque recomendado";

        }

        $this->setFuria($this->furia - 40);
        $danio = $this->getAtaque() * 2;
        return "{$this ->getNombre()} Nivel aceptable para pelear, el daño realizado por golpe es {$danio}";
    }

}
