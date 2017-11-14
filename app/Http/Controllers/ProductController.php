<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Category;
use App\Product;
class ProductController extends Controller
{
    private  $categories, $brands, $d;
    
    public function __construct()
    {
        $this->middleware('auth');
        $this->results = ["Document", "Electronic format" ];
        $this->brands = Brand::orderBy('name')->get();
        $this->categories = Category::orderBy('name')->get();
        $this->products = Product::orderBy('name')->get();
       
    }

    public function index()
    {
        return view('product.index', 
        [   'products' => $this->products ] );
    }

    public function create()
    {


        return view('product.create', 
        [   'results' => $this->results,
            'brands' => $this->brands,
            'categories' => $this->categories
            
            ] );
         
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:255 ',
            'icon' => 'image|mimes:png,jpg,jpeg',
            'cate'=>'required',
            'scat'=>'required',
            ]);

        $d = new Product();
        $d->name = $request->name;
        $d->cat_id = $request->cate;
        $d->scat_id =$request->scat;
        $d->brand_id =$request->brand;
        $d->size =$request->size;
        $d->price =$request->price;
        $d->dprice =$request->dprice;
        $d->qty = $request->qty;
        $d->store_id = $request->store;
        $d->is_active = 0;
 

        if ($request->hasFile('icon')) {
            
            $imgName = $request->file('icon')->getClientOriginalName();
            $request->file('icon')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            
            $d->image = $product;
            }else{
                $d->image = "None";
                    }
        $d->save();
        return redirect()->route('product.create');
    }
    
    public function show($id)
    {
        //
    }
 
    public function edit($id)
    {
        $d = Product::findOrFail($id);
        return view('product.edit', ['d' => $d, 'categories' => $this->categories,'brands' => $this->brands]);
    }
 
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required|max:255 ',
            'cate'=>'required',
            'scat'=>'required',
            ]);

      
        $d = Product::findOrFail($id);
        $d->name = $request->name;
        $d->cat_id = $request->cate;
        $d->scat_id =$request->scat;
        $d->brand_id =$request->brand;
        $d->size =$request->size;
        $d->price =$request->price;
        $d->dprice =$request->dprice;
        $d->qty = $request->qty;
        $d->store_id = $request->store;
        $d->is_active = $request->is_active;
 

        if ($request->hasFile('image_file')) {
            
            $imgName = $request->file('image_file')->getClientOriginalName();
            $request->file('image_file')->move(public_path('imagesx'), $imgName);
            $product  = 'imagesx/'.$imgName;
            
            $d->image = $product;




            }else{
                $d->image = $d->image;
                    }









                    
        $d->save();
        return redirect()->route('product.index');
    }

    
    public function destroy($id)
    {
        $d = Product::findOrFail($id);
        $d->delete();
        return redirect()->route('product.index');
    }
}
