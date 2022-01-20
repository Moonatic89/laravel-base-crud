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
Route::get('admin/comics/admin', 'Admin\ComicController@admin')->name('adminpage');


//7 routes
Route::get('admin/comics', 'Admin\ComicController@index')->name('comics');
Route::get('admin/comics/create', 'Admin\ComicController@create')->name('admin.comics.create');
Route::post('admin/comics', 'Admin\ComicController@store')->name('admin.comics.store');
Route::get('admin/comics/{comic}', 'Admin\ComicController@show')->name('admin.comics.show');
Route::get('admin/comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comics.edit');
Route::put('admin/comics/{comic}', 'Admin\ComicController@update')->name('admin.comics.update');
Route::delete('admin/comics/{comic}', 'Admin\ComicController@destroy')->name('admin.comics.destroy');