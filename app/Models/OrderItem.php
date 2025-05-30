<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;




class OrderItem extends Model
{
    protected $primaryKey = 'order_item_id';


    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }


    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'product_id');
    }
}
