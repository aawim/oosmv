<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = 'brands';
    protected $fillable = [ 'name','icon'];

    protected $hidden = [
        'created_at', 'updated_at','is_active',
    ];
}
 
