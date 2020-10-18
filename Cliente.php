<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cliente
 *
 * @author Angel
 */
/* Clase que representa a un cliente en el dominio del problema */
class Cliente
{
        private $nombre;
        private $productosAlquilados;

        public function __construct($nombre)
        {
                $this->nombre=$nombre;
                $this->productosAlquilados=array();
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        public function getProductosAlquilados()
        {
                return $this->productosAlquilados;
        }

        public function alquilarProducto($producto)
        {
                $this->productosAlquilados[]=$producto;
                return true;
        }
}
?>

