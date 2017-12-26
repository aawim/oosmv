<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Store;
use App\Type;
use App\Product;
use Auth;
use Toastr;
class StoreController extends Controller
{
 
    private  $stores, $types;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->stores = Store::orderBy('name')->get();
        $this->types = Type::orderBy('name')->get();;
    }


    public function index()
    {
       return view('store.index',['stores' => $this->stores ] );
    }

  
    public function create()
    {
        return view('store.create');
    }





    // public function adminstorecreate(Request $request)
    // {
       
       
       
    //      $this->validate($request,[
    //         'name'=>'required|max:255 ',
    //         'logo' => 'image|mimes:png,jpg,jpeg',
    //         'type'=>'required',
    //         'location'=>'required',
    //         'contact'=>'required',
    //         'email'=>'required',
    //         ]);

    //     $d = new Store();
    //     $d->name = $request->name;
    //     $d->type = $request->type;
    //     $d->location =$request->location;
    //     $d->contact =$request->contact;
    //     $d->email =$request->email;
    //     $d->is_active = 0;
    //     $d->user_id = 0;
 

    //     if ($request->hasFile('logo')) {
            
    //         $imgName = $request->file('logo')->getClientOriginalName();
    //         $request->file('logo')->move(public_path('imagesx'), $imgName);
    //         $product  = 'imagesx/'.$imgName;
    //         $d->logo = $product;
    //         }else{
    //             $d->logo = "None";
    //         }


                
    //        $d->save();
    //        Toastr::success('A store created successfully created in the systems for the current user', 'Store Creation', ["positionClass" => "toast-top-right"]);
    //        return redirect()->route('store.create');
                
    // }

























   
    public function store(Request $request)
    {
         $this->validate($request,[
            'name'=>'required|max:255 ',
            'logo' => 'image|mimes:png,jpg,jpeg',
            'type'=>'required',
            'location'=>'required',
            'contact'=>'required',
            'email'=>'required',
            ]);

        $d = new Store();
        $d->name = $request->name;
        $d->type = $request->type;
        $d->location =$request->location;
        $d->contact =$request->contact;
        $d->email =$request->email;
        $d->is_active = 0;
        $d->user_id = Auth::user()->id;
 

        if ($request->hasFile('logo')) {
            
            $imgName = $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            $d->logo = $product;
            }else{
                $d->logo = "None";
                    }


                    $user = Store::where('user_id', '=', Auth::user()->id)->get();
                    if ($user =='[]') {
                        $d->save();
                        Toastr::success('A store created successfully created in the systems for the current user', 'Store Creation', ["positionClass" => "toast-top-right"]);
                        return redirect()->route('store.create');
                          
                    }else{
                        Toastr::warning('Store Creation', 'A store already exixts in the systems for the current user.', ["positionClass" => "toast-top-right"]);
                        return redirect()->route('store.create');
                    }

    }














      public function show($id)
    {
      
    }

    
    public function edit($id)
    {
        $d = Store::findOrFail($id);
        return view('store.edit', ['d' => $d, 'types' => $this->types]);
    }
 
    public function update(Request $request, $id)
    {
         $this->validate($request,[
            'name'=>'required|max:255 ',
            'logo' => 'image|mimes:png,jpg,jpeg',
            'type'=>'required',
            'location'=>'required',
            'contact'=>'required',
            'email'=>'required',
            ]);

        $d = Store::findOrFail($id);
        $d->name = $request->name;
        $d->type = $request->type;
        $d->location =$request->location;
        $d->contact =$request->contact;
        $d->email =$request->email;
        $d->is_active =$request->is_active;
        $d->user_id = $d->user_id;
 

        if ($request->hasFile('logo')) {
            
            $imgName = $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            $d->logo = $product;
            }else{
                $d->logo = "None";
                    }
               
   $d->save();
   Toastr::success('A store created successfully created in the systems for the current user', 'Store Creation', ["positionClass" => "toast-top-right"]);
   return redirect()->route('store.index');
      }






 
    public function destroy($id)
    {
        $store = Store::findOrFail($id);
        $store->products()->get();
        if($store->products()->get()->count() > 0){
        Toastr::warning('A store cannot be deleted while it contains products', 'Store Deletion', ["positionClass" => "toast-top-right"]);
    }else{
        $store->delete();
        Toastr::success('A store deleted successfully!', 'Store Deletion', ["positionClass" => "toast-top-right"]);
    }
        return redirect()->route('store.index');
 
    }


    
}
