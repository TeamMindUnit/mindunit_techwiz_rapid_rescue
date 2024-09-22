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
                                <h2>Ambulance Car</h2>
                            </div>
                            <div class="breadcrumb-menu">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="services.html">Services</a></li>
                                    <li class="active">Ambulance Car</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End breadcrumb area-->



        <!--Start Service Details area -->
        <section class="service-details-area">
            <div class="container">
                <div class="row">

                  @foreach($vie as $a)

                    <!--Start Service Details Content -->
                    <div class="col-xl-4 col-lg-7 order-box-1">
                        <div class="service-details__content">
                            <div class="img-box1">
                                <img src="{{$a->Profile}}" width="200px" height="120px" alt="" />
                            </div>

                            <div class="text-box1">
                            <h5>Name:{{$a->Name}}</h5>
                            <h5>Ambulance no:{{$a->Ambulanceno}}</h5>
                            <h5>Hospital name:{{$a->Hospitalname}}</h5>
                            <h5>Driver name:{{$a->Drivername}}</h5>
                                <p>
                                Fast and reliable ambulance service ensuring prompt medical assistance.
                                 Available 24/7 to provide life-saving care and transportation to the nearest medical facility.</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!--End Service Details Content -->

                </div>
            </div>
        </section>
        <!--End Service Details area -->


@endsection