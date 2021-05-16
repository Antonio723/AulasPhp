<?php

function somarInteiro(array $vetorInteiros){
    $soma = null;

    foreach($vetorInteiros as $numero){
        $soma +=$numero;
    }
    return $soma;
}
    $inteiros = [5,10,50,15];
    echo somarInteiro($inteiros)
?>