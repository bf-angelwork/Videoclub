<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cd
 *
 * @author Angel
 */
class Cd extends Producto
{
           private $duracion;
        private $genero;

        public function __construct($nombre,$duracion,$genero)
        {
                $this->nombre = $nombre;
                $this->precio = 1;
                $this->genero = $genero;
                $this->duracion = $duracion;
        }

    public function getPrecio()
        {
           return $this->precio;
        }

        public function getDuracion()
        {
           return $this->duracion;
        }

        public function getGenero()
        {
           return $this->Genero;
        }
}
?>
