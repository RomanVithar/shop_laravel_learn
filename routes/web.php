<?php

use App\Http\Controllers\BasketController;
use App\Models\Deal;
use App\Models\Product;
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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::get('shop/', function () {
    return view('shop', ['products' => Product::all()]);
});

Route::get('about/', function () {
    return view('about');
});

Route::get('product_editor/', function () {
    return view('product_editor');
});

Route::get('product/{id}', function ($id) {
    return view('product', ['product' => Product::find($id)]);
});

Route::get('basket', [BasketController::class, 'show']);

Route::get('profile/', function () {
    return view('profile');
});
