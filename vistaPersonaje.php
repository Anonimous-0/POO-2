<?php

class vista {
    /** @param roles $roles */

    public function mostrarPersonaje(roles $roles){
        echo $roles->atacar();
    }

    public function mostrarSeparador(){
        echo str_repeat("-", 10) . "<br>";
    }

    /** @param string $Titulo */
    public function mostrarTitulo($Titulo){
        echo "<h2>$Titulo</h2>";
    }

}
