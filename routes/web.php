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
route::get('/karyawan','karyawancontroller@index');
route::post('/karyawan/create','karyawancontroller@create');
route::get('/karyawan/{id}/edit','karyawanController@edit');
route::post('/karyawan/{id}/update','karyawanController@update');
route::get('/karyawan/{id}/delete','karyawanController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
