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

Route::get('/', function () {
    return view('pages.front.front');
});


// Route group for front page
Route::group(['prefix' => 'front', 'as' => 'front.', 'namespace' => 'Front'], function(){

    Route::get('getTribes', 'FrontController@getTribes')->name('getTribes');
});




// Route group for login page
Route::group(['prefix' => 'auth', 'as' => 'auth.', 'namespace' => 'Auth'], function () {

    //Users auth control
    Route::get('registrationForm', 'RegisterController@registrationForm')->name('registrationForm');
    Route::post('register', 'RegisterController@register')->name('register');


    //Login control
    Route::get('loginForm', 'LoginController@loginForm')->name('loginForm');
    Route::get('logout', 'LoginController@logout')->name('logout');
    Route::post('login', 'LoginController@login')->name('login');

    // Route::get('users/{user}', 'UserController@show')->name('users.show');
    // Route::get('users/{user}/edit', 'UserController@edit')->name('users.edit');
    // Route::put('users/{user}', 'UserController@update')->name('users.update');
    // Route::delete('users/{user}', 'UserController@destroy')->name('users.destroy');
    // Route::get('permissions', 'PermissionController@index')->name('permissions');
    // Route::get('permissions/{user}/repeat', 'PermissionController@repeat')->name('permissions.repeat');
});



Route::group(['middleware' => 'logincheck', 'prefix' => 'tribe', 'as' => 'tribe.', 'namespace' => 'Tribe'], function(){

    Route::get('createForm', 'TribeController@createTribeForm')->name('createForm');
    Route::get('mainPage', 'TribeController@mainPage')->name('mainPage');

    Route::post('createTribe', 'TribeController@createTribe')->name('createTribe');
});