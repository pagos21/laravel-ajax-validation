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

Auth::routes();

Route::get('/', 'GuestCtrl@index')->name('index');
Route::get('/pizza_show/{id}', 'GuestCtrl@show')->name('pizza-show');

Route::get('/pizza/edit/{id}', 'RestrictedL1Ctrl@edit')->name('pizza-edit');
Route::post('/pizza/update/{id}', 'RestrictedL1Ctrl@update')->name('pizza-update');
Route::get('/pizza/del/{id}', 'RestrictedL1Ctrl@del')->name('pizza-del');
Route::get('/pizza/new', 'RestrictedL1Ctrl@newPizza')->name('pizza-new');


// per l'API
Route::get('/api/pizze/all', 'PizzaApiCtrl@pizzaApi')->name('pizza-api-all');
Route::get('/api/pizze/mostExp', 'PizzaApiCtrl@most')->name('pizza-api-most');
