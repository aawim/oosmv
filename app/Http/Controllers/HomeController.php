<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class HomeController extends Controller
{
 
    private  $products;

    public function __construct()
    {
        $this->middleware('auth');
        $this->products = Product::orderBy('name')->get();
    }
     public function index()
    {
           return view('wellhome',['products' => $this->products ]);
         // return "Home";
    }

    public function dash()
    {
        return view('dash.index');
    }


}
