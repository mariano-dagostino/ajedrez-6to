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

	function __construct(string $p_celda, int $p_color){
		$this->color = $p_color;
		$this->celday = $p_celda[1];
		$this->celdax = ord($p_celda[0]) - 64;
	}
	
	function imprimir_celda(int $x, int $y){
		echo (chr($x+ 64) ) . $y;
	}

	function movimientosPosibles(){
		echo "La Reina se encuentra en : ";
		$this->imprimir_celda( $this->celdax , $this->celday );
		
		echo "\nLos movimientos posibles son: \n";

			echo "\nHorizontales: \n";
			for($i = 1; $i <= 8; $i ++){
				$this->imprimir_celda($i , $this->celday );
				
				if( $i+1 <= 8 )
				echo " , ";
				
			}
		
			echo "\n\nVerticales: \n";
			for($i = 1; $i <= 8; $i ++){
				$this->imprimir_celda( $this->celdax , $i);
				
				if( $i+1 <= 8 )
				echo " , ";			
			}
			
		
				echo "\n\nDiagonales_1: \n";
				$auxx = $this->celdax;
				$auxy = $this->celday;
				
				while($auxx > 1 && $auxy > 1){
					$auxx = $auxx - 1;
					$auxy = $auxy - 1;
				}
				
				while($auxx <= 8 && $auxy <= 8){
					$this->imprimir_celda($auxx,$auxy);
					if( $auxx+1 <= 8 && $auxy+1 <= 8 )
					echo " , ";
					
					$auxx++;
					$auxy++;
				}
		
			echo "\n\nDiagonales_2: \n";
			
			$auxx = $this->celdax;
			$auxy = $this->celday;
			
			while($auxx < 8 && $auxy > 1){
				$auxx = $auxx + 1;
				$auxy = $auxy - 1;
			}
			
			while($auxx >= 1 && $auxy <= 8){
				$this->imprimir_celda($auxx,$auxy);
				
				if($auxx-1 >= 1 && $auxy-1 <= 8)
				echo " , ";
				
				$auxx--;
				$auxy++;
			}
			echo "\n";
		
		
		
		
	}



	function posicionarEn(string $p_celda){
		$this->$celday = $p_celda[1];
		$this->$celdax = ord($p_celda[0]) - 64;	
	}



}
const BLANCO = 200;

$reina = new Reina("D3",BLANCO);
$reina->movimientosPosibles();

