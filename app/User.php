<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

const ADMIN_TYPE = 'admin';
const DEFAULT_TYPE = 'default';
const TEACHER_TYPE = 'teacher';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
          'name', 'email', 'password', 'avatar', 'slug', 'gender', 'type'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
   public function isAdmin()    {
    return $this->type === self::ADMIN_TYPE;
}
  public function teacher()    {
    return $this->type === self::TEACHER_TYPE;
}
public function profile(){

return $this->hasOne('App\Profile');

}
public function subjects(){

  return $this->hasOne('App\Subjects');
}
}
