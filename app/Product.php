<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = [ 'name','icon'];

    protected $hidden = [
        'created_at', 'updated_at','is_active',
    ];
}
