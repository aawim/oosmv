<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
         return view('pages.cart');
        //return "Added to cart";
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // return "Added to cart";
        // dd($request->id);
        return view('pages.cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
