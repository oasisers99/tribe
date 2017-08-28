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

Route::get('/', 'Front\FrontController@main');


// Route group for front page
Route::group(['prefix' => 'front', 'as' => 'front.', 'namespace' => 'Front'], function(){

    Route::get('getFrontTribes', 'FrontController@getFrontTribes')->name('getFrontTribes');

    Route::get('moreTribeSearch', 'FrontController@moreTribeSearchForm')->name('moreTribeSearch');
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

Route::group(['prefix' => 'tribe', 'as' => 'tribe.', 'namespace' => 'Tribe'], function(){
    Route::get('main', 'TribeController@mainPage')->name('main');
    Route::get('getTribePostings', 'TribeController@getTribePostings')->name('getTribePostings');
    Route::get('searchTribeFull', 'TribeController@searchTribeFull')->name('searchTribeFull');

    /**
     * Tribe functions that require login check.
     */
    Route::middleware(['logincheck'])->group(function () {
        Route::get('createForm', 'TribeController@createTribeForm')->name('createForm');
        Route::get('createPostingForm', 'TribeController@createPostingForm')->name('createPostingForm');
        Route::get('createProjectForm', 'TribeController@createProjectForm')->name('createProjectForm');
        Route::get('setting-main', 'TribeController@settingMain')->name('setting-main');
        Route::get('setting-profile', 'TribeController@settingMain')->name('setting-profile');


        Route::post('createPosting', 'TribeController@createPosting')->name('createPosting');
        Route::post('updatePosting', 'TribeController@updatePosting')->name('updatePosting');
        Route::post('createTribe', 'TribeController@createTribe')->name('createTribe');
        Route::post('createProject', 'TribeController@createProject')->name('createProject');


        /**
         * Tribe setting functions (still need login check)
         */
        Route::group(['prefix' => 'setting', 'as' => 'setting.'], function(){
            Route::get('main', 'TribeSetController@settingMain')->name('main');
            Route::get('profile-edit-form', 'TribeSetController@profileEditForm')->name('profile-edit-form');
        }); 

    }); 

});



// Route::group(['middleware' => 'logincheck', 'prefix' => 'tribe', 'as' => 'tribe.', 'namespace' => 'Tribe'], function(){
//     Route::get('createForm', 'TribeController@createTribeForm')->name('createForm');
//     Route::get('createPostingForm', 'TribeController@createPostingForm')->name('createPostingForm');
//     Route::get('createProjectForm', 'TribeController@createProjectForm')->name('createProjectForm');
//     Route::get('setting-main', 'TribeController@settingMain')->name('setting-main');
//     Route::get('setting-profile', 'TribeController@settingMain')->name('setting-profile');


//     Route::post('createPosting', 'TribeController@createPosting')->name('createPosting');
//     Route::post('updatePosting', 'TribeController@updatePosting')->name('updatePosting');
//     Route::post('createTribe', 'TribeController@createTribe')->name('createTribe');
//     Route::post('createProject', 'TribeController@createProject')->name('createProject');
// });

// Route::group(['middleware' => 'logincheck', 'prefix' => 'tribe-setting', 'as' => 'tribe-setting.', 'namespace' => 'Tribe'], function(){

//     Route::get('main', 'TribeSetController@settingMain')->name('main');

// });
