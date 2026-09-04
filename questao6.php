<?php
    $n1 = (int) readline("Digite o primeiro número: ");
    $n2 = (int) readline("Digite o segundo número: ");

    echo "Escolha a operação desejada: \n";
    echo "1 - Adição\n";    
    echo "2 - Subtração\n";
    echo "3 - Multiplicação\n";
    echo "4 - Divisão\n";

    switch ($operacao = (int) readline("Digite o número da operação desejada: ")) {
        case 1:
            $resultado = $n1 + $n2;
            echo "O resultado da adição é: " . $resultado;
            break;
        case 2:
            $resultado = $n1 - $n2;
            echo "O resultado da subtração é: " . $resultado;
            break;
        case 3:
            $resultado = $n1 * $n2;
            echo "O resultado da multiplicação é: " . $resultado;
            break;
        case 4:
            if ($n2 != 0) {
                $resultado = $n1 / $n2;
                echo "O resultado da divisão é: " . $resultado;
            } else {
                echo "Erro: Divisão por zero não é permitida.";
            }
            break;
        default:
            echo "Operação inválida.";
    }
