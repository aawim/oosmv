<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  
    public function index()
    {
        
    }

   
    public function create()
    {
        //
    }

 
    public function store(Request $request)
    {
        //
    }
 
    public function show($id)
    {
        return view('client.profile.index');
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
