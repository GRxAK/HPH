<?php

function autoload ($dir, $exludFiles = []) {

    $files = scandir($dir);
    $exludFiles = array_merge(['.','..'], $exludFiles);

    foreach ($files as $file) {
        if (!in_array($file, $exludFiles)) {
            if(is_dir($dir.DIRECTORY_SEPARATOR.$file)) {
                autoload($dir.DIRECTORY_SEPARATOR.$file, $exludFiles);
            }

            // php
            if (mime_content_type($dir.DIRECTORY_SEPARATOR.$file) == 'text/x-php' ) {
                require_once ($dir.DIRECTORY_SEPARATOR.$file);
            }
        }
    }
}

?>