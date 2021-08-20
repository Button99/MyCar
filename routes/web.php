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

Route::get('/allCars', function () {
    return view('allCars');
});


Route::get('/recentlyAdded', function () {
    return view('recentlyAdded');
});

Route::get('/mostViewed', function () {
    return view('mostViewed');
});

Route::get('/addNewCar', function () {
    return view('addNewCar');
});

Route::get('/faq', function() {
    return view('faq');
});

Route::get('/options', function() {
    return view('options');
});

Route::get('/myProfile', function() {
    return view('myProfile');
});

Route::resource('cars', 'App\Http\Controllers\VehicleController');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
