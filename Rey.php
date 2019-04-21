//interface PiezaDeAjedrez {
//  public function movimientosPosibles();
//  public function posicionarEn(string $celda);
//}

<?php
require ('piezaDeAjedrez.php');
class Rey implements PiezaDeAjedrez {
	public function movimientosPosibles(string $celda);{
    for ($varX=$celda[0]-1, $contador1 = 0,$nro=0; $contador1 = 3; $contador1++, $varX++, $nro++){
        if($varX!=10 && $varX!=-1){
            for ($varY=$celda[1]-1, $contador2=0; $contador2=3 ; $contador2++, $varY++, $nro++){
                if($varY!=10 && $varY!=-1){
                    $celdaVar[$varX,$varY];
                    $celdasPosibles[$nro++]=$celdaVar;
                }
            }
        }
    }
    return $celdasPosibles[]; //Devuelve una lista de celdas posibles
	}
	public function posicionarEn(string $celda);{
		$this->fila = $celda[0];
		$this->columna = $celda[1];
	}
	protected $fila;
	protected $columna;
}
