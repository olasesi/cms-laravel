@extends('templates.master')
@section('content')
@php 
	use Carbon\Carbon;
@endphp

<!-- block post area start-->
<div id="example"></div>
<div id="dashboardinfo"></div>
<section class="block-wrapper mt-15">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div id="featured-slider" class="owl-carousel ts-overlay-style ts-featured">
                   
                   @foreach($body_post_slider as $each_body_post_slider)

                    <div class="item" style="background-image:url(storage/{{$each_body_post_slider->image_path}})"> 
                        <a class="post-cat ts-orange-bg" style="background-color: {{$each_body_post_slider->color}}" href="{{route('showsinglecategory', ['id'=>$each_body_post_slider->category])}}">{{$each_body_post_slider->category}}</a>
                        <div class="overlay-post-content">
                            <div class="post-content">
                                <h2 class="post-title lg">
                                    <a href="{{route('showsinglepost', ['id'=>$each_body_post_slider->slug])}}">{{$each_body_post_slider->title}}</a>
                                </h2>
                                <ul class="post-meta-info">
                                    <li class="author">
                                        <a href="{{ route('showauthor', ['id' => $each_body_post_slider->id]) }}"> 
                                            <img src="storage/{{$each_body_post_slider->user_image_path}}" alt="{{$each_body_post_slider->name}}"> {{$each_body_post_slider->name}}
                                        </a>
                                    </li>
                                    <li>
                                        <i class="fa fa-clock-o"></i>
                                      {{ Carbon::createFromFormat('Y-m-d H:i:s', $each_body_post_slider->created_at)->format('F d, Y')}}
                                    </li>
                                    <li class="active">
                                        <i class="icon-fire"></i>
                                        3,005
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/ Featured post end -->

                    </div>

                    @endforeach
                   
                </div>
                <!-- Featured owl carousel end-->
            </div>
            <!-- col end-->

            <div class="col-lg-3">
                @foreach ($two_side_post as $each_two_side_post)
                
                <div class="ts-grid-box ts-grid-content">
                    <a class="post-cat ts-orange-bg" href="{{route('showsinglecategory', ['id'=>$each_two_side_post->category])}}" style="background-color: {{$each_two_side_post->color}}" >{{$each_two_side_post->category}}</a>
                    <div class="ts-post-thumb">
                        <a href="{{route('showsinglepost', ['id'=>$each_two_side_post->slug])}}">
                            <img class="img-fluid" src="storage/{{$each_two_side_post->image_path}}" alt="{{$each_two_side_post->slug}}">
                        </a>
                    </div>
                    <div class="post-content">
                        <h3 class="post-title">
                            <a href="{{route('showsinglepost', ['id'=>$each_two_side_post->slug])}}">{{$each_two_side_post->title}}</a>
                        </h3>
                        <span class="post-date-info">
                            <i class="fa fa-clock-o"></i>
                            {{ Carbon::createFromFormat('Y-m-d H:i:s', $each_two_side_post->created_at)->format('F d, Y')}}
                        </span>
                    </div>
                </div>

                @endforeach
               
            </div>
            <!-- col end-->

            <div class="col-lg-3">
                <div class="post-list-item">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation">
                            <a class="active" href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                <i class="fa fa-clock-o"></i>
                                Recent
                            </a>
                        </li>
                        <li role="presentation">
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">
                                <i class="fa fa-heart"></i>
                                Favorites
                            </a>
                        </li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active ts-grid-box post-tab-list" id="home">
                           @if(count($sidebar_recent) > 0)
                           @foreach ($sidebar_recent as $each_sidebar_recent)
                            <div class="post-content media">
                                <img class="d-flex sidebar-img" src="storage/{{$each_sidebar_recent->image_path}}" alt="{{$each_sidebar_recent->title}}">
                                <div class="media-body">
                                    <span class="post-tag">
                                        <a href="{{route('showsinglecategory', ['id'=>$each_sidebar_recent->category])}}" class="green-color" style="color:{{$each_sidebar_recent->color}}"> {{$each_sidebar_recent->category}}</a>
                                    </span>
                                    <h4 class="post-title">
                                        <a href="{{route('showsinglepost', ['id'=>$each_sidebar_recent->slug])}}">{{$each_sidebar_recent->title}} </a>
                                    </h4>
                                </div>
                            </div>
                            @endforeach
                           @else
                                    <h5 class="">No recent news</h5>
                           @endif
                        </div>
                        <!--ts-grid-box end -->

                        <div role="tabpanel" class="tab-pane fade ts-grid-box post-tab-list" id="profile">
                            @if(count($sidebar_recent) > 0)
                           @foreach ($sidebar_favourites as $each_sidebar_favourites)
                            <div class="post-content media">
                                <img class="d-flex sidebar-img" src="storage/{{$each_sidebar_favourites->image_path}}" alt="{{$each_sidebar_favourites->title}}">
                                <div class="media-body">
                                    <span class="post-tag">
                                        <a href="{{route('showsinglecategory', ['id'=>$each_sidebar_favourites->category])}}" class="green-color" style="color:{{$each_sidebar_favourites->color}}"> {{$each_sidebar_favourites->category}}</a>
                                    </span>
                                    <h4 class="post-title">
                                        <a href="{{route('showsinglepost', ['id'=>$each_sidebar_favourites->slug])}}">{{$each_sidebar_favourites->title}}</a>
                                    </h4>
                                </div>
                            </div>
                            @endforeach
                            @else
                            <h5 class="">No favourite news</h5>
                        @endif
                            <!--post-content end-->
                        </div>
                        <!--ts-grid-box end -->
                    </div>
                    <!-- tab content end-->
                </div>
                <!-- post-list-item end-->
            </div>
            <!-- col end-->
        </div>
        <!-- row end-->
    </div>
    <!-- container end-->
</section>
<!-- block area end-->


<!-- post wraper start-->
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="posts-ad">
                    @if(($ad_banner[1]->image != NULL &&  $ad_banner[1]->end_date >= Carbon::now()->toDateString()))
						
						<a href="{{$ad_banner[1]->image_url}}">
							
							<img class="img-fluid" src="{{asset('storage/'.$ad_banner[1]->image_path)}}" alt="{{$ad_banner[1]->banner_name}}" title="{{$ad_banner[1]->banner_name}}">
						</a>
						@endif
                </div>
            </div>
            <!-- col end -->
            <div class="col-lg-9 col-md-8">
                <div class="ts-grid-box most-populer-item">
                    <h2 class="ts-title">Most Popular</h2>

                    <div class="most-populers owl-carousel">
                        @if(count($most_popular) > 0)
                        @foreach ($most_popular as $each_most_popular)
                        
                        <div class="item">
                            <a class="post-cat ts-orange-bg" style="background-color:{{$each_most_popular->color}}" href="{{route('showsinglecategory', ['id'=>$each_most_popular->category])}}">{{$each_most_popular->category}}</a>
                            <div class="ts-post-thumb">
                                <a href="{{route('showsinglepost', ['id'=>$each_most_popular->slug])}}">
                                    <img class="img-fluid" src="storage/{{$each_most_popular->image_path}}" alt="{{$each_most_popular->title}}">
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{route('showsinglepost', ['id'=>$each_most_popular->slug])}}">{{$each_most_popular->title}}</a>
                                </h3>
                                <span class="post-date-info">
                                    <i class="fa fa-clock-o"></i>
                                    {{ Carbon::createFromFormat('Y-m-d H:i:s', $each_most_popular->created_at)->format('F d, Y')}}
                                </span>
                            </div>
                        </div>

                        @endforeach
                        @else
                        <h5 class="">No popular news</h5>
                    @endif
                        <!-- ts-grid-box end-->

                        
                    </div>
                    <!-- most-populers end-->
                </div>
                <!-- ts-populer-post-box end-->
            </div>
            <!-- col end-->
        </div>
        <!-- row end-->
    </div>
    <!-- container end-->
</section>
<!-- post wraper end-->

<!-- post wraper start-->
@if(count($hot_topics) > 0)
<section class="block-wrapper mb-30 hot-topics-heighlight">
    <div class="container">

        <div class="ts-grid-box">
            <h2 class="ts-title">Hot Topics</h2>

            <div class="owl-carousel" id="hot-topics-slider">
               
              

                @foreach ($hot_topics as $each_hot_topics)
               
                <div class="item ts-blue-light-heighlight heighlight" style="background-color:{{$each_hot_topics->color}}">
                    <div class="ts-post-thumb">
                        <a href="{{route('showsinglepost', ['id'=>$each_hot_topics->slug])}}">
                            <img class="img-fluid" src="storage/{{$each_hot_topics->image_path}}" alt="{{$each_hot_topics->title}}">
                        </a>
                        <a class="post-cat" href="{{route('showsinglecategory', ['id'=>$each_hot_topics->category])}}">{{$each_hot_topics->category}}</a>
                    </div>

                    <div class="post-content">

                        <h3 class="post-title">
                            <a href="{{route('showsinglepost', ['id'=>$each_hot_topics->slug])}}">{{$each_hot_topics->title}}</a>
                        </h3>
                        <span class="post-date-info">
                            <i class="fa fa-clock-o"></i>
                            {{ Carbon::createFromFormat('Y-m-d H:i:s', $each_hot_topics->created_at)->format('F d, Y')}}
                        </span>
                    </div>
                </div>

                @endforeach

             
                
            </div>
            <!-- most-populers end-->
        </div>
        <!-- ts-populer-post-box end-->
    </div>
    <!-- container end-->
</section>

@endif

<!-- post wraper end-->

<!-- ad banner 2 start-->
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-img text-center">
                    @if(($ad_banner[2]->image != NULL &&  $ad_banner[2]->end_date >= Carbon::now()->toDateString()))
						
                    <a href="{{$ad_banner[2]->image_url}}">
                        
                        <img class="img-fluid" src="{{asset('storage/'.$ad_banner[2]->image_path)}}" alt="{{$ad_banner[2]->banner_name}}" title="{{$ad_banner[2]->banner_name}}">
                    </a>
                    @endif
                </div>
            </div>
            <!-- col end -->
        </div>
        <!-- row  end -->
    </div>
    <!-- container end -->
</section>
<!-- ad banner 2 end-->

<!-- watch now start-->
<section class="block-wrapper">
    <div class="container">

        <div class="row">
            <div class="col-lg-9">


                @if(count($watch_now) > 0)

                <div class="ts-grid-box watch-post mb-30">
                    <h2 class="ts-title">Watch Now</h2>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="tab-content featured-post" id="nav-tabContent">

                              

                                @foreach ($watch_now as $each_watch_now)

                                <div class="tab-pane ts-overlay-style fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                    <div class="item" style="background-image: url(storage/{{$each_watch_now->video_placeholder}})">

                                        <a class="post-cat ts-orange-bg" style="background-color:{{$each_watch_now->color}}" href="{{route('showsinglecategory', ['id'=>$each_watch_now->category])}}">{{$each_watch_now->category}}</a>
                                        <a href="{{$each_watch_now->video_path}}" class="ts-video-btn">
                                            <i class="fa fa-play-circle-o"></i>
                                        </a>
                                        <div class="overlay-post-content">
                                            <div class="post-content">
                                                <h3 class="post-title md">
                                                    <a href="{{route('showsinglepost', ['id'=>$each_watch_now->slug])}}">{{route('showsinglepost', ['id'=>$each_watch_now->title])}}</a>
                                                </h3>
                                                <ul class="post-meta-info">
                                                    <li class="author">
                                                        <a href="{{route('showauthor', ['id'=>$each_watch_now->id])}}">
                                                            <img src="storage/{{$each_watch_now->user_image_path}}" alt="{{$each_watch_now->name}}"> {{$each_watch_now->name}}
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        {{ Carbon::createFromFormat('Y-m-d H:i:s', $each_watch_now->created_at)->format('F d, Y')}}
                                                    </li>
                                                    <li class="active">
                                                        <i class="icon-fire"></i>
                                                        3,005
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!-- overlay post content-->
                                    </div>
                                    <!-- item end-->
                                </div>

                                @endforeach

                               
                               
                            </div>

                        </div>
                        <!-- col end-->

                        <div class="col-lg-5">
                            <div class="nav post-list-box" id="nav-tab" role="tablist">
                              

                                @foreach ($watch_now_side as $each_watch_now_side) 
                                
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home"
                                 aria-selected="true">
                                    <div class="post-content media">
                                        <img class="d-flex" src="storage/{{$each_watch_now_side->video_placeholder}}" alt="{{$each_watch_now_side->title}}">
                                        <div class="media-body align-self-center">
                                            <h4 class="post-title">
                                                {{$each_watch_now_side->title}}
                                            </h4>
                                            <span class="post-date-info">
                                                <i class="fa fa-clock-o"></i>
                                                {{ Carbon::createFromFormat('Y-m-d H:i:s', $each_watch_now_side->created_at)->format('F d, Y')}}
                                            </span>
                                        </div>
                                    </div>
                                </a>

                                 @endforeach

                               
                                <!-- nav item end-->
                                
                               
                                <!-- nav item end-->
                            </div>
                            <!-- watch list post end-->
                        </div>
                        <!-- col end -->
                    </div>
                    <!-- row end-->
                </div>

                
                @endif 
                <!-- ts-populer-post-box end-->

                <!-- tranding post start -->
                <div class="row category-style">
                    <div class="col-lg-4">
                        <div class="ts-grid-box ts-col-box">
                            <h2 class="ts-title">Random news</h2>
                            @if(count($random_news) > 0)

                            @foreach ($random_news as $each_random_news)

                            <div class="item">
                                <div class="ts-post-thumb">
                                    <a class="post-cat ts-pink-bg"  style="background-color:{{$each_random_news->color}}" href="{{route('showsinglecategory', ['id'=>$each_random_news->category])}}">{{$each_random_news->category}}</a>
                                    <a href="{{route('showsinglepost', ['id'=>$each_random_news->slug])}}">
                                        <img class="img-fluid" src="storage/{{$each_random_news->image_path}}" alt="{{$each_random_news->title}}">
                                    </a>
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <a href="{{route('showsinglepost', ['id'=>$each_random_news->slug])}}">{{$each_random_news->title}}</a>
                                    </h3>
                                </div>
                            </div>
                        
                            @endforeach

                            @else
                            <h5 class="">No random news</h5>
                            @endif
                        </div>
                        <!-- ts-populer-post-box end-->
                    </div>
                    <!-- col end-->
                    <div class="col-lg-8">
                        <div class="ts-grid-box ts-tranding-post">
                            <h2 class="ts-title">Trending</h2>
                            <!-- arrow start -->
                            <div class="ts-arrow">
                                <a class="control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="fa fa-angle-left" aria-hidden="true"></span>
                                </a>
                                <a class="control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="fa fa-angle-right" aria-hidden="true"></span>
                                </a>
                            </div>
                            <!-- arrow end -->

                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                   
                                    @if(count($trending) > 0)
                                   @foreach ($trending as $each_trending)
                                    
                                   <div class="carousel-item ">   {{--active--}}
                                        <div class="ts-overlay-style">
                                            <div class="item">
                                                <div class="ts-post-thumb">
                                                    <a href="{{route('showsinglepost', ['id'=>$each_trending->slug])}}">
                                                        <img class="img-fluid" src="storage/{{$each_trending->image_path}}" alt="{{$each_trending->title}}">
                                                    </a>
                                                </div>
                                                <div class="overlay-post-content">
                                                    <div class="post-content">
                                                        <h3 class="post-title md">
                                                            <a href="{{route('showsinglepost', ['id'=>$each_trending->slug])}}">{{$each_trending->title}}</a>
                                                        </h3>
                                                        <ul class="post-meta-info">
                                                            <li class="author">
                                                                <a href="{{ route('showauthor', ['id' => $each_trending->id]) }}">
                                                                    <img src="storage/{{$each_trending->user_image_path}}" alt="{{$each_trending->name}}"> {{$each_trending->name}}
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <i class="fa fa-clock-o"></i>
                                                                {{ Carbon::createFromFormat('Y-m-d H:i:s', $each_trending->created_at)->format('F d, Y')}}
                                                            </li>
                                                            <li class="active">
                                                                <i class="icon-fire"></i>
                                                                3,005
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    @endforeach
                                    @else
                                    <h5 class="ml-2">No trending news</h5>
                                    @endif
                                   
                                </div>
                                <!-- carousel-inner end -->



                                <!-- slider dot start -->
                                

                               <ol class="slider-indicators carousel-indicators heighlight clearfix">

                                @if(count($trending) > 0)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                                        <div class="post-content media">
                                            <div class="d-flex post-count">01</div>
                                            <div class="media-body align-self-center">
                                                <h4 class="post-title">
                                                    <a href="{{route('showsinglepost', ['id'=>$trending[0]->slug])}}">{{Str::limit($trending[0]->title, 40, ' (...)')}}
                                                    </a>
                                                </h4>
                                                <span class="post-date-info">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ Carbon::createFromFormat('Y-m-d H:i:s', $trending[0]->created_at)->format('F d, Y')}}
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1">
                                        <div class="post-content media">
                                            <div class="d-flex post-count">02</div>
                                            <div class="media-body align-self-center">
                                                <h4 class="post-title">
                                                    <a href="{{route('showsinglepost', ['id'=>$trending[1]->slug])}}">{{Str::limit($trending[1]->title, 40, ' (...)')}}
                                                    </a>
                                                </h4>
                                                <span class="post-date-info">
                                                    <i class="fa fa-clock-o"></i>
                                                    {{ Carbon::createFromFormat('Y-m-d H:i:s', $trending[1]->created_at)->format('F d, Y')}}
                                                </span>
                                            </div>
                                        </div>
                                    </li>
                                   
                                    @endif
                                </ol> 
                                <!-- slider dot end -->
                            </div>
                            <!-- watch now content end-->
                        </div>
                    </div>
                </div>
                <!-- tranding post end -->

            </div>
            <!-- col end-->
            <div class="col-lg-3">
                <div class="right-sidebar">
                    <div class="ts-grid-box widgets">
                        <h2 class="ts-title">Follow us</h2>
                        <ul class="ts-social-list">
                            <li class="ts-facebook">
                                <a href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <b>
                                    <div class="fb-like" data-href="https://olusesiahmed-portfolio.herokuapp.com/" data-width="" data-layout="button_count" data-action="like" data-size="small" data-share="false"></div>
                                </b>
                                <span>Likes</span>
                            </li>
                            <li class="ts-google-plus">
                                <a href="#">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <b>
                                    <div class="g-plusone" data-annotation="inline" data-width="300"></div>
                                    <script type="text/javascript">
                                        (function() {
                                        var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                        po.src = 'https://apis.google.com/js/plusone.js';
                                        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                        })();
                                       </script>
                                </b>
                                <span>Followers</span>
                            </li>
                            <li class="ts-twitter">
                                <a href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <b>
                                    <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                                </b>
                                <span>Followers</span>
                            </li>
                            <li class="ts-pinterest">
                                <a href="#">
                                    <i class="fa fa-pinterest-p"></i>
                                </a>
                                <b>12.5 k </b>
                                <span>Photos</span>
                            </li>
                            <li class="ts-linkedin">
                                <a href="#">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                                <b>
                                    <script src="https://platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
                                    <script type="IN/FollowCompany" data-id="0000" data-counter="bottom"></script>
                                </b>
                                <span>Followers</span>
                            </li>
                            <li class="ts-youtube">
                                <a href="#">
                                    <i class="fa fa-youtube"></i>
                                </a>
                                <b>12.5 k </b>
                                <span>Followers</span>
                            </li>
                        </ul>
                    </div>
                    <!-- widgets end-->

                    <div class="widgets widget-banner">
                        @if(($ad_banner[3]->image != NULL &&  $ad_banner[3]->end_date >= Carbon::now()->toDateString()))
						
						<a href="{{$ad_banner[3]->image_url}}">
							
							<img class="img-fluid" src="{{asset('storage/'.$ad_banner[3]->image_path)}}" alt="{{$ad_banner[3]->banner_name}}" title="{{$ad_banner[3]->banner_name}}">
						</a>
						@endif
                    </div>
                    <!-- widgets end-->
                  
                    @if(count($hot_topics_sidebar) > 0)
                    <div class="widgets ts-grid-box widgets-populer-post">
                        <div class="topic-list">
                            hot Topics
                        </div>
                        <div class="ts-overlay-style">
                            <div class="item">
                                <div class="ts-post-thumb">
                                    <a href="{{route('showsinglepost', ['id'=>$hot_topics_sidebar[0]->slug])}}">
                                        <img class="img-fluid" src="storage/{{$hot_topics_sidebar[0]->user_image_path}}" alt="{{$hot_topics_sidebar[0]->name}}">
                                    </a>
                                </div>
                                <div class="overlay-post-content">
                                    <div class="post-content">
                                        <h3 class="post-title">
                                            <a href="{{route('showsinglepost', ['id'=>$hot_topics_sidebar[0]->slug])}}">{{$hot_topics_sidebar[0]->name}}</a>
                                        </h3>
                                        <span class="post-date-info">
                                            <i class="fa fa-clock-o"></i>
                                            {{ Carbon::createFromFormat('Y-m-d H:i:s', $hot_topics_sidebar[0]->created_at)->format('F d, Y')}}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ts-overlay-style  end-->

                        <div class="post-content media">
                            <img class="d-flex sidebar-img" src="storage/{{$hot_topics_sidebar[1]->user_image_path}}" alt="{{$hot_topics_sidebar[1]->name}}">
                            <div class="media-body align-self-center">
                                <h4 class="post-title">
                                    <a href="{{route('showsinglepost', ['id'=>$hot_topics_sidebar[1]->slug])}}">{{$hot_topics_sidebar[1]->name}} </a>
                                </h4>
                            </div>
                        </div>
                        <!-- post content end-->
                        <div class="post-content media">
                            <img class="d-flex sidebar-img" src="storage/{{$hot_topics_sidebar[2]->user_image_path}}" alt="{{$hot_topics_sidebar[2]->name}}">
                            <div class="media-body align-self-center">
                                <h4 class="post-title">
                                    <a href="{{route('showsinglepost', ['id'=>$hot_topics_sidebar[2]->slug])}}">{{$hot_topics_sidebar[2]->name}}</a>
                                </h4>
                            </div>
                        </div>
                        <!-- post content end-->
                    </div>
                    @endif
                    <!-- widgets end-->
                </div>
                <!-- right sidebar end-->
            </div>
            <!-- col end-->
        </div>

    </div>
    <!-- container end-->
</section>
<!-- watch now end-->

<!-- post wraper start-->
@if(count($more_news) > 0)
<section class="block-wrapper mb-45" id="more-news-section">
    <div class="container">
        <div class="ts-grid-box ts-grid-box-heighlight">
            <h2 class="ts-title">More News</h2>
            @foreach ($more_news as $each_more_news)
            <div class="owl-carousel" id="more-news-slider">
                <div class="ts-overlay-style">
                    <div class="item">
                        <div class="ts-post-thumb">
                            <a href="{{route('showsinglepost', ['id'=>$each_more_news->slug])}}">
                                <img class="img-fluid" src="storage/{{$each_more_news->user_image_path}}" alt="{{$each_more_news->name}}">
                            </a>
                        </div>
                    <a class="post-cat ts-green-bg" style="background-color:{{$each_more_news->color}}"  href="{{route('showsinglecategory', ['id'=>$each_more_news->category])}}">{{$each_more_news->category}}</a>
                        <div class="overlay-post-content">
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{route('showsinglepost', ['id'=>$each_more_news->slug])}}">{{$each_more_news->name}}</a>
                                </h3>
                                <span class="post-date-info">
                                    <i class="fa fa-clock-o"></i>
                                    {{ Carbon::createFromFormat('Y-m-d H:i:s', $each_more_news->created_at)->format('F d, Y')}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- end item-->
                </div>
                <!-- ts-overlay-style end-->
               
                
            </div>
            @endforeach
            <!-- most-populers end-->
        </div>
        <!-- ts-populer-post-box end-->
    </div>
    <!-- container end-->
</section>
@endif
<!-- post wraper end-->



@endsection
