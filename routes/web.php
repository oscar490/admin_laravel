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

Route::group(['prefix' => 'admin'], function () {
    
    Route::get('users', 'UserController@listado')
        ->name('users.index');

    Route::get('users/create', 'UserController@create')
        ->name('users.create');

    Route::post('users/store', 'UserController@store')
        ->name('users.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
