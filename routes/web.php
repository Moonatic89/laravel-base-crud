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

Route::get('/', 'PageController@index')->name('welcome');

//7 routes
Route::get('comics', 'Admin\ComicController@index')->name('comics');
Route::get('comics/create', 'Admin\ComicController@create')->name('admin.comics.create');
Route::post('comics', 'Admin\ComicController@store')->name('admin.comics.store');
Route::get('comics/{comic}', 'Admin\ComicController@show');
Route::get('comics/{comic}/edit', 'Admin\ComicController@edit');
Route::put('comics/{comic}', 'Admin\ComicController@update');
Route::delete('comics/{comic}', 'Admin\ComicController@destroy');