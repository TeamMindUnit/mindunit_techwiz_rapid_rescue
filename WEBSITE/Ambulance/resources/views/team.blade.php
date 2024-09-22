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
                                <h2>Our Team</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li class="active">Team</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->

        <!--Start Team Style1 Area-->
        <section class="team-style1-area">
            <div class="container">
                <div class="row">
                    <!--Start Single Team Style1-->
                     <!-- fetch in template -->
                    @foreach($pro as $p)
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="single-team-style1 wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1500ms">
                            <div class="img-holder">
                                <div class="inner">
                                    <img src="{{$p->Profile}} " alt="" />
                                </div>
                                <div class="title-holder text-center">
                                    <h2>Name:{{$p->Name}}</h2>
                                    <h3>Status:{{$p->Status}}</h3>
                                        <h2>Phone No:{{$p->Phone}}</h2>      
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <!--End Single Team Style1-->
                </div>
            </div>
        </section>
        <!--End Team Style1 Area-->




@endsection 