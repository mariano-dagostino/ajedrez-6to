<?php

require ('PiezaAjedrezInterface.php');

class Alfil implements PiezaDeAjedrez {
	public $columna;
	public $fila;
	public $color;

	public function __construct(string $celda, $color){
		$this->columna = ord($celda[0]);
		$this->fila = $celda[1];
		$this->color = $color;
	}

	public function movimientosPosibles(){
		$this->columna--;
		return $this->columna;
  	}

	public function posicionarEn(string $celda){

	}
}

$alfil = new Alfil('H2', 1);
print_r($alfil->movimientosPosibles());
