<?php

$app_path = dirname(__DIR__ , 1);

define('APP_PATH' , $app_path);
define('PUBLIC_PATH', __DIR__);

return require_once APP_PATH . '/init.php';
