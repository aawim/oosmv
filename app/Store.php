<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Store extends Model
{
    protected $table = 'store';
    protected $fillable = [ 'name','logo','id'];

    protected $hidden = [
        'created_at', 'updated_at','is_active',
    ];

    public function products(){
        return $this->hasMany(Product::class, 'store_id');
    }
}
