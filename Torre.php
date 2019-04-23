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

		if($this->columna < "A" 
			|| $this->columna > "H" 
			|| $this->fila < 0 
			|| $this->fila > 7 
			|| strlen($celda) != 2) {

			throw new Exception("Coordenada no valida", 1);
		}
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

	function __construct($posicion){
		//El color no afecta el movimiento de la torre
		// por eso no lo usamos
		$this->posicion = new Celda($posicion);
	}

	public function posicionarEn($celda){
		if ($this->movimientoValido($celda)) {
			$this->posicion->setCelda($celda);
			return TRUE;
		}
		return FALSE;
	}

	private function movimientoValido ($celda){
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

        for($p = "A"; $p <= "H"; $p++){
                $posibilidades[$cont] =  $p . ($this->posicion->getFila());
                $cont++;
        }

        return $posibilidades;
	}
}

