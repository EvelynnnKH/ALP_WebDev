<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    //
    protected $primaryKey = 'product_id';
    protected $table = 'products';
    public function category():BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
