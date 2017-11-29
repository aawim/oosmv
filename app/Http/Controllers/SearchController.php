<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class SearchController extends Controller
{
    public function liveSearch(Request $request)
    { 
        $search = $request->id;

        if (is_null($search))
        {
           return view('wellhome');		   
        }
        else
        {
            $products = Product::where('name','LIKE',"%{$search}%")->get();
            // $products = Product::where('is_active','1')->orderBy('name')->get();
            return view('pages.livesearchajax',['products' => $products ]);


        }
    }
}
