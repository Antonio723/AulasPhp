<?php
//Informacoes de conxao com o sql
const HOST = "localhost";
const USER = "root";
const PASSWORD = "manolo";
const DATABASE = "tasklist";

//conao com o mysql
$conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE);

//para saber se ha um erro com o mysqli use

// if($comnadoMysqli == false){
//     echo mysqli_error($conexao);
//     die()
// }
?>