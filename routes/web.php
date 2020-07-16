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
    return view('welcome');
});


Route::get('bok', function()
{
    return '<h1>BOK</H1>';
});

Route::get('chickens', function()
{
    return 'Chickens!';
});

Route::get('user/{id}', 'UserController@show');
Route::get('users', 'UserController@listAll');
Route::get('chicken-fee', 'ChickenController@fee');

Route::prefix('chicken')->group(function() {
	Route::get('fee', 'ChickenController@fee');
	Route::get('{id}', 'ChickenController@show');
});

Route::prefix('bok')->group(function() {
	Route::get('bok', 'ChickenController@bok')->middleware('ba.GAWK');
});

Route::redirect('hen', 'chickens');