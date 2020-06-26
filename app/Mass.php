<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mass extends Model
{
     protected $guarded = ['id', 'created_at', 'updated_at'];
     public function church(){
     	return $this->belongsTo('App\Church');
     }
     public function reservations(){
     	return $this->hasMany('App\Reservation');
     }
}
