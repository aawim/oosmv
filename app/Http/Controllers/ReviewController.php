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
