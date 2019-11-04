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

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('users')->group(function (){
    Route::get('list','UserController@index')->name('users.index');
});

Route::prefix('cakes')->group(function (){
    Route::get('list','CakeController@index')->name('cakes.index');
    Route::get("{id}/edit", "CakeController@edit")->name("cakes.edit");
    Route::post("{id}/edit", "CakeController@update")->name("cakes.update");
    Route::get("{id}/delete", "CakeController@delete")->name("cakes.delete");
    Route::get("create", "CakeController@create")->name("cakes.create");
    Route::post("add", "CakeController@add")->name("cakes.add");
    Route::get("index", "CakeController@show")->name('cakes.show');
    Route::get("search", "CakeController@search")->name('cakes.search');
    Route::get("{id}/detail", "CakeController@detail")->name('cakes.detail');
});
