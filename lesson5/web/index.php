<?php

include './engine/autoload.php';
autoload('config');
autoload('engine', ['autoload']);

include ENGINE_DIR.'db.php'; // почему-то из автолоада не видит $img в цикле main.php, но так все работает

include TEMPLATES_DIR.'head.php';
include TEMPLATES_DIR.'goods.php';
include TEMPLATES_DIR.'main.php';
include TEMPLATES_DIR.'footer.php';

?>