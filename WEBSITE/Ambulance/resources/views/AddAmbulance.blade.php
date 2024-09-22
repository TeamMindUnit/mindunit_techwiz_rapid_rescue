@extends('layouts.admindashboard')
@section('admindashbaord')

<center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('insertambulanceservices'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "AMBULANCE RECORD ADDED SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>
<div class="container">
    <form action="{{URL::TO('ambulanceinserted')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <select name="name" class="form-control mt-3 w-50 text-dark border-dark">
        <option value="Select Ambulance" disabled selected> Select Ambulance</option>
        <option value="LifeLine Ambulance">LifeLine Ambulance</option>
        <option value="SwiftCare EMS">SwiftCare EMS</option>
        <option value="Guardian Medics">Guardian Medics</option>
        <option value="Rapid Response Ambulance">Rapid Response Ambulance</option>
        <option value="Caring Hearts EMS">Caring Hearts EMS</option>
        <option value="Parademics Plus">Parademics Plus</option>
        <option value="First Response Transport">First Response Transport </option>
        <option value="Vital Aid Ambulance">Vital Aid Ambulance</option>

    </select>  
    <select name="ambulanceno" class="form-control mt-3 w-50 text-dark border-dark">
        <option value="Select Ambulance no" disabled selected> Select Ambulance NO</option>
        <option value="AHZ-432 568">AHZ-432 568</option>
        <option value="BMW-123 456">BMW-123 456</option>
        <option value="ABC-789 123">ABC-789 123</option>
        <option value="DEF-456 789">DEF-456 789</option>
        <option value="GHI-101 121">GHI-101 121</option>
        <option value="JKL-333 444">JKL-333 444</option>
        <option value="MNO-444 555">MNO-444 555</option>
        <option value="PQR-778 887">PQR-778 887</option>

    </select>        
    <select name="hospital" class="form-control mt-3 w-50 text-dark border-dark">
        <option value="Select Hospital Name" disabled selected>Select Hospital</option>
        <option value="National Medical center">National Medical center</option>
        <option value="Liaquat National">Liaquat National</option>
        <option value="Baqai medical College">Baqai medical College</option>
        <option value="Baqai Dental college">Baqai Dental college</option>
        <option value="Civil Hospital Karachi">Civil Hospital Karachi</option>
        <option value="Creek Hospital">Creek Hospital</option>
        <option value="Aga Khan Hospital">Aga Khan Hospital</option>
        <option value="Al-Mustafa Hospital">Al-Mustafa Hospital</option>

    </select>    

    <select name="drivername" class="form-control mt-3 w-50 text-dark border-dark">
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
        <input type="number" placeholder="Phone" class="form-control mt-3 w-50 text-dark border-dark" name="phone">
        
       
        <input type="file" placeholder="profile" class="form-control mt-3 w-50 text-dark border-dark" name="profile">
        <button class="btn btn-info mt-3">Create profile</button>
    </form>
</div>

@endsection