<?php

namespace App\Http\Controllers;
use App\User as User;
use App\Fellowship as Fellowship;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('membership.index',compact('users'));
        
      /* $users = User::where('id',4)
               ->orderBy('id','desc')
               ->take(1)->get();
        //$users = User::where('users_count', '<', 50)->firstOrFail();
       * *
       */
        // return view('membership.index',compact('users'));
    }

    public function create(){
        return view('membership.form');
    }


    /**
     * @param Request $request
     */
    public function save(Request $request){
        $users = new User();

        $users->name = $request->name;
        $users->marriage_status= $request->marriage_status;
        //$fellowship->fellowship = $request->fellowship;
        $users->birthdate = $request->birthdate;
         //$users->gender = $request->gender;
        //$users->residential_address = $request->residential_address;
       // $users->health_status = $request->health_status;
       //$users->email = $request->email;
       // $users->profession = $request->profession;
       // $users->baptism_status = $request->baptism_status;
       // $users->contact = $request->contact;
       // $users->image = $request->image;
        $users->save();

        $users->first();
        $fellowship = new Fellowship;
        $fellowship ->names = $request->names;

        $fellowship->save();
    }
    
   
 public function edit($id){
        $users = User::findOrFail($id);
     
        return view('membership.edit', ['users'=>$users]);
    }
    /**
     * @param $id
     * @param Request $request
     */
    public function update ($id,Request $request){
        $users = User::findOrFail($id);
        
        $users->name = $request->name;
        $users->marriage_status= $request->marriage_status;

        $users->birthdate = $request->birthdate;
        //$users->gender = $request->gender;
        $users->residential_address = $request->residential_address;
        $users->health_status = $request->health_status;
        $users->email = $request->email;
        $users->profession = $request->profession;
        $users->baptism_status = $request->baptism_status;
        $users->contact = $request->contact;
        // $users->image = $request->image;
        $users->save();
    }
    
    public function destroy($id){
        $users = \User::findOrFail($id);
        $users->delete();
        
    }
}
