<?php

use GuzzleHttp\Psr7\Request;
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

Route::get('/', 'HomeController@index');
Route::get('/users', 'HomeController@users');
Route::get('/todo/{id}', 'HomeController@todo');
Route::get('/delete/{id}', 'HomeController@delete');
Route::get('/add', 'HomeController@add');
Route::post('/insert', function (Request $Request) {
    dd($Request);
});
