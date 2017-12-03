<?php

use Illuminate\Database\Seeder;

class SubSubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('subsubcategory')->insert(array(



//Agriculture 
//1
            array('name'=>'Agricultural Growing Media','scat_id'=>'1','is_active'=>1),
//2
            array('name'=>'Agricultural Waste','scat_id'=>'1','is_active'=>1),
//3
            array('name'=>'Animal Products','scat_id'=>'1','is_active'=>1),
//4
            array('name'=>'Beans','scat_id'=>'1','is_active'=>1),
//5
            array('name'=>'Farm Machinery & Equipment','scat_id'=>'1','is_active'=>1),
//6
            array('name'=>'Fruit','scat_id'=>'1','is_active'=>1),
//7
            array('name'=>'Fresh Seafood','scat_id'=>'1','is_active'=>1),           
//8
            array('name'=>'Herbal Cigars & Cigarettes','scat_id'=>'1','is_active'=>1),
//9
            array('name'=>'Mushrooms & Truffles','scat_id'=>'1','is_active'=>1),
//10
            array('name'=>'Nuts & Kernels','scat_id'=>'1','is_active'=>1),
//11
            array('name'=>'Organic Produce','scat_id'=>'1','is_active'=>1),
//12
            array('name'=>'Ornamental Plants','scat_id'=>'1','is_active'=>1),
//13
            array('name'=>'Other Agriculture Products','scat_id'=>'1','is_active'=>1),
//14
            array('name'=>'Grain','scat_id'=>'1','is_active'=>1),
//15
            array('name'=>'Plant & Animal Oil','scat_id'=>'1','is_active'=>1),
//16
            array('name'=>'Plant Seeds & Bulbs','scat_id'=>'1','is_active'=>1),
//17
            array('name'=>'Timber Raw Materials','scat_id'=>'1','is_active'=>1),
//18
            array('name'=>'Vanilla Beans','scat_id'=>'1','is_active'=>1),
//19
            array('name'=>'Vegetables','scat_id'=>'1','is_active'=>1),
//20
            //Food & Beverage   
            array('name'=>'Baby Food','scat_id'=>'2','is_active'=>1),
            array('name'=>'Baked Goods','scat_id'=>'2','is_active'=>1),
            array('name'=>'Bean Products','scat_id'=>'2','is_active'=>1),
            array('name'=>'Canned Food','scat_id'=>'2','is_active'=>1),
            array('name'=>'Coffee','scat_id'=>'2','is_active'=>1),
            array('name'=>'Confectionery','scat_id'=>'2','is_active'=>1),
            array('name'=>'Dairy','scat_id'=>'2','is_active'=>1),
            array('name'=>'Drinking Water','scat_id'=>'2','is_active'=>1),
            array('name'=>'Egg & Egg Products','scat_id'=>'2','is_active'=>1),
            array('name'=>'Food Ingredients','scat_id'=>'2','is_active'=>1),
            array('name'=>'Fruit Products','scat_id'=>'2','is_active'=>1),
            array('name'=>'Fish Products','scat_id'=>'2','is_active'=>1),
            array('name'=>'Grain Products','scat_id'=>'2','is_active'=>1),
            array('name'=>'Honey Products','scat_id'=>'2','is_active'=>1),
            array('name'=>'Instant Food','scat_id'=>'2','is_active'=>1),
            array('name'=>'Meat & Poultry','scat_id'=>'2','is_active'=>1),
            array('name'=>'Other Food & Beverage','scat_id'=>'2','is_active'=>1),
            array('name'=>'Seasonings & Condiments','scat_id'=>'2','is_active'=>1),
            array('name'=>'Slimming Food','scat_id'=>'2','is_active'=>1),
            array('name'=>'Snack Food','scat_id'=>'2','is_active'=>1),
            array('name'=>'Soft Drinks','scat_id'=>'2','is_active'=>1),
            array('name'=>'Tea','scat_id'=>'2','is_active'=>1),
            array('name'=>'Vegetable Products','scat_id'=>'2','is_active'=>1),
            array('name'=>'Seafood','scat_id'=>'2','is_active'=>1),

            //Frozen Food
            array('name'=>'Cackes','scat_id'=>'3','is_active'=>1),
            array('name'=>'Chicken','scat_id'=>'3','is_active'=>1),
            array('name'=>'Fruit','scat_id'=>'3','is_active'=>1),
            array('name'=>'Fish','scat_id'=>'3','is_active'=>1),
            array('name'=>'Vegetable','scat_id'=>'3','is_active'=>1),
            
            //Apparel
            array('name'=>'Apparel Design Services','scat_id'=>'5','is_active'=>1),
            array('name'=>'Apparel Processing Services','scat_id'=>'5','is_active'=>1),
            array('name'=>'Boy’s Clothing','scat_id'=>'5','is_active'=>1),
            array('name'=>'Children’s Clothing','scat_id'=>'5','is_active'=>1),
            array('name'=>'Coats','scat_id'=>'5','is_active'=>1),
            array('name'=>'Costumes','scat_id'=>'5','is_active'=>1),
            array('name'=>'Dresses','scat_id'=>'5','is_active'=>1),
            array('name'=>'Garment Accessories','scat_id'=>'5','is_active'=>1),
            array('name'=>'Girls’ Clothing','scat_id'=>'5','is_active'=>1),
            array('name'=>'Hoodies & Sweatshirts','scat_id'=>'5','is_active'=>1),
            array('name'=>'Hosiery','scat_id'=>'5','is_active'=>1),
            array('name'=>'Infant & Toddlers Clothing','scat_id'=>'5','is_active'=>1),
            array('name'=>'Jackets','scat_id'=>'5','is_active'=>1),
            array('name'=>'Jeans','scat_id'=>'5','is_active'=>1),
            array('name'=>'Ladies’ Blouses & Tops','scat_id'=>'5','is_active'=>1),
            array('name'=>'Mannequins','scat_id'=>'5','is_active'=>1),
            array('name'=>'Maternity Clothing','scat_id'=>'5','is_active'=>1),
            array('name'=>'Men’s Clothing','scat_id'=>'5','is_active'=>1),
            array('name'=>'Organic Cotton Clothing','scat_id'=>'5','is_active'=>1),
            array('name'=>'Other Apparel','scat_id'=>'5','is_active'=>1),
            array('name'=>'Pants & Trousers','scat_id'=>'5','is_active'=>1),
            array('name'=>'Plus Size Clothing','scat_id'=>'5','is_active'=>1),
            array('name'=>'Sewing Supplies','scat_id'=>'5','is_active'=>1),
            array('name'=>'Shorts','scat_id'=>'5','is_active'=>1),
            array('name'=>'Skirts','scat_id'=>'5','is_active'=>1),
            array('name'=>'Sleepwear','scat_id'=>'5','is_active'=>1),
            array('name'=>'Sportswear','scat_id'=>'5','is_active'=>1),
            array('name'=>'Stage & Dance Wear','scat_id'=>'5','is_active'=>1),
            array('name'=>'Suits & Tuxedo','scat_id'=>'5','is_active'=>1),
            array('name'=>'Sweaters','scat_id'=>'5','is_active'=>1),
            array('name'=>'Tank Tops','scat_id'=>'5','is_active'=>1),
            array('name'=>'T-Shirts','scat_id'=>'5','is_active'=>1),
            array('name'=>'Underwear','scat_id'=>'5','is_active'=>1),
            array('name'=>'Uniforms','scat_id'=>'5','is_active'=>1),
            array('name'=>'Used Clothes','scat_id'=>'5','is_active'=>1),
            array('name'=>'Vests & Waistcoats','scat_id'=>'5','is_active'=>1),
            array('name'=>'Wedding Apparel & Accessories','scat_id'=>'5','is_active'=>1),
            array('name'=>'Women’s Clothing','scat_id'=>'5','is_active'=>1),
            array('name'=>'Workwear','scat_id'=>'5','is_active'=>1),
            
            //Ready To Eat
            array('name'=>'','scat_id'=>'4','is_active'=>1),



            //Textile & Leather Product 
            array('name'=>'100% Cotton Fabric','scat_id'=>'6','is_active'=>1),
            array('name'=>'100% Polyester Fabric','scat_id'=>'6','is_active'=>1),
            array('name'=>'Bedding Set','scat_id'=>'6','is_active'=>1),
            array('name'=>'Chair Cover','scat_id'=>'6','is_active'=>1),
            array('name'=>'Down & Feather','scat_id'=>'6','is_active'=>1),
            array('name'=>'Fabric','scat_id'=>'6','is_active'=>1),
            array('name'=>'Fiber','scat_id'=>'6','is_active'=>1),
            array('name'=>'Fur','scat_id'=>'6','is_active'=>1),
            array('name'=>'Home Textile','scat_id'=>'6','is_active'=>1),
            array('name'=>'Leather Product','scat_id'=>'6','is_active'=>1),
            array('name'=>'Other Textiles','scat_id'=>'6','is_active'=>1),
            array('name'=>'Silk Products','scat_id'=>'6','is_active'=>1),
            array('name'=>'Textile Accessories','scat_id'=>'6','is_active'=>1),
            array('name'=>'Textile Processing','scat_id'=>'6','is_active'=>1),
            array('name'=>'Thread','scat_id'=>'6','is_active'=>1),
            array('name'=>'Towel','scat_id'=>'6','is_active'=>1),
            array('name'=>'Yarn','scat_id'=>'6','is_active'=>1),
          
          
            //Fashion Accessories
            array('name'=>'Belt Accessories','scat_id'=>'7','is_active'=>1),
            array('name'=>'Belt','scat_id'=>'7','is_active'=>1),
            array('name'=>'Fashion Accessories Design Services','scat_id'=>'7','is_active'=>1),
            array('name'=>'Fashion Accessories Processing Services','scat_id'=>'7','is_active'=>1),
            array('name'=>'Fashion Accessories','scat_id'=>'7','is_active'=>1),
            array('name'=>'Gloves & Mittens','scat_id'=>'7','is_active'=>1),
            array('name'=>'Headwear','scat_id'=>'7','is_active'=>1),
            array('name'=>'Neckwear','scat_id'=>'7','is_active'=>1),
            array('name'=>'Scarf, Hat & Glove Sets','scat_id'=>'7','is_active'=>1),
            array('name'=>'Hats & Caps','scat_id'=>'7','is_active'=>1),
            array('name'=>'Scarves & Shawls','scat_id'=>'7','is_active'=>1),
            array('name'=>'Hair Accessories','scat_id'=>'7','is_active'=>1),
            array('name'=>'Genuine Leather Belts','scat_id'=>'7','is_active'=>1),
            array('name'=>'Ties & Accessories','scat_id'=>'7','is_active'=>1),
            array('name'=>'Suspenders','scat_id'=>'7','is_active'=>1),
          

            //Jewelry & Eyewear
            array('name'=>'','scat_id'=>'8','is_active'=>1),
            //Automobiles & Motorcycles
            array('name'=>'','scat_id'=>'9','is_active'=>1),
            //Transportation
            array('name'=>'','scat_id'=>'10','is_active'=>1),
            //Bags & Cases
            array('name'=>'','scat_id'=>'11','is_active'=>1),
            //Shoes & Accessories
            array('name'=>'','scat_id'=>'12','is_active'=>1),
            //Computer Hardware & Software 
            array('name'=>'','scat_id'=>'13','is_active'=>1),
            //Home Appliance
            array('name'=>'','scat_id'=>'14','is_active'=>1),
            //Consumer Electronic
            array('name'=>'','scat_id'=>'15','is_active'=>1),
            //Security & Protection
            array('name'=>'','scat_id'=>'16','is_active'=>1),
            //Electrical Equipment & Supplies
            array('name'=>'','scat_id'=>'17','is_active'=>1),
            //Telecommunication
            array('name'=>'','scat_id'=>'18','is_active'=>1),
            //Sports & Entertainment
            array('name'=>'','scat_id'=>'19','is_active'=>1),
            //Gifts & Crafts
            array('name'=>'','scat_id'=>'20','is_active'=>1),
            //Toys & Hobbies
            array('name'=>'','scat_id'=>'21','is_active'=>1),
            //Health & Medical
            array('name'=>'','scat_id'=>'22','is_active'=>1),
            //Beauty & Personal Care
            array('name'=>'','scat_id'=>'23','is_active'=>1),
            //Construction
            array('name'=>'','scat_id'=>'24','is_active'=>1),
            //Home & Garden
            array('name'=>'','scat_id'=>'25','is_active'=>1),
            //Lights & Lighting
            array('name'=>'','scat_id'=>'26','is_active'=>1),
            //Furniture
            array('name'=>'','scat_id'=>'27','is_active'=>1),
            //Machinery
            array('name'=>'','scat_id'=>'28','is_active'=>1),
            //Industrial Parts & Fabrication Services
            array('name'=>'','scat_id'=>'29','is_active'=>1),
            //Tools
            array('name'=>'','scat_id'=>'30','is_active'=>1),
            //Hardware
            array('name'=>'','scat_id'=>'31','is_active'=>1),
            //Measurement & Analysis Instruments
            array('name'=>'','scat_id'=>'32','is_active'=>1),
            //Minerals & Metallurgy
            array('name'=>'','scat_id'=>'33','is_active'=>1),
            //Chemicals
            array('name'=>'','scat_id'=>'34','is_active'=>1),
            //Rubber & Plastics
            array('name'=>'','scat_id'=>'35','is_active'=>1),
            //Energy
            array('name'=>'','scat_id'=>'36','is_active'=>1),
            //Environment
            array('name'=>'','scat_id'=>'37','is_active'=>1),
            //Packaging & Printing
            array('name'=>'','scat_id'=>'38','is_active'=>1),
            //Office & School Supplies
            array('name'=>'','scat_id'=>'39','is_active'=>1),
            //Service Equipment
            array('name'=>'','scat_id'=>'40','is_active'=>1),
            //Other
            array('name'=>'','scat_id'=>'41','is_active'=>1),
            //Maldives Food Products
            array('name'=>'','scat_id'=>'42','is_active'=>1),


















    ));


    }
}
