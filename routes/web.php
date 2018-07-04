<?php

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


Route::get('/', 'IraisController@index');
Route::get('/', function () {
    return view('irais.index');
});

 Route::resource('users', 'UsersController');
 Route::resource('irais', 'IraisController');

// Route::group(['middleware' => ['auth']], function () {
   
// });



