<?php

require("../database/conexao.php");

session_start();

function validarCampos(){

    $erros=[];
    
    //validar se o campo descricao está preenchido
    if(!isset($_POST["descricao"]) && $_POST["descricao"] == ""){
        $erros[] = "O campor descricao é obrigatorio";
    }

    //validarse o campo peso está preenchido
    if(!isset($_POST["peso"]) && $_POST["peso"] =="" ){
        $erros[] = "O campo peso é obrigatório";
    }else if(!is_numeric(str_replace(",",".",$_POST["peso"]))){
        $erros[] = "O campo peso deve ser preenchido";
    }

    //validar campo quantiade está preenchiido
    if(!isset($_POST["quantidade"]) && $_POST["quantidade"] == ""){
        $erros[]= "O campo quantidade é obrigatorio";
    }

    //validar se a cor está preenchida
    if(!isset($_POST["cor"]) && $_POST["cor"] == ""){
        $erros[]= "O cor cor é obrigatorio";
    }

    if(!isset($_POST["tamanho"]) && $_POST["tamanho"] == ""){
        $erros[]= "O campo tamanho é obrigatorio";
    }

    if(!isset($_POST["valor"]) && $_POST["valor"] == ""){
        $erros[]= "O campo valor é obrigatorio";
    }

    if(!isset($_POST["desconto"]) == true && !isset($_POST["desconto"]) && $_POST["desconto"] == ""){
        $erros[]= "O campo desconto é obrigatorio";
    }

    if(!isset($_POST["valor"]) && $_POST["valor"] == ""){
        $erros[]= "O campo valor é obrigatorio";
    }

    /*imagem*/

    return $erros;
}


$erros = validarCampos();

if( count($erros) > 0 ){
    $_SESSION["erros"] = $erros;

    header("location: /index.php?erros=$erros");
}

        $erros = validarCampos();
        if(count($erros) > 0){
            $_SESSION["erros"] = $erros;

            header("location: index.php?erro=houveErro");
        }else{
            $descricao = $_POST["descricao"];
            // Trocando a virgula por ponto
            $peso = str_replace(",", ".", $_POST["peso"]);
            $quantidade = $_POST["quantidade"];
            $cor = $_POST["cor"];
            // Trocando a virgula por ponto
            $valor = str_replace(",", ".", $_POST["valor"]);
            $tamanho = $_POST["tamanho"];
            $desconto = $_POST["desconto"] != "" ? $_POST["desconto"] : 0;
        
            $sqlinsert= "INSERT INTO tbl_produto (descricao, peso, quantidade, cor, tamanho, valor, desconto)
                            VALUES ('$descricao', $peso, $quantidade, '$cor', '$tamanho', $valor, $desconto)";
            
            $resultado = mysqli_query($conexao, $sqlinsert) or die(mysqli_error($conexao));   
            
            header("location: index.php?mensagem=padrão");
        }