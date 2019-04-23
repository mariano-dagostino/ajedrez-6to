<?php

require('Torre.php');

$torre = new Torre("A7");

print_r($torre->movimientosPosibles());

echo var_export($torre->posicionarEn("B5"));
