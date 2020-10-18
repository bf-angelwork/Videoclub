<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Juego
 *
 * @author Angel
 */
class Juego extends Producto{
   private $plataforma;
        private $genero;

        public function __construct($nombre,$plataforma,$genero)
        {
                $this->nombre = $nombre;
                $this->precio = 3;
                $this->idioma = $idioma;
                $this->duracion = $duracion;
        }

    public function getPrecio()
        {
           return $this->precio;
        }

        public function getPlataforma()
        {
           return $this->plataforma;
        }

        public function getGenero()
        {
           return $this->Genero;
        }
}
?>

