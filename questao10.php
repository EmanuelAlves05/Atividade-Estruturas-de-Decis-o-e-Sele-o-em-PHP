<?php
    echo "1 - Carro\n";
    echo "2 - Moto\n";
    echo "3 - Bicicleta\n";
    echo "4 - Ônibus\n";

    $veiculo = (int) readline("Escolha um veiculo ");
    
    switch ($veiculo) {
        case 1:
            echo "Você escolheu Carro.";
            break;
        case 2:
            echo "Você escolheu Moto.";
            break;
        case 3:
            echo "Você escolheu Bicicleta.";
            break;
        case 4:
            echo "Você escolheu Ônibus.";
            break;
        default:
            echo "Opção inválida. Escolha um número entre 1 e 4.";
    }