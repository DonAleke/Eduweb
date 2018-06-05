@extends('layouts.app')



@section('content')

<div class="container">
<div class="row">


  <div class="col-lg-4">
    <div class="card text-center" style="width: 18rem;margin-botom:7px;margin-top:6px;">

         <p class="card-title" style="margin-top:6px;">
         {{$user->name}}'s Profile
           </p>
         </div>
  <div class="card text-center" style="width: 18rem;margin-botom:7px;margin-top:6px;">
      <div class="card-body">
        <center>
      <img src="{{Storage::url($user->avatar)}}" style="border-radius:50%;height:140px;width:140px;"  style alt="">
      </center>
       <p class="card-text" style="margin-top:6px;">
        @if(Auth::id() == $user->id)
        <a href="{{route('profile.edit')}}" class="btn-sm btn-info" > Edit Your Information</a>
        @endif
        </p>
      </div>
    </div>



    <div class="card text-center"  style="width:18rem;margin-botom:7px;margin-top:6px;">


      <div class="card-body">
        <p class="card-text" >

         {{ $user->profile->phone }}

        </p>
        <p class="card-text">

         {{ $user->profile->location }}

        </p>
        <p class="card-text">

         {{ $user->profile->date_of_birth }}

        </p>
        <p class="card-text">

         {{ $user->profile->current_gym }}

        </p>

      </div>
    </div>

    <div class="card text-center"  style="width:18rem;margin-botom:7px;margin-top:6px;">


      <div class="card-body">
        <p class="card-text" >

         <a href="#">My Payments</a>

        </p>

    @if($pay != null)
    <p> last payment: KES: {{implode(array_values($pay->only('amount')))}} on {{implode(array_values($pay->only('date')))}} </p>
@endif
      </div>
    </div>

  </div>
  <div class="col-lg-8">
    <p> area to show stats and other useful Information</p>
  <subscription :prof_id="{{Auth::id()}}"></subscription>
  </div>

</div>
</div>

@stop
