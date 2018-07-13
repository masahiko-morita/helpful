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

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');


Route::get('/', 'WelcomeController@index');
Route::get('thankyou/{id}', 'IraisController@thankyou')->name('irais.thankyou');
Route::get('/hatsu', function () {
    return view('hatsu');
});

Route::group(['middleware' => ['auth']], function () {
    Route::resource('chats', 'ChatsController');
    Route::resource('comments', 'CommentsController');
    Route::resource('users', 'UsersController'); 
    Route::resource('irais','IraisController');
            Route::get('iraisearch', 'SearchController@iraisearch')->name('irais.search');

});

Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('finish', 'IraiFinishController@store')->name('irai.finish');
        Route::delete('unfinish', 'IraiFinishController@destroy')->name('irai.unfinish');
        Route::get('finishings', 'UsersController@finishings')->name('users.finishings');
        Route::post('help', 'IraiHelpController@store')->name('irai.help');
        Route::delete('unhelp', 'IraiHelpController@destroy')->name('irai.unhelp');
        Route::get('helpings', 'UsersController@helpings')->name('users.helpings');
        Route::get('helpees', 'UsersController@helpees')->name('users.helpees');
});

