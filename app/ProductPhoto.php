<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPhoto extends Model
{
   
    protected $table = 'product_photos';
   
    protected $hidden = [
        'created_at', 'updated_at',
    ];

    protected $fillable = ['product_id', 'name'];
         public function product()
       {
           return $this->belongsTo('App\Product');
       }
}
