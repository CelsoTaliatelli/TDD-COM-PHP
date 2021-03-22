<?php


namespace CDC\Exemplos;


class ConversorDeNumeroRomano
{
    private $numeroEmRomano;

    protected $tabela = array(
        "I" => 1,
        "V" => 5,
        "X" => 10,
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
            $numDireita = "";
            if($i+1 < strlen($numero)){
                $numDireita = $numero[$i+1];
            }
            if(array_key_exists($numCorrente,$this->tabela)){
                if(isset($this->tabela[$numDireita]) && $this->tabela[$numDireita] > $this->tabela[$numCorrente]){
                    $acumulador += ($this->tabela[$numDireita] - $this->tabela[$numCorrente]);
                    $i++;
                }else{
                    $acumulador += $this->tabela[$numCorrente];
                }
                
            }
        }

        return $acumulador;
    }
}