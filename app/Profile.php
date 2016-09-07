<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public function user(){

        return $this->belongsTo('App\User');
    }
    protected $table = 'profiles';
    protected $primaryKey ='id';
    protected $fillable = ['Fullname','health_status','baptism_status','marriage_status','gender','residential address','contact','profession','image',];


}
