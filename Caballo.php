<?php

require('PiezaAjedrezInterface.php');

class Caballo implements PiezaDeAjedrez {
  public function movimientosPosibles() {
    $movimientosColumnas = [2, 2, -2, -2, 1, -1, 1, -1];
    $movimientosFilas    = [1, -1, 1, -1, 2, 2, -2, -2];
    
    $movimientosPosibles = [];
    for($i = 0; $i < 8; $i++) {
      $movColumna = $this->columna + $movimientosColumnas[$i];
      $movFila    = $this->fila    + $movimientosFilas[$i];
      
      if($movColumna >= ord("A") && $movColumna <= ord("H")){
        if($movFila >= 1 && $movFila <= 8){
          $movimientosPosibles[] = chr($movColumna) . (string)$movFila;
      } }
    }
    
    return $movimientosPosibles;
  }
  
  public function posicionarEn(string $celda) {
    $this->__construct($celda);
  }
  
  function __construct($celda) {
    #columna va a tomar un valor entre 65(A) y 90(Z)
    $this->columna = ord(strtoupper($celda[0]));
    $this->fila    = (int)$celda[1];
  }
}
