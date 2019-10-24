<?php

$db = mysqli_connect('localhost:3306', 'root', 'root', 'hph_lesson') or die ('No conection to database');

$query = 'SELECT images.id, images_name_alt.name_alt, images_name_alt.description , images_sources.sources, images.name_file, images_size.width, images_size.height FROM hph_lesson.images
                INNER JOIN images_name_alt ON images.name_alt = images_name_alt.id_name_alt
                INNER JOIN images_sources ON images.sources = images_sources.id_source
                INNER JOIN images_size ON images.size = images_size.id_size';
$result = mysqli_query($db, $query);
$img = [];
while ($row = mysqli_fetch_assoc($result)) {
    $img[] = $row;
}

// recall
if (isset($_POST['recall'])) {
    $addMassage = "INSERT INTO `hph_lesson`.`recall` (`message`) VALUES ('{$_POST['recall']}');";
    $sql = mysqli_query($db, $addMassage);
    if ($sql) {
        echo '<p>Данные успешно добавлены в таблицу.</p>';
    } else {
        echo '<p>Произошла ошибка: ' . mysqli_error($db2) . '</p>';
    }
}

mysqli_close($db);

?>