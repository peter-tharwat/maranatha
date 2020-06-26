<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
     protected $guarded = ['id', 'created_at', 'updated_at'];
     public function church(){
     	return $this->belongsTo('App\Church');
     }
     public function user(){
     	return $this->belongsTo('App\User');
     }
     public function mass(){
     	return $this->belongsTo('App\Mass');
     }
}
