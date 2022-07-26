<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
     use HasFactory;
    /**
    * @var array
    */
    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
    ];

      public function products()
    {
         return $this->hasMany(Product::class, 'order_products')
            ->withPivot('quantity');
    }

     public function orders()
    {
        return $this->hasMany(Order::class, 'order_products')
            ->withPivot('quantity');
    }
}
