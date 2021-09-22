<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsDeals extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function deal(): \illuminate\database\eloquent\relations\belongsto
    {
        return $this->belongsto(Deal::class);
    }

    public function product(): \illuminate\database\eloquent\relations\belongsto
    {
        return $this->belongsto(Product::class);
    }
}
