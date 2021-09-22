<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersProducts extends Model
{
    public $timestamps = false;
    use HasFactory;

    public function user(): \illuminate\database\eloquent\relations\belongsto
    {
        return $this->belongsto(User::class);
    }

    public function product(): \illuminate\database\eloquent\relations\belongsto
    {
        return $this->belongsto(Product::class);
    }
}
