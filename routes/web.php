<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\ShopController;
use App\Models\Deal;
use App\Models\Product;
use App\Models\User;
use App\Models\UsersProducts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::get('shop/', [ShopController::class, 'show']);

Route::get('about/', function () {
    return view('about');
});

Route::get('product_editor/', function () {
    return view('product_editor');
});

Route::get('create_product/', function (Request $request) {
    Product::create([
        'cost' => $request->input('cost'),
        'title' => $request->input('title'),
        'weight' => $request->input('weight'),
        'dimension' => $request->input('dimension'),
        'description' => $request->input('description'),
        'image' => $request->input('image')
    ]);
    return view('product_editor');
});

Route::get('product/{id}', function ($id) {
    return view('product', ['product' => Product::find($id)]);
});

Route::get('basket/', [BasketController::class, 'show']);

Route::get('add_product/', [BasketController::class, 'addProduct']);

Route::get('rm_product/', [BasketController::class, 'rmProduct']);

Route::get('create_deal/', [BasketController::class, 'createDeal']);

Route::get('profile/', function () {
    if(\auth()->user()->email == 'admin@admin.admin'){
        $users = User::all();
        $deals = Deal::all();
        $products = Product::all();
        return view('profile', ['users'=>$users, 'deals'=>$deals, 'products'=>$products]);
    }
    return view('profile');
});

Route::get('open_deal/', [BasketController::class, 'openDeal']);

Route::get('close_deal/', [DealController::class, 'close']);

Route::get('acquiring/{id}', function ($id) {
    return view('acquiring', ['deal' => Deal::find($id)]);
});

Route::get('paid/{id}', function ($id) {
    return view('paid', ['deal' => Deal::find($id)]);
});

Route::get('incrementProduct/', [BasketController::class, 'incrementProduct']);

Route::get('empty_basket/', function (){
    UsersProducts::where('user_id', auth()->user()->id)->delete();
    return view('basket', [BasketController::class, 'show']);
});

Route::get('seek_product/', [ShopController::class, 'seek']);
