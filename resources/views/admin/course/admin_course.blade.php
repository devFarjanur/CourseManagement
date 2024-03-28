@extends('admin.admin_dashboard')
@section('admin')




<div class="page-content">


<div class=" mb-3 d-grid gap-2 d-md-flex justify-content-md-end">
    <a href="{{ route('admin.add.course') }}" class="btn btn-primary">Add Course</a>
</div>

<div class="row row-cols-2 row-cols-md-4">
  @foreach($courses as $course)
    <div class="col mb-3">
      <div class="card h-100 d-flex flex-column"> <!-- Added d-flex and flex-column classes to make the card a flex container and align its child elements in a column -->
        <img src="{{ asset('upload/admin_images/' . $course->photo) }}" class="card-img-top img-fluid" alt="..." style="height: 200px; object-fit: cover;">
        <div class="card-body d-flex flex-column justify-content-between"> <!-- Added d-flex, flex-column, and justify-content-between classes to make the card body a flex container, align its child elements in a column, and distribute space between them -->
          <div> <!-- Added a wrapper div for card content -->
            <h5 class="card-title">{{ $course->title }}</h5>
            <p class="card-text mb-3">{{ $course->price}}</p>
          </div>
          <div> <!-- Added a wrapper div for the button -->
            <a href="#" class="btn btn-primary d-flex justify-content-center align-items-center mt-auto">Course Details</a> <!-- Added mt-auto class to push the button to the bottom -->
          </div>
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