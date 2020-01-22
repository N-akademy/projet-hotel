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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rooms', 'RoomController@showRooms' )->name('rooms');

Route ::group(['middleware'=>['auth']],function(){
    Route::get('/createRoom', 'RoomController@create' )->name('createRoom');
    Route::post('/storeRoom', 'RoomController@store' )->name('storeRoom');
    Route::post('/editRoom/{id}', 'RoomController@edit' )->name('editRoom');
    Route::post('/updateRoom/{id}', 'RoomController@update' )->name('updateRoom');
    Route::post('/deleteRoom/{id}', 'RoomController@delete' )->name('deleteRoom');



});

