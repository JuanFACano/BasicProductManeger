<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'price',
        'description',
        'stock'
    ];


    protected static function boot()
    {
        parent::boot();

        static::creating(function ($product) {
            $product->identity = substr(time() . rand(10, 99), 0, 10);
        });
    }
}
