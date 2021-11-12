<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSignin;
use App\Http\Middleware\ChecksigninAjax;

Route::get('/productsByCategory/{id}', 'ProductsController@getByCategoryId');

Route::get('/users/signin', 'UsersController@signin');
Route::post('/users/signincheck', 'UsersController@signinCheck');
Route::get('/users/privatezone', 'UsersController@privateZone')->middleware(CheckSignin::class);
Route::get('/users/logout', 'UsersController@logout');

Route::get('/cart/view/{id}', 'CartController@viewAllItemsByUserId')->middleware(CheckSignin::class);

Route::post('/cart/add/{productId}', 'CartController@addNewItemToUser')->middleware(ChecksigninAjax::class);
Route::post('/cart/delete/{id}', 'CartController@deleteItemById')->middleware(ChecksigninAjax::class);
Route::post('/cart/getCountItems/{userId}', 'CartController@getCountItemsByUserId')->middleware(ChecksigninAjax::class);



