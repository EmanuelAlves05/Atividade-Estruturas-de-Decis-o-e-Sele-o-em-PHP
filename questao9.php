<?php
    $temperatura = (float) readline("Digite a temperatura em Celsius: ");
    if($temperatura < 0){
        echo "muito frio";
    } elseif($temperatura >= 0 && $temperatura <= 20){
        echo "frio";
    } elseif($temperatura > 20 && $temperatura <= 30){
        echo "moderada";
    } else {
        echo "muito quente";
    }