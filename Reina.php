<?php

require ('PiezaAjedrezInterface.php');

#Tablero:
#  A B C D E F G H
#1
#2
#3
#4
#5
#6
#7
#8


class Reina implements PiezaDeAjedrez{
	public $color;
	public $celdax;
	public $celday;

	function __construct(string $p_celda, string $p_color){
		$this->color = $p_color;
		$this->celday = $p_celda[1];
		$this->celdax = ord($p_celda[0]) - 64;
	}
	
	function imprimir_celda(int $x, int $y){
		echo (chr($x+ 64) ) . $y;
	}
	

	function movimientosPosibles(){

		$movs = [];
			
		
		for($i = 1; $i <= 8; $i ++){
			if($i != $this->celdax || $this->celday != $this->celday)
			array_push( $movs ,  (chr($i+ 64) ) . $this->celday  );	
		}
		

		for($i = 1; $i <= 8; $i ++){
			if($this->celdax != $this->celdax || $i != $this->celday)
			array_push( $movs ,  (chr($this->celdax+ 64) ) . $i  );
		}
			
		


		$auxx = $this->celdax;
		$auxy = $this->celday;
		
		while($auxx > 1 && $auxy > 1){
			$auxx = $auxx - 1;
			$auxy = $auxy - 1;
		}
				
			while($auxx <= 8 && $auxy <= 8){
				if($auxx != $this->celdax || $auxy != $this->celday)
				array_push( $movs ,  (chr($auxx+ 64) ) . $auxy  );
				$auxx++;
				$auxy++;
			}
		
			
		$auxx = $this->celdax;
		$auxy = $this->celday;
		
		while($auxx < 8 && $auxy > 1){
			$auxx = $auxx + 1;
			$auxy = $auxy - 1;
		}
			
			while($auxx >= 1 && $auxy <= 8){
				if($auxx != $this->celdax || $auxy != $this->celday)
				array_push( $movs ,  (chr($auxx+ 64) ) . $auxy  );
				$auxx--;
				$auxy++;
			}

		return $movs;
		
		
	}



	function posicionarEn(string $p_celda){
		$this->celday = $p_celda[1];
		$this->celdax = ord($p_celda[0]) - 64;	
	}



}



