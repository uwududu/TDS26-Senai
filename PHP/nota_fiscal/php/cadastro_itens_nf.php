<?php
$nmCliente = $_POST['numCliente'];
$CPF = $_POST['CPF'];
$endereco = $_POST['endereco'];
$codNF = $_POST['codNF'];
$valorNF = $_POST['valorNF'];
$quant = $_POST['quant'];


$valorT = ($valorNF*$quant);

$linha = date('d/m/Y H:i:s') . " | Nome Cliente: " . $nmCliente . " | CPF: " . $CPF . " | Endereço: " . $endereco . " | Cod. Nota Fiscal: " . $codNF . " | Valor NF.: " . $valorNF. " | Quantidade: " . $quant.  " | Valor Total: " . $valorT.   PHP_EOL;

file_put_contents('cadastro_itens_nf.txt', $linha, FILE_APPEND);

header('Location: ../cadastro_itens_nf.html');
exit;