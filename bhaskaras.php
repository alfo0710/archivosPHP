<?php

function resolverBhaskara($a, $b, $c) {
    $solucion = ($b * $b) - (4 * $a * $c);

    if ($solucion < 0) {
        return "No hay soluciones reales.";
    }

    $raiz =($raices);
    $raiz1 = (-$b + $raiz) / (2 * $a);
    $raiz2 = (-$b - $raiz) / (2 * $a);

    return "Soluciones: Raiz 1 = $raiz1, Raiz 2 = $raiz2";
}

// Ejemplo de uso:
$a = 1;
$b = -3;
$c = 2;

echo resolverBhaskara($a,$b,$c);