<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckSignin;
use App\Http\Middleware\ChecksigninAjax;


//products
Route::get('/productsByCategory/{id}', 'ProductsController@getByCategoryId');
//***

//users
Route::get('/users/signin', 'UsersController@signin');

Route::post('/users/signincheck', 'UsersController@signinCheck');

Route::get('/users/privatezone', 'UsersController@privateZone')->middleware(CheckSignin::class);

Route::get('/users/logout', 'UsersController@logout');
//***

//cart
Route::get('/cart/view', 'CartController@viewAllItemsForUser')->middleware(CheckSignin::class);

Route::post('/cart/add/{productId}', 'CartController@addNewItemToUser')->middleware(ChecksigninAjax::class);

Route::post('/cart/delete/{id}', 'CartController@deleteItemById')->middleware(ChecksigninAjax::class);

Route::post('/cart/getCountItemsForUser', 'CartController@getCountItemsForUser')->middleware(ChecksigninAjax::class);
//***

//purchases
Route::get('/purchases/make', 'PurchasesController@makePurchase')->middleware(CheckSignin::class);
//***


