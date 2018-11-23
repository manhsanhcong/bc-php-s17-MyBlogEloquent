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


Route::group(['prefix' => 'Blog'], function () {
    Route::get('/', 'BlogController@index')->name('home');
    Route::get('/update/{id}', 'BlogController@showupdate')->name('showUpdate');
    Route::post('/update/{id}', 'BlogController@update')->name('update');
    Route::get('/delete/{id}', 'BlogController@delete')->name('delete');
    Route::get('/edit1', 'BlogController@showedit')->name('showEdit');
    Route::post('/edit', 'BlogController@edit')->name('edit');
});