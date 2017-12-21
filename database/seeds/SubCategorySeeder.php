<?php

use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Subcategories')->insert(array(
//1
            array('name'=>'Agriculture','cat_id'=>'1','is_active'=>1),
//2
            array('name'=>'Food & Beverage','cat_id'=>'2','is_active'=>1),
//3
            array('name'=>'Frozen Food','cat_id'=>'2','is_active'=>1),
//4
            array('name'=>'Ready To Eat','cat_id'=>'2','is_active'=>1),




//6
            array('name'=>'Textile & Leather Product','cat_id'=>'3','is_active'=>1),
//7
            array('name'=>'Fashion Accessories','cat_id'=>'3','is_active'=>1),
//8
            array('name'=>'Jewelry & Eyewear','cat_id'=>'3','is_active'=>1),



//9
            array('name'=>'Automobiles & Motorcycles','cat_id'=>'4','is_active'=>1),
//10
            array('name'=>'Transportation','cat_id'=>'4','is_active'=>1),




//11
            array('name'=>'Bags & Cases','cat_id'=>'5','is_active'=>1),
//12
            array('name'=>'Shoes & Accessories','cat_id'=>'5','is_active'=>1),





//13
            array('name'=>'Computer Hardware & Software ','cat_id'=>'6','is_active'=>1),
//14
            array('name'=>'Home Appliance','cat_id'=>'6','is_active'=>1),
//15
            array('name'=>'Consumer Electronic','cat_id'=>'6','is_active'=>1),
//16
            array('name'=>'Security & Protection','cat_id'=>'6','is_active'=>1),




//17
            array('name'=>'Electrical Equipment & Supplies','cat_id'=>'7','is_active'=>1),
//18
            array('name'=>'Telecommunication','cat_id'=>'7','is_active'=>1),




//19
            array('name'=>'Sports & Entertainment','cat_id'=>'8','is_active'=>1),
//20
            array('name'=>'Gifts & Crafts','cat_id'=>'8','is_active'=>1),
//21
            array('name'=>'Toys & Hobbies','cat_id'=>'8','is_active'=>1),






//22
            array('name'=>'Health & Medical','cat_id'=>'9','is_active'=>1),
//23
            array('name'=>'Beauty & Personal Care','cat_id'=>'9','is_active'=>1),


//24
            array('name'=>'Construction','cat_id'=>'10','is_active'=>1),
//25
            array('name'=>'Home & Garden','cat_id'=>'10','is_active'=>1),
//26
            array('name'=>'Lights & Lighting','cat_id'=>'10','is_active'=>1),
//27
            array('name'=>'Furniture','cat_id'=>'10','is_active'=>1),




//28
            array('name'=>'Machinery ','cat_id'=>'11','is_active'=>1),
//29
            array('name'=>'Industrial Parts & Fabrication Services','cat_id'=>'11','is_active'=>1),




//30
            array('name'=>'Tools','cat_id'=>'12','is_active'=>1),
//31
            array('name'=>'Hardware','cat_id'=>'12','is_active'=>1),
//32
            array('name'=>'Measurement & Analysis Instruments','cat_id'=>'12','is_active'=>1),




//33
            array('name'=>'Minerals & Metallurgy','cat_id'=>'13','is_active'=>1),
//34
            array('name'=>'Chemicals','cat_id'=>'13','is_active'=>1),
//35
            array('name'=>'Rubber & Plastics','cat_id'=>'13','is_active'=>1),
//36
            array('name'=>'Energy','cat_id'=>'13','is_active'=>1),
//37
            array('name'=>'Environment','cat_id'=>'13','is_active'=>1),





//38
            array('name'=>'Packaging & Printing','cat_id'=>'14','is_active'=>1),
//39
            array('name'=>'Office & School Supplies','cat_id'=>'14','is_active'=>1),
//40
            array('name'=>'Service Equipment','cat_id'=>'14','is_active'=>1),
//41
            array('name'=>'Other','cat_id'=>'15','is_active'=>1),
 
         ));
    
    
    }
}
