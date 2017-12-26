<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Cart;
use App\Category;
use App\Product;
use App\Store;
use Toastr;


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
     $cartitems = Cart::where('user_id',Auth::user()->id)->where('is_active', 1)->orderBy('product_id')->get();
     return view('pages.cart',['cartitems' => $cartitems ] );
    }

    public function create()
    {
        return "create"; 
    }

    public function store(Request $request)
    {

         
         $ifexixts = Cart::where('user_id',Auth::user()->id)->where('is_active', 1)->where('product_id', $request->product_id)->get();
           if(count($ifexixts)> 0 ){
                $d = Cart::findOrFail($ifexixts[0]['id']);
                $d->qty = $d->qty + 1;
                $d->save();
                return redirect()->back();
                       }else{
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
              return redirect()->back();

            }

           
        }




        
  
    public function edit($id)
    {
        $categories = Category::where('is_active', 1)->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->where('is_active',1)->where('id',$id)->orderBy('store_id')->get();
        return view('pages.cartedit',['cartitems' => $cartitems, 'categories'=> $categories]);
    }

  
    public function update(Request $request, $id)
    {
        $d = Cart::findOrFail($id);
        $d->qty = $request->qty;
        $d->save();
        return redirect()->route('cart.index');
    }

  
    public function destroy($id)
    {
        $d = Cart::findOrFail($id);
        $d->delete();
        return redirect()->route('cart.index');
    }
}
