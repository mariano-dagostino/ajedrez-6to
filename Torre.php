<?php

require('PiezaAjedrezInterface.php');

class Celda {

	private $fila;
	private $columna;

	function __construct($celda){
		$this->setCelda($celda);
	}

	function setCelda($celda){
		$this->columna = (string)$celda[0];
		$this->fila = (int)$celda[1];
	}

	public function getFila(){
		return $this->fila;
	}

	public function getColumna(){
		return $this->columna;
	}
}


class Torre implements PiezaDeAjedrez{

	private $posicion;

	private $color;

	function __construct($posicion, $color){
		$this->posicion = new Celda($posicion);
		$this->color = $color;
	}


	public function posicionarEn($celda){
		if ($this->esPosible($celda)) {
			$this->posicion->setCelda($celda);
			echo "zafaste\n";
		}
		else {
			echo "your mom is gone\n";
		}
	}

	public function esPosible ($celda){
		$posibles = $this->movimientosPosibles();
		for ($i=0; $i < count($posibles) ; $i++) {
			if($celda == $posibles[$i])
				return TRUE;
		}
		return FALSE;
	}

	public function movimientosPosibles(){
		$posibilidades = [];

        $cont = 0;

		for($i = 0; $i < 8; $i++){

            $posibilidades[$cont] =  ($this->posicion->getColumna()) . $i;

            $cont++;

		}

        for($p = 0, $columna = "A"; $p < 8; $p++, $columna++){

                $posibilidades[$cont] =  $columna . ($this->posicion->getFila());

                $cont++;
        }

        return $posibilidades;
	}
}

$torre = new Torre("A0",0);

echo '<pre>'; print_r($torre->movimientosPosibles()); echo '</pre>';

$torre->posicionarEn("B5");
