<?php

namespace App\Models;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Order_Items extends Model
{
    //
    protected $primaryKey = 'order_id';


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }


    public function orderItems()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }


    public function payment()
    {
        return $this->hasOne(Orders::class, 'order_id');
    }


    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id', 'order_id');
    }
}
