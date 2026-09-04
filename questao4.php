<?php
    $valor_compras = (float) readline("Digite o valor total das compras: ");
    $frete = (float) readline("Digite a distancia em km do frete: ");
    $frete_valor = $frete * 2;
    $valor_total = $valor_compras + $frete_valor;
    echo "O valor total a ser pago é: R$ " . $valor_total;