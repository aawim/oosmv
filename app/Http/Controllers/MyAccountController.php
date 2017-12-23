<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;
class MyAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
       
    }

    public function index()
    {
        //
    }


    public function editAccountInformation($id)
    {
        
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('client.pages.myaccountedit',['cartitems'=>$cartitems]);
         
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
