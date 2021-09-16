<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
});

Route::get('/allCars', 'App\Http\Controllers\VehicleController@index');

Route::get('/carProfile/{id}', 'App\Http\Controllers\VehicleController@show');

Route::get('/carProfile/{id}/hideCar', 'App\Http\Controllers\VehicleController@hideCar');

Route::get('/carProfile/{id}/showCar', 'App\Http\Controllers\VehicleController@showCar');

Route::get('/carProfile/{id}/deleteCar', 'App\Http\Controllers\VehicleController@destroy');

Route::get('/mostViewed', 'App\Http\Controllers\VehicleController@mostViewedIndex');

Route::get('/addNewCar', function () {
    return view('addNewCar');
});

Route::get('/faq', function() {
    return view('faq');
});

Route::get('/myCars', 'App\Http\Controllers\VehicleController@myCars');



Route::get('/options', function() {
    return view('options');
});

Route::get('/deleteAccount', function() {
    return view('deleteMyAccount');
});

Route::get('/changePass', function () {
    return view('changePass');
});

Route::delete('/deleteAccount/Success', 'App\Http\Controllers\UserSettingsController@accountDestroy');

Route::get('/lastLogin', 'App\Http\Controllers\UserSettingsController@lastLogin');

Route::get('/profile/{id}', 'App\Http\Controllers\HomeController@show');

Route::get('/search/show', 'App\Http\Controllers\SearchController@show');
Route::get('/search', 'App\Http\Controllers\SearchController@index');
Route::get('/search/results', 'App\Http\Controllers\SearchController@show');

Route::resource('cars', 'App\Http\Controllers\VehicleController');
Route::resource('userSettings', 'App\Http\Controllers\UserSettingsController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
