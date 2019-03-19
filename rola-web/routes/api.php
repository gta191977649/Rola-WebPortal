<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//API for get
Route::get('/', 'APIController@index')->name('api.index');
Route::get('/lora', 'APIController@indexRola')->name('api.lora.index');
Route::get('/user', 'APIController@indexUser')->name('api.user.index');
//API for create new
Route::post('/lora', 'APIController@newRola')->name('api.lora.new');
Route::get('/lora/{id}', 'APIController@searchByLoraIdx')->name('api.lora.searchById');
Route::get('/user/lora/{user_id}', 'APIController@searchLoraByUserId')->name('api.lora.searchLoraByUid');
Route::put('/admin/lora/assign','APIController@assignLoraToUser')->name('api.admin.assign.lora');
