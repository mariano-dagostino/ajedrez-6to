<?php

require ('PiezaAjedrezInterface.php');

class Reina implements PiezaDeAjedrez{
	private $color;
	private $celdax;
	private $celday;

	function __construct(string $p_celda, int $p_color){
		$color = $p_color;
		$celday = $p_celda[1];
		$celdax = ord($p_celda[0]) - 64;
	}

	public function movimientosPosibles(){
		$equis = $celdax;
		$ye = $celday;

		for($i = 0; $i < 8; $i ++){
			imprimir_celda($i , $this->$celday );		
		}

		for($i = 0; $i < 8; $i ++){
			imprimir_celda( $this->$celdax , $i);		
		}
	}

	public function imprimir_celda(int $x, int $y){
		echo (chr($x+ 64) ) . $y . "\n";
	}

	public function posicionarEn(string $p_celda){
		$this->$celday = $p_celda[1];
		$this->$celdax = ord($p_celda[0]) - 64;	
	}



}
const BLANCO = 200;

$reina = new Reina("H3",BLANCO);
$reina->movimientosPosibles();

$reina->imprimir_celda(4,2);
