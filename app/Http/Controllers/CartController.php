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
        $this->cartitems = Cart::orderBy('product_id')->get();
         
    }

    public function index()
    {
         $storeid = Store::where('user_id', Auth::user()->id)->where('is_active',1)->first();
         if($storeid == null){
            return "Nothing found";
         }else{
            $products = Product::where('store_id', $storeid->id)->where('is_active',1)->first();
         }
         return view('pages.cart',['products'=>$products]);
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
        $d->product_id = $request->product_id;
        $d->qty = $request->qty;
        $d->is_active = 0;
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
        //
    }
}
