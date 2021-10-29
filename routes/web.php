<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSignin;

Route::get('/productsByCategory/{id}', 'ProductsController@getByCategoryId');

Route::get('/users/signin', 'UsersController@signin');
Route::post('/users/signincheck', 'UsersController@signinCheck');
Route::get('/users/privatezone', 'UsersController@privateZone')->middleware(CheckSignin::class);
Route::get('/users/logout', 'UsersController@logout');

Route::get('/cart/view/{id}', 'CartController@viewAllItemsByUserId');



