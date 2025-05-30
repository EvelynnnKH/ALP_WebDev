<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    //
    protected $table = 'categories';
    protected $primaryKey = 'category_id';
    public function products(): HasMany
    {
        return $this->hasMany(Product::class,'category_id');
    }
}
