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

# default
Route::get('/', function () {
    return view('welcome');
});

# simple page
Route::get('my', function () {
    return view('my');
});

# product page
Route::get('product', function () {
    return view('product', ['productName' => 'xl']);
});

# product page variante 2
Route::get('product2', function () {
    $productName = 'xl';

    return view('product', compact('productName'));
});

# products page
Route::get('products', 'App\Http\Controllers\ProductController@index');

# productdetails page
Route::get('productdetails/{id}', 'App\Http\Controllers\ProductController@show');


# product create page
Route::get('product/create', 'App\Http\Controllers\ProductController@create');
