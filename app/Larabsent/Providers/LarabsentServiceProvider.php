<?php namespace App\Larabsent\Providers;

use Illuminate\Support\ServiceProvider;
use App\Larabsent\Source\Larabsent;

class LarabsentServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->app->bind('larabsent-service-provider' , function(){
			return new Larabsent;
		});
	}
}