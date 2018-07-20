<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
  public function user()
  {
    return $this->hasOne('App\User');
  }
  
  public function location()
  {
    return $this->belongsTo('App\Location');
  }
}