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
		for($i = 0; $i < 100; $i ++){
			echo $i;		
		}
	}

	public function posicionarEn(string $p_celda){
		$celday = $p_celda[1];
		$celdax = ord($p_celda[0]) - 64;	
	}



}
const BLANCO = 200;

$reina = new Reina("H3",BLANCO);
$reina->movimientosPosibles();
