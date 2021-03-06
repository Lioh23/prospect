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
    return redirect('/');
})->middleware('auth');

Auth::routes();

Route::get('/', 'ProspectController@index')->middleware('auth')->name('home');
Route::get('/novo', 'ProspectController@novo')->middleware('auth')->name('novo');
Route::post('/store', 'ProspectController@store')->middleware('auth')->name('store');
Route::delete('titular/remove/{id}', 'ProspectController@removeTitular')->name('titular.remove');
