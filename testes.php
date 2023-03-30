<?php

use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Impostos\Icms;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';
/*
$calculadora =  new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calculadora($orcamento, new Icms());
*/
$calculadora =  new \Alura\DesignPattern\CalculadoraDeDescontos();
$orcamento = new Orcamento();

$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;
echo $calculadora->calculaDescontos($orcamento);
