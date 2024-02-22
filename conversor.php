<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de moedas</title>
</head>
<body>
<main>
<h1>Conversor de Real em dolar!</h1>
<?php 
$valor = $_REQUEST["convert"];
$res = $valor / 4.96;
echo "O valor em dolar é $" . number_format($res,2,",",".") . "!";
?>
<br>
<p>Valor predefinido em 4.96!</p>
</main> 

<button onclick="JavaScript:window.location.href='index.html'">Voltar</button>

</body>
</html>