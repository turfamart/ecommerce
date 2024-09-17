<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/contact',function(){
//     return view('contact');
// });


Route::get('/', 'App\Http\Controllers\PagesController@index')->name('home');
Route::get('/products', 'App\Http\Controllers\PagesController@products')->name('products');

Route::group(['prefix' => 'admin'],function(){
    Route::get('/','App\Http\Controllers\AdminPagesController@index')->name('admin.index');
    Route::get('/product/create','App\Http\Controllers\AdminPagesController@create')->name('admin.product.create');
    Route::post('/product/create','App\Http\Controllers\AdminPagesController@product_store')->name('admin.product.create');
});
