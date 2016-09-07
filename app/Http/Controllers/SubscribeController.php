<?php

namespace App\Http\Controllers;
use DB;
use PHPMailer as PHPMailer;
use App\Subscribe as Subscribe;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Http\Requests;

class SubscribeController extends Controller
{
    public function create(){
        $emails = DB::table('subscribe')->get();
        return view('contact', ['emails' => $emails]);
        //return view('contact')->;
    } 
    
    public function store (Request $request){
        $this->validate($request,[
            'name'=> 'required',
            'email'=> 'required',
            'message'=>'required'
        ]);


        $msg = new Subscribe;
        $msg->name = $request->name;
        $msg-> email= $request-> email;
        $msg-> message = $request-> message;
        $msg->save();

        $request->session()->flash('flash_message','mail submitted successfully');
        return view('/contact');


}

    /**
     * @param Request $request
     * @param $id
     */
    public function reminder()
    {
       /* $user = Subscribe::all();

        Mail::send('emails.reminder', ['subscribe' => $user], function ($m) use ($user) {
            // $m->from('hello@app.com', 'Your Application');
            var_dump($m);
            die();

            $m->to($user->email)->subject('reminder');
        });
*/
        $data= array();
        Mail::send('emails.reminder',$data ,function ($message) {
            $message->from('info@microsysgh.com', 'Laravel');

            $message->to('francis.oseiowusu@yahoo.com')->subject('reminder');
        });


        //Mail::send('emails.reminder',['username'=>'test']);

        // Mail::send('emails.reminder', ['username'=>'test'], function ($message)  {

        //$message->from('hello@app.com', 'Your Application');

        //$message->to('osei1257@gmail.com')->subject('You welcome to Microsys');
        //$message->to($user->email, $user->name)->subject('Your Reminder!');
    }

/*
         public  function reminder(){
         /*$table=suscribe::all();
         $table->email;*/
        /* $mail = new PHPMailer;
         $mail = isSMTP();
         $mail->Host = 'smtp.gmail.com';
         $mail->SMTPAUTH = true;
         $mail->Username = 'osei1257@gmail.com';
         $mail->Password = 'os9955';
         $mail->SMTPSecure = 'tls';
         $mail->Port = 587;

         $mail->setFrom('info@microsysgh.com','Projucts from microsysgh');
         $mail->addReplyTo('info@microsysgh.com','Microsysgh');
         $mail->Subject = 'New products';
         //$mail->MsgHTML(file_get_contents('content.html'),dirname(__FILE__));
         $mail->Body = "Body of your message here";
         $mail->addAttachment('example/logo.png');


     }
*/


  

}