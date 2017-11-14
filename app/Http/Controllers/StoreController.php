<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Store;
use Auth;
class StoreController extends Controller
{
 




    private  $stores ;
    
    public function __construct()
    {
        $this->middleware('auth');
       $this->stores = Store::orderBy('name')->get();
       
    }







    public function index()
    {


        return view('store.index',['stores' => $this->stores ] );

 
    }

  
    public function create()
    {
        return view('store.create');
    }

   
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
 

        if ($request->hasFile('logos')) {
            
            $imgName = $request->file('logo')->getClientOriginalName();
            $request->file('logo')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            
            $d->logo = $product;
            }else{
                $d->logo = "None";
                    }
        $d->save();
        return redirect()->route('store.create');




    }

  
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        $d = Store::findOrFail($id);
        return view('store.edit', ['d' => $d]);
    }
 
    public function update(Request $request, $id)
    {
        //
    }

  
    public function destroy($id)
    {
        $d = Store::findOrFail($id);
        $d->delete();
        return redirect()->route('store.index');
    }
}
