<?php

require("Caballo.php");

$caballito = new Caballo("d2");
var_dump($caballito->movimientosPosibles());

$caballito->posicionarEn("d4");
var_dump($caballito->movimientosPosibles());