@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit your Information</div>
                <div class="card-body">
                  <form class="" action="{{route('profile.update')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="date_of_birth"> Upload Profile Picture</label>
                      <input type="file" class="form-control" name="avatar" accept="image/*">

                    </div>
                    <div class="form-group">
                      <label for="phone"> Phone Number</label>
                      <input type="text" class="form-control" name="phone" id="phone" value="{{$info->phone}}" required>

                    </div>
                    <div class="form-group">
                      <label for="location"> Location</label>
                      <input type="text" class="form-control" name="location" id="location" value="{{$info->location}}" required>

                    </div>
                    <div class="form-group">
                      <label for="date_of_birth"> Date Of Birth</label>
                      <input type="date" class="form-control" name="date_of_birth" value="{{$info->date_of_birth}}" required>

                    </div>
                    <div class="form-group">
                      <label for="phone"> Current Gym</label>
                      <input type="text" class="form-control" name="current_gym" id="current_gym" value="{{$info->current_gym}}" required>

                    </div>



                    <div class="form-group">
                      <p class="text-center">
                          <button class="btn btn-primary btn-lg" type="submit">Save Your Information</button>
                      </p>

                    </div>

                  </form>

                </div>




                </div>
            </div>
        </div>
    </div>

@endsection
