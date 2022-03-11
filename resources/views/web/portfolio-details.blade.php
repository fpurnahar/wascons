@extends('web.layouts.index')
    
@section('title', 'Portfolio')
    
@section('contents')
    
    <main id="main">
        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li>Portfolio Details</li>
                </ol>
                <h2>{{$view_portfolio->title}}</h2>

            </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-8">
                        <div class="portfolio-details-slider swiper">
                            <div class="swiper-wrapper align-items-center">

                                <div class="swiper-slide">
                                    <img src="{{$view_portfolio->image}}" alt="{{$view_portfolio->title}}">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{$view_portfolio->image_2}}" alt="{{$view_portfolio->title}}">
                                </div>

                                <div class="swiper-slide">
                                    <img src="{{$view_portfolio->image_3}}" alt="{{$view_portfolio->title}}">
                                </div>

                            </div>
                            <div class="swiper-pagination"></div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="portfolio-info">
                            <h3>Project information</h3>
                            <ul>
                                <li><strong>Category</strong>: {{$view_portfolio->category}}</li>
                                <li><strong>Client</strong>: {{$view_portfolio->client}}</li>
                                <li><strong>Project date</strong>: {{$view_portfolio->project_date}}</li>                            </ul>
                        </div>
                        <div class="portfolio-description">
                            <h2>{{$view_portfolio->title}}</h2>
                            <p>
                                {{$view_portfolio->description}}.
                            </p>
                        </div>
                        <a href="{{route('home')}}#portfolio" class="btn btn-danger"> Back To Portfolio</a>
                    </div>
                </div>

            </div>
        </section><!-- End Portfolio Details Section -->

    </main><!-- End #main -->

@endsection
    