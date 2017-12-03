<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
   



    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
       $d =  Category::all();  
        return view('category.index')->with('d',$d);
    }







    public function create()
    {
        return view('category.create');
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'name'=>'required|max:255 ',
           /* 'icon' => 'image|mimes:png', */
             ]);

        $d = new Category();
        $d->name = $request->name;

        if ($request->hasFile('icon')) {
            
            $imgName = $request->file('icon')->getClientOriginalName();
            $request->file('icon')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            $d->icon = $product;
            $id->is_active = 0;
    
            }else{
                $current_image = $d->icon;
                    }
       
        $d->save();
        return redirect()->route('category.index');



    }

  
    public function show($id)
    {
     
    }

  
    public function edit($id)
    {
        $d = Category::findOrFail($id);
        return view('category.edit', ['d' => $d]);

      
    }



    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'icon' => 'image|mimes:png,jpeg,jpg',
            'is_active' => 'required',
            
            ]);

        $d = Category::findOrFail($id);
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
        return redirect()->route('category.index');
    }

   
    public function destroy($id)
    {
        $d = Category::findOrFail($id);
        $d->delete();
        return redirect()->route('category.index');
    }
}
