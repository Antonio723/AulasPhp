<?php 
$numero = $_POST["numero"];

function primo($number){
    if($number == 2){
        return "Ta de brincadeira?";
    }else if($number % 2 == 0){
        return "Nao primo";
    }else if ($number % 2 == 1){
        return "Numero primo";
    } 
}

echo( primo($numero));

?>