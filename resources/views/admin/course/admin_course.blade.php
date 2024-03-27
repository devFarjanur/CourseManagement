@extends('admin.admin_dashboard')
@section('admin')




<div class="page-content">


<div class=" mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route('admin.add.course') }}" class="btn btn-primary">Add Course</a>
</div>

  <div class="row row-cols-2 row-cols-md-4">  @foreach($courses as $course)
      <div class="col mb-3">
        <div class="card">
          <img src="{{ asset('upload/admin_images/' . $course->photo) }}" class="card-img-top" height="200px" alt="...">
          <div class="card-body">
            <h5 class="card-title">{{ $course->title }}</h5>
            <p class="card-text mb-3">{{ $course->price }}</p>
            <a href="#" class="btn btn-primary d-flex justify-content-center align-items-center">Course Details</a>

          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>


@endsection


<!-- @foreach($courses as $course)
    <tr>
        <td>{{ $course->title }}</td>
    </tr>

@endforeach -->