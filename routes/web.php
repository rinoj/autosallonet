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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['permission:view-admin']], function () {
    Route::get('admin', 'PageController@admin')->name('admin');
});

Route::group(['middleware' => ['permission:manage-roles-permissions']], function () {
    Route::resource('admin/roles', 'RoleController');
	Route::resource('admin/permissions', 'PermissionController');
});

Route::group(['middleware' => ['permission:manage-users']], function () {
   Route::resource('admin/users', 'UserController');
});

Route::group(['middleware' => ['permission:manage-markat-modelet']], function () {
   	Route::get('admin/markat', 'MarkaController@admin')->name('admin.markat');
	Route::get('admin/markat/create', 'MarkaController@create')->name('admin.markat.create');
	Route::post('admin/markat/store', 'MarkaController@store')->name('admin.markat.store');

	Route::get('admin/modelet', 'ModeliController@index')->name('admin.modeli');
	Route::get('admin/modelet/create', 'ModeliController@create')->name('admin.modeli.create');
	Route::post('admin/modelet/store', 'ModeliController@store')->name('admin.modeli.store');
});


Route::group(['middleware' => ['permission:manage-veturat']], function () {
	Route::get('admin/veturat', 'VeturaController@admin')->name('admin.veturat');
	Route::get('admin/veturat/show/{id}', 'VeturaController@showadmin')->name('admin.veturat.show');
	Route::get('admin/veturat/edit/{id}', 'VeturaController@edit')->name('admin.veturat.edit');
	Route::post('admin/veturat/edit/{id}', 'VeturaController@update')->name('admin.veturat.update');

	Route::post('admin/veturat/show/{id}', 'VeturaController@uploadImage')->name('admin.veturat.uploadimage');
	Route::get('admin/veturat/show/{id}/deleteimage', 'VeturaController@deleteImage')->name('admin.veturat.deleteimage');
	
	Route::get('admin/veturat/create', 'VeturaController@create')->name('admin.veturat.create');
	Route::post('admin/veturat/store', 'VeturaController@store')->name('admin.veturat.store');
});

Route::group(['middleware' => ['permission:manage-sallonet']], function () {
	Route::get('admin/sallonet', 'SalloniController@admin')->name('admin.sallonet');
	Route::get('admin/sallonet/create', 'SalloniController@create')->name('admin.sallonet.create');
	Route::post('admin/sallonet/create', 'SalloniController@store')->name('admin.sallonet.store');
	Route::get('admin/sallonet/edit/{id}', 'SalloniController@edit')->name('admin.sallonet.edit');
	Route::post('admin/sallonet/edit/{id}', 'SalloniController@update')->name('admin.sallonet.update');
	Route::get('admin/sallonet/{id}', 'SalloniController@veturat')->name('admin.sallonet.veturat');
});


Route::get('veturat', 'VeturaController@index')->name('veturat');
Route::get('vetura/{vetura}', 'VeturaController@show')->name('showvetura');
Route::get('sallonet', 'SalloniController@index')->name('sallonet');
Route::get('salloni/{id}', 'SalloniController@show')->name('salloni');