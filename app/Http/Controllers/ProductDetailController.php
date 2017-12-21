<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Review;
use App\Cart;
use Auth;
class ProductDetailController extends Controller
{
    
    public function index()
    {
        $reviews = Review::where('is_active','1')->get();     
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        return view('pages.detail',['categories'=> $categories, 'reviews' => $reviews]);
    }

 
  
   

    
    public function show($id)
    {
       
        // $categories = Category::where('is_active','1')->orderBy('name')->get();
        // $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        // $product = Product::find($id);
        // return view('pages.detail',['product'=>$product,'cartitems'=> $cartitems, 'categories'=> $categories ]);




        if (Auth::check()){
            $reviews = Review::where('is_active','1')->where('product_id',$id)->get(); 
            $categories = Category::where('is_active','1')->orderBy('name')->get();
            $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
            $product = Product::find($id);
           
           if(count($product)>0){
            return view('pages.detail',['product'=>$product,'cartitems'=> $cartitems, 'categories'=> $categories , 'reviews' => $reviews ]);
           }else{

            
           }
           
            
            }else{
          $reviews = Review::where('is_active','1')->get(); 
          $categories = Category::where('is_active','1')->orderBy('name')->get();
          $product = Product::find($id);
          
          
          if(count($product)>0){
            return view('pages.detail',['product'=>$product, 'categories'=> $categories , 'reviews' => $reviews ]);
           }else{

            
           }


         }









    }

    
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        //
    }
 
    public function destroy($id)
    {
        //
    }
}
