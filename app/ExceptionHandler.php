<?php

namespace App;

use Crystal\Exceptions\BaseException;

class ExceptionHandler{
	public function report(BaseException $ex){
		return $ex->report();
	}

	public function handle(BaseException $ex){
		return $ex->render();
	}
}
