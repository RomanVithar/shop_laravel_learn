<?php

namespace App\Models;

use Illuminate\Contracts\Auth\UserProvider;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function usersProducts(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(UsersProducts::class);
    }

    public function productsDeals(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(ProductsDeals::class);
    }
}
