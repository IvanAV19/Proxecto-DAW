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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function(){
    Route::resource('/dispositivos', 'DeviceController');

    Route::resource('/clientes', 'CustomerController');

    Route::get('/mantenimientos', 'MaintenanceController@getIndex')->name('mantenimientos.index');

    Route::get('/mantenimientos/create', 'MaintenanceController@getCreate')->name('mantenimientos.create');

    Route::post('/mantenimientos/create', 'MaintenanceController@postStore')->name('mantenimientos.store');

    Route::get('/mantenimientos/edit/{id}', 'MaintenanceController@getEdit')->name('mantenimientos.edit');

    Route::put('/mantenimientos/update/{id}', 'MaintenanceController@putUpdate')->name('mantenimientos.update');

    Route::delete('/mantenimientos/delete/{id}', 'MaintenanceController@deleteDestroy')->name('mantenimientos.destroy');

    Route::resource('/tecnicos', 'TechnicianController')->middleware('admin');

    Route::get('/perfil', 'ProfileController@index')->name('profile.index');

    Route::get('/perfil/editar', 'ProfileController@edit')->name('profile.edit')->middleware('password.confirm');

    Route::get('/perfil/editar-contrasena', 'ProfileController@password')->name('profile.password')->middleware('password.confirm');

    Route::put('/perfil/actualizar-datos', 'ProfileController@updateData')->name('profile.update_data');

    Route::put('/perfil/actualizar-contrasena', 'ProfileController@updatePassword')->name('profile.update_password');
});


