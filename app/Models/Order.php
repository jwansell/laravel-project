<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    /**
    * @var array
    */

    protected $fillable = [
        'user_id',
        'item',
        'order_value',
    ];

    public function products()
    {
         return $this->belongsToMany(Product::class, 'order_products')
            ->withPivot('quantity');
    }

    public function order_products()
    {
        return $this->belongsToMany(OrderProduct::class, 'order_products')
        ->withPivot('quantity');
    }
}
