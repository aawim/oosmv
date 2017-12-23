<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductPhoto;
use Toastr;
class ProductPhotoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
         
    }
  
    public function viewPhoto(Request $request)
    {
        $productPhotos = ProductPhoto::where('product_id', $request->id)->get();
        return view('product.productPhotoIndex',['productPhotos'=>$productPhotos]);
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
 
        if($request->hasFile('photos')){
            foreach($request->file('photos') as $count => $file) {
                $d = new ProductPhoto();
                $file->move(base_path().'/public/uploads/', $file->getClientOriginalName());
                $d->name = 'uploads/'.$request->photos[$count]->getClientOriginalName();
                $d->product_id = $request->product_id;
                $d->save();
               
            }
            Toastr::success('A product photo created successfully.', 'SSOMV', ["positionClass" => "toast-top-right"]);
                return redirect()->back();
        }

      return redirect()->back();
    }
  
    public function show($id)
    {
        $productPhotos = ProductPhoto::where('product_id', $id)->get();
        return view('product.productPhotoIndex',['productPhotos'=>$productPhotos]);
    }
   
    public function edit($id)
    {
        $productPhoto = ProductPhoto::where('id', $id)->get();
        return view('product.productPhotoEdit',['productPhoto'=> $productPhoto]); 
    }

     public function update(Request $request, $id)
    {
       
  
        $d = ProductPhoto::findOrFail($id);
      
  

        if ($request->hasFile('image_file')) {
            
            $imgName = $request->file('image_file')->getClientOriginalName();
            $request->file('image_file')->move(public_path('uploads'), $imgName);
            $product  = 'uploads/'.$imgName;
            $d->name = $product;
            }else{
                $d->name = $d->image;
            }
 
        $d->save();
        Toastr::success('A product photo updated successfully.', 'SSOMV', ["positionClass" => "toast-top-right"]);
        return redirect()->back();




    }
   
    public function destroy($id)
    {
        $d = ProductPhoto::findOrFail($id);
        $d->delete();
        Toastr::Error('A product photo deleted successfully.', 'SSOMV', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
