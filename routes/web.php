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

Route::get('/tugas','TugasController@index');
Route::post('/tugas/create','TugasController@create');
Route::get('/tugas/{id}/edit','TugasController@edit');
Route::post('/tugas/{id}/update','TugasController@update');
Route::get('/tugas/{id}/delete','TugasController@delete');