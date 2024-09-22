@extends('layouts.admindashboard')
@section('admindashbaord')
<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('insertblo'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "BLOGS RECORD ADDED SUCCESSFULLY  ",
                         timer: 2500
});
                        </script>
                        @endif
                        </div>
                        </center>
<div class="container">
    <form action="{{URL::TO('blogsinserted')}}" method="POST" enctype="multipart/form-data">
        @csrf 
     <input type="text" placeholder="Author Name" class="form-control mt-3 w-50  border-dark" name="author" >
        <input type="date" placeholder="Date" class="form-control mt-3 w-50  border-dark" name="date">
        <input type="text" placeholder="Blog Title" class="form-control mt-3 w-50 text-dark border-dark" name="title">
        <input type="file" placeholder="profile" class="form-control mt-3 w-50 text-dark border-dark" name="Profile">
        <button class="btn btn-info mt-3">Create profile</button>
    </form>
</div>
@endsection