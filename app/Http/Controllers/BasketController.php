<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\Product;
use App\Models\User;
use App\Models\UsersProducts;
use Illuminate\Http\Request;
use function Psy\sh;

class BasketController extends Controller
{
    private function calculate_total_price()
    {
        $total_price = 0;
        foreach (\request()->user()->usersProducts as $usersProduct) {
            $total_price += $usersProduct->Product->cost * $usersProduct->count;
        }
        return $total_price;
    }


    /**
     *  Показывает корзину с подсчётом продуктов
     *
     * @return \Illuminate\View\View
     */
    public function show(): \Illuminate\View\View
    {
        return view('basket', ['total_price' => $this->calculate_total_price()]);
    }

    /**
     * Добавляет продукт в корзину для текущего пользователя
     *
     * @return \Illuminate\View\View
     */
    public function addProduct(Request $request): \Illuminate\View\View
    {
        $product_id = $request->input('product_id');
        UsersProducts::create([
            'user_id' => auth()->user()->id,
            'product_id' => $product_id,
            'count' => 1
        ]);
        return (new ShopController)->show();
    }

    /**
     * Удаляет продукт из корзины для текузего пользователя
     *
     * @return string[]
     */
    public function rmProduct(Request $request): array
    {
        UsersProducts::where('user_id', auth()->user()->id)
            ->where('product_id', $request->product_id)
            ->delete();
        return ['ok'];
    }

    /**
     * открывает страницу для заполнения карты
     * выводит общую стоимость
     *
     * @return \Illuminate\View\View
     */
    public function createDeal(Request $request): \Illuminate\View\View
    {
        return view('deal_page', ['total_price' => $this->calculate_total_price()]);
    }

    /**
     * открывает сделку, создаёт Deal
     *
     * @return string[]
     */
    public function openDeal(Request $request): array
    {
        $total_price = $this->calculate_total_price();
        $deal = Deal::create([
            'user_id' => auth()->user()->id,
            'cost_delivery' => 200,
            'cost' => $total_price + 200,
            'cost_type' => $request->cost_type,
            'status' => 'open'
        ]);

        return ['deal_id' => $deal->id, 'cost_type' => $request->cost_type];
    }

    /**
     * Увеличивает(уменьшает) count товара на заданное число
     *
     * @return string[]
     */
    public function incrementProduct(Request $request): array
    {
        $userProduct = UsersProducts::where('user_id', auth()->user()->id)
            ->where('product_id', $request->product_id)->first();
        if ($userProduct->count + $request->number < 1) {
            UsersProducts::where('user_id', auth()->user()->id)
                ->where('product_id', $request->product_id)->delete();
            return ['ok'];
        }
        UsersProducts::where('user_id', auth()->user()->id)
            ->where('product_id', $request->product_id)->update(['count' => $userProduct->count + $request->number]);
        return ['ok'];
    }

}
