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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/teams/{id}', 'TeamsController@show')->name('singleTeam');
Route::get('/teams', 'TeamsController@index')->name('allTeams');

Route::get('/players/{id}' , 'PlayersController@show')->name('singlePlayer');
Route::get('/', 'TeamsController@index');

Route::get('/register' , 'RegistersController@create')->name('register');

