<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carousel extends Model
{
    protected $table = 'carousels';
    protected $fillable = [ 'name','title_one','title_two','title_three','price_tag'];

     protected $hidden = [
        'created_at', 'updated_at','is_active',
    ];
}
