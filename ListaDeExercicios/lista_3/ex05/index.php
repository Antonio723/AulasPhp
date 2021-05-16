<?php
    $cidades =[
        1 => "Jandira",
        2 => "Itapevi",
        3 => "Barueri",
        4 => "Osasco",
        5 => "Cotia",
        6 => "Santana de Parnaíba",
        7 => "Carapicuíba",
        8 => "São Paulo"
    ];

    $nome = isset($_POST['nome']) ? $_POST['nome'] : null;
    $cidade = isset($_POST['cidades']) ? $_POST['cidades'] : null;

    $cidade = isset($cidade) ? $cidadeEscolhida = $cidades[$cidade] : null;

    ?>    
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="exercicio5.php">
        <div class="input-group">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" placeholder="Digite seu nome"/>
        </div>
        <label>Informa sua cidade:</label>
        <div class="input-group">

            <select name="cidades" id="cidades" required>
            <option selected value="">SELECIONE</option>
            <?php
                foreach($cidades as $indice => $listaCidade){
            ?>
            <option value="<?=$indice?>"><?=$listaCidade?></option>
            <?php
                }
            ?>
            </select>

        </div>
                
        <div>
            <h1 id="resultado">Olá <?= $nome ?>, de <?=$cidade?>, seja bem-vindo.</h1>
        </div>
        <button>Eniviar</button>
    </form>
</body>
</html>