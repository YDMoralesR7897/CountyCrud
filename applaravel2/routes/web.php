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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::delete('paises/{pais}', 'PaisController@destroy')->name('paises.destroy');
Route::post('paises', 'PaisController@store')->name('paises.store');
Route::get('//paises', 'PaisController@Index');
Route::get('/', 'UserController@Index');
Route::post('users', 'UserController@store')->name('users.store');
Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
