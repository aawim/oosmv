<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use App\AddressBook;
use App\Store;
use Toastr;
class AddressBookController extends Controller
{
     
    public function index()
    {
        $this->middleware('auth');
        $errors = "";
        return view('client.address.index',['errors'=>$errors]);
    }

   
    public function create()
    {
        return view('client.address.create');
    }

    
    public function store(Request $request)
    {
        $errors = "";
        $store_id = Store::where('user_id', Auth::user()->id)->get();
        $user = User::where('contact', $request->searchtext)->get();
        
        if(count($store_id)>0 AND count($user)>0){
        $d = new AddressBook();
        $d->user_id = $user[0]['id'];
        $d->store_id = $store_id[0]['id'];
        $d->is_active=0;
        $d->save();
        Toastr::success('New product added successfully!', 'OOSMV', ["positionClass" => "toast-top-right"]);
        return redirect()->route('address.index',['errors'=>$errors]);
        }else{
           
        $errors = "The person is not yet in the system. Please register";  
        Toastr::success('New product added successfully!', 'OOSMV', ["positionClass" => "toast-top-right"]);      
        return redirect()->route('address.index',['errors'=>$errors]);
        }
        
        
        
        
      

       
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
