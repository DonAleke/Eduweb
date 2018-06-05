<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class subjects extends Model
{
protected $fillable = ['user_id', 'Maths','English', 'Chemistry', 'Geography', 'History', 'CRE', 'Music', 'Physics'];
public function user(){

return $this->belongsTo('App\User');

}
}
