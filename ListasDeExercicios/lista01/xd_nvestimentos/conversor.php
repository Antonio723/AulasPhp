<?php

$moeda = $_GET["moeda"];
$reais = $_GET["valor_real"];

$conversor_dolar = $reais / 5.41;
$conversor_euro = $reais / 6.57;

$dolar = number_format($conversor_dolar, 2, '.', '');
$euro = number_format($conversor_euro, 2, '.', '');

if($moeda == "dolar"){
    echo "<h1>Valor total em $moeda é : US$ $dolar</h1>";
}else if($moeda == "euro"){
    echo "<h1>Valor total em $moeda é : € $euro</h1>";
}
