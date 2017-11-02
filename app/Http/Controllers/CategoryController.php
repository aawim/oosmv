<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{
   
    public function index()
    {
       $d =  Category::all();  
        return view('category.index')->with('d',$d);
    }







    public function create()
    {
        //
    }

    public function store(Request $request)
    {


      


        $this->validate($request,[
            'name'=>'required|max:255 ',
            'icon' => 'image|mimes:png',
                
            ]);

        $d = new Category();
        $d->name = $request->name;
        $imgName = $request->file('icon')->getClientOriginalName();
        $request->file('icon')->move(public_path('imagesx'), $imgName);
        $product  = 'imagesx/'.$imgName;
        $d->icon = $product;
        $d->save();
        return redirect()->route('category.index');



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
