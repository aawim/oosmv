<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $fillable = [ 'name','icon'];

    protected $hidden = [
        'created_at', 'updated_at','is_active',
    ];
}
