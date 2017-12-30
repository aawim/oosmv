<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail;
use App\Reply;
class MailController extends Controller
{
   

    public function __construct()
    {
        $this->middleware('auth');
    }

   
    public function index()
    {
    $replies = Reply::all();
    $mails = Mail::where('is_active',1)->get();
    return view('client.mailbox.inbox',['mails'=>$mails,'replies'=>$replies]);

      
    }

 
    public function create()
    {
        $mails = Mail::where('is_active',1)->get();
        return view('client.mailbox.create',['mails'=>$mails]);
    }

  
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        
        $mails = Mail::where('is_active',1)->get();
        $mail = Mail::findOrFail($id);
        $replies = Reply::where('mail_id',$id)->get();
       




        $d = Mail::findOrFail($id);
        $d->is_read = 1;
        $d->save();
        

        return view('client.mailbox.message',['mail'=>$mail,'mails'=>$mails,'replies'=>$replies]);


    //    return redirect()->route('cart.index');
     
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
       

        $d = Mail::findOrFail($id);
        $d->is_active = 0;
        $d->save();

        $mails = Mail::all();
        return view('client.mailbox.inbox',['mails'=>$mails]);
         
    }
}
