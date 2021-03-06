<?php 

$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$numero_endereco = $_GET["numero_endereco"];
$consumo = $_GET["consumo"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/styles-global.css" />
  <title>Calculo de Frete PHL</title>
</head>

<body>
  <?php
   if ($consumo > 120) {
  ?>
    <h1 style='color: #eed202'>
        <p>Nome: $nome </p>
        Conta de luz de FULANO DE TAL SANTOS.
        Rua Flores das águas, 500.
        Consumo: 200kWh.
        Valor a pagar: R$ 84,00  
    <?= number_format($custoPedagio, 2, ",", ".")?> </h1>
  <?php
    } else {
  ?>
    <h1>Valor dos pedágios: R$ <?= number_format($custoPedagio, 2, ",", ".")?> </h1>;
  <?php
    }
  ?>
  <h1>A viagem de <?= $origem ?> à <?= $destino ?> irá custar o valor total de R$
    <em> <?= number_format($custoViagem, 2, ",", ".") ?> </em></h1>
</body>
</html>