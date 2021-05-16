<?php

$a = $_POST["vetor"];
$b = $_POST["vetorpesquisa"];

$c = explode(" ",$a);
$d = explode(" ",$b);

function veotoresiguais (array $vetor, array $vetorcontido){   
    $encotrado = false;
    foreach($vetor as $valorVetor1){
        foreach($vetorcontido as $valorVetor2){
            if($valorVetor1==$valorVetor2){
                $encotrado = true;
                continue;
            }
        }
    }
    if(!$encotrado){
        return false;
    }
    return true;
}

if(veotoresiguais($c,$d)){
    echo "Sim, está contido";
}else{
    echo "Não, não está contido";
}



?>