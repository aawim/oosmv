<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    //protected $fillable = [ 'name','icon'];

    protected $hidden = [
        'created_at', 'updated_at','is_active',
    ];

  

}
