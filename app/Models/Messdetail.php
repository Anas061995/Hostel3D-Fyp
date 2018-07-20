<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Messdetail extends Model
{
  public function food()
  {
    return $this->belongsTo('App\Models\Food');
  }
  public function messmenus()
  {
    return $this->belongsTo('App\Models\Messmenu');
  }

}