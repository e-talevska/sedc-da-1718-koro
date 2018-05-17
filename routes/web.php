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

Route::get('about', function () {
    return view('about', ['name' => 'SEDC', 'year' => 2018, 'classes' => ['php', 'js']]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('categories', 'CategoryController@index');
Route::get('categories/create', 'CategoryController@create');
Route::post('categories', 'CategoryController@store');
Route::get('categories/{id}/edit', 'CategoryController@edit');