<?php
$nmCliente = $_POST['nmCliente'];
$CPF = $_POST['CPF'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$UF = $_POST['UF'];

$linha = date('d/m/Y H:i:s') . " | Nome do Cliente: " . $nmCliente . " | CPF: " . $CPF . " | Telefone.: " . $telefone . " | Endereço: " . $endereco . " | Unidade Federativa: " . $UF. PHP_EOL;

file_put_contents('cadastro_cliente.txt', $linha, FILE_APPEND);

header('Location: ../cadastro_nf.html');
exit;