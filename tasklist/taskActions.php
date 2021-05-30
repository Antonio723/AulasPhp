<?php 
require("./database/conexao.php");


switch($_POST["acao"]){

    case "inserir":
    if( isset($_POST["tarefa"]) ){

        $mensagem = $_POST["tarefa"];
        $scriptinsert = "insert into tbl_task (descricao) values('$mensagem')";
        $resultado = mysqli_query($conexao, $scriptinsert);

        if($resultado == false){
            $mensagem = "Erro ao adicionar a mensagem";
            $tipomensagem = "erro";
        }else{
            $mensagem = "Tarefa adicionada com sucesso!";
            $tipomensagem = "sucesso";
        }
        
    }break;

    case "deletar":
        if(isset($_POST["tarefaid"])){

            $id = $_POST["tarefaid"];
            $sqldelet = "delete from tbl_task where id = $id";
            $resultado = mysqli_query($conexao, $sqldelet);

            if($resultado == false){
                $mensagem = "Erro ao excluir a mensagem";
                $tipomensagem = "erro";
            }else{
                $mensagem = "Tarefa excluída com sucesso!";
                $tipomensagem = "sucesso";
            }

        }
    break; 

    case "editar":

        if(isset($_POST["tarefaid"]) || isset($_POST["tarefaid"])){

            //pegar a tarefa e o id
            $tarefa = $_POST["tarefa"];
            $id = $_POST["tarefaid"];

            //declarar a query de update
            $sqlupdate = "UPDATE tbl_task set descricao = '$tarefa' where id= $id";

            //rodar a query de update
            $resultado = mysqli_query($conexao, $sqlupdate);

            //exibi a mensagens se houve erro ou acerto
            if($resultado == false){
                $mensagem = "Erro ao editar a mensagem";
                $tipomensagem = "erro";
            }else{
                $mensagem = "Tarefa editada com sucesso!";
                $tipomensagem = "sucesso";
            }
        }
    break;
}


header("location: index.php?mensagem=$mensagem&tipomensagem=$tipomensagem");


?>