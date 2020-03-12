<?php

namespace App\Providers;

use Crystal\App\Provider;
use Crystal\App\AppEventListener as Event;

class Events extends Provider{
	public function boot(){
		// use AppEventListener class to set some application events

		Event::on_error_404(function(){
			return httpcode(404);
		});
	}
}
