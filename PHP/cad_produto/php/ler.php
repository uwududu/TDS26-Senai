<?php
$linhas = file("produtos.txt", FILE_IGNORE_NEW_LINES);
$soma_geral = 0; 
?>
    <table border="1">
        <tr>
            <th>Data e Hora</th>
            <th>Código do Produto</th>
            <th>Descrição do Produto</th>
            <th>Valor</th>
            <th>Quantidade</th>
            <th>Valor Total</th>
        </tr>

        <?php foreach($linhas as $linha) {
        $partes = explode(" | ", $linha);

        $valor_unitario = (float) str_replace(['R$', ','], ['', '.'], $partes[3]);
        $quantidade     = (int) $partes[4];
        $valor_total    = (float) str_replace(['R$', ','], ['', '.'], $partes[5]);
        $soma = $valor_unitario * $quantidade;
        $soma_geral += $soma;

        ?>
        <tr>
            <td><?= $partes[0] ?></td>
            <td><?= $partes[1] ?></td>
            <td><?= $partes[2] ?></td>
            <td><?= $partes[3] ?></td>
            <td><?= $partes[4] ?></td>
            <td>R$<?= number_format($soma, 2) ?></td>
        </tr>
        <?php } ?>
        <tr>
            <td colspan="5"></td>
            <td><strong>Valor geral: R$<?= number_format($soma_geral) ?></strong></td>
        </tr>
    </table>
