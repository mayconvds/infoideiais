<?php

function sequenciaCrescente(array $a): bool
{
    $s = 0;

    $c = count($a);
    if ($a[0] <= $a[1]){
        for ($i = 0; $i < $c; $i++) {

            if (!empty($a[$i + 1])) {
                if ($a[$i] > $a[$i + 1]) {
                    $s = $i + 1;
                    continue;
                }
            }
        }
    }
    unset($a[$s]);
    $nA = [];
    foreach ($a as $item) {
        array_push($nA, $item);
    }
    $newArray = count($nA);
    for ($i = 0; $i < $newArray; $i++) {
        if (!empty($nA[$i + 1])) {
            if (@$nA[$i] > $nA[$i + 1] || @$nA[$i] == $nA[$i + 1]) {
                return false;
            }
        }
    }
    return true;
}

echo "<pre>";
var_dump(sequenciaCrescente([1, 3, 2, 1]));
var_dump(sequenciaCrescente([1, 3, 2]));
var_dump(sequenciaCrescente([1, 2, 1, 2]));
var_dump(sequenciaCrescente([3, 6, 5, 8, 10, 20, 15]));
var_dump(sequenciaCrescente([1, 1, 2, 3, 4, 4]));
var_dump(sequenciaCrescente([1, 4, 10, 4, 2]));
var_dump(sequenciaCrescente([10, 1, 2, 3, 4, 5]));
var_dump(sequenciaCrescente([1, 1, 1, 2, 3]));
var_dump(sequenciaCrescente([0, -2, 5, 6]));
var_dump(sequenciaCrescente([1, 2, 3, 4, 5, 3, 5, 6]));
var_dump(sequenciaCrescente([40, 50, 60, 10, 20, 30]));
var_dump(sequenciaCrescente([1, 1]));
var_dump(sequenciaCrescente([1, 2, 5, 3, 5]));
var_dump(sequenciaCrescente([1, 2, 5, 5, 5]));
var_dump(sequenciaCrescente([10, 1, 2, 3, 4, 5, 6, 1]));
var_dump(sequenciaCrescente([1, 2, 3, 4, 3, 6]));
var_dump(sequenciaCrescente([1, 2, 3, 4, 99, 5, 6]));
var_dump(sequenciaCrescente([123, -17, -5, 1, 2, 3, 12, 43, 45]));
var_dump(sequenciaCrescente([3, 5, 67, 98, 3]));
echo "</pre>";
