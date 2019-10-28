<?php

function openImg ($arr, $key) {
    $i = 0;
    while ($i <= count($arr)) {
        if ($arr[$i]['name_alt'] == $arr[$key]['name_alt']) {
            if (!strpos($arr[$i]['name_file'], 'small')) {
                echo ($arr[$i]['sources'].$arr[$i]['name_file']);
            }
        }
        $i++;
    }
}

// Математические операции
function add($a, $b) {
    return $a + $b;
}
function mult($a, $b) {
    return $a * $b;
}
function divi($a, $b) {
    return ($b == 0) ? ('На ноль делить нельзя.') : ($a / $b);
}
function sub($a, $b) {
    return $a - $b;
}
function calculet($a, $b, $operation) {
    switch ($operation) {
        case '+':
            return add($a, $b);
        case '*':
            return mult($a, $b);
        case '/':
            return divi($a, $b);
        case '-';
            return sub($a, $b);
    }
}

// закрытие картинки

function closeGoods ($x) {
    if ($x) {
        unset($_GET['goodCard']);
        $x = false;
    }
}

closeGoods ($_GET['goodClose']);

?>