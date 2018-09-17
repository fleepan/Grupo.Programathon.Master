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
/*--------------------------Rutas Razas e Info  -------------------------*/
Route::get('/', 'razasPerrosController@getIndex')
->name('rp.index');

Route::get('raza_Info/{id}',[
    'uses'=>'razasPerrosController@getRazaPerro',
    'as'=>'rp.razaInfo'
]);

Route::get('tamano', 'tamanoController@getIndex')
->name('tam.index');

Route::get('tamano_Info/{id}',[
    'uses'=>'tamanoController@getTamanoCant',
    'as'=>'tam.tamInfo'
]);
Route::get('temperamento', 'temperamentoController@getIndex')
->name('tem.index');

Route::get('temperamento_Info/{id}',[
    'uses'=>'temperamentoController@getTamanoCant',
    'as'=>'tem.temInfo'
]);
/*---------------------------------------------------------------------------*/

/*------------------------Rutas administrar-------------------------------*/
Route::group(['prefix' => 'admin'], function () {
    Route::get('',
    [
        'uses'=>'razasPerrosController@getAdminIndex'
    ])->name('admin.index');
    Route::get('create',
    [
        'uses'=>'razasPerrosController@getAdminCreate'
    ])->name('admin.create');

    Route::get('edit/{id}',
    [
        'uses'=>'razasPerrosController@getAdminEdit',
        'as'=>'admin.edit'
    ]);
    Route::get('delete/{id}',
    [
        'uses'=>'razasPerrosController@getAdminDelete',
        'as'=>'admin.delete'
    ]);
    /*---------------------------------------------------------------------------*/

    /*--------------Rutas para insert, update, delete-------------------------------*/
    Route::post('create', 'razasPerrosController@vjAdminCreate')->name('admin.create');

    Route::post('edit', 'razasPerrosController@vjAdminEdit')->name('admin.update');

    Route::post('delete', 'razasPerrosController@vjAdminDelete')->name('admin.deleted');
    /*---------------------------------------------------------------------------*/
});
