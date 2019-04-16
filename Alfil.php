<?php

require ('PiezaAjedrezInterface.php');

class Alfil implements PiezaDeAjedrez {
	protected $columna;
	protected $fila;
	protected $color;

	public function __construct(string $celda, $color){
		$this->columna = (int) $celda[0] - 64;
		$this->fila = (int) $celda[1];
		$this->color = $color;
		echo "$columna $fila $color";
	}

	public function movimientosPosibles(){

  	}

	public function posicionarEn(string $celda){

	}
}

$alfil = new Alfil('H2', 1);
