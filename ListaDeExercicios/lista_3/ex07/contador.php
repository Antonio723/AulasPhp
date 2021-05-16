<?php 

$vetor = $_POST["vetor"];
$valores = explode(" ",$vetor);

function maiorValor($array){
    $max = null;
    $min = [];
    foreach ($array as $value){
        if($value > $max){
            $max = $value;
        }
        if($value < $min){
            $min = $value;
        }
    }

    return [$min, $max];
}

$resultado = maiorValor($valores);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>FullBank</title>
</head>
<body>
    <form method="POST" action="index.php">
        <H1>Menor valor : <?= $resultado[0]?></H1>
        <H1>Maior valor : <?= $resultado[1]?></H1></br>
        <button>VOLTAR</button>
    </form>
</body>
</html>