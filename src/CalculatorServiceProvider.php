<?php

namespace Ekosijabat\Oncomcalc;

use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
	/**
	* Bootstrap the application services.
	*
	* @return void
	*/

	public function boot()
	{
		include __DIR__ . '/routes.php';
	}

	/**
	* Register the application services.
	*
	* @return void
	*/
	public function register()
	{
		$this->app->make('Ekosijabat\Oncomcalc\CalculatorController');
		$this->loadViewsFrom(__DIR__.'/views', 'calculator');
	}
}
