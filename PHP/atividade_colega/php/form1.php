<?php
date_default_timezone_set('America/Sao_Paulo');

$nome = $_POST['nome'];
$CPF_CNPJ = $_POST['CPF_CNPJ'];
$rua = $_POST['rua'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$pais = $_POST['pais'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$objeto = $_POST['objeto'];

$linha = date('d/m/Y H:i:s') . " | Nome do Cliente: " . $nome . " | CPF/CNPJ: " . $CPF_CNPJ . " | Rua do Cliente.: " . $rua . " | Bairro do Cliente: " . $bairro . " | Cidade: " . $cidade. " | Estado do Cliente: ". $estado . " | País do Cliente: ". $pais . " | Telefone: " . $tel . " | Email: " . $email . " | Objeto: " . $objeto . PHP_EOL;

file_put_contents('remetente.txt', $linha, FILE_APPEND);

header('Location: ../form2.html');
exit;