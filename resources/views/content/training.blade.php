@extends('layouts.user', [
    'name' => 'train',
])


@section('title')
<title>Salesprof - Our Trainings</title>


@section('content')


    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Portfolio Three Column</h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="index-2.html">Home</a></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->

    <!-- Start: Portfolio 3 Column
    ============================= -->
 
    <section id="portfolio" class="section-padding project-masonary portfolio-page">
        <div class="container">

            {{-- <div class="row project-tab">
                <div class="col-md-12">
                    <ul class="project-tab-sorting sorting-btn" id="filter">
                        <li><a href="#" data-group="Show All" class="active"><i class="fas fa-align-justify"></i>All Business</a></li>
                        <li><a href="#" data-group="Corporate"><i class="fab fa-renren"></i>Corporate</a></li>
                        <li><a href="#" data-group="Insurance"><i class="fab fa-codepen"></i>Insurance</a></li>
                        <li><a href="#" data-group="Agency"><i class="fab fa-joget"></i>Agency</a></li>
                        <li><a href="#" data-group="More"><i class="fas fa-euro-sign"></i>Finance</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="row project" id="grid">
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Insurance", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-01.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-01.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">About Creative Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate","Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-12.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-12.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Customer Insights Jobs</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Agency", "Finance", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-02.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-02.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Sustainability Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-03.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-03.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate","Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-04.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-04.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Ideas to Improve Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Insurance", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-05.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-05.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Customer Insights Jobs</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-06.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-06.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate","Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-07.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-07.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Right Team for Your Project.</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Insurance", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-08.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-08.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-09.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-09.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Right Team for Your Project.</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate","Agency", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-10.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-10.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Advanced Analytics Business</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6" data-groups='["Corporate", "Insurance", "Show All"]'>
                    <article class="portfolio-post">
                        <a href="assets/img/portfolio-3/portfolio-3-11.jpg" class="popup">
                            <figure class="portfolio-thumb">
                               <img src="{{ asset('img/portfolio-3/portfolio-3-11.jpg')}}" alt="">
                                <figcaption>
                                    <div class="inner-text">
                                        <i class="fas fa-arrows-alt-h"></i>
                                    </div>
                                </figcaption>
                            </figure>
                        </a>
                        <div class="post-content">
                            <div class="post-content-inner">
                                <h3 class="post-title"><a href="#">Right Team for Your Project.</a></h3>
                                <p>There are many variations of passages of Lorem available, but the majority have suffered alteration in some.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-12">
                    <nav class="portfolio-pagination" aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <li class="page-item prev">
                                <a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item next">
                                <a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div> --}}
            
        </div>
    </section>
    <!-- End: Portfolio
    ============================= -->

    <!-- Start: Excluesive
    ============================= -->
    <section id="exclusive" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 col-12">
                    <div class="section-title">
                        <h2>Excluesive Portfolio <span></span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in some form by injected humour.</p>
                    </div>                    
                </div>                
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="exclusive-carousel three-column">
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-01.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-02.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-03.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-01.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-02.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                        <div class="single-exclusive">
                           <img src="{{ asset('img/exclusive/exclusive-3-03.jpg')}}" alt="">
                            <a href="#">
                                <div class="exclusive-content">
                                    <p>12.09.2016 / Business</p>
                                    <h3>We are always looking for specific approach.</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End: Excluesive
    ============================= -->


@endsection
