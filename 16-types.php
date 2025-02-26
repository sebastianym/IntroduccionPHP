<?php

declare(strict_types=1);
include 'includes/header.php';

// funciones con retorno de valor en PHP
function usuarioAutenticado(bool $autenticado): ?string
{
    if ($autenticado) {
        return "El Usuario esta autenticado";
    } else {
        return null;
    }
}

$usuario = usuarioAutenticado(false);
echo $usuario;

include 'includes/footer.php';
