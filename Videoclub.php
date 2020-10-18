<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include_once('Cliente.php');
include_once('Producto.php');
include_once('Pelicula.php');
include_once('Cd.php');
include_once('Juego.php');

/**
 * Description of Videojuego
 *
 * @author Angel
 */
class Videoclub {
        private $nombre;
        private $productos;
        private $clientes;

        public function __construct($nombre)
        {
                $this->nombre=$nombre;
                $this->productos=array();
                $this->clientes=array();
        }

        public function addProducto($producto)
        {
                $this->productos[]=$producto;
        }

        public function getProductos()
        {
                return $this->productos;
        }

        public function addCliente($cliente)
        {
                $this->clientes[]=$cliente;
        }

        public function getClientes()
        {
                return $this->clientes;
        }

        public function alquilar($cliente,$producto)
        {
                $cliente->alquilarProducto($producto);
        }

}
?>

