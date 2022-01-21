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
Route::get('admin/comics/admin', 'Admin\ComicController@admin')->name('admincomics');
Route::get('admin/movies/admin', 'Admin\ComicController@admin')->name('adminmovies');
Route::get('admin/games/admin', 'Admin\ComicController@admin')->name('admingames');



//Comics 
Route::get('admin/comics', 'Admin\ComicController@index')->name('comics');
Route::get('admin/comics/create', 'Admin\ComicController@create')->name('admin.comics.create');
Route::post('admin/comics', 'Admin\ComicController@store')->name('admin.comics.store');
Route::get('admin/comics/{comic}', 'Admin\ComicController@show')->name('admin.comics.show');
Route::get('admin/comics/{comic}/edit', 'Admin\ComicController@edit')->name('admin.comics.edit');
Route::put('admin/comics/{comic}', 'Admin\ComicController@update')->name('admin.comics.update');
Route::delete('admin/comics/{comic}', 'Admin\ComicController@destroy')->name('admin.comics.destroy');

//Games
Route::get('admin/games', 'Admin\GameController@index')->name('games');
Route::get('admin/games/create', 'Admin\GameController@create')->name('admin.games.create');
Route::post('admin/games', 'Admin\GameController@store')->name('admin.games.store');
Route::get('admin/games/{game}', 'Admin\GameController@show')->name('admin.games.show');
Route::get('admin/games/{game}/edit', 'Admin\GameController@edit')->name('admin.games.edit');
Route::put('admin/games/{game}', 'Admin\GameController@update')->name('admin.games.update');
Route::delete('admin/games/{game}', 'Admin\GameController@destroy')->name('admin.games.destroy');

//Movies
Route::get('admin/movies', 'Admin\MovieController@index')->name('movies');
Route::get('admin/movies/create', 'Admin\MovieController@create')->name('admin.movies.create');
Route::post('admin/movies', 'Admin\MovieController@store')->name('admin.movies.store');
Route::get('admin/movies/{movie}', 'Admin\MovieController@show')->name('admin.movies.show');
Route::get('admin/movies/{movie}/edit', 'Admin\MovieController@edit')->name('admin.movies.edit');
Route::put('admin/movies/{movie}', 'Admin\MovieController@update')->name('admin.movies.update');
Route::delete('admin/movies/{movie}', 'Admin\MovieController@destroy')->name('admin.movies.destroy');