<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAddressBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addressbook', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('store_id');
            $table->integer('user_id');
            $table->integer('is_active');
            $table->timestamps();
        });
    }

    public function down()
    {
      Schema::dropIfExists('addressbook');
    }
}
