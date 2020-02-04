<?php

define('CRYSTAL_START_TIME' , microtime());

require_once APP_PATH . '/vendor/autoload.php';

if(\Crystal\Http\Response::handle_file_request()){
	return FALSE;
}

$app = new \Crystal\Http\Kernel;
return $app->handle();
