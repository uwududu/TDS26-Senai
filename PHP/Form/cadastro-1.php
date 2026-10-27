<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$cidade = $_POST['cidade'];
$mensagem = $_POST['mensagem'];

$linha = date('d/m/Y H:i:s') . " | " . $nome . " | " . $email . " | " . $tel . " | " . $cidade . " | " . $mensagem . PHP_EOL;

file_put_contents('cadastros.txt', $linha, FILE_APPEND);

header('Location: cadastro-1.html');
exit;