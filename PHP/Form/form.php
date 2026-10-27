<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$data = $_POST['data'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estados'];
$deficiencia = $_POST['deficiencia'];
$escola = $_POST['escolaridade'];

echo "Nome: " . $nome . "<br>";
echo "Email: " . $email . "<br>";
echo "Telefone: " . $tel . "<br>";
echo "Data de Nascimento: " . $data . "<br>";
echo "CPF: " . $cpf . "<br>";
echo "Endereço: " . $endereco . "<br>";
echo "Cidade: " . $cidade . "<br>";
echo "Estado: " . $estado . "<br>";
echo "Deficiencia: " . $deficiencia . "<br>";
echo "Escolariedade: " . $escola . "<br>";
?>