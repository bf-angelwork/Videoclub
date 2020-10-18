<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pelicula
 *
 * @author Angel
 */
class Pelicula extends Producto
{
        private $idioma;
        private $duracion;
        private $genero;

        public function __construct($nombre,$idioma,$duracion,$genero)
        {
                $this->nombre = $nombre;
                $this->precio = 2;
                $this->idioma = $idioma;
                $this->duracion = $duracion;
                $this->genero=$genero;
        }

    public function getPrecio()
        {
           return $this->precio;
        }

        public function getIdioma()
        {
           return $this->precio;
        }

        public function getDuracion()
        {
           return $this->precio;
        }
}
?>
