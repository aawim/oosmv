<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Cart;
use App\Category;
use App\Product;
use App\Order;
use App\Store;
use App\User;
use Auth;
use Toastr;
class OrderController extends Controller
{
  
    public function __construct()
    {
        $this->middleware('auth');
    }
      public function index()
    {
         $id = Auth::user()->id;
        
        if (Auth::check()){
    //     $categories = Category::where('is_active', 1)->orderBy('name')->get();
    //     $cartitems = Cart::where('user_id', $id)->orderBy('product_id')->get();
    //     $orders = Order::select('store_id')->distinct()->where('user_id',$id)->where('is_active',1)->where('status',1)->get();
    //    // $orders = Order::select('ref')->where('user_id',$id)->where('is_active',1)->where('status',1)->get();
    //     return view('client.pages.orders',['cartitems'=>$cartitems, 'categories'=>$categories,'orders'=>$orders]);
    //     }else{

    //     $categories = Category::where('is_active', 1)->orderBy('name')->get();
    //     return view('client.pages.orders',[ 'categories'=>$categories]);
   
   
   
    //$stors = Store::
    $orders = Order::all();
    $users = User::all();
    $stores = Store::all();
    return view('client.pages.orders.index',['orders'=>$orders, 'users' => $users, 'stores'=> $stores]);


 

        }
    }


    public function orderdetail($id)
    {
        if (Auth::check()){
        $categories = Category::where('is_active', 1)->orderBy('name')->get();
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();
        $orders = Order::where('store_id',$id)->where('is_active',1)->where('status',1)->get();
        $products = Product::where('is_active',1)->get();
        $stores = Store::where('is_active',1)->get();
        return view('client.pages.orderdetail',['cartitems'=>$cartitems, 'categories'=>$categories,'orders'=>$orders,'products'=>$products,'stores'=>$stores]);
        }else{

        $categories = Category::where('is_active', 1)->orderBy('name')->get();
        return view('client.pages.orderdetail',[ 'categories'=>$categories]);
        }

       
    }

    public function create()
    {
        //
    }


    public function guidv4()
{
    if (function_exists('com_create_guid') === true)
     return trim(com_create_guid(), '{}');

    $data = openssl_random_pseudo_bytes(16);
    $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // set version to 0100
    $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // set bits 6-7 to 10
    return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
}




    public function store(Request $request)
    {
       $orders = Cart::where('user_id',$request->user_id)->where('is_active',1)->orderBy('store_id')->get();
       $rendomnumber = $this->guidv4();
       $temp_store_id  =  $orders[0]['store_id'];
            if(count($orders)>0){
            foreach($orders  as $count => $item) {
                if($item->store_id != $temp_store_id){
                    $rendomnumber = $this->guidv4();
               } 
                $add_order = new Order();
                $add_order->product_id = $item->product_id;
                $add_order->user_id = $item->user_id;
                $add_order->store_id = $item->store_id;
                $add_order->ref = $rendomnumber;
                $add_order->qty = $item->qty;
                $add_order->status = 1;
                $add_order->is_active = 1;
                $add_order->save();

                // $d = Cart::findOrFail($item->id);
                // $d->is_active = 0;
                // $d->delete();
           }
           Toastr::success('Your order was processed successfully!', 'OOSMV', ["positionClass" => "toast-top-right"]);
            return redirect()->back();
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
