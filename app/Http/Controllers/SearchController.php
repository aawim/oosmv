<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use App\Category;
use Auth;
class SearchController extends Controller
{
    public function liveSearch(Request $request)
    { 
        $search = $request->id;

        if (is_null($search))
        {
           return view('pages.products');		   
        }
        else
        {
            $products = Product::where('name','LIKE',"%{$search}%")->get();
            // $products = Product::where('is_active','1')->orderBy('name')->get();
            return view('pages.livesearchajax',['products' => $products ]);


        }

    }



public function search()
    {
         if (Auth::check()){
            $categories = Category::where('is_active','1')->orderBy('name')->get();
            $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
            $products = Product::where('is_active','1')->orderBy('name')->get();
            return view('pages.new_product',['products' => $products,'cartitems' => $cartitems, 'categories' => $categories] );
            }else{
            $categories = Category::where('is_active','1')->orderBy('name')->get();
            $products = Product::where('is_active','1')->orderBy('name')->get();
            return view('pages.new_product',['products' => $products, 'categories' => $categories, ] );
           }
        //return view('pages.sales');
      }



      public function catesearch(Request $request)
      {
           if (Auth::check()){
                $categories = Category::where('is_active','1')->orderBy('name')->get();
                $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
              $products = Product::where('is_active','1')->where('cat_id',$request->id)->orderBy('name')->get();
              return view('pages.new_product',['products' => $products,'cartitems' => $cartitems , 'categories' => $categories] );
                }else{
              $categories = Category::where('is_active','1')->orderBy('name')->get();
              $products = Product::where('is_active','1')->where('cat_id',$request->id)->orderBy('name')->get();
              return view('pages.new_product',['products' => $products, 'categories' => $categories, ] );
             }
           
 

 

        }


}
