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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::group([
//     'middleware' => 'api',
// ], function(){

//     Route::post('/auth/signup', 'ApiAuthController@signup');
//     Route::post('/auth/signin', 'ApiAuthController@signin');
//     Route::post('/auth/me','ApiAuthController@me');
//     Route::post('/auth/logout','ApiAuthController@logout');
//     Route::post('/auth/refresh','ApiAuthController@refresh');

// });