<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Park;

Route::get('search', function ()
{
	$query = Request::get('q');
	
	$parks = $query
		? Park::search($query)->get()
		: Park::all();
	return view('parks.index', compact('parks'));
});

Route::get('/', 'ViewController@welcome');

Route::get('golf', 'ViewController@golf_index');

Route::get('parks', 'ParksController@index');

Route::get('parks/{park}', 'ParksController@show');

Route::get('amenities', 'AmenitiesController@index');

Route::get('amenities/{amenity}', 'AmenitiesController@show');