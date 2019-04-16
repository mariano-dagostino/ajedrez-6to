<?php
	require('PiezaAjedrezInterface.php');
	
class Celda {

	private $fila;
	private $columna;
	
	function __construct(string $celda){
		setCelda(celda);
	}

	function setCelda(string $celda){
		$this->columna = (int)$celda[0];
		$this->fila = (int)$celda[1];
	}

	public function getFila(){
		return fila;
	}

	public function getColumna(){
		return columna;
	}
}


class Torre implements PiezaDeAjedrez{

	private $posicion;

	private $color;

	function __construct($posicion, $color){
		$this->posicion = new Celda($posicion);
		$this->color = $color;
	}


	public function posicionarEn(string $celda){
		$this->posicion.setCelda($celda);
	}

	public function movimientosPosibles(){
		$posibilidades = [];		

		for($i = 0; $i < 8; $i++){
					
		}
	}
}


