<?php

class Libro
{
    protected $id;
    protected $precio;
    public function __constructor()
    {
        $this->id = 1;
        $this->precio = 8;
    }
    function  getPrecio()
    {
        return 8;
    }
}
