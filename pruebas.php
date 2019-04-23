<?php

require('Torre.php');

$torre = new Torre("C5");

print_r($torre->movimientosPosibles());

echo var_export($torre->posicionarEn("B5"));
