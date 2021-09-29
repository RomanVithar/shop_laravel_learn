<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasketController extends Controller
{
    /**
     *  Показывает корзину с подсчётом продуктов
     *
     * @return \Illuminate\View\View
     */
    public function show(): \Illuminate\View\View
    {
        $total_price = 0;
        foreach (\request()->user()->usersProducts as $usersProduct) {
            $total_price += $usersProduct->Product->cost * $usersProduct->count;
        }
        return view('basket', ['total_price' => $total_price]);
    }
}
