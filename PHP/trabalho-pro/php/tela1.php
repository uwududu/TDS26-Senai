<?php
// compra do vrum vrum
date_default_timezone_set('America/Sao_Paulo');
$modelo = $_POST['modelo'];
$cor = $_POST['cor'];
$pagamento = $_POST['pagamento'];
$nm_cliente = $_POST['nm_cliente'];
$tel = $_POST['tel'];
$CPF_CNPJ = $_POST['CPF_CNPJ'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$complemento = $_POST['complemento'];


$linha = date('d/m/Y H:i:s') . " | Modelo: " . $modelo . " | Cor: " . $cor . " | Pagamento " . $pagamento . " | Nome do Cliente: " . $nm_cliente . " | Telefone: " . $tel . " | CPF/CNPJ: " . $CPF_CNPJ . 
" | Rua do Cliente: ". $rua . " | Bairro do Cliente: " . $bairro . " | Complemento: " . $complemento . PHP_EOL;

file_put_contents('telas_todas.txt', $linha, FILE_APPEND);

header('Location: ../tela2.html');
exit;