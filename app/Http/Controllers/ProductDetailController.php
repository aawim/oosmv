<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductDetailController extends Controller
{
    
    public function index()
    {
        return view('pages.detail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

  
    public function store(Request $request)
    {
       
    }

    
    public function show($id)
    {
                       
        

        $product = Product::findOrFail($id);
        return view('pages.detail',['product'=>$product]);
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
