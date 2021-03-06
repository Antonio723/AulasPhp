<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>XD Investimentos</title>
</head>
<body>
    <form action="conversor.php">
        <div>
            <span>R$</span>
            <input style="height: 40px;" type="number" step="0.01" placeholder="Valor a ser convertido" name="valor_real" required>
        </div>
        <p style="margin-bottom: 0px;;">moeda:</p>
        <div>
            <input type="radio" id="dolar" name="moeda" value="dolar">
            <label for="dolar">Dolar US$</label>
        </div>
        <div>
            <input type="radio" id="euro" name="moeda" value="euro">
            <label for="euro">Euro  €</label>
        </div>
        <button style="background-color:#9eb8de;">CALCULAR</button>
    </form>
</body>
</html>