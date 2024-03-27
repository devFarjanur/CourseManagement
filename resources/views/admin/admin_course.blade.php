@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">

@if ($courses->isEmpty())
      <p>No courses found.</p>
  @else
      @foreach ($courses as $course)
          <h1>{{ $course->name }}</h1>
          <p>{{ $course->price }}</p>
      @endforeach
  @endif

@endsection