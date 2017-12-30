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
     
   
   public $store_id, $addresess;
    public function __construct()
    {
        $this->middleware('auth');
       
        
    }
   
   
   
   
    public function index()
    {
        $store_id = Store::where('user_id', Auth::user()->id)->get();
        $addresess = AddressBook::where('store_id',$store_id[0]['id'])->get();
        $users = User::all();
        return view('client.address.index',['addresess'=>$addresess,'users' => $users] );

   }

   
    public function create()
    {
        return view('client.address.create');
    }

    
    public function store(Request $request)
    {

        if($request->submit == "Add new contact" AND $request->searchtext != "")
        {
            $store_id = Store::where('user_id', Auth::user()->id)->get();
            $user = User::where('contact', $request->searchtext)->get();
        
            if($request->searchtext === null ){
                Toastr::warning('Please enter customer mobile number', 'OOSMV', ["positionClass" => "toast-top-right"]);
                $store_id = Store::where('user_id', Auth::user()->id)->get();
                $addresess = AddressBook::where('store_id',$store_id[0]['id'])->get();
                
                $users = User::all();
                return view('client.address.index',['addresess'=>$addresess,'users' => $users] );

            }else{

    if(count($user) > 0){
        $Address = AddressBook::where('user_id', $user[0]['id'])->where('store_id',$store_id[0]['id'])->get();
                if(count($Address)>0){
                  
                        Toastr::info('The customer already exists!', 'OOSMV', ["positionClass" => "toast-top-right"]);
                        return redirect()->route('address.index' );
                }else{
                        $d = new AddressBook();
                        $d->user_id = $user[0]['id'];
                        $d->store_id = $store_id[0]['id'];
                        $d->is_active=0;
                        $d->save();
                        Toastr::success('New customer added successfully!', 'OOSMV', ["positionClass" => "toast-top-right"]);
                        return redirect()->route('address.index' );

                }
    } else {

        Toastr::info('The user could not found', 'OOSMV', ["positionClass" => "toast-top-right"]);
        return redirect()->route('address.index' );

    }



}
     
        }else{
            Toastr::info('The user could not found', 'OOSMV', ["positionClass" => "toast-top-right"]);
            return redirect()->route('address.index' );
             
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
