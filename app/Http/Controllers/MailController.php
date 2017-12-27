<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
class MailController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $mails = Mail::all();
        return view('client.mailbox.inbox',['mails'=>$mails]);
    }

 
    public function create()
    {
        $mails = Mail::all();
        return view('client.mailbox.create',['mails'=>$mails]);
    }

  
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        $mails = Mail::all();
        $d = Mail::findOrFail($id);
        $d->is_read = 1;
        $d->save();
        return view('client.mailbox.message',['mails'=>$mails]);
        
       // return redirect()->route('cart.index');

    }

  
    public function edit($id)
    {
        //
    }

   
    public function update(Request $request, $id)
    {
        return "The mail with" . $id . "Is updated";
    }

    
    public function destroy($id)
    {
      return "Deleted";
    }
}
