<?php namespace App\Larabsent\Facades;

use Illuminate\Support\Facades\Facade;

class LarabsentFacade extends Facade
{
	public static function getFacadeAccessor()
	{
		return 'larabsent-service-provider';
	}
}