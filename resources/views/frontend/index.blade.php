@extends('frontend.layouts.blog')
@section('content')
    <!-- Hero section -->
    <section class="hero-section">
        <div class="hero-slider owl-carousel">
            <div class="hero-slide-item set-bg" data-setbg="app_image/slider_photo-i.jpg">
                <div class="hs-text">
                    <h2 class="hs-title-1"><span>Welcome</span></h2>
                    <h2 class="hs-title-2"><span>To My</span></h2>
                    <h2 class="hs-title-3"><span>Blog!</span></h2>
                </div>
            </div>
            <div class="hero-slide-item set-bg" data-setbg="app_image/slider_photo-ii.jpg">
                <div class="hs-text">
                    <h2 class="hs-title-1"><span>Welcome</span></h2>
                    <h2 class="hs-title-2"><span>To My</span></h2>
                    <h2 class="hs-title-3"><span>Blog!</span></h2>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero section end -->

    <div class="row">
    <div class="col-md-8">
    @foreach($posts as $post)
            <section class="bottom-widgets-section spad">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sp-blog-item">
                                <div class="blog-thubm">
                                    <img style="width:50px" src="images/{{$post->image}}" alt="">
                                    <div class="blog-date">
                                        <span>{{$post->date}}</span>
                                    </div>
                                </div>
                                <div class="blog-text">
                                    <h5>{{ $post->name }}</h5>
                                    <span>{{"written by ". $post->writer}}</span>
                                    <p>{{ $post->short_description }}</p>
                                    <a href="{{url("post/$post->id")}}" class="readmore"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Footer widgets section end -->
        @endforeach
        </div>
        <div class="col-md-3"  style="background-image: linear-gradient(to right,lightskyblue,deepskyblue);">
        <div class="col-sm">
            <div class="sticky">
                <section class="recipes-section spad pt-0">
                    <div class="container">
                        <div class="section-title">
                            <h2>Most Viewed </h2>
                        </div>
    @foreach($posts_view as $post)
                            <div class="col-sm-12">
                                <div class="card card-inverse card-info">
                                    <img class="card-img-top" src="images/{{$post->image}}">
                                    <div class="card-block">
                                        <h4 class="card-title">{{$post->title}}</h4>
                                        <div class="card-text">
                                            {{$post->short_description}}
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <p>written by:{{$post->writer}}</p>
                                        <small>{{$post->date}}</small>
                                        <a href="post/{{$post->id}}" class="btn btn-info float-right btn-sm">Read More</a>
                                    </div>
                                </div>
                            </div>
                        <br>
        <!-- Recipes section end -->
    @endforeach
                    </div>
                </section>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="gallery">
        <div class="gallery-slider owl-carousel">
            @foreach($gal_image as $image)
            <div class="gs-item set-bg" data-setbg="{{url("images/$image->image")}}"></div>
            @endforeach
        </div>
    </div>

@endsection
