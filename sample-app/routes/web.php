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

Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('Recipe')->prefix('recipe')->group(function () {
    Route::get('/', 'RecipeController@index')->name('recipeList');
    Route::get('/edit', 'RecipeController@edit')->name('recipeEdit');
});