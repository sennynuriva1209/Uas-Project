<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/rental','RentalController@create')->name('rental.create');
//Route::post('/rental','RentalController@store')->name('rental.store');

Route::get('/mobil','MobilController@create')->name('mobil.create');
Route::post('/mobil','MobilController@store')->name('mobil.store');

Route::get('/sewa','SewaController@create')->name('sewa.create');
Route::post('/sewa','SewaController@store')->name('sewa.store');

Route::post('/customer','CustomerController@store')->name('customer.store');

Route::get('/', function () {
    return view('welcome');
});
Route::get('/input-rental', function () {
    return view('input-rental');

});
Route::get('/input-customer', function () {
    return view('input-customer');

});
Route::get('/input-mobil', function () {
    return view('input-mobil');

});
Route::get('/input-sewa', function () {
    return view('input-sewa');

});
Route::group(['middleware'=>'auth'],function () {
	Route:: resource('rental','RentalController');
});

Route::group(['middleware'=>'auth'],function () {
	Route:: resource('customer','CustomerController');
});

Route::group(['middleware'=>'auth'],function () {
	Route:: resource('mobil','MobilController');
});

Route::group(['middleware'=>'auth'],function () {
	Route:: resource('sewa','SewaController');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/rental', 'RentalController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
