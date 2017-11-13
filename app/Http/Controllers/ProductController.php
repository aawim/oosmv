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
        $this->d = Product::orderBy('name')->get();
       
    }

    public function index()
    {
        return view('product.index', 
        [   'd' => $this->d ] );
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


        /* $imgName = $request->file('icon')->getClientOriginalName();
        // $request->file('icon')->move(public_path('imagesx'), $imgName);
        // $product  = 'imagesx/'.$imgName;
        // $d->image = $product; 
        */

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
        return "Product Edit";
    }
 
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        $d = Product::findOrFail($id);
        $d->delete();
        return redirect()->route('product.index');
    }
}
