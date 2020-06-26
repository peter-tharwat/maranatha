<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Church extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function reservations(){
     	return $this->hasMany('App\Reservation');
     }
     public function users(){
     	return $this->hasMany('App\Users');
     }
     public function masses(){
     	return $this->hasMany('App\Mass');
     }
}
