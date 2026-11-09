<?php
$numP = $_POST['numP'];
$codP = $_POST['codP'];
$quant = $_POST['quant'];
$valor = $_POST['valor'];

$valorT = ($valor*$quant);

$linha = date('d/m/Y H:i:s') . " | Num. Pedido: " . $numP . " | Cod. Pedido: " . $codP . " | Quant.: " . $quant . " | Valor Unit.: " . $valor . " | Total: " . $valorT. PHP_EOL;

file_put_contents('itens_pedido.txt', $linha, FILE_APPEND);

header('Location: item_pedido.html');
exit;