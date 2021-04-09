<?php


namespace CDC\Loja\RH;


class Funcionario
{
    protected $nome;
    protected $salario;
    protected $cargo;

    /**
     * Funcionario constructor.
     * @param $nome
     * @param $salario
     * @param $cargo
     */
    public function __construct($nome, $salario, $cargo)
    {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->cargo = $cargo;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * @return mixed
     */
    public function getCargo()
    {
        return $this->cargo;
    }

    


}