@extends('admin.admin_dashboard')
@section('admin')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>


<div class="page-content">

<h1 class="card-title mb-3">Add Instructor</h1>

<form method="POST" action=" {{ route('admin.instructor.store') }} " enctype="multipart/form-data">
  @csrf 


  <div class="mb-3">
		<label class="form-label">Instructor Photo</label>
		<input name="photo" type="file" class="form-control" id="image" autocomplete="off" >
  </div>

  <div class="mb-3">
    <img id="showImage" class="wd-150 rounded" height="150px" src="{{ (!empty ($profileData->photo)) ?
    url('upload/admin_images/'.$profileData->photo) : url('upload/no_image.jpg')  
    }}" alt="profile">

    </div>
  
  <div class="mt-3 mb-3">
    <label class="form-label">Instructor Name</label>
    <input type="text" class="form-control" id="name" name="name" required>
  </div>

  <div class="mt-3 mb-3">
    <label class="form-label">Instructor Title</label>
    <input type="text" class="form-control" id="title" name="title" required>
  </div>

  

  <div class="mb-3">
    <label class="form-label">Instructor Description</label>
    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
  </div>

  <button type="submit" class="btn btn-primary mb-3">Create Course</button>
</form>

</div>


<script type="text/javascript">
  $(document).ready(function(){
  $('#image').change(function(e){
  var reader = new FileReader();
  reader.onload = function(e){
    $('#showImage').attr('src',e.target.result);
    }
    reader.readAsDataURL(e.target.files['0']);
    });
  });
</script>




@endsection