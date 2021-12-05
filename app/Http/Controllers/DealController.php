<?php

namespace App\Http\Controllers;

use App\Models\Deal;
use App\Models\UsersProducts;
use Illuminate\Http\Request;

class DealController extends Controller
{

    /**
     * зaкрывает сделку
     *
     * @return string[]
     */
    public function close(Request $request): array
    {
        $deal = Deal::find($request->deal_id);
        $deal->status = 'close';
        $deal->save();
        UsersProducts::where('user_id', auth()->user()->id)->delete();
        return ['deal_id'=>$deal->id];
    }

}
