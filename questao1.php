<?php
    $taxa_fixa=5;
    $distancia = (float) readline("Digite a distância percorrida em km: ");
    $valor_total = $taxa_fixa + ($distancia * 2);
    echo "O valor total a ser pago é: R$ " . $valor_total;
?>
