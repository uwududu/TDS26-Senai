<?php
        $meme = $_POST ['meme'];
        $email = $_POST ['email'];
        $endereco = $_POST['endereco'];
        $horas = $_POST['horas'];
        $objeto = $_POST['objeto'];
        $seguranca = $_POST['seguranca'];
        $cachorro = $_POST['cachorro'];
        $arma = $_POST['arma'];

        $linha = "Humor: " . $meme . " | Email: " . $email . " | Endereço: " . $endereco . " | Horario " . $horas . " | Objeto de Valor: " . $objeto . " | Segurança?: " . $seguranca . " | Cachorro?: " . $cachorro . " | Arma?: ". $arma . PHP_EOL;

        file_put_contents('ts.txt', $linha, FILE_APPEND);
        
        
        header("Location: ../index.html");
        
        exit;
?>