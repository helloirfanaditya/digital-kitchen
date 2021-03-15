<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user()
    {
        return $this->hasOne(User::class, 'user_id', 'user_id');
    }

    public function menu()
    {
        return $this->hasMany(Menu::class, 'store_id', 'store_id');
    }
}
