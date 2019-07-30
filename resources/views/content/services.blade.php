@extends('layouts.user',[
    'name' => 'service',
])


@section('title')
<title>Salesprof - Our Services</title>

@section('content')

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Our Services</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Our Services</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->


    <!-- Start: Service
    ============================= -->
    <section id="our-service" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>Our Services <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="service-box">                        
                        <figure>
                           <img src="{{ asset('img/service/service01.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-cubes"></i>
                                    </div>
                                    <h3>Design<br> and Developing </h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                    <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="service-box">                        
                        <figure>
                           <img src="{{ asset('img/service/service02.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-handshake"></i>
                                    </div>
                                    <h3>Designer <br> Creative Team</h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                    <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="service-box">                        
                        <figure>
                           <img src="{{ asset('img/service/service03.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fas fa-laptop"></i>
                                    </div>
                                    <h3>Designer <br> Fast Support</h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                    <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4 mb-lg-0">
                    <div class="service-box">                        
                        <figure>
                           <img src="{{ asset('img/service/service04.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fab fa-audible"></i>
                                    </div>
                                    <h3>Business and <br> Technology Management</h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                    <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-md-0 mb-4">
                    <div class="service-box">                        
                        <figure>
                           <img src="{{ asset('img/service/service05.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fab fa-stack-overflow"></i>
                                    </div>
                                    <h3>Business <br> Solutions and Consulting</h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                    <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-box">                        
                        <figure>
                           <img src="{{ asset('img/service/service06.jpg')}}" alt="">
                            <figcaption>
                                <div class="inner-text">
                                    <div class="service-icon">
                                        <i class="fab fa-reddit-alien"></i>
                                    </div>
                                    <h3>Developer <br> Solutions and Consulting</h3>
                                    <div class="devider"></div>
                                    <p>There are many variations of dummy that passages of Lorem Ipsum available but an the majority have suffered that is  dummy alteration in some.</p>
                                    <a href="#" class="boxed-btn">Read More <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Service
    ============================= -->

    <!-- Start: Fun Fact
    ============================= -->

    <section id="fun-fact">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-box light-bg bb">
                   <img src="{{ asset('img/fun-fact/note.png')}}" alt="">
                    <h3><span class="counter">1845</span></h3>
                    <p>Projects Completed</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12 single-box dark-bg bb">
                   <img src="{{ asset('img/fun-fact/people.png')}}" alt="">
                    <h3><span class="counter">146</span></h3>
                    <p>Team Members</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  single-box light-bg">
                   <img src="{{ asset('img/fun-fact/face.png')}}" alt="">
                    <h3><span class="counter">1246</span></h3>
                    <p>Happy Customers</p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-12  single-box dark-bg">
                   <img src="{{ asset('img/fun-fact/cup.png')}}" alt="">
                    <h3><span class="counter">2416</span></h3>
                    <p>Cups Of Coffee</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End:  Fun Fact
    ============================= -->



@endsection
