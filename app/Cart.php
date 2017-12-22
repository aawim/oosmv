<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table = 'cart';
    protected $fillable = [ 'user_id','product_id','qty'];

    protected $hidden = [
        'created_at', 'updated_at','is_active',
    ];

    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function store(){
        return $this->belongsTo(Store::class, 'store_id');
    }


 

}
