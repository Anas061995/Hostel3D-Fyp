<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
  public function user()
  {
    return $this->belongsTo('App\User');
  }
  
  public function location()
  {
    return $this->belongsTo('App\Location');
  }
}