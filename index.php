<?php

require_once __DIR__.'/vendor/autoload.php';

use CDC\Loja\Carrinho\CarrinhoDeCompras;
use CDC\Loja\Produto\MaiorEMenor;
use CDC\Loja\Produto\Produto;

$teste = new CarrinhoDeCompras();

$teste->adiciona(new Produto('Fogão',20.00));
//$teste->adiciona(new Produto('Freezer',450.00));
//$teste->adiciona(new Produto('Pratos',100.00));
$teste->adiciona(new Produto('Geladeira',250.00));

$maiorValor = $teste->getProdutos()[0]->getValor();

foreach ($teste->getProdutos() as $produto){
    if($maiorValor < $produto->getValor()){
        $maiorValor = $produto->getValor();
    }
}

$maiorMenor = new MaiorEMenor();
$maiorMenor->encontra($teste);

//var_dump($maiorMenor);

var_dump($maiorMenor->getMaior());
var_dump($maiorMenor->getMenor());