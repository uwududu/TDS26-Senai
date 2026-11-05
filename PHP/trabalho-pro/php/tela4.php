<?php
// tela da multa
date_default_timezone_set('America/Sao_Paulo');
$nome = $_POST['nome'];
$placa = $_POST['placa'];
$multa = $_POST['multa'];
$gravidade = $_POST['gravidade'];
$valor = $_POST['valor'];

$linha = date('d/m/Y H:i:s') . " | Nome do motorista: " . $nome . " | Placa do veículo: " . $placa . " | Motivo da multa: " . $multa . " | Gravidade da multa: " . $gravidade . " | Valor da multa: " . $valor  . PHP_EOL;

file_put_contents('telas_todas.txt', $linha, FILE_APPEND);
header('Location: ../tela4.html');
exit;