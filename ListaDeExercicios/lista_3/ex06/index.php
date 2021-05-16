<?php 
$ListaFeira =[
    "banana" => 12,
    "maca"   => 8,
    "pera"   => 4,
    "uva"    => 2,
    "coentro"=> 1,
    "manerica"=>2,
    "alface" => 2,
    50       => "diferente"
];

function chaves($vetor){
    foreach($vetor as $key){
        $newArray [] = $key;
    }
    
    return $newArray;
}

function exibirVetor($array){
    foreach ($array as $key){
        echo($key)."</br>";
    }
}

$resultado = chaves($ListaFeira);
exibirVetor($resultado);


?>