<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Spalva;

Route::group(['prefix' => LaravelLocalization::setLocale(),
			  'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	Route::get('', 'PradziaController@index');
	//Route::get('pradzia', 'PradziaController@index');
	Route::get('automobilis/{id}', 'AutomobilisController@index');
	Route::get('automobiliai/{puslapis}', 'AutomobiliaiController@index');
	Route::get('automobiliai/marke/{pavadinimas}', 'AutomobiliaiController@marke');
	
	Route::get('kontaktai',function(){
		return View::make('kontaktai');
	});
});