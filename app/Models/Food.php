<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
  public function messdetails()
  {
    return $this->hasMany('App\Models\Messdetail');
  }
  

}