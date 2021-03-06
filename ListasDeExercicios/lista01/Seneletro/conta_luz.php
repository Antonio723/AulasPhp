<?php 

$nome = $_GET["nome"];
$endereco = $_GET["endereco"];
$numero_endereco = $_GET["numero_endereco"];
$consumo = $_GET["consumo"];

$total_consumo = 0;
if($consumo>=120){
  $total_consumo = $consumo * 0.42;
} else if($consumo > 0 && $consumo<120){
  $total_consumo = $consumo * 0.32;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>Calculo de Frete PHL</title>
</head>

<body>
<h1>
  <!-- Caso o consumo for acima de 120 kWh, o valor de cada kWh deverá ser 0,42 e 
  consumo deve aparecer em vermelho.
Caso o consumo for até de 120 kWh, o valor de cada kWh deverá ser 0,32 e consumo deve 
aparecer em azul e mostrar uma mensagem: “Obrigado por economizar!”. -->
  <?php
   if ($consumo >= 120) {
  ?>
  <?php
    echo"<h1>Conta de luz de $nome </h1>
        <h1>$endereco, $numero_endereco</h1>
        <h1> $consumo kWh</h1>
        <h1>Consumo: R$ <span style='color: red'>$total_consumo</span> </h1>
  </h1>"
  ?>
  <?php
    } else if($consumo > 0 && $consumo<120){
  ?>
  <?php
    echo"<h1>Conta de luz de $nome </h1>
        <h1>$endereco, $numero_endereco</h1>
        <h1> $consumo kWh</h1>
        <h1>Consumo: R$ <span style='color: blue'>$total_consumo Obrigado por economizar!</span> </h1>
  </h1>"
  ?>
  <?php
    } 
  ?>
</body>
</html>