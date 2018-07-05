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
=======
Route::get('/error', 'IraisController@index');

Route::get('/edit', function () {
    return view('irais.edit');
});

           






>>>>>>> 59b7cf5d9a80bd9ecdf76b285a8687bb9a5819b8


 Route::resource('users', 'UsersController');
 Route::resource('irais', 'IraisController');
 
 
 
 

// Route::group(['middleware' => ['auth']], function () {
   
// });



