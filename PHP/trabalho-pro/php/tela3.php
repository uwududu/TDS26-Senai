<?php
// tela de mod
date_default_timezone_set('America/Sao_Paulo');
$modelo = $_POST['modelo'];
$turbo = $_POST['turbo'];
$remap = $_POST['remap'];
$downpipe = $_POST['downpipe'];
$altura = $_POST['altura'];
$som = $_POST['som'];

$linha = date('d/m/Y H:i:s') . " | Modelo do Carro: " . $modelo . " | Turbina maior: " . $turbo . " | Remap: " . $remap . " | Downpipe + escapamento: " . $downpipe . " | Ajuste de altura: " . $altura  . " | Som novo:" . $som . PHP_EOL;

file_put_contents('telas_todas.txt', $linha, FILE_APPEND);
header('Location: ../tela4.html');
exit;