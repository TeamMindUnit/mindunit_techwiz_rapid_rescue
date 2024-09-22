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
                                <h2>Contact</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Contact</li>
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
                            <div class="inner">
                                <img src="assets/images/resources/contact-info-style2__image.jpg" alt="">
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
                                    <h3>Contact us</h3>
                                </div>
                                <h2>Feel Free to Get in<br> Touch with us</h2>
                            </div>
                            <div class="inner-content">
                                <div class="text">
                                    <p>For immediate assistance, please call our emergency hotline. Our dedicated ambulance team is ready to respond 24/7 to provide urgent medical care.</p>
                                </div>
                                <h3>Contact Details</h3>
                                <p>66 Broklyn Golden Street.<br> New York United States of America</p>
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
                        @if(session('CONTACTMESSAGE'))
                        <script>
                            Swal.fire ({
                         icon: "success",
                         title: "CONTACT RECORD ADDED SUCCESSFULLY  ",
                         timer: 2500
 
});
                        </script>
                        @endif
                        </div>
                        </center>


        <!--Start Main Contact Form Area-->
        <section class="main-contact-form-area">
            <div class="container">
                <div class="sec-title text-center">
                    <div class="icon">
                        <span class="icon-heartbeat"></span>
                    </div>
                    <div class="sub-title">
                        <h3>Send us Message</h3>
                    </div>
                    <h2>Write us Anytime</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="contact-form">
                            <form action="{{URL::TO('contactinsert')}}" method="POST" enctype="multipart/form-data">
@csrf
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="name"
                                                    placeholder="Full Name">
                                                    <span class="text-danger">@error ('name'){{$message}} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="email" name="email" 
                                                    placeholder="Email Address">
                                                    <span class="text-danger">@error ('email'){{$message}} @enderror</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="phone" value="" 
                                                    placeholder="Phone">
                                                    <span class="text-danger">@error ('phone'){{$message}} @enderror</span>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <input type="text" name="subject" value="" 
                                                    placeholder="Subject">
                                                    <span class="text-danger">@error ('subject'){{$message}} @enderror</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="form-group">
                                            <div class="input-box">
                                                <textarea name="message" 
                                                    placeholder="Write a Message"></textarea>
                                                    <span class="text-danger">@error ('message'){{$message}} @enderror</span>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xl-12 text-center">
                                        <div class="button-box">
                                            <button class="btn-one" type="submit">
                                               
                                                    send a message
                                              
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!--End Main Contact Form Area-->

        <!--Start Google Map Style2 Area-->
        <section class="google-map-area">
            <div class="auto-container">
                <div class="contact-page-map-outer">
                    <!--Map Canvas-->
                    <div class="map-canvas" data-zoom="12" data-lat="-37.817085" data-lng="144.955631"
                        data-type="roadmap" data-hue="#ffc400" data-title="Envato"
                        data-icon-path="assets/images/icon/map-marker.png"
                        data-content="Melbourne VIC 3000, Australia<br><a href='mailto:info@youremail.com'>info@youremail.com</a>">
                    </div>
                </div>
            </div>
        </section>
        <!--End Google Map Style2 Area-->



@endsection 