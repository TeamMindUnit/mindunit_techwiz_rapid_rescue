@extends('layouts.admindashboard')
@section('admindashbaord')

<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('insertdri'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "DRIVERS RECORD ADDED SUCCESSFULLY  ",
                         timer: 2500
});
                        </script>
                        @endif
                        </div>
                        </center>
<div class="container">
    <form action="{{URL::TO('driversinserted')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <select name="name" class="form-control mt-3 w-50  border-dark">
        <option value="Select Driver" disabled selected> Select Drivers</option>
        <option value="Laurence">Laurence.</option>
        <option value="Norman">Norman.</option>
        <option value="Elizabeth ">Elizabeth .</option>
        <option value="Dorothy ">Dorothy.</option>
        <option value="Gertrude">Gertrude.</option>
        <option value="Amelia">Amelia</option>
        <option value="Charlotte ">Charlotte </option>
        <option value="Nicholas ">Nicholas</option>

    </select>       
     <input type="email" placeholder="Email" class="form-control mt-3 w-50  border-dark" name="email" >
        <input type="number" placeholder="Phone" class="form-control mt-3 w-50  border-dark" name="phone">
        <select name="status" class="form-control mt-3 w-50  border-dark">
        <option value="Choose Status" disabled selected> Choose Availability Status</option>
        <option value="Available">Available.</option>
        <option value="Not Available">Not Available.</option>
        <input type="password" placeholder="Password" class="form-control mt-3 w-50 text-dark border-dark" name="pass">
        <input type="file" placeholder="profile" class="form-control mt-3 w-50 text-dark border-dark" name="profile">
        <button class="btn btn-info mt-3">Create profile</button>
    </form>
</div>

@endsection