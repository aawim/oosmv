<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cart;
use Auth;
class ClientController extends Controller
{
 
    public function index()
    {
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        return view('client.myaccount',['cartitems'=>$cartitems]);
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
