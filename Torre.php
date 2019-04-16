<?php
	require('PiezaAjedrezInterface.php');
	
class Torre implements PiezaDeAjedrez{

private $posicion;
private $color;

function __construct($posicion, $color){
	$this->posicion = $posicion;
	$this->color = $color;
}


public function posicionarEn(string $celda){
	$this->posicion = celda;
}

public function movimientosPosibles(){

}

}

?>


