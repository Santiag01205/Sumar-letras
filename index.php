<?php
<?php
function contador_vocales($texto) {
    $vocales = ['a', 'e', 'i', 'o', 'u'];
    $contador = 0;
    $texto = mb_strtolower($texto, 'UTF-8');
    for ($i = 0; $i < mb_strlen($texto, 'UTF-8'); $i++) {
        if (in_array($texto[$i], $vocales)) {
            $contador++;
        }
    }
    return $contador;
}

// Ejemplo de uso:
echo contador_vocales("Hola Mundo"); //