<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Producto
 *
 * @author Angel
 */
abstract class Producto 
{
    protected $nombre;
    protected $precio;

    public function getNombre()
    {
       return $this->nombre;
    }

    abstract public function getPrecio();
}
?>

