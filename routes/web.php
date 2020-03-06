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

// Kuronekosan
Route::get('/', function () {
    // return view('welcome');
    return redirect('/tapangpass');
});
Route::get('/tapangpass', 'TapangpassController@index');


// Auth
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/auth_login','AuthController@authlogin');
Route::get('/logout','AuthController@logout');
Route::get('/hotspot_login','HotspotController@login');


Route::group(['middleware' => 'auth'],function(){
    Route::get('/Admin', function () {
        return redirect('/Admin/Dashboard');
    });
    Route::get('/Admin/Dashboard', 'AdminController@index');
    
    // TapangPass
    Route::get('/Admin/Tapangpass', function () {
            return redirect('/Admin/Tapangpass/Dashboard');
    });
    Route::get('Admin/Tapangpass/Dashboard','TapangpassAdminController@index');
    Route::get('Admin/Tapangpass/GenerateWifi','TapangpassAdminController@generate');
    Route::get('/Admin/Tapangpass/FlushWifi','TapangpassAdminController@deleteRecord');
    
});