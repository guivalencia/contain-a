<?php
function verificarLetraA($string) {
    // Converte a string para minúsculas
    $string_lower = strtolower($string);
    // Conta quantas vezes a letra 'a' aparece na string
    $count = substr_count($string_lower, 'a');
    
    if ($count > 0) {
        return "A letra 'a' aparece $count vez(es) na string.";
    } else {
        return "A letra 'a' não aparece na string.";
    }
}

// String a ser verificada
$texto = "arara"; // Você pode alterar esse valor

// Verificando a existência e a quantidade de 'a'
echo verificarLetraA($texto);
?>
