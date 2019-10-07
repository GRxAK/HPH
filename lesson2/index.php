<?php
function lesson_1 ($a, $b) {
    if (($a >= 0) && ($b >= 0)) {
        echo $a - $b; 
    } elseif (($a < 0) && ($b < 0)) {
        echo $a * $b;
    } else { echo $a + $b; }
}

function lesson_2 ($a) {
    switch ($a) {
        case 1:
            echo '1 ';
        case 2:
            echo '2 ';
        case 3:
            echo '3 ';
        case 4:
            echo '4 ';
        case 5:
            echo '5 ';
        case 6:
            echo '6 ';
        case 7:
            echo '7 ';
        case 8:
            echo '8 ';
        case 9:
            echo '9 ';
        case 10:
            echo '10 ';
        case 11:
            echo '11 ';
        case 12:
            echo '12 ';
        case 13:
            echo '13 ';
        case 14:
            echo '14 ';
        case 15:
            echo '15 ';
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
    return ($a == 0) ? ('На ноль делить нельзя.') : ($a / $b);
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

// Возведение в степень
function expon($val, $pow) {
    return ($pow !== 0) ? ($val * expon($val, $pow - 1)) : (1);
}

// Вывод времени
function currentTime () {
    $g = date('G');
    $i = date('i');
    $s = date('s');
    
    function endText($x, $text, $end1, $end2, $end3) {
        $y = $x % 10;
        if (($x > 4) && ($x < 21)) {
            return $x.' '.$text.$end3.' ';
        } elseif ($y == 1) {
            return $x.' '.$text.$end1.' ';
        } elseif (($y > 4) || ($y == 0)) {
            return $x.' '.$text.$end3.' ';
        } elseif ((($y > 1) && ($y < 5))) {
            return $x.' '.$text.$end2.' ';
        }
    }

    return endText($g,'час','','a','ов').endText($i,'минут','а','ы','').endText($s,'секунд','а','ы','');
}

// Test
echo currentTime();
// lesson_1(55, -2);
// echo '<br>';

// echo divi(0, 3);
// echo '<br>';

// lesson_2(7);
// echo '<br>';

// echo calculet(11, 4, '-');
// echo '<br>';

// echo expon(3, 3);
?>
