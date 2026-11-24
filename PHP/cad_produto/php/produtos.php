<?php
// compra do vrum vrum
date_default_timezone_set('America/Sao_Paulo');
$cod_produto = $_POST['cod_produto'];
$desc_produto = $_POST['desc_produto'];
$val_produto = $_POST['val_produto'];
$qtd_produto = $_POST['qtd_produto'];

$linha = date('d/m/Y H:i:s') . " | " . $cod_produto . " | " . $desc_produto . " | R$" . $val_produto . " | " . $qtd_produto . " | " .  PHP_EOL;

file_put_contents('produtos.txt', $linha, FILE_APPEND);

header('Location: ../index.html');
exit;



