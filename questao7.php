<?php
    $compras = (float) readline("Digite o valor total das compras: ");
    if ($compras >= 100) {
        $desconto = $compras * 0.3;
        $valor_total = $compras - $desconto; 
        echo "Você tem direito a um desconto de 30%! Valor com desconto: R$ " . $valor_total;
    } else {
        echo "Você não tem direito a desconto.";
    }