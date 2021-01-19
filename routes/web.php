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

// Just disabling homepage
Route::get('/', function() {
    return view('home');
});


Auth::routes();

Route::middleware(['auth'])->group(function() {
    // Used "products" url to rename all named routes to products.*** without names array
    Route::resource('products', 'ProductController');
});

