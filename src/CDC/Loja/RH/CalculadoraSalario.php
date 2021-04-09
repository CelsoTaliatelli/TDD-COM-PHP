<?php


namespace CDC\Loja\RH;

use CDC\Loja\RH\Funcionario;

class CalculadoraSalario
{
    public function calculaSalario(Funcionario $funcionario)
    {
        if($funcionario->getCargo() === TabelaDeCargos::DESENVOLVEDOR){
            if($funcionario->getSalario() > 3000){
                return 3200.0;
            }
            return 1350.0;
        }
        return 425.0;

    }
}