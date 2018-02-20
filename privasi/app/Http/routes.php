<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'page@index');
Route::get('/ucc', 'page@ucc');
Route::get('/blog', 'controller_post@index');
Route::get('/pengajar', 'controller_post@pengajar');

Route::post('apply/upload', 'ApplyController@upload');
Route::auth();

Route::get('/administrasi', function( ) 
	{ return view('administrasi.index');
	}
);
Route::get('/administrasi/daftar', 'controller_admin@index');
Route::get('/administrasi/baru', 'controller_admin@create');
Route::get('/administrasi/edit/{id}', 'controller_admin@edit');
Route::get('/administrasi/hapus/{id}', 'controller_admin@destroy');
Route::post('administrasi/update/{id}', 'controller_admin@update');
Route::get('/administrasi/kategori', 'controller_admin@kategori');
Route::post('administrasi/store', 'controller_admin@store');
//Blogging
Route::get('/{id}', 'controller_post@show');
