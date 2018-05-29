<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('email.sendEmail');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('email.sendEmail');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message_body' => 'min:5',
            'message_image' => 'mimes:png,jpg,jpeg,gif,pdf,svg,text,ppt,docx,doc,xls'
        ]);
        /*return $request;*/

        $data = $request->toArray();

        Mail::send('email.message', $data, function ($message) use ($data){
            $message->from('shakil@mahmud.com', 'Trendy Blog');
        
            $message->to($data['email']);
        
            $message->replyTo('john@johndoe.com', 'John Doe');
        
            $message->subject($data['subject']);
        
            $message->priority(6);
            if (isset($data['message_image'])) {
                $message->attach($data['message_image']->getRealPath(),$arrayName = array('as' =>'message_image'.$data['message_image']->getClientOriginalExtension(),
            'mime'=>$data['message_image'] ->getMimeType()) 
            );
            }      
		});
		return    redirect('/E-mail-send')->with('message','E-mail sent successfully');
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
/**/
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
