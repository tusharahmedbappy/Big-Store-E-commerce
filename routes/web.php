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
    return view('Template');
});
//dashboard
Route::get('/sing-in', function () {
    return view('Dashboard.Admin_Sing_in');
});
Route::get('/sing-up', function () {
    return view('Dashboard.Admin_register');
});
Route::post('/register','AdminUserController@register');
Route::post('/login','AdminUserController@login');


Route::group(['middleware' => 'AdminUserVerify'], function () {
    Route::get('/admin', function () {
        return view('Dashboard.Admin');
    });
    Route::get('/product', function () {
        return view('Dashboard.Product');
    });
    Route::get('/add-product', function () {
        return view('Dashboard.Add_product');
    });
    Route::post('/product-add','ProductController@store');
});


