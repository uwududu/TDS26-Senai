<?php
// tela de mod
date_default_timezone_set('America/Sao_Paulo');
$modelo = $_POST['modelo'];
$turbo = $_POST['turbo'];
$remap = $_POST['remap'];
$downpipe = $_POST['downpipe'];
$escape = $_POST['escape'];
$altura = $_POST['altura'];
$som = $_POST['som'];
$roda = $_POST['roda'];
$bodykit = $_POST['bodykit'];

$linha = date('d/m/Y H:i:s') . " | Modelo do Carro: " . $modelo . " | Turbina maior: " . $turbo . " | Remap: " . $remap . " | Downpipe: " . $downpipe . " | Escapamento:" . $escape ." | Ajuste de altura: " . $altura  
. " | Som novo:" . $som . " | Roda nova: " . $roda . " | Bodykit: " . $bodykit;

file_put_contents('telas_todas.txt', $linha, FILE_APPEND);
header('Location: ../tela4.html');
exit;