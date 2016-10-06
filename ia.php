<?php
Class ia{
//propiedades que definen el public
var $columna;
var $fila;

//metodos que usamos el public function, el Get,lo demanda y el return lo devuelve
	public function getColumna()
    {
//rand,genera un codigo aleatorio 		
        return $this->columna=rand(1,3);
		
    }
	public function getFila()
    {
		
        return $this->fila=rand(1,3) ;
    }
}


?>