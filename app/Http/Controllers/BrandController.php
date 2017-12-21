<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
class BrandController extends Controller
{
  

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
       $d =  Brand::all();  
       return view('brand.index')->with('d',$d);
    }

    
    public function create()
    {
        return view('brand.create');
    }
 
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255 ',
            'icon' => 'image|mimes:png,jpeg,jpg',
                
            ]);

        $d = new Brand();
        $d->name = $request->name;
        $imgName = $request->file('icon')->getClientOriginalName();
        $request->file('icon')->move(public_path('imagesx'), $imgName);
        $product  = 'imagesx/'.$imgName;
        $d->icon = $product;
        $d->is_active = 0;
        $d->save();
        return redirect()->route('brand.index');
    }
 
    public function show($id)
    {
       
    }
   
    public function edit($id)
    {
        $d = Brand::findOrFail($id);
        return view('brand.edit', ['d' => $d]);
    }

       public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'icon' => 'image|mimes:png,jpeg,jpg',
            'is_active' => 'required',
            
            ]);

        $d = Brand::findOrFail($id);
        $d->name = $request->name;
        $d->is_active = $request->is_active;
            
          
       if ($request->hasFile('icon')) {
            
            $imgName = $request->file('icon')->getClientOriginalName();
            $request->file('icon')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            $d->icon = $product;
    
            }else{
                $current_image = $d->icon;
                    }
    
       
        $d->save();
        return redirect()->route('brand.index');
    }


    public function destroy($id)
    {
         
    }
}
