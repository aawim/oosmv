<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductPhoto;
class ProductPhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

  

    public function addPhoto(Request $request)
    {

        $d = $request->id;
        return view('product.productPhoto',['d'=>$d]);
    }
    



    public function create()
    {
      
    }

 
    public function store(Request $request)
    {
      
        $d = new ProductPhoto();
        // $d->product_id = $request->product_id;
        //         $d->name = $request->file;
        //         $d->save();
        

        if($request->hasFile('photos')){
            foreach($request->file('photos') as $count => $file) {
                $file->move(base_path().'/public/uploads/', $file->getClientOriginalName());
                
                $d->name = $request->photos[$count]->getClientOriginalName();
               
            }
            $d->product_id = $request->product_id;
            $d->save();
        }

        



      return redirect()->back();
    }

  
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
