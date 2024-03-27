@extends('admin.admin_dashboard')
@section('admin')


<div class=" mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route('admin.add.instructor') }}" class="btn btn-primary">Add Instructor</a>
</div>

  <div class="row row-cols-2 row-cols-md-4">  @foreach($instructors as $instructor)
      <div class="col mb-3">
        <div class="card">
          <img src="{{ asset('upload/admin_images/' . $instructor->photo) }}" class="card-img-top" height="200px" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $instructor->name }}</h5>
            <p class="card-text mb-3">{{ $instructor->title }}</p>
            <a href="#" class="btn btn-primary d-flex justify-content-center align-items-center">Profile</a>

          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>



@endsection