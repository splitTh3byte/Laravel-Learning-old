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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'PublicController@showUsers');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home','AdminController@getAllUsers');

Route::get('public','PublicController@showUsers');
Route::get('/', 'PublicController@showUsers');
//Route::post('/add', 'UserAddController@newUser');

Route::post('/insert','AdminController@newUser');

Route::post('/edit/{id}','AdminController@edit');
Route::post('/delete/{id}','AdminController@delete');

//
//Route::get('/query',function (){
//    $loggedIn=Auth::user();
//    print_r($loggedIn);
//});