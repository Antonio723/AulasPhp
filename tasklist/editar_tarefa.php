<?php

require("./database/conexao.php");

//receber o idtarefa a ser editada
$tarefaid = $_GET["tarefaid"];

//select no banco da terafa a sser editado
$sqlselect = "SELECT * FROM TBL_TASK WHERE id = $tarefaid";

//execultara consulta no banco (mysqli_query)
$resultado = mysqli_query($conexao, $sqlselect);

//extrair a linha da consulta para um array
$tarefa = mysqli_fetch_array($resultado);
if (!$tarefa) {
    die("Parece que essa tarefa não existe ");
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Tarefa</title>
    <link rel="stylesheet" href="styles-global.css" />
</head>

<body>
    <div class="content">
        <h1>Editar Tarefa</h1>
        <form method="POST" action="taskActions.php">
            <div class="input-group">
                <input type="hidden" name="acao" value="editar" />
                <input type="hidden" name="tarefaid" value="<?= $tarefa["id"] ?>" />
                <label for="tarefa">Descrição da tarefa</label>
                <input type="text" name="tarefa" value="<?= $tarefa["descricao"] ?>" id="tarefa" placeholder="Digite a tarefa" required />
            </div>
            <button>Adicionar</button>
        </form>
    </div>
</body>
</html>