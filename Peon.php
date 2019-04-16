<?php

require ('PiezaAjedrezInterface.php');

class Peon implements PiezaDeAjedrez {

    protected $color;
    protected $columna;
    protected $fila;

    public function __constructor($posicion, $color){

        $this->color = $color;
        $this->columna = $posicion[0];
        $this->fila = ord($posicion[1]);

    }
    
    public function movimientosPosibles(){
        if($this->fila == 2){
            return [(($this->columna).char($this->fila + 1)),(($this->columna).chr($this->fila + 2))];
        }elseif ($this->fila < 8) {
            return [(($this->columna).char($this->fila + 1))];
        }else{
            return [];
        }
    }
    
    public function posicionarEn(string $posicion)
    {
        $this->columna = $posicion[0];
        $this->fila = ord($posicion[1]);
    }
}

$p= new Peon('H2', "BLANCO");
echo $p->movimientosPosibles();
