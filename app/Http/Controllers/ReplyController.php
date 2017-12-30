<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reply;
use Auth;
use Toastr;
class ReplyController extends Controller
{
   
    public function index()
    {
        //
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request )
    {


       


        $this->validate($request,[
        'message'=>'required ',
          'mail_id'=>'required ',
             
            ]);

       $d = new Reply();
   
      $d->user_id = Auth::user()->id;
      $d->mail_id = $request->mail_id;
      $d->message = $request->message;
        $d->is_read = 0;
        $d->is_active = 1;
         $d->save();
        

         Toastr::success('Rely was sent sucessfully!', 'OOSMV', ["positionClass" => "toast-top-right"]);
         return redirect()->route('mail.index' );

 
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
