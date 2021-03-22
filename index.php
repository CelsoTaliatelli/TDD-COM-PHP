<?php

require_once __DIR__.'/vendor/autoload.php';

$tabela = array(
    "I" => 1,
    "V" => 5,
    "X" => 10,
    "L" => 50,
    "C" => 100,
    "D" => 500,
    "M" => 1000
);

$numero ="XXIV";
$acumulador = 0;
for ($i = 0; $i < strlen($numero);$i++){
    $numCorrente = $numero[$i];
    $numDireita = "";
    if($i+1 < strlen($numero)){
        $numDireita = $numero[$i+1];
    }

    
    if(array_key_exists($numCorrente,$tabela)){

        if(isset($tabela[$numDireita]) && $tabela[$numDireita] > $tabela[$numCorrente]){
            echo 'Ok';
            $acumulador += ($tabela[$numDireita] - $tabela[$numCorrente]);
            $i++;
        }else{
            $acumulador += $tabela[$numCorrente];
       }

    }
}

echo $acumulador .PHP_EOL;

//echo $acumulador .PHP_EOL;