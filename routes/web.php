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

# product page variante 3
Route::get('product3', 'App\Http\Controllers\ProductController@index');

# product page variante 4
Route::get('product4/{id}', 'App\Http\Controllers\ProductController@show');


# product create page
Route::get('product/create', 'App\Http\Controllers\ProductController@create');
