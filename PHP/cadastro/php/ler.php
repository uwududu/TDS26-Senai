<?php
$linhas = file("ts.txt", FILE_IGNORE_NEW_LINES);
?>
<table border="1">
    <tr>
        <th>Meme</th>
        <th>Email</th>
        <th>Endereço</th>
        <th>Data e Horas</th>
        <th>Objeto</th>
        <th>Segurança</th>
        <th>Cachorro</th>
        <th>Arma</th>
    </tr>

    <?php foreach($linhas as $linha) {

    $partes = explode(" | ", $linha);
    ?>
    <tr>
        <td><?= $partes[0] ?></td>
        <td><?= $partes[1] ?></td>
        <td><?= $partes[2] ?></td>
        <td><?= $partes[3] ?></td>
        <td><?= $partes[4] ?></td>
        <td><?= $partes[5] ?></td>
        <td><?= $partes[6] ?></td>
        <td><?= $partes[7] ?></td>
    </tr>

    <?php } ?>
</table>
