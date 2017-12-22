<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Carousel;
class CarouselController extends Controller
{
   
    public function index()
    {
              
       $d = Carousel::where('is_active', 0)->orderBy('name')->get();
       return view('carousel.index',['d' => $d ]);
         
    }

     
    public function create()
    {
        return view('carousel.create');
    }

   
    public function store(Request $request)
    {
        $this->validate($request,[
            'icon' => 'image|mimes:png,jpeg,jpg',
            'priceTag' => 'image|mimes:png,jpeg,jpg',
            ]);

        $d = new Carousel();
        $imgName = $request->file('icon')->getClientOriginalName();
        $request->file('icon')->move(public_path('imagesx'), $imgName);
        $product  = 'imagesx/'.$imgName;
        $d->name = $product;

        $imgName = $request->file('priceTag')->getClientOriginalName();
        $request->file('priceTag')->move(public_path('imagesx'), $imgName);
        $priceTag  = 'imagesx/'.$imgName;
        $d->price_tag = $priceTag;

        $d->title_one = $request->title_one;
        $d->title_two = $request->title_two;
        $d->title_three = $request->title_three;

        $d->is_active = 0;
        $d->is_price_active = 0;
        $d->save();
      //  return redirect()->route('brand.index');
        return redirect()->back();

    }
    
    public function show($id)
    {
         
    }
 
    public function edit($id)
    {
         
    }
 
    public function update(Request $request, $id)
    {
        
    }
 
    public function destroy($id)
    {
        $d = Carousel::findOrFail($id);
        $d->delete();
        return redirect()->back();
    }
}
