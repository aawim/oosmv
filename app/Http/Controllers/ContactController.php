<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart;
use Auth;
use Toastr;
use App\Contact;
class ContactController extends Controller
{
   
    public function index()
    {
       
       
        if (Auth::check()){
        $cartitems = Cart::where('user_id',Auth::user()->id)->orderBy('product_id')->get();   
        return view('pages.contact',['cartitems'=>$cartitems]);
        }else{
            return view('pages.contact');

        }

    }


    public function create()
   {
    
    }

 
    public function store(Request $request)
    {
       


        $this->validate($request,[
            'message'=>'required ',
            'subject'=>'required',
             
            ]);




       $d = new Contact();
        
       if (Auth::check()){
        $d->user_id = Auth::user()->id;
        $d->email = Auth::user()->email;
        $d->name =  Auth::user()->name;
        $d->fromto = $request->store_id;
    }else{

        $d->user_id = 0;
        $d->email = $request->email;
        $d->name =  $request->name;
        $d->fromto = $request->store_id;
         }
        $d->subject = $request->subject;
        $d->store_id = $request->store_id;
        $d->message = $request->message;
        $d->is_read = 0;
        $d->is_active = 1;
        $d->user_ip = "127.0.0.1";
        $d->save();
        

        Toastr::success('We have recieved your message. Your message will be replied within 24 hours!', 'OOSMV', ["positionClass" => "toast-top-right"]);
        return redirect()->back();




       
        
    }

   
    public function show($id)
    {
        
    }
 
    public function edit($id)
    {
        //
    }

     
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
