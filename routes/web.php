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

Route::get('/', 'FlowerController@homepage')->name('homepage');
Route::get('/search', 'FlowerController@search')->name('search');
Route::get('/category/{id}', 'FlowerController@view')->name('view');
Route::get('/category/{id}/delete', 'FlowerController@deleteflower')->name('view');
Route::get('/category/{id}/update', 'FlowerController@update')->name('update')->middleware('manager');
Route::post('/category/{id}/update', 'FlowerController@updateflower')->name('updateflower')->middleware('manager');
Route::get('/category/{id}/details', 'FlowerController@details')->name('details');
Route::post('/category/{id}/details', 'FlowerController@addtocart')->name('addtocart');
Route::get('/add', 'FlowerController@add')->name('addflower')->middleware('manager');
Route::get('/manage', 'FlowerController@managecategory')->name('managecategory')->middleware('manager');
Route::get('/manage/{id}', 'FlowerController@updatecategory')->name('updatecategory')->middleware('manager');
Route::get('/manage/{id}/delete', 'FlowerController@deletecategory')->name('deletecategory')->middleware('manager');
Route::post('/manage/{id}', 'FlowerController@updatecategorydata')->name('updatecategorydata')->middleware('manager');
Route::get('/cart', 'FlowerController@cart')->name('cart')->middleware('customer');
Route::post('/cart', 'FlowerController@cart')->name('updatecart')->middleware('customer');
Route::get('/history', 'FlowerController@history')->name('history')->middleware('customer');
Route::get('/history/{id}', 'FlowerController@historydetail')->name('historydetail')->middleware('customer');
Route::get('/changepassword', 'ChangePasswordController@index');
Route::post('/changepassword', 'ChangePasswordController@store')->name('change.password');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
