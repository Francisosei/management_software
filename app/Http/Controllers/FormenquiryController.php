<?php

namespace App\Http\Controllers;
use App\Formenquiry as Form;
use Illuminate\Http\Request;

use App\Http\Requests;

class FormenquiryController extends Controller
{
    public function create(){

     return view('form');

    }

    public function store(Request $request){
$this->validate($request,[
    'name'=>'required',
    'email'=>'required',
    'message'=>'required'
]);
        $form = new Form;
        $form->name = $request->name;
        $form->email = $request->email;
        $form->message= $request->message;

        $form->save();
    }


}
