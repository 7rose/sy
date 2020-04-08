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

Route::get('/', 'HomeController@index');
Route::get('/news', 'HomeController@news');

Route::get('/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');
Route::post('/check', 'UserController@check');


Route::group(['middleware' => ['state_check']], function () {

    Route::get('/products', 'ProductController@index');
    Route::get('/me', 'UserController@me');

});


Route::get('/test', function () {
    // session('big', "fuck");
    // Session::put('big', 'fuck');
    echo session('big');
});

