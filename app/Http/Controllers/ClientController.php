<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cart;
use App\Mail;
use Auth;
use App\Category;
class ClientController extends Controller
{
 


    public function __construct()
    {
        $this->middleware('auth');
    }










    public function index()
    {
        
        // if (Auth::check()){
        //     $categories = Category::where('is_active','1')->orderBy('name')->get();
        //     $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        //     return view('client.myaccount',['cartitems'=>$cartitems,'categories'=>$categories]);
        //     }else{
    
        //     $categories = Category::where('is_active', 1)->orderBy('name')->get();
        //     return view('client.myaccount',[ 'categories'=>$categories]);
        //     }
        $mails = Mail::where('is_active',1)->get();
       
        return view('client.pages.dashboard',['mails'=>$mails]);
   }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
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
