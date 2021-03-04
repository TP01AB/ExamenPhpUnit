<?php

use PHPUnit\Framework\TestCase;

class testCompraLibros extends TestCase
{
    private $cliente;
    private $libro;
    public function setUp(): void
    {
        $this->cliente = new Cliente("pepe");
        $this->libro = new Libro();
    }
    /**
     * @covers Cliente::comprar
     */
    public function testPrecio()
    {
        $this->assertEquals(8, $this->cliente->comprar($this->libro));
    }
    /**
     * @covers Cliente::comprarVarios
     */
    public function testComprar2()
    {
        $this->assertEquals(15.2, $this->cliente->comprarVarios($this->libro, 2));
        $this->assertEquals(21.6, $this->cliente->comprarVarios($this->libro, 3));
        $this->assertEquals(25.6, $this->cliente->comprarVarios($this->libro, 4));
        $this->assertEquals(30, $this->cliente->comprarVarios($this->libro, 5));
    }
    /**
     * @covers Cliente::getPuntos
     */
    public function testComprarLibroPuntos()
    {
        $this->assertEquals(8, $this->cliente->comprar($this->libro));
        $this->assertEquals(0.8, $this->cliente->getPuntos());
        $this->assertEquals(15.2, $this->cliente->comprarVarios($this->libro, 2));
        $this->assertEquals(2.32, $this->cliente->getPuntos());
    }
}
