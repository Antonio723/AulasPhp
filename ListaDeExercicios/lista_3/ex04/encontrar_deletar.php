<?php 
$alunos = ["Alice","Alex","Antonio","Beatriz","Carine","Carol"];
$valor_procurado = $_POST["aluno"];

function deletarValor(array $numeros, $valor){

    for($i=0 ;$i < count($numeros); $i++){
        if($numeros[$i] == $valor){ 
            unset($numeros[$i]);
            return $numeros;
        }
    }
    return false;
}


var_dump (deletarValor($alunos, $valor_procurado)); echo "<br/> <br/> <br/>";
?>