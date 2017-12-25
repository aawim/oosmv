<?php

use Illuminate\Database\Seeder;

class TypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert(array(
            array('name'=>'Whole Sale','is_active'=>1),
            array('name'=>'Retail','is_active'=>1),
            array('name'=>'Wholesale and Retail','is_active'=>1),
            ));
    }
}
