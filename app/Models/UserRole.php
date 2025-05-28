<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UserRole extends Model
{
    // //
    protected $table = 'user_roles';
    protected $primaryKey = 'id';
    // public function roles()
    // {
    //     return $this->belongsToMany(UserRole::class);
    // }
    
    public function users(): HasMany{
        return $this->hasMany(User::class, 'user_id', 'user_id');
    }
}
