<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddressBookController extends Controller
{
     
    public function index()
    {
        return view('client.address.index');
    }

   
    public function create()
    {
        return view('client.address.create');
    }

    
    public function store(Request $request)
    {
        return "User Stored";
    }

     
    public function show($id)
    {
        return view('client.address.edit');
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
