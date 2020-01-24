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

Route::get('/welcome', 'HomeController@index')->name('home');
Route::get('/rooms', 'RoomController@showRooms' )->name('rooms');
Route::get('/clients', 'ClientController@showClients' )->name('clients');
Route::get('/products', 'ProductController@showProducts' )->name('products');
Route::get('/staffs', 'StaffController@showStaffs' )->name('staffs');
Route::get('/users', 'UserController@showUsers' )->name('users');

Route ::group(['middleware'=>['auth']],function(){
    //crud de la chambre
    Route::get('/createRoom', 'RoomController@create' )->name('createRoom');
    Route::post('/storeRoom', 'RoomController@store' )->name('storeRoom');
    Route::post('/editRoom/{id}', 'RoomController@edit' )->name('editRoom');
    Route::post('/updateRoom/{id}', 'RoomController@update' )->name('updateRoom');
    Route::post('/deleteRoom/{id}', 'RoomController@delete' )->name('deleteRoom');

    //crud du client
    Route::get('/createClient', 'ClientController@create' )->name('createClient');
    Route::post('/storeClient', 'ClientController@store' )->name('storeClient');
    Route::post('/editClient/{id}', 'ClientController@edit' )->name('editClient');
    Route::post('/updateClient/{id}', 'ClientController@update' )->name('updateClient');
    Route::post('/deleteClient/{id}', 'ClientController@delete' )->name('deleteClient');

    //crud des produits
    Route::get('/createProduct', 'ProductController@create' )->name('createProduct');
    Route::post('/storeProduct', 'ProductController@store' )->name('storeProduct');
    Route::post('/editProduct/{id}', 'ProductController@edit' )->name('editProduct');
    Route::post('/updateProduct/{id}', 'ProductController@update' )->name('updateProduct');
    Route::post('/deleteProduct/{id}', 'ProductController@delete' )->name('deleteProduct');

    //crud des équipes
    Route::get('/createStaff', 'StaffController@create' )->name('createStaff');
    Route::post('/storeStaff', 'StaffController@store' )->name('storeStaff');
    Route::post('/editStaff/{id}', 'StaffController@edit' )->name('editStaff');
    Route::post('/updateStaff/{id}', 'StaffController@update' )->name('updateStaff');
    Route::post('/deleteStaff/{id}', 'StaffController@delete' )->name('deleteStaff');

    //crud des user

    Route::get('/createUser', 'UserController@create' )->name('createUser');
    Route::post('/storeUser', 'UserController@store' )->name('storeUser');
    Route::post('/editUser/{id}', 'UserController@edit' )->name('editUser');
    Route::post('/updateUser/{id}', 'UserController@update' )->name('updateUser');
    Route::post('/deleteUser/{id}', 'UserController@delete' )->name('deleteUser');

    Route::get('/showOneClient', 'UserController@showOneClient' )->name('viewUser');
    Route::get('/showAdmin', 'UserController@showAdmin' )->name('viewAdmin');

});


