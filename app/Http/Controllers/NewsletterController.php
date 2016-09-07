<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class NewsletterController extends Controller
{
    protected $mailchimp;

    public function __construct()
    {
        $this->mailchimp = new \Mailchimp(config('services.mailchimp.api_key'));
    }

    public function subscribe(Request $request){
        $this->validate($request,[
            'email'=> 'required|email'
        ]);

        $listId = '9c0540c303'; // Replace this with your own List ID

        try {
            $this->mailchimp->lists->subscribe($listId, $request->only(['email']));
        } catch (\Mailchimp_Error $e) {
            if ($e->getMessage()) {
                $request->session()->flash('errors',
                    $this->createViewError('mailchimp_error', $e->getMessage()));
                return redirect()->back();
            } else {
                $request->session()->flash('errors',
                    $this->createViewError('mailchimp_error', 'An unknown error occurred'));
                return redirect()->back();
            }
        }
        return redirect('/thankyou');
        
    }

    protected function createViewError($key, $value)
    {
        return collect([$key => $value]);
    }


}
