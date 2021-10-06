<?php

namespace App\Http\Controllers;

use App\Models\Deal;
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
        return ['deal_id'=>$deal->id];
    }

}
