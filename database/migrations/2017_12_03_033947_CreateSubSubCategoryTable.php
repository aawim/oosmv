<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubSubCategoryTable extends Migration
{
  
    public function up()
    {
        Schema::create('SubSubCategory', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('scat_id');
            $table->string('name')->unique();
            $table->string('is_active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

 
    public function down()
    {
        Schema::dropIfExists('SubSubCategory');
    }
}
