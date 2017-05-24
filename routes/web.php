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

Route::get('/', function () {return view('auth.login');});

Auth::routes();


Route::group(['middleware' => 'auth'], function () {

    Route::group(['middleware' => 'checkRole'], function (){

        Route::get('/home', 'HomeController@index')->name('home');

    });

    /***********************************USERS = EMPLOYEES ROUTES**********************************/

    Route::get('/users_list', 'UsersController@index')->name('users');
    Route::get('/user_add', 'UsersController@create')->name('addUser');
    Route::post('/user_store', 'UsersController@store')->name('storeUser');

    /************************************PRODUCTS ROUTES*********************************************/
});
