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

?>