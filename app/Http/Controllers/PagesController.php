<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use App\Category;
use Auth;
class PagesController extends Controller
{
   
 
    

    public function aboutus()
    {
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.info.aboutus',['cartitems'=>$cartitems,'categories'=>$categories]);
    }

    public function faq()
    {
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.info.faq',['cartitems'=>$cartitems,'categories'=>$categories]);
    }
    public function termsconditions()
    {
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.info.termsconditions',['cartitems'=>$cartitems,'categories'=>$categories]);
    }

    public function privacypolicy()
    {
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.info.privacypolicy',['cartitems'=>$cartitems,'categories'=>$categories]);
    }


    public function delivery()
    {
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.info.delivery',['cartitems'=>$cartitems,'categories'=>$categories]);
    }

    public function customerservice()
    {
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.info.customerservice',['cartitems'=>$cartitems,'categories'=>$categories]);
    }

    public function payment()
    {
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.info.payment',['cartitems'=>$cartitems,'categories'=>$categories]);
    }

    public function shipping()
    {
        $categories = Category::where('is_active','1')->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.info.shipping',['cartitems'=>$cartitems,'categories'=>$categories]);
        
    }
    
    
    
}
