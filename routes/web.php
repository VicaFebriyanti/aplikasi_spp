<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/kelas', 'KelasController@index')->name('kelas');
Route::post('/kelas/create', 'KelasController@create')->name('create');
Route::get('/kelas/{id}/edit', 'KelasController@edit')->name('edit');
Route::post('/kelas/{id}/update', 'KelasController@update')->name('update');
Route::get('/kelas/{id}/delete', 'KelasController@delete')->name('delete');

Route::get('/spp', 'SppController@index')->name('spp');
Route::post('/spp/create', 'SppController@create')->name('create');
Route::get('/spp/{id}/edit', 'SppController@edit')->name('edit');
Route::post('/spp/{id}/update', 'SppController@update')->name('update');
Route::get('/spp/{id}/delete', 'SppController@delete')->name('delete');
