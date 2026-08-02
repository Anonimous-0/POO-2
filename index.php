<?php

require_once __DIR__ . '/controller/controladorPersonaje.php';
require_once __DIR__ . '/view/vistaPersonaje.php';

$vista = new vista();
$controlador = new controladorPersonaje($vista);

$controlador->demostrar();
