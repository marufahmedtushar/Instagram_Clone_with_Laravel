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

Auth::routes();

Route::get('/', 'IndexController@index');


Route::group(['middleware' => ['auth','user']],function() {
Route::get('/profile', 'IndexController@profile');
Route::get('/editprofile', 'IndexController@profileedit');
Route::put('/profilepicupdate/{id}', 'IndexController@profilepicupdate');
Route::put('/profileupdate/{id}', 'IndexController@profileinfosave');
Route::put('/postscreate','IndexController@postcreate');
Route::get('/userprofile/{id}','IndexController@userprofile');
Route::put('/react/{id}','IndexController@react');
});
