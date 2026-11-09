<?php
$numP = $_POST['numP'];
$dataP = $_POST['dataP'];
$tabP = $_POST['tabP'];
$nomeC = $_POST['nomeC'];
$endereco = $_POST['endereco'];
$cep = $_POST['cep'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$tel = $_POST['tel'];
$dataE = $_POST['dataE'];

$linha = date('d/m/Y H:i:s') . " | " . $numP . " | " . $dataP . " | " . $tabP . " | " . $nomeC . " | " . $endereco . " | " . $cep . " | " . $cidade . " | " . $estado . " | " . $tel . " | " . $dataE . PHP_EOL;

file_put_contents('pedido.txt', $linha, FILE_APPEND);

header('Location: item_pedido.html');
exit;