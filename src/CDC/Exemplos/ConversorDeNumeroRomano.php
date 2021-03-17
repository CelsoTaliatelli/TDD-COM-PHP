<?php


namespace CDC\Exemplos;


class ConversorDeNumeroRomano
{
    private $numeroEmRomano;

    protected $tabela = array(
        "I" => 1,
        "V" => 5,
        "L" => 50,
        "C" => 100,
        "D" => 500,
        "M" => 1000
    );

    public function converte($numero)
    {
        $acumulador = 0;
        for ($i = 0; $i < strlen($numero);$i++){
            $numCorrente = $numero[$i];
            if(array_key_exists($numCorrente,$this->tabela)){
                $acumulador += $this->tabela[$numCorrente];
            }
        }

        return $acumulador;
    }
}