<?php

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
    $user = User::all()[3]; // получаю пользователя с id 4 чтобы получить 2 сущности из basket products 4, 2 и 4, 9
    $bp = $user->basketsProducts;
    dd($bp);
});
