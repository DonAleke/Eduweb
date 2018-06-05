<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['user_id', 'phone', 'location', 'date_of_birth', 'school'];

public function user(){


  return $this->belongsTo('App\User');
}

}
