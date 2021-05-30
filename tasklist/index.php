<?php

require("./database/conexao.php");

$scriptselect = 'select * from tbl_task';

$resultado = mysqli_query($conexao, $scriptselect);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <link rel="stylesheet" href="styles-global.css" />
</head>

<body>
    <div class="content">
        <?php
        if (isset($_GET["mensagem"])) {
        ?>
            <div class="mensagem" <?= $_GET["tipomensagem"] == "sucesso" ? "style = background-color:#00660099" : " "?>>
                <?= $_GET["mensagem"] ?>
            </div>
        <?php } ?>
        <h1>Lista de Tarefas</h1>
        <form method="POST" action="taskActions.php">
            <div class="input-group">
                <input type="hidden" name="acao" value="inserir" />
                <label for="tarefa">Descrição da tarefa</label>
                <input type="text" name="tarefa" id="tarefa" placeholder="Digite a tarefa" required />
            </div>
            <button>Adicionar</button>
        </form>
        <hr />
        <div class="tarefas">
            <?php
            while ($linha = mysqli_fetch_array($resultado)) {
            ?>
                <div class="tarefa">
                    <?= $linha["descricao"] ?>
                    <form id="form_editar" method="GET" action="editar_tarefa.php">
                        <input type="hidden" name="tarefaid" value="<?= $linha["id"] ?>" />
                        <button>&#128393;</button>
                    </form>
                    <form method="POST" action="taskActions.php">
                        <input type="hidden" name="acao" value="deletar" />
                        <input type="hidden" name="tarefaid" value="<?= $linha["id"] ?>" />
                        <button>&#128465;</button>
                </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
    <script type="text/javascript">
        setTimeout(() => {
            document.querySelector(".mensagem").style.display = "none";
        }, 25000);
    </script>
</body>

</html>