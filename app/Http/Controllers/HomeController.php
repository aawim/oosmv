<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Cart;
use Auth;
class HomeController extends Controller
{
 
    private  $products;

    public function __construct()
    {
       // $this->middleware('auth');
       // $this->products = Product::where('is_active','1')->orderBy('name')->get();
     
       
      
    }
     public function index()
    {
        //$products = Product::where('user_id',Auth::user()->id)->orderBy('product_id')->where('is_active',1)->get();
        // $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        // $products = Product::where('is_active','1')->orderBy('name')->get();
        // return view('wellhome',['products' => $products, 'cartitems'=>$cartitems ]);


        if (Auth::check()){
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        $products = Product::where('is_active','1')->orderBy('name')->get();
        return view('wellhome',['products' => $products, 'cartitems'=> $cartitems, 'categories' => $categories  ]);
        }else{
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $products = Product::where('is_active','1')->orderBy('name')->get();
        return view('wellhome',['products' => $products, 'categories' => $categories]);
       }





         
    }





    




    public function dash()
    {
        return view('dash.index');
    }


}
