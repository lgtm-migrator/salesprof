@extends('layouts.user')

@section('content')

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>About Us</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->

    <!-- Start: About US
    ============================= -->
    <section id="about-us" class="section-padding-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-5">

                    <div class="section-title section-before-border">
                        <h2>Who we are<span></span></h2>
                        <p>Publishing packages and web page editors now use Lorem Ipsum as their default model text</p>
                    </div>

                    <div class="section-info">
                        <p>Torem ipsum dolor sit amet, consectetur adipiscing elit. Integer adipiscing erat eget risus sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et bibendum a, sagittis accumsan ipsum. Pellentesque ultrices ultrices sapien, nec tincidunt nunc posuere ut. Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                        <br>
                        <p>sollicitudin pellentesque et non erat. Maecenas nibh dolor, malesuada et that.</p>
                    </div>
                    <a href="#" class="boxed-btn">Load More <i class="fas fa-arrow-right"></i></a>
                </div>
                <div class="col-lg-6">
                   <img src="{{ asset('img/mockup.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- End: About US
    ============================= -->

    <!-- Start: Our skill
    ============================= -->
    <section id="what-we-do" class="section-padding">
        <div class="container">

            <div class="row">
                <div class="col-lg-6 mb-lg-0 mb-5">
                    <div class="what-we-do">
                        <h2>What We Do</h2>
                        <hr class="devider">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod that  a tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim ve niam, dummy nostruden exercitation ullamco laboris nisi ut aliquip consect etur taht adipisicing elit, sed do eiusmod tempor incididunt ut labore et doloe remagna aliqua. Ut enim ad minim veniam, quis nostruden exercitations.</p>
                        <a href="#" class="boxed-btn">CONTACT US</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="skills">
                        <label>Photography</label>
                        <div class="progress">
                             <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                              <span>90%</span>
                            </div>
                        </div>
                        <label>Branding</label>
                        <div class="progress">
                             <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                              <span>73%</span>
                            </div>
                        </div>
                        <label>Development</label>
                        <div class="progress">
                             <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 79%;">
                              <span>79%</span>
                            </div>
                        </div>
                        <label>Presentations</label>
                        <div class="progress">
                             <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 95%;">
                              <span>95%</span>
                            </div>
                        </div>
                        <label>Marketing</label>
                        <div class="progress">
                             <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 80%;">
                              <span>80%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End: Our skill
    ============================= -->

     <!-- Start: Our Features
    ============================= -->
    <section id="ourfeatures" class="section-padding">
        <div class="container">            
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">                    
                    <div class="section-title">
                        <h2>Our Features <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon01.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Business Growth</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon02.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Sustainability</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon03.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Performance</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon04.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Organization</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon05.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Saving Strategy</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3 pb-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon06.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Retirement Planning</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon01.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Retirement Planning</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon02.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Business Growth</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 features-box pt-3">
                    <div class="row">
                        <div class="col-3">
                            <div class="features-box-icon">
                               <img src="{{ asset('img/features-icon/features-icon03.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-9">                                
                            <h3>Business Growth</h3>
                            <p>There are many variations passages of Lorem Ipsum available but the abo majority have suffered.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 more-load">
                    <!-- Load More Content Button  -->
                    <a class="load-btn boxed-btn" href="#" id="feature-load-pro"><span id="feature-ti-port-load" class="ti-port-load-hide"></span>Load More <i class="fas fa-angle-down"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Our Features
    ============================= -->

    <!-- Start: Creative Team
    ============================= -->

    <section id="team" class="section-padding-top mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Creative Team <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>                    
                </div>                
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-member" style="background-image: url(assets/img/team/team01.jpg);">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Andrew Reed</h3>
                            <p>Creative Designer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-member" style="background-image: url(assets/img/team/team02.jpg);">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Lauren Czisch</h3>
                            <p>Web Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 mb-sm-4">
                    <div class="team-member" style="background-image: url(assets/img/team/team03.jpg);">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Michael Moritz</h3>
                            <p>Apps Developer</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="team-member" style="background-image: url(assets/img/team/team04.jpg);">
                        <div class="overlay">
                            <div class="overlay-wrapper">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul>
                                <p>There are many variations of the passages of Lorem Ipsum about available dummy.</p>
                            </div>
                        </div>
                        <div class="inner-text">
                            <h3>Don Valentine</h3>
                            <p>Web Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End:  Creative Team
    ============================= -->

    <!-- Start: Fun Fact
    ============================= -->

    <section id="fun-fact" class="section-padding-top">
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
