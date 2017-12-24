<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
  
    public function run()
    {
        DB::table('categories')->insert(array(
            array('name'=>'Agriculture','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Food','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Apparel,Textiles & Accessories','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Auto & Transportation ','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Bags, Shoes & Accessories','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Electronics','icon'=>'imagesx/images.jpg','is_active'=>1),
            // array('name'=>'Electrical Equipment, Components & Telecoms','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Electrical Eqmt, Components & Telecoms','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Gifts, Sports & Toys','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Health & Beauty','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Home, Lights & Construction','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Machinery ','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Parts & Tools','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Metallurgy,Chemicals, Rubber & Plastics','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Packaging, Advertising & Office','icon'=>'imagesx/images.jpg','is_active'=>1),
            array('name'=>'Everything Else','icon'=>'imagesx/images.jpg','is_active'=>1),
  
         ));

    }
}
