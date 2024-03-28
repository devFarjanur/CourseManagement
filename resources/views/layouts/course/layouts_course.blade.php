@extends('layouts.app')
@section('layouts')

<div class="page-content bg-light pb-3">
    <div class="container">

    <h2 class="card-title text-dark text-center pt-4 pb-4">আমাদের কোর্সসমুহ</h2>

    <div class="row row-cols-2 row-cols-md-4">
    @foreach($courses as $course)
        <div class="col pb-4">
        <div class="card bg-white text-dark h-100 d-flex flex-column shadow border-0"> <!-- Added d-flex and flex-column classes to make the card a flex container and align its child elements in a column -->
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
</div>




@endsection