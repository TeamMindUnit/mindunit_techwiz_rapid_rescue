@extends('layouts.user_dashboard')
@section('userdashboard')

<center>
  <!-- <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('FEEDBACKMESSAGE'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "SERVICE RECORD ADDED SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div> -->
                        </center>
<div class="container mt-5">
    <form action="{{ URL::TO('reviewinsert') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Patient Name" class="form-control w-50 mt-3">
    <select name="service" class="form-control mt-3 w-50">
        <option value="Select Receptionist" disabled selected> Select Service</option>
        <option value="LifeLine Ambulance.">LifeLine Ambulance.</option>
        <option value="SwiftCare EMS.">SwiftCare EMS.</option>
        <option value="Guardian Medics . ">Guardian Medics .</option>
        <option value="Rapid Response Ambulance. ">Rapid Response Ambulance.</option>
        <option value="Caring Hearts EMS.">Caring Hearts EMS.</option>
        <option value="Paramedics Plus">Paramedics Plus</option>
        <option value="First Response Transport ">First Response Transport </option>
        <option value="VitalAid Ambulance ">VitalAid Ambulance</option>
    <textarea name="feedback" class="form-control w-50 mt-3" rows="6" placeholder="service feedback"></textarea>
    <button type="submit" class="btn btn-info mt-3">Submit</button>
    </form>
</div>
@endsection