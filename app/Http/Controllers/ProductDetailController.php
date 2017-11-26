<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Auth;
class ProductDetailController extends Controller
{
    
    public function index()
    {
        return view('pages.detail');
    }

 
    public function create()
    {
        
    }

  
    public function store(Request $request)
    {
       
    }

    
    public function show($id)
    {
 
        $product =Product::find($id);
        return view('pages.detail',['product'=>$product ]);
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
