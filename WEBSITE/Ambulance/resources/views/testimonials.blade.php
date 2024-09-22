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
                                <h2>Feedbacks From Our Patients</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Feedbacks</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->


        <!--Start Testimonial Page-->
        <section class="testimonial-page">
            <div class="container">
                <div class="row">
                    <!--Start Testimonial Style2 Single-->
                    @foreach($fee as $s)
                    <div class="col-xl-4 col-lg-6 col-md-6">    
                        <div class="testimonial-style2__single text-center" data-aos="fade-up" data-aos-easing="linear"
                            data-aos-duration="1500">
                            <!-- <div class="img-holder">
                                <img  src="assets/images/resources/pic1.jpg" alt="">
                            </div> -->
                            <div class="text-holder">
                                <p>{{$s->feedback}}</p>
                                <div class="border-box"></div>
                                <div class="client-info">
                                    <h3>{{$s->name}}</h3>  
                                    <span>{{$s->service}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End Testimonial Style2 Single-->
                   
                </div>
            </div>
        </section>
        <!--End Testimonial Page-->


@endsection