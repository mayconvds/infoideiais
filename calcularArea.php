<?php


function calcularArea(int $n): int
{
    $valorOriginal = $n * $n;
    $novoNumero = $n - 1;
    $novoNumero = $novoNumero * $novoNumero;
    $valorOriginal += $novoNumero;
    return $valorOriginal;
}

echo "<pre>";
var_dump(calcularArea(2));
var_dump(calcularArea(3));
var_dump(calcularArea(4));
echo "</pre>";
