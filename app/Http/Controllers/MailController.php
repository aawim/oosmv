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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.mailbox.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mails = Mail::where('id',$id)->get();
         


        $d = Mail::findOrFail($id);
        $d->is_read = 1;
        $d->save();
        return view('client.mailbox.message',['mails'=>$mails]);
        
       // return redirect()->route('cart.index');






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
