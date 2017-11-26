<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\Product;
use App\Store;
class CartController extends Controller
{
    private  $cartitems, $products;
    public function __construct()
    {
        $this->middleware('auth');
        $this->products = Product::orderBy('name')->get();
    }

    public function index()
    {
     $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
     return view('pages.cart',['cartitems' => $cartitems ] );
    }



    public function create()
    {
        return "create"; 
    }

    public function store(Request $request)
    {
   
        // $this->validate($request,[
        //     'user_id'=>'required ',
        //     'product_id'=>'required ',
        //      ]);

        $d = new Cart();
        $d->user_id = Auth::user()->id;
        $d->store_id = $request->store_id;
        $d->product_id = $request->product_id;
       
       
       if($request->qty== null){
        $d->qty = 1;
       }else{
        $d->qty = $request->qty;
       }
        
       
       
       
        $d->is_active = 1;
        $d->save();

        //return view('pages.cart');
        return redirect()->route('cart.index');
   
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
        $d = Cart::findOrFail($id);
        $d->delete();
        return redirect()->route('cart.index');
    }
}
