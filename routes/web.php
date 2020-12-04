<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'FlowerController@homepage');
Route::get('/category/{id}', 'FlowerController@view');
Route::get('/category/{id}/update', 'FlowerController@update');
Route::get('/category/{id}/details', 'FlowerController@details');
Route::get('/add', 'FlowerController@add');
Route::get('/manage', 'FlowerController@managecategory');
Route::get('/manage/{id}', 'FlowerController@updatecategory');
Route::get('/cart', 'FlowerController@cart');
Route::get('/history', 'FlowerController@history');
Route::get('/history/{id}', 'FlowerController@historydetail');
Route::get('/changepassword', 'ChangePasswordController@index');
Route::post('/changepassword', 'ChangePasswordController@store')->name('change.password');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
