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
    return view('index');
})->name('index');


Route::get('/test', function () {
    return view('pages.vetura');
})->name('test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin', function () {
    return view('admin.home');
});

Route::get('game', function () {
    return view('pages._single_game');
});

Route::resource('admin/users', 'UserController');
Route::resource('admin/roles', 'RoleController');
Route::resource('admin/permissions', 'PermissionController');

Route::get('admin/markat', 'MarkaController@admin');
Route::get('admin/sallonet', 'SalloniController@admin');
Route::get('admin/veturat', 'VeturaController@admin');

Route::get('veturat', 'VeturaController@index')->name('veturat');
Route::get('vetura/{vetura}', 'VeturaController@show')->name('showvetura');
Route::get('sallonet', 'SalloniController@index')->name('sallonet');