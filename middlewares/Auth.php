<?php

namespace Middlewares;

use Crystal\Http\Middleware;
use Crystal\Http\Request;

class Auth extends Middleware
{
	public function handle(Request $r){

		if( ! auth()->user()){
			return redirect(url('/login'));
		}

		return false; // don't delete this line
	}
}
