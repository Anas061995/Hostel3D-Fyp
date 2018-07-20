<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasRoles, Notifiable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function address()
    {
      return $this->belongsTo('App\Models\Address');
    } 
    public function complaints()
    {
      return $this->hasMany('App\Models\Complaint');
    } 
    public function hostel()
  {
    return $this->belongsTo('App\Models\Hostel');
  }
}
