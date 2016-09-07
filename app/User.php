<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    
    
    public function profile(){
        return $this->hasOne('App\Profile');
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
   
    protected $fillable = [
        'birthdate','gender','email','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    

    /**
     * @param array $fillable
     * @return User
     */
    public function fellowship(){
        return $this->hasMany('App\Fellowship','user_id');
    }

   
    
}
