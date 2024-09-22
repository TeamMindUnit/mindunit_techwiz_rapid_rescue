@extends('layouts.head_foot')
@section('amb')

<!--Start breadcrumb area paroller-->
<section class="breadcrumb-area">
            <div class="breadcrumb-area-bg" style="background-image: url(assets/images/breadcrumb/breadcrumb-1.jpg);">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="inner-content">
                            <div class="title" data-aos="fade-up" data-aos-easing="linear" data-aos-duration="1500">
                                <h2>Book Ambulance From Here</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Book Ambulance</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Contact Info Style2 Area-->
        <section class="contact-info-style2-area">
            <div class="container">
                <div class="row text-right-rtl">

                    <div class="col-xl-6">
                        <div class="contact-info-style2__image">
                            <div class="inner mt-5">
                                <img src="assets/images/resources/emergency-situation-1024x682.jpg" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6">
                        <div class="contact-info-style1__content">
                            <div class="sec-title">
                                <div class="icon">
                                    <span class="icon-heartbeat"></span>
                                </div>
                                <div class="sub-title">
                                    <h3>Book Ambulance For Any Emergency</h3>
                                </div>
                                <h2>We’re here to help <br> You're in safe hands</h2>
                            </div>
                            <div class="inner-content">
                              
                                <h3>Ambulance Details</h3>
                                <p>Aga Khan University Hospital
<br> Stadium Road,
Karachi 74800,
Pakistan.</p>
                                <h2>
                                    <a href="tel:123456789">+1-(246) 333-0089</a>
                                </h2>
                                <h4><a href="mailto:yourmail@email.com">needhelp@company.com</a></h4>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!--End Contact Info Style2 Area-->

        <center>
  <div class="container">    
                        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        @if(session('bookingmessage')&& session('track_id'))
<script>
  Swal.fire({
  title: "{{session('bookingmessage')}}",
  text: "Your Ambulance Tracking ID: {{session('track_id')}}",
  icon: "success"
});

</script>

@endif





</script>
                        </div>
                        </center>




        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
    

<div class="container">
<form   method="POST" action="{{URL::TO('/bookambulanceinserted')}}">
@csrf


<div class="row">
    <div class="col-md-6 mt-3">
    <input type="text" class="form-control" name="form_name" placeholder="Full Name">
    <span class="text-danger">@error ('form_name'){{$message}} @enderror</span>
    </div>
    <div class="col-md-6 mt-3">
    <input type="email" class="form-control" name="form_email"  placeholder="Email Address">
    <span class="text-danger">@error ('form_email'){{$message}} @enderror</span>
    </div>
    <div class="col-md-6 mt-3">
    <input type="date" id="dateInput" class="form-control border-black" name="form_date" placeholder="">
    <span class="text-danger">@error ('form_date'){{$message}} @enderror</span>
    <script>
    // Get today's date in YYYY-MM-DD format
    const today = new Date();
    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0');
    const dd = String(today.getDate()).padStart(2, '0');
    const formattedDate = `${yyyy}-${mm}-${dd}`;

    // Set the input value to today's date
    const dateInput = document.getElementById('dateInput');
    dateInput.value = formattedDate;

    // Set the minimum date to today
    dateInput.setAttribute('min', formattedDate);
</script>
    </div>
    <div class="col-md-6 mt-3">
    <input type="time" class="form-control" name="form_time">
    <span class="text-danger">@error ('form_time'){{$message}} @enderror</span>
    </div>
    <div class="col-md-6 mt-3">
    <input type="text" class="form-control" name="form_phone" value=""  placeholder="Phone">
    <span class="text-danger">@error ('form_phone'){{$message}} @enderror</span>
    </div>
    <div class="col-md-6 mt-3">
    <input type="text" class="form-control" name="form_address" value=""  placeholder="Enter Your Address">
    <span class="text-danger">@error ('form_address'){{$message}} @enderror</span>
    </div>
    <div class="col-md-6 mt-3">
    
 <select  class="form-control w-100 " name="form_driver" value="">

                    <option value="Select Drivers" disabled selected> Select Drivers</option>
                    <option value="LifeLine Ambulance.">LifeLine Ambulance.</option>
                    <option value="SwiftCare EMS.">SwiftCare EMS.</option>
                    <option value="Guardian Medics . ">Guardian Medics .</option>
                    <option value="Rapid Response Ambulance. ">Rapid Response Ambulance.</option>
                    <option value="Caring Hearts EMS.">Caring Hearts EMS.</option>
                    <option value="Paramedics Plus">Paramedics Plus</option>
                    <option value="First Response Transport ">First Response Transport </option>
                    <option value="VitalAid Ambulance ">VitalAid Ambulance</option>
                    
</select>
<span class="text-danger">@error ('form_driver'){{$message}} @enderror</span>
</div>
    <div class="col-md-6 mt-3">
    <select  class="form-control w-100" name="form_cond" value="" >
 
        <option value="Current Situation " disabled selected> Condition</option>
        <option value="Emergency.">Emergency</option>
        <option value="Non Emergency.">Non Emergency</option>
     </select>    
     <span class="text-danger">@error ('form_cond'){{$message}} @enderror</span>
    </div>
</div>



                                                 

                                                   

                                                 

                                                  


                                          


          


                                         


     <button class="btn btn-dark mt-3">Add </button>
     
     
     
</form>



</div>

                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End Main Contact Form Area-->

        <!--Start Google Map Style2 Area-->
       
        <!--End Google Map Style2 Area-->



@endsection