<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
     use HasFactory;
    /**
    * @var array
    */

    protected $fillable = [
        'user_id',
        'order_id',
        'address',
        'postcode',
        'city',
        'county',
    ];

    public function order_products()
    {
        return $this->belongsTo(OrderProduct::class);
    }

    public function orders()
    {
        return $this->belongsTo(Order::class, 'order_id', 'id');
    }   
}
