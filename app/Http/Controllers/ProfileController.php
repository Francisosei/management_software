<?php

namespace App\Http\Controllers;
use App\Profile as Profile;
use App\User as User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;

class ProfileController extends Controller
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
        $profiles = new Profile;
        $users = Auth::user();


        //$users = new user();

        $profiles->Fullname = $request->Fullname;
        $profiles->marriage_status= $request->marriage_status;
        //$fellowship->fellowship = $request->fellowship;
        //$profiles->birthdate = $request->birthdate;
        //$users->gender = $request->gender;
        //$profiles->marriage_status = $request->marriage_status;
        $profiles->residential_address = $request->residential_address;
        $profiles->health_status = $request->health_status;
       // $profiles->email = $request->email;
        $profiles->profession = $request->profession;
        $profiles->baptism_status = $request->baptism_status;
        $profiles->contact = $request->contact;
        // $users->image = $request->image;
       // $profiles->user()->save($users);

       $users->profile()->save($profiles);
        
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

        //$profiles= Profile::findorFail($id);


        $users->name = $request->name;


        $users->birthdate = $request->birthdate;
        //$users->gender = $request->gender;

        // $users->image = $request->image;

        //$user = User::findOrFail($id);
        $users->save();
        $users->first();
        $profiles = new Profile;
        $profiles->residential_address = $request->residential_address;
        $profiles->health_status = $request->health_status;
        $profiles->marriage_status= $request->marriage_status;
        //$profiles->email = $request->email;
        $profiles->profession = $request->profession;
        $profiles->baptism_status = $request->baptism_status;
        $profiles->contact = $request->contact;
        $users->profile()->save($profiles);
    }

    public function destroy($id){
        $users = \User::findOrFail($id);
        $users->delete();

    }
}
