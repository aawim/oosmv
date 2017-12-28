<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
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
            return view('pages.livesearchajax',['products' => $products ]);
        }

    }




    public function userSearch(Request $request)
    {
        $user = User::findOrFail($request->searchText);
        dd($user);

        return "asas";
    }






   public function viewStores()
    {

        if (Auth::check()){
            
            $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
            $stores = Store::where('is_active','1')->orderBy('name')->get();
            return view('pages.stores',['cartitems' => $cartitems, 'stores'=> $stores] );
            }else{
            $stores = Store::where('is_active','1')->orderBy('name')->get();
            return view('pages.stores',[ 'stores'=> $stores  ] );
           }
                
    }

    public function oneStore($id)
    {
        if (Auth::check()){
            $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
            $stores = Store::where('is_active','1')->where('id',$id)->orderBy('name')->get();
            return view('pages.onestore',['cartitems' => $cartitems, 'stores'=> $stores] );
            }else{
            $stores = Store::where('is_active','1')->orderBy('name')->get();
            return view('pages.onestore',[ 'stores'=> $stores  ] );
           }
    }







    public function shopProductSearch($id)
    {
         if (Auth::check()){
            $categories = Category::where('is_active','1')->orderBy('name')->get();
            $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
            $products = Product::where('is_active','1')->where('store_id',$id)->orderBy('name')->get();
            return view('pages.shop',['products' => $products,'cartitems' => $cartitems, 'categories' => $categories] );
            }else{
            $categories = Category::where('is_active','1')->orderBy('name')->get();
            $products = Product::where('is_active','1')->where('store_id',$id)->orderBy('name')->get();
            return view('pages.shop',['products' => $products, 'categories' => $categories, ] );
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
