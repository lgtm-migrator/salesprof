@extends('layouts.user', [
    'name' => 'contact',
])


@section('title')
<title>Salesprof - Contact Us</title>

@section('content')
    <!-- Start: Breadcrumb Area
    ============================= -->

    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Contact</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->


    <!-- Start: Contact Info
    ============================= -->
    
    <section id="contact-info" class="section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6 mb-md-0 mb-5 single-box text-center">
                   <img src="{{ asset('img/icons/address.png')}}" alt="">
                    <h3>Address</h3>
                    <p>450 Fifth Avenue, 31th floor New York <br> NY 10118-3299 USA</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 mb-md-0 mb-5 single-box text-center">
                   <img src="{{ asset('img/icons/mail.png')}}" alt="">
                    <h3>E-mail</h3>
                    <p>info@website.com <br>contact@website.com</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 single-box text-center">
                   <img src="{{ asset('img/icons/phone.png')}}" alt="">
                    <h3>Phone</h3>
                    <p>+001 989 159 081, <br>+002 167 427 7542</p>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Contact Info
    ============================= -->

    <!-- Start: Contact Info
    ============================= -->
    
    <section id="send-message">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-2 order-2 order-md-2">
                    {{-- <div id="map"></div> --}}
                </div>
                <div class="col-lg-6 col-md-8 order-md-2 order-sm-1 contact-us-form">
                    <h3>Send Us a Message</h3>
                    <div class="row">
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="text" class="form-control" placeholder="Phone" required>
                        </div>
                        <div class="col-lg-6 form-group">
                            <input type="email" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-sm-12 form-group">
                            <textarea class="form-control" rows="3" placeholder="Your Mesage"></textarea>
                        </div>
                        <button class="boxed-btn">Send Us a Message</button>
                    </div>
                </div>
                <div class="col-lg-3 col-md-2 order-2 order-md-2">
                        {{-- <div id="map"></div> --}}
                    </div>
            </div>
        </div>
    </section>

    <!-- End: Contact Info
    ============================= -->

    <!-- Start: Call to action
    ============================= -->

    <section id="cta">
        <div class="container">
            <div class="row cta">
                <div class="col-lg-9 col-md-7 col-12 text-md-left text-center mb-md-0 mb-4">
                    <h3>Become a Part of Community !</h3>
                    <p>Get in touch with us and send some basic info for a quick quote</p>
                </div>
                <div class="col-lg-3 col-md-5 col-12 text-md-right text-center">
                    <a href="#" class="boxed-btn purchase-btn"><i class="fas fa-shopping-cart"></i>purchase now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Call to action
    ============================= -->
@endsection
