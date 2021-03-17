<?php


namespace CDC\Tests\Exemplos;


use CDC\Exemplos\ConversorDeNumeroRomano;
use PHPUnit\Framework\TestCase;

class ConversorDeNumeroRomanoTest extends TestCase
{
    public function testDeveEntenderOSimboloI()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("I");
        self::assertEquals(1,$numero);

    }

    public function testDeveConverterOSimboloV()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("V");
        self::assertEquals(5,$numero);
    }

    public function testDeverConverterOSimboloII()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("II");
        self::assertEquals(2,$numero);
    }
}