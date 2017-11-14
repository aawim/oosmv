<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';
    protected $fillable = [ 'name','logo'];

    protected $hidden = [
        'created_at', 'updated_at','is_active',
    ];
}
