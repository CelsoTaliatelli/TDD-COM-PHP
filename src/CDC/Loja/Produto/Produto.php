<?php


namespace CDC\Loja\Produto;


class Produto
{
    private $nome;
    private $valor;

    public function __construct($nome,$valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getValor(): float
    {
        return $this->valor;
    }
}