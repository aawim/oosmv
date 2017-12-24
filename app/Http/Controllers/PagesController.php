<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;
class PagesController extends Controller
{
   
 
    

    

    public function faq()
    {
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.faq',['cartitems'=>$cartitems]);
    }
    public function termsconditions()
    {
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.termsconditions',['cartitems'=>$cartitems]);
    }

    public function privacypolicy()
    {
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.privacypolicy',['cartitems'=>$cartitems]);
    }


    public function delivery()
    {
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.delivery',['cartitems'=>$cartitems]);
    }

    public function customerservice()
    {
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.customerservice',['cartitems'=>$cartitems]);
    }

    public function payment()
    {
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.payment',['cartitems'=>$cartitems]);
    }

    public function shipping()
    {
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('pages.shipping',['cartitems'=>$cartitems]);
        
    }
    
    
    
}
