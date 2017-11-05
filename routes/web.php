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
use App\Http\Controllers\Auth\LoginController;

Route::group(['prefix' => LaravelLocalization::setLocale(),
	'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]], function()
	{
		/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
		Route::get('', 'PradziaController@index');
	//Route::get('pradzia', 'PradziaController@index');
		Route::get('automobilis/{id}', 'AutomobilisController@index');
		Route::get('automobiliai/marke/{pavadinimas}', 'AutomobiliaiController@marke');
		Route::get('automobiliai/modelis/{pavadinimas}', 'AutomobiliaiController@modelis');
		Route::get('automobiliai/kaina/{kaina}', 'AutomobiliaiController@kaina');
		Route::get('automobiliai/standartas/{standartas}', 'AutomobiliaiController@standartas');
		Route::get('automobiliai/metai/{metai}', 'AutomobiliaiController@metai');
		Route::get('automobiliai/rusiuoti/{rusiuoti}', 'AutomobiliaiController@rusiuoti');
		Route::get('greitai/rusiuoti/{rusiuoti}', 'AutomobiliaiController@rusiuotiGreitai');
		Route::get('automobiliai/{puslapis}', 'AutomobiliaiController@index');
		Route::get('greitai/{puslapis}', 'AutomobiliaiController@greitai');
		Route::get('kontaktai', 'KontaktaiController@index');
	});


Route::get('logout', 'PradziaController@logout');
Route::get('login', 'PradziaController@login');
Route::post('authenticate', 'PradziaController@doLogin');

Route::group( ['middleware' => 'auth' ], function(){
	Route::get('admin', 'AdminController@index');
	Route::get('admin/parduota/{id}', 'AdminController@destroy');
	Route::get('admin/lietuvoj/{id}', 'AdminController@grizoILietuva');
	Route::get('create', 'AutomobilisController@create');
	Route::post('store', 'AutomobilisController@store');
	Route::post('marke', 'AutomobilisController@issaugotiMarke');
});