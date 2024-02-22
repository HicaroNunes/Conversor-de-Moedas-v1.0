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

$inicio = date("m-d-Y", strtotime ("-7 days")) ;
$fim = date("m-d-Y") ;
$url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

$dados = json_decode(file_get_contents($url), true);


$cotacao = $dados["value"][0]["cotacaoCompra"];

$valor = $_REQUEST["convert"];
$res = $valor / $cotacao;
echo "O valor em dolar é $" . number_format($res,2,",",".") . "!";
?>
<br>
<p>Valor predefinido baseado na cotação atual do <a target="_blank" href="https://www.bcb.gov.br/">Banco Central do brasil</a></p>

</main> 

<button onclick="JavaScript:window.location.href='index.html'">Voltar</button>

</body>
</html>