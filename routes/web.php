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
    return view('welcome');
});

Route::resource('exercises', 'ExerciseController');

Route::resource('routines', 'RoutineController');

Route::resource('userFriends', 'UserFriendController');

Route::resource('userRequests', 'UserRequestController');

Route::resource('exerciseUsers', 'ExerciseUserController');

Route::resource('routineUsers', 'RoutineUserController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('routineUsers', 'RoutineUserController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('verifyUsers', 'VerifyUserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
