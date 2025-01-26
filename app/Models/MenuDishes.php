<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuDishes extends Model
{
    protected $table = 'menu_dishes';
    protected $fillable = ['name', 'type', 'stars', 'image'];
}
