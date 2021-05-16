<?php
$dados = $_POST["dados"];

function inverte($inversor){
    $str = explode(' ',$inversor);
    $i = [];
    $padrao = count($i);
    $a = count($str)-1;
    for($a; $padrao <= $a; $a--){ 
        echo $str[$a]." ";
    }
}

inverte($dados);

?>
