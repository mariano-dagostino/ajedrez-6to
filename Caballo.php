<?php

require('PiezaAjedrezInterface.php');

class Caballo implements PiezaAjedrezInterface {
  public function movimientosPosibles() {
    $movimientosColumnas =  [2, 2, -2, -2, 1, -1, 1, -1];
    $movimientosFilas    = [1, -1, 1, -1, 2, 2, -2, -2];
    
    $lista = [];
    for($i = 0; $i < 8; $i++) {
         $movColumna = $this->columna +  
    }
  }
  
  public function posicionarEn(string $celda) {
    
  }
  
  public function __construct(string $celda, string $color) {
    $this->columna = $celda[0];
    $this->fila    = $celda[1];
  }
}
