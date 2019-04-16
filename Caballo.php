<?php

require('PiezaAjedrezInterface.php');

class Caballo implements PiezaAjedrezInterface {
  public function movimientosPosibles() {
    $movimientosColumnas = [2, 2, -2, -2, 1, -1, 1, -1];
    $movimientosFilas    = [1, -1, 1, -1, 2, 2, -2, -2];
    
    $movimientosPosibles = [];
    for($i = 0; $i < 8; $i++) {
      $movColumna = $this->columna + movimientosColumnas[i];
      $movFila    = $this->fila    + movimientosFilas[i];
      
      if($movColumna >= 'A' && $movColumna <= 'H'){
        if($movFila >= 1 && $movFila <= 8){
          $movimientosPosibles[] = $movColumna . (string)$movFila;
      } }
    }
    
    return $movimientosPosibles;
  }
  
  public function posicionarEn(string $celda) {
    $this->columna = $celda[0];
    $this->fila    = (int)$celda[1];
  }
  
  public function __construct(string $celda, string $color) {
    $this->columna = $celda[0];
    $this->fila    = (int)$celda[1];
  }
}
