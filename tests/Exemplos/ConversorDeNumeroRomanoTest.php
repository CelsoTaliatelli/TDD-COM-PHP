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

    public function testDeveEntenderOSimboloXXII()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XXII");
        self::assertEquals(22,$numero);
    }

    public function testDEveEntenderOSimboloIX()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("IX");
        self::assertEquals(9,$numero);
    }

    public function testDEveEntenderOSimboloXX()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XX");
        self::assertEquals(20,$numero);
    }
    public function testDEveEntenderOSimboloXXIV()
    {
        $romano = new ConversorDeNumeroRomano();
        $numero = $romano->converte("XXIV");
        self::assertEquals(24,$numero);
    }
}