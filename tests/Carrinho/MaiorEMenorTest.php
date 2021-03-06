<?php

namespace CDC\Loja\Tests\Carrinho;

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\MaiorEMenor;
use CDC\Loja\Produto\Produto;
use PHPUnit\Framework\TestCase;

class MaiorEMenorTest extends TestCase
{
    public function testOrdemCrescente()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto('Jogo de Pratos',70.00));
        $carrinho->adiciona(new Produto('Liquidificador',450.00));
        $carrinho->adiciona(new Produto('Geladeira',950.00));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        self::assertEquals('Geladeira',$maiorMenor->getMaior()->getNome());
        self::assertEquals('Jogo de Pratos',$maiorMenor->getMenor()->getNome());
    }

    public function testEmOrdemDecrescente()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto('Geladeira',950.00));
        $carrinho->adiciona(new Produto('Liquidificador',450.00));
        $carrinho->adiciona(new Produto('Jogo de Pratos',70.00));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        self::assertInstanceOf("CDC\Loja\Produto\Produto",$maiorMenor->getMaior());
        self::assertInstanceOf("CDC\Loja\Produto\Produto",$maiorMenor->getMenor());
    }

    public function testEmOrdemAleatoria()
    {
        $carrinho = new CarrinhoDeCompras();

        $carrinho->adiciona(new Produto('Geladeira',950.00));
        $carrinho->adiciona(new Produto('Jogo de Pratos',70.00));
        $carrinho->adiciona(new Produto('Liquidificador',450.00));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);
        self::assertInstanceOf("CDC\Loja\Produto\Produto",$maiorMenor->getMaior());
        self::assertInstanceOf("CDC\Loja\Produto\Produto",$maiorMenor->getMenor());
        //self::assertEquals('Geladeira',$maiorMenor->getMaior()->getNome());
        //self::assertEquals('Jogo de Pratos',$maiorMenor->getMenor()->getNome());
    }

    public function testApenasUmProduto()
    {
        $carrinho = new CarrinhoDeCompras();
        $carrinho->adiciona(new Produto('Geladeira',950.00));

        $maiorMenor = new MaiorEMenor();
        $maiorMenor->encontra($carrinho);

        self::assertInstanceOf("CDC\Loja\Produto\Produto",$maiorMenor->getMaior());
        self::assertInstanceOf("CDC\Loja\Produto\Produto",$maiorMenor->getMenor());
    }

}