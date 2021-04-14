<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/user', 'UserAccessController@index')->name('user_access')->middleware('auth:api');

Route::prefix('/user')->group(function() {
    Route::post('/login', 'LoginController@login');
    Route::middleware('auth:api')->get('/current', 'UserAccessController@currentUser');
});