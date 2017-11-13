<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{ 
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->integer('cat_id');
            $table->integer('scat_id');
            $table->string('brand_id');
            $table->string('size');
            $table->double('price');
            $table->double('dprice');
            $table->string('image');
            $table->integer('qty');
            $table->integer('store_id');
            $table->integer('is_active');
            $table->timestamps();
        });
    }

  
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
