<?php 

//Hoje em dia, no PHP, temos duas maneiras principais para manipular banco de dados

//São elas o mysqli e o PDO

//Utilizaremos nessa aula o mysqli

//Precisaremos então fazer a conxaõ com o MYSQL

//conexao com o banco de dados
require("./database/conexao.php");


//query que sera rodada
$sql = 'select * from tbl_task';


//mysqli_query() usado para rodar uma query mysql, (conexao, script sql)
$resultado = mysqli_query($conexao, $sql);

//*****maneira não tão boa para se usar, pois existem muitas interações se torna inviavel********/

// //seleciona o primeiro registro em sua primeira interacaocaso exista
// $linha1 = mysqli_fetch_array($resultado);
// //seleciona o segundo registro em sua segunda interacao caso exista
// $linha2 = mysqli_fetch_array($resultado);
// //"..."
// $linha3 = mysqli_fetch_array($resultado);
// print_r($linha1);
// echo "</br></br>";
// print_r($linha2);
// echo "</br></br>";
// print_r($linha3);
// echo "a </br></br>";

/************************************************************************************************** */

//A melhor maneira de acessar 

// while ($linha = mysqli_fetch_array($resultado)){

// }

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border= "1">
        <tr>
            <th>ID</th>
            <th>Descricao</th>
        </tr>
        <?php 
            //enquanto houver linhas noresultado do select
            //repitimos o tr da table
            while ($linha = mysqli_fetch_array($resultado)){
        ?>

            <tr>
                <td><?=$linha["id"] ?> </td>
                <td><?=$linha["descricao"] ?> </td>
            </tr>

        <?php
            }
        ?>
    </table>

</body>
</html>