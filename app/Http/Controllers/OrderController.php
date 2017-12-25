<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Cart;
use App\Order;
use Auth;
use Toastr;
class OrderController extends Controller
{
     public function index()
    {
        //
    }

    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        
        $orders = Cart::where('user_id',$request->user_id)->where('is_active',1)->get();
        if(count($orders)>0){
                foreach($orders  as $count => $item) {
                $add_order = new Order();
                $add_order->product_id = $item->product_id;
                $add_order->user_id = $item->user_id;
                $add_order->store_id = $item->store_id;
                $add_order->qty = $item->qty;
                $add_order->status = 1;
                $add_order->is_active = 1;

                   $d = Cart::findOrFail($item->id);
                $d->is_active = 0;
                $d->save();
                $add_order->save();


            }
            return redirect()->back();
            }else{

            // Toastr::info('New product added successfully!', 'OOSMV', ["positionClass" => "toast-top-right"]);
            // return redirect()->back();
        }


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
