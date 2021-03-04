<?php
include 'Libro.php';
class Cliente
{
    protected $name;
    protected $puntos;
    public function __constructor($nombre)
    {
        $this->name = $nombre;
        $this->puntos = 0;
    }
    public function comprar($libro)
    {
        $precio = $libro->getPrecio();
        $this->puntos += $precio * 0.1;
        return $precio;
    }
    public function getPuntos()
    {
        return $this->puntos;
    }
    public function comprarVarios($libro, $numero)
    {
        $precio = 0;
        if ($numero == 2) {
            $precio = $libro->getPrecio() * $numero;
            $precio = $precio * 0.95;
        } else if ($numero == 3) {
            $precio = $libro->getPrecio() * $numero;
            $precio = $precio * 0.90;
        } else if ($numero == 4) {
            $precio = $libro->getPrecio() * $numero;
            $precio = $precio * 0.80;
        } else if ($numero == 5) {
            $precio = $libro->getPrecio() * $numero;
            $precio = $precio * 0.75;
        }
        $this->puntos += $precio * 0.1;
        return $precio;
    }
}
