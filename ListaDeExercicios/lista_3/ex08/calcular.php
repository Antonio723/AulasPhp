<?php 

$vetor = $_POST["vetor"];
$valores = explode(" ",$vetor);
$nome = $_POST["nome"];

function mediaNotas(array $array){
    $soma=0;
    foreach($array as $nota){
        $soma += $nota;
    }
    $media = $soma / count($array);
    return $media;
}

$nota = number_format(mediaNotas($valores) , 2 );


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Notas Alunos</title>
</head>
<body>
    <form method="POST" action="index.php">
    <h1>O aluno <?= $nome?> obteve a media de <?=$nota?> </h1>
        <button>VOLTAR</button>
    </form>
</body>
</html>