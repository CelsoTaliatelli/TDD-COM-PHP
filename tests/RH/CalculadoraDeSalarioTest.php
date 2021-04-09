<?php


namespace CDC\Loja\Tests\RH;


use CDC\Loja\RH\Funcionario;
use CDC\Loja\RH\TabelaDeCargos;
use PHPUnit\Framework\TestCase;
use CDC\Loja\RH\CalculadoraSalario;

class calculadoraDeSalarioTest extends TestCase
{
    public function testCalculoSalarioDesenvolvedoresComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraSalario();
        $desenvolvedor = new Funcionario("Andre",1500.0,TabelaDeCargos::DESENVOLVEDOR);

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(1500.0 * 0.9,$salario,'Mensagem',0.00001);
    }

    public function testCalculoSalarioDesenvolvedoresComSalarioAcimaDoLimite()
    {
        $calculadora = new CalculadoraSalario();
        $desenvolvedor = new Funcionario("Andre",4000.0,TabelaDeCargos::DESENVOLVEDOR);

        $salario = $calculadora->calculaSalario($desenvolvedor);

        $this->assertEquals(4000.0 * 0.8,$salario,'Mensagem',0.00001);
    }

    public function testCalcularSalarioParaDBAsComSalarioAbaixoDoLimite()
    {
        $calculadora = new CalculadoraSalario();
        $dba = new Funcionario("Andre",500.0,TabelaDeCargos::DBA);

        $salario = $calculadora->calculaSalario($dba);

        $this->assertEquals(500.0 * 0.85,$salario,'Mensagem',0.00001);
    }
}