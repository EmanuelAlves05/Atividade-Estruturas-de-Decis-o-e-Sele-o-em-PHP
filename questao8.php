<?php
    $usuario = (string) readline("Digite o nome do usuário: ");
    $senha = (int) readline("Digite a senha: ");
    if ($usuario == "admin" && $senha == 1234) {
        echo "Acesso permitido.";
    } else {
        echo "Acesso negado.";
    }