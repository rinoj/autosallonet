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

Route::get('admin', 'PageController@admin')->name('admin');

Route::get('game', function () {
    return view('pages._single_game');
});

Route::resource('admin/users', 'UserController');
Route::resource('admin/roles', 'RoleController');
Route::resource('admin/permissions', 'PermissionController');

Route::get('admin/markat', 'MarkaController@admin')->name('admin.markat');
Route::get('admin/markat/create', 'MarkaController@create')->name('admin.markat.create');
Route::post('admin/markat/store', 'MarkaController@store')->name('admin.markat.store');

Route::get('admin/modelet', 'ModeliController@index')->name('admin.modeli');
Route::get('admin/modelet/create', 'ModeliController@create')->name('admin.modeli.create');
Route::post('admin/modelet/store', 'ModeliController@store')->name('admin.modeli.store');

Route::get('admin/sallonet', 'SalloniController@admin');
Route::get('admin/sallonet/{id}', 'SalloniController@veturat')->name('admin.sallonet.veturat');


Route::get('admin/veturat', 'VeturaController@admin')->name('admin.veturat');
Route::get('admin/veturat/show/{id}', 'VeturaController@showadmin')->name('admin.veturat.show');
Route::get('admin/veturat/create', 'VeturaController@create')->name('admin.veturat.create');
Route::post('admin/veturat/store', 'VeturaController@store')->name('admin.veturat.store');

Route::get('veturat', 'VeturaController@index')->name('veturat');
Route::get('vetura/{vetura}', 'VeturaController@show')->name('showvetura');
Route::get('sallonet', 'SalloniController@index')->name('sallonet');