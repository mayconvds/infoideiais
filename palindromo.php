<?php

function palindromo($str): bool
{
    $ps = explode(" ", strtolower($str));
    $n = "";
    foreach($ps as $ns){
        $n .= $ns;
    }
    return $n == strrev($n);
}

$palavras = [
    "aabaa",
    "a",
    "abac"
];

echo "<pre>";
foreach ($palavras as $p) {
    var_dump(palindromo($p));
}
echo "</pre>";
