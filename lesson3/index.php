<?php 
// 1 part
function lesson_1 ($from, $before, $divider) {
    if ($divider == 0) { echo 'Нельзя делить на ноль'; }
    while ($from <= $before) {
        echo (($from % $divider) === 0) ? "$from " : "" ; 
        $from++;
    }
}
// 2 part
function lesson_2 () {
    $from = 0;
    $before = 10;
    do {
        if ($from == 0) {
            echo $from++.' - ноль. <br>';
        } elseif (($from % 2) == 0) {
            echo $from++.' - четное число. <br>';
        } else { echo $from++.' - нечетное число. <br>'; }
    } while ($from <= $before);
}
// 3 part
function lesson_3 () {
    $russia = [
        'Архангельская область' => ['Архангельск', 'Северодвенск', 'Холмогоры', 'Березник'],
        'Воронежская область' => ['Воронеж','Бобров','Анна','Эртиль'],
        'Самарская область' => ['Самара','Тольяти','Нефтегорск','Чепаевск'],
        'Ярославская область' => ['Ярославль','Большое Село','Рыбинск','Кострома']
    ];
    return $russia;
}
// 4 part
function lesson_4 ($string) {
    $alphabet = [
        'а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'ye', 'ж'=>'j', 'з'=>'z', 'и'=>'i', 'й'=>'iy',
        'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'h',
        'ч'=>'ch', 'ц'=>'c', 'ш'=>'sh', 'щ'=>'she', 'э'=>'e', 'ю'=>'yu', 'я'=>'ya', 'ь'=>"'", 'ъ'=>'', 'А'=>'A', 'Б'=>'B', 'В'=>'V', 'Г'=>'G', 'Д'=>'D', 'Е'=>'E', 'Ё'=>'Ye', 'Ж'=>'J', 'З'=>'Z', 'И'=>'I', 'Й'=>'Iy',
        'К'=>'K', 'Л'=>'L', 'М'=>'M', 'Н'=>'N', 'О'=>'O', 'П'=>'P', 'Р'=>'R', 'С'=>'S', 'Т'=>'T', 'У'=>'U', 'Ф'=>'F', 'Х'=>'H',
        'Ч'=>'Ch', 'Ц'=>'C', 'Ш'=>'Sh', 'Щ'=>'She', 'Э'=>'E', 'Ю'=>'Yu', 'Я'=>'Ya', 'Ь'=>"'", 'Ъ'=>''
    ];
    foreach($alphabet as $key => $value) {
        $string = str_replace($key, $value, $string);
    }
    return $string;
}
// 5 part
function lesson_5 ($string) {
    return $string = str_replace(' ', '_', $string);
}
// 6 part Генерирует список меню из массива с городами
function lesson_6 () {
    $html = '';
    foreach(lesson_3() as $key => $value) {
        $html2 = '';
        foreach($value as $city) { $html2 = $html2.'<li>'.$city.'</li>'; };
        $html = $html.'<li>'.$key.'<ul>'.$html2.'</ul></li>';
    }
    return $html;
}
// 7 part
function lesson_7 () {
    for ($i = 0; $i < 10; print_r($i++))  {}
}
// 8 part
function lesson_8 ($search) {
    $result = '';
    foreach(lesson_3() as $value) {
        foreach($value as $value2) {
            if (mb_substr($value2, 0, 1,"UTF-8") == $search) {
                $result = $result.$value2.' ';
            }
        }
    }
    return $result;
}
// 9 part
function lesson_9 ($search) {
    return lesson_4(lesson_5(lesson_8($search)));
}

// TEST
// lesson_1(1, 20, 3);
// echo '<br>';
// lesson_2();
// echo '<br>';
// echo lesson_3();
// echo '<br>';
// echo lesson_4(' Артемий Шмедов ');
// echo lesson_7();
// echo lesson_8('А');
//  echo lesson_9('А');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>lesson 3</title>
    <style>
        li {
            padding: 6px;
        }
        ul ul {
            display: none;
        }
        ul li:hover > ul {
            display: block;
        }
    </style>
</head>
<body>
    <hr>
    <ul>
        <?=lesson_6()?>
    </ul>
</body>
</html>