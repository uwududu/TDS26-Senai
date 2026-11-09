<?php
// tela cad do vrum vrum
date_default_timezone_set('America/Sao_Paulo');
$marca = $_POST['marca'];
$ano = $_POST['ano'];
$pais = $_POST['pais'];
$motor = $_POST['motor'];
$cor = $_POST['cor'];
$placa = $_POST['placa'];

$linha = date('d/m/Y H:i:s') . " | Marca do veículo: " . $marca . " | Ano do veículo: " . $ano . " | Pais de origem " . $pais . " | Motor do veículo: " . $motor . " | Cor do veículo: " . $cor . " | Placa do veículo: " . $placa . PHP_EOL;

file_put_contents('telas_todas.txt', $linha, FILE_APPEND);
header('Location: ../tela3.html');
exit;