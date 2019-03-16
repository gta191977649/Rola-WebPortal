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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/ucp/rola/edit/{id}', 'LoraMgrController@detail')->name('detail-rola');
Route::get('/ucp/rola/add', 'LoraMgrController@addView')->name('rola.add.view');
Route::post('/ucp/rola/add', 'LoraMgrController@add')->name('rola.add');
Route::get('/ucp/admin/rola', 'LoraMgrController@adminIndex')->name('admin.rola');
