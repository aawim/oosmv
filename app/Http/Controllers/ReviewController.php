<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use Auth;
use Toastr;
class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        //
    }
 
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {



       


        $d = new Review();
        $d->user_id = Auth::user()->id;
        $d->product_id = $request->product_id;
        $d->rating = $request->backing5;
        $d->description = $request->description;
        $d->is_active = 1;
        $d->save();
        Toastr::warning('Product cannot be created, Create a store first', 'OOSMV', ["positionClass" => "toast-top-right"]);
        return redirect()->back();


 
    }
 
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
