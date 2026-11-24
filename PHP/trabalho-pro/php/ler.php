<?php
$linhas = file("telas_todas.txt", FILE_IGNORE_NEW_LINES);
?>
<table border="1">
    <tr>
        <th>Data e Hora</th>
        <th>Modelo e Motorista</th>
        <th>Cor/Ano/Turbo/Placa</th>
        <th>Pagamento/País/Remap/Multa</th>
        <th>Cliente/Motor/Escape/Gravidade</th>
        <th>Telefone/Cor/Altura/Valor</th>
        <th>CPF/Placa/Som</th>
        <th>Rua/CNH</th>
        <th>Bairro/Mod?</th>
        <th>Complemento/Qual mod?</th>
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
        <td><?= $partes[8] ?></td>
        <td><?= $partes[9] ?></td>
    </tr>

    <?php } ?>
</table>
