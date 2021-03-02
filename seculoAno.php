<?php


function seculoAno($ano): int
{
    if (!is_int($ano)) {
        throw new Exception("Apenas números são permitidos");
    }
    $ano /= 100;
    return ceil($ano);
}

echo "<pre>";
var_dump(seculoAno(1905));
var_dump(seculoAno(1700));
echo "</pre>";

