<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Subcategory;
class SubcatController extends Controller
{
    
    
    private $cat, $scat;
    public function __construct()
    {
        $this->middleware('auth');
        //$this-> cat = category::all();
        $this-> scat = Subcategory::all();
        $this-> cat = Category::get(); 
    }
   // public function index()
    // {
     // $roles = Roles::all();
    // $selectedRole = User::first()->role_id;
    // //return view('my_view', compact('roles', 'selectedRole');
     // }

    public function index()
    {
      return view('category.subcategory.view', ['scat' => $this->scat]);
     }

 
    public function create()
    {
        return view('category.subcategory.index', ['cat' => $this->cat]);
    }
 

    
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255 ',
            'cat' => 'required|max:255 ',
             ]);

        $d = new Subcategory();
        $d->name = $request->name;
        $d->cat_id = $request->cat;

        // $imgName = $request->file('icon')->getClientOriginalName();
        // $request->file('icon')->move(public_path('imagesx'), $imgName);
        // $product  = 'imagesx/'.$imgName;
        // $d->icon = $product;
        $d->save();
        return redirect()->route('subcat.create');
    }
 
    public function show($id)
    {
       
    }
  
    public function edit($id)
    {
        $d = Subcategory::findOrFail($id);
        return view('category.subcategory.edit', ['d' => $d]);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|max:255',
            'is_active' => 'required',
            
            ]);

        $d = Subcategory::findOrFail($id);
        $d->name = $request->name;
        $d->is_active = $request->is_active;
            
   
    
       
        $d->save();
        return redirect()->route('subcat.index');
    }
 
    public function destroy($id)
    {
        //
    }
}
