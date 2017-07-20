<?php

namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar as Route;

class Advertisements
{
	
	public function map(Route $route)
	{
		$route->group(['middleware' => 'auth:api'], function( Route $route ){

			$route->resource('advertisements', 'AdvertisementsController');
			$route->post('advertisements/{uuid}/toggle-published', 'AdvertisementsController@toogle-published');
			
		});
	}

}