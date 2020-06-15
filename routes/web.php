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

Route::auth();

Route::get('/', function () {
    return view('landing');
});
Route::get('pdf/{kode}', [
    'uses' => 'TcpController@test',
    'as' => 'get.pdf'
]);
Route::group(['prefix' => '/','middleware' => ['auth']], function () {

    Route::get('home', [
        'uses' => 'Pages\PagesController@home',
        'as' => 'get.home'
    ]);

    Route::get('surat', [
        'uses' => 'Pages\PagesController@create_surat',
        'as' => 'page.surat'
    ]);

    Route::get('surat/{kode}', [
        'uses' => 'Pages\PagesController@edit_surat',
        'as' => 'page.surat.edit'
    ]);

    Route::post('surat', [
        'uses' => 'SuratController@buat_surat',
        'as' => 'surat.save'
    ]);

    Route::post('surat/update', [
        'uses' => 'SuratController@update',
        'as' => 'surat.update'
    ]);

    Route::get('surat/info/{kode}', [
        'uses' => 'SuratController@get_surat_detail',
        'as' => 'page.surat.detail'
    ]);

    Route::post('surat/swal', [
        'uses' => 'SuratController@surat_test',
        'as' => 'surat.test'
    ]);
});

