<?php
const IMG_DIR = '.\img';

function imgScan (string $dir) {
    $list = scandir($dir);
    if(!$list) { return false; }
    unset($list[0], $list[1]);
    foreach($list as $file) {
        $mineType = mime_content_type($dir.DIRECTORY_SEPARATOR.$file);
        if (strpos($mineType, 'image') === 0) {
            echo '<img src="'.$dir.DIRECTORY_SEPARATOR.$file.'"></img>';
        }
    };
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="conteyner">
        <?php imgScan(IMG_DIR); ?>
    </div>
    <div class="openImg"></div>
</body>
<script src="add.js"></script>
</html>