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


<<<<<<< HEAD
Route::get('/toukou', function() {
  return view('general.create');
});

Route::get('/error', 'IraisController@index');
=======
Route::get('/', 'IraisController@index');

>>>>>>> db5766a72de62e0b9676c496f99a6d0b5f0b2014


           


 Route::resource('users', 'UsersController');
 Route::resource('irais', 'IraisController');
 
 
 
 

// Route::group(['middleware' => ['auth']], function () {
   
// });



