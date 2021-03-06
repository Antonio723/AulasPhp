<?php

$nome =  $_GET["nome"];
$salario = $_GET["salario"];

if($salario >0 && $salario < 5000){
    $novo_salario = $salario * 1.2;
    echo "<h1>O $nome passará a receber R$ $novo_salario</h1>";
}else if($salario > 5000){
    $novo_salario = $salario * 1.1;
    echo "<h1>O $nome passará a receber R$ $novo_salario</h1>";
}