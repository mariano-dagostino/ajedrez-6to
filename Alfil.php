<?php
/**
        18 de Abril de 2019
        Iker M. Canut

        Ejemplo para probar el codigo:
                '''
                $alfil = new Alfil('E4', 1);
                print_r($alfil->movimientosPosibles());
                '''
*/

require ('PiezaAjedrezInterface.php');

class Alfil implements PiezaDeAjedrez {
	protected $columna;
	protected $fila;
	protected $color;

	public function __construct(string $celda, $color){
		$this->posicionarEn($celda);
		$this->color = $color;
	}

	public function movimientosPosibles(){
                $listaMovimientosPosibles = array();
                $listaMovimientosPosibles = array_merge(
                        $this->listaMovimientosEnDireccion(1, 1),       // Arriba Derecha
                        $this->listaMovimientosEnDireccion(1, -1),      // Arriba Izquierda
                        $this->listaMovimientosEnDireccion(-1, 1),      // Abajo Derecha
                        $this->listaMovimientosEnDireccion(-1, -1)      // Abajo Izquierda
                );
                return $listaMovimientosPosibles;
  	}
        
        public function posicionarEn(string $celda){
                $this->columna = ord($celda[0]);
		$this->fila = $celda[1];
	}

        // Son protegidas por si la dama quiere heredar del Alfil y la Torre las funciones
        protected function listaMovimientosEnDireccion(int $modFila, int $modColumna){             
                $movimientos = array();
                $auxColumna = $this->columna;
                $auxFila = $this->fila;

                $auxColumna += $modColumna; 
                $auxFila += $modFila;
                while($auxColumna > 64 && $auxColumna < 73 && $auxFila < 9 && $auxFila > 0){
                        array_push($movimientos, chr($auxColumna) . $auxFila);
                        $auxColumna += $modColumna; 
                        $auxFila += $modFila;
                }

                return $movimientos;
        }
}
