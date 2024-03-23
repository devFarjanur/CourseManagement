@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<div class="page-content">

<h1>Add New Course</h1>

<form method="POST" action="">
  @csrf <div class="form-group">
    <label for="title">Title:</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>

  <div class="form-group">
    <label for="description">Description:</label>
    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
  </div>

  <div class="form-group">
    <label for="price">Price:</label>
    <input type="number" step="0.01" class="form-control" id="price" name="price">
  </div>

  <button type="submit" class="btn btn-primary">Create Course</button>
</form>


@endsection