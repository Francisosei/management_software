<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MailController extends Controller
{
    
    

    public function store(Request $request){
        $all = $request ->all();
        Mail::queue('emails.mailtemplate',  compact('all'), $all, function ($message) {
        $message->from( $all['sender_name'])
                ->to( $all['recipient_email'])
                ->subject($all['subject']);
});


}
}
