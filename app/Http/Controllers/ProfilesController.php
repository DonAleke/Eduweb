<?php

namespace App\Http\Controllers;

use Auth;

use App\User;
use Session;
// use App\Payment;
use Illuminate\Http\Request;
// use App\Cycle;
use DateTime;
use DateInterval;
class ProfilesController extends Controller
{

  public function index($slug)
  {
  $user = User::where('slug', $slug)->first();
  $pay = Payment::where('user_id', Auth::id())->latest()->first();
  return view('profiles.profile')
                                ->with('user', $user)
                                ->with('pay', $pay);
  }


public function edit(){

return view('profiles.edit')->with('info', Auth::user()->profile);
}

public function update(Request $r){


Auth::user()->profile()->update([
  'phone' => $r->phone,
  'location' => $r->location,
  'date_of_birth' => $r->date_of_birth,
  'current_gym' => $r->current_gym



]);
if($r->hasfile('avatar')) {


Auth::user()->update([
'avatar' => $r->avatar->store('public/avatars')
]);

}

Session::flash('success', 'Info Updated');
return redirect()->back();
}
// a function to check subscription dates and change status using dates
public function substatus($id)
{

  //if user has no cycle dont fo anything


  if(User::find($id)->cycle == null){

    return ['status' => 4];
  }

  else {
    // the status will be passed to vue then we will use noty to flash a notification for each state.
  $end = User::find($id)->cycle->nextbill;

  $dt = new DateTime($end);
  // $due = $dt->format('Y-m-d');
  $taday = new  DateTime();
  // $tform = $taday->format('Y-m-d');
  $diff = date_diff($taday, $dt);
  $diff2 = $diff->format('%R%a');
  // should be less than or equal to 7
  if ($diff2 <= 7 &&  $diff2 >= 0 ) {
    return ['status' => 1,
            'expiry' => $end ];
  }
  // changing cycle status to zero to show inactive subscription.
  if ($diff2 < 0 ) {
    User::find($id)->cycle->update([
      'status' => 0
    ]);
    return ['status' => 2,
            'slug' => '/payment/'.User::find($id)->slug ];

  }
// if date_diff greater than 7
  if ($diff2 > 7 ) {
    return ['status' => 3 ];
  }
  }
}

}
