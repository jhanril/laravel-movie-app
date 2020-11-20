<?php

use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'App\Http\Controllers\MoviesController@index')->name('movies.index');
Route::get('/movies/{id}', 'App\Http\Controllers\MoviesController@show')->name('movies.show');

Route::get('/tv', 'App\Http\Controllers\TvController@index')->name('tv.index');
Route::get('/tv/{id}', 'App\Http\Controllers\TvController@show')->name('tv.show');

Route::get('/actors', 'App\Http\Controllers\ActorsController@index')->name('actors.index');
Route::get('/actors/page/{page?}', 'App\Http\Controllers\ActorsController@index');

Route::get('/actors/{id}', 'App\Http\Controllers\ActorsController@show')->name('actors.show');



// Route::get('/', 'App\Http\Controllers\MoviesController@index')->name('movies.index');;

// Route::view('/','index');

// Route::view('/movie','show');