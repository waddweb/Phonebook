<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

/* Route::resource('/', MainController::class); */

Route::get('/search', 'App\Http\Controllers\MainController@search')->name('search');
Route::get('/', 'App\Http\Controllers\MainController@index')->name('home');

/* Route::get('/', 'App\Http\Controllers\MainController@index'); */

/* Route::get('/', MainController::class, 'index')->name('home'); */

