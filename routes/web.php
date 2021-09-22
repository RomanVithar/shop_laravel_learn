<?php

use App\Models\Deal;
use App\Models\User;
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

Route::get('/', function () {
    return view('home');
});

Route::get('shop/', function () {
    return view('shop');
});

Route::get('about/', function () {
    return view('about');
});

Route::get('product_editor/', function () {
    return view('product_editor');
});

Route::get('test/', function () {
    $productDeals = Deal::find(5)->productsDeals;
    dd($productDeals);
});
