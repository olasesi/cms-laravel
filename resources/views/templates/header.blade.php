	
	@php 
	use Carbon\Carbon;
	@endphp

	@auth
	<section class="top-bar bg-primary">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 align-self-center md-center-item">
					<div class="ts-temperature">
						<a href="{{route('admin.dashboard')}}" title="Dashboard" class="btn btn-dark text-warning ">
							<i class="fa fa-dashboard"></i>
							Dashboard
						</a>
						
						<a href="{{route('admin.createpost')}}" title="Create post" class="btn btn-dark text-warning ">
							<i class="fa fa-pencil-square"></i>
							Create Post
						</a>

					</div>

				</div>
				<!-- end col-->

				<div class="col-lg-6 text-right align-self-center">
					<ul class="top-social">
						<li>

						</li>
						<li class="ts-date">
						</li>
					</ul>
				</div>
				<!--end col -->


			</div>
			<!-- end row -->
		</div>
	</section>

	@endauth

	<section class="top-bar">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 align-self-center md-center-item">
					<div class="ts-temperature">
						<i class="icon-weather"></i>
						{{-- {{$weather}} --}}
						<span>25.8
							<b>c</b>
						</span>
						<span>Dubai</span>

					</div>

					<ul class="ts-top-nav">
					
						<li>
							@if(!empty($top_bar_links[0]->title))
							<a href="{{$top_bar_links[0]->url}}" title="{{$top_bar_links[0]->title}}" target="_blank">
								{{$top_bar_links[0]->title}}
							</a>
					@endif	
						</li>
						<li>
							@if(!empty($top_bar_links[1]->title))
							<a href="{{$top_bar_links[1]->url}}" title="{{$top_bar_links[1]->title}}" target="_blank">
								{{$top_bar_links[1]->title}}
							</a>
					@endif	
						</li>
						<li>
							@if(!empty($top_bar_links[2]->title))
							<a href="{{$top_bar_links[2]->url}}" title="{{$top_bar_links[2]->title}}" target="_blank">
								{{$top_bar_links[2]->title}}
							</a>
					@endif	
						</li>
						<li>
							@if(!empty($top_bar_links[3]->title))
							<a href="{{$top_bar_links[3]->url}}" title="{{$top_bar_links[3]->title}}" target="_blank">
								{{$top_bar_links[3]->title}}
							</a>
					@endif	

					

						</li>
					</ul>
				</div>
				<!-- end col-->

				<div class="col-lg-6 text-right align-self-center">
					<ul class="top-social">
						<li>
							
						
							
					@if(!empty($social_media_links[0]->url))
							<a href="{{$social_media_links[0]->url}}" title="{{$social_media_links[0]->name}}" target="_blank">
								<i class="fa fa-facebook"></i>
							</a>
					@endif	

					@if(!empty($social_media_links[1]->url))
					<a href="{{$social_media_links[1]->url}}" title="{{$social_media_links[1]->name}}" target="_blank">
						<i class="fa fa-twitter"></i>
					</a>
					@endif	
							
					@if(!empty($social_media_links[2]->url))
					<a href="{{$social_media_links[2]->url}}" title="{{$social_media_links[2]->name}}" target="_blank">
						<i class="fa fa-google-plus"></i>
					</a>
					@endif	
					
					@if(!empty($social_media_links[3]->url))
					<a href="{{$social_media_links[3]->url}}" title="{{$social_media_links[3]->name}}" target="_blank">
						<i class="fa fa-instagram"></i>
					</a>
					@endif	
							
					@if(!empty($social_media_links[4]->url))
					<a href="{{$social_media_links[4]->url}}" title="{{$social_media_links[4]->name}}" target="_blank">
						<i class="fa fa-youtube"></i>
					</a>
					@endif	

					@if(!empty($social_media_links[5]->url))
					<a href="{{$social_media_links[5]->url}}" title="{{$social_media_links[5]->name}}" target="_blank">
						<i class="fa fa-linkedin"></i>
					</a>
					@endif	
						</li>
						<li class="ts-date">
							<i class="fa fa-clock-o"></i>
							<span id="top-bar-date"></span>
						</li>
					</ul>
				</div>
				<!--end col -->


			</div>
			<!-- end row -->
		</div>
	</section>
	<!-- end top bar-->

	<!-- ad banner start -->
	<section class="header-middle">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="banner-img">
						
						@if(($ad_banner[0]->image != NULL &&  $ad_banner[0]->end_date >= Carbon::now()->toDateString()))
						
						<a href="{{$ad_banner[0]->image_url}}">
							
							<img class="img-fluid" src="{{asset('storage/'.$ad_banner[0]->image_path)}}" alt="{{$ad_banner[0]->banner_name}}" title="{{$ad_banner[0]->banner_name}}">
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
	<!-- ad banner end -->

	<!-- header nav start-->
	<header class="header-default">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 pr-0">
					<div class="logo">
						<a href="{{URL::to('/')}}">
							<img src="{{asset('storage/'.$website_info[0]->logo_image_path)}}" alt="{{$website_info[0]->website_name}}">
						</a>
					</div>

				</div>
				<!-- logo end-->
				<div class="col-lg-10 header-nav-item">
					<div class="ts-breaking-news clearfix">
						@if(count($breaking_news) > 0)
						<h2 class="breaking-title float-left">
							
							<i class="fa fa-bolt"></i> Breaking News :</h2>
							
						<div class="breaking-news-content owl-carousel float-left" id="breaking_slider">
							@foreach($breaking_news as $single_post)
								@if($single_post->breaking_news == 'on')
								<div class="breaking-post-content">
									<p>
										<a href="{{route('showsinglepost', ['id'=>$single_post->slug])}}">{{$single_post->excerpt}}</a>
									</p>
								</div>
								@endif
							@endforeach
							
							
						</div>
						@endif
					</div>
					<!--nav top end-->
					<nav class="navigation ts-main-menu ts-menu-sticky navigation-landscape">
						<div class="nav-header">
							<a class="nav-brand mobile-logo visible-xs" href="index.html">
								<img src="images/logo/footer_logo.png" alt="">
							</a>
							<div class="nav-toggle"></div>
						</div>
						<!--nav brand end-->

						<div class="nav-menus-wrapper clearfix">
							<!--nav right menu start-->
							<ul class="right-menu align-to-right">
								
								<li class="header-search">
									<div class="nav-search">
										<div class="nav-search-button">
											<i class="icon icon-search"></i>
										</div>
										<form>
											<span class="nav-search-close-button" tabindex="0">✕</span>
											<div class="nav-search-inner">
												<input type="search" name="search" placeholder="Type and hit ENTER">
											</div>
										</form>
									</div>
								</li>
							</ul>
							<!--nav right menu end-->

							<!-- nav menu start-->
							<ul class="nav-menu">
								<li class="active"> <!-- Deal with "active"-->
									<a href="{{URL::to('/')}}">Home</a>
									
								</li>
								
								<li>
								
									@if(!empty($mainmenu_bar_links[0]->title))
							
										
									<a href="#">{{$mainmenu_bar_links[0]->title}}</a> 	
									<div class="megamenu-panel">
										<div class="megamenu-tabs">
											

											@if($mainmenu_bar_links[0]->content_type == 'Post')
											<div class="megamenu-tabs-pane active">
												<div class="row">

												
												@foreach($post as $each_post)
													
												<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-purple-bg" style="background:{{$each_post->color}};" href="{{route('showsinglecategory', ['id'=>$each_post->category])}}">{{$each_post->category}}</a>

																<a href="{{route('showsinglepost', ['id'=>$each_post->slug])}}">
																	<img class="img-fluid" src="storage/{{$each_post->image_path}}" alt="{{$each_post->title}}">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="{{route('showsinglepost', ['id'=>$each_post->slug])}}">{{$each_post->title}}</a>
																</h3>
															</div>
														</div>
													</div>
												@endforeach
													
													
												</div>

											</div>

											@elseif($mainmenu_bar_links[0]->content_type == 'Video')
											
											
											
											<!-- mega menu end-->
											<div class="megamenu-tabs-pane">
												<div class="row">
													
													@foreach($post_video as $each_post_video)
													
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-yellow-bg" style="background:{{$each_post_video->color}};" href="{{route('showsinglecategory', ['id'=>$each_post_video->category])}}">{{$each_post_video->category}}</a>
																<a href="{{route('showsinglepost', ['id'=>$each_post_video->slug])}}">
																	<img class="img-fluid" src="{{$each_post_video->video_placeholder}}" alt="{{$each_post_video->title}}">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="{{route('showsinglepost', ['id'=>$each_post_video->slug])}}">{{$each_post_video->title}}</a>
																</h3>
															</div>
														</div>
													</div>


													@endforeach


												</div>

											</div>
											
											@elseif($mainmenu_bar_links[0]->content_type == 'Category')
											
												<ul class="nav-dropdown">
													@foreach($post_category as $each_post_category)
													
													<li>
													
																<a href="{{route('showsinglecategory', ['id'=>$each_post_category->category])}}">{{$each_post_category->category}}</a>
														
													</li>
													@endforeach
												
												</ul>
												
											

											@else
											<!-- Other type of category-->

											@foreach($mainmenu_all as $each_mainmenu_all)
											
									@if($mainmenu_bar_links[0]->content_type == $each_mainmenu_all->content_type)
											
											<div class="megamenu-tabs-pane">
												<div class="row">
													
													{{-- @foreach($post as $each_post)
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-pink-bg" href="">{{$each_post->category}}</a>
																<a href="">
																	<img class="img-fluid" src="storage/{{$each_post->image_path}}" alt="{{$each_post->title}}">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="">{{$each_post->title}}</a>
																</h3>
															</div>
														</div>
													</div>

													@endforeach --}}
													
												</div>

											</div>

											@endif
										@endforeach
											@endif
											<!-- mega menu end-->
											{{-- <div class="megamenu-tabs-pane">
												<div class="row">
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-orange-bg" href="#">Travel</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/travel/travel2.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-orange-bg" href="#">Travel</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/travel/travel3.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>
													<div class="col-12 col-lg-4">
														<div class="item">

															<div class="ts-post-thumb">
																<a class="post-cat ts-orange-bg" href="#">Travel</a>
																<a href="#">
																	<img class="img-fluid" src="images/news/travel/travel4.jpg" alt="">
																</a>
															</div>
															<div class="post-content">
																<h3 class="post-title">
																	<a href="#">Tourism in Dubai is booming by international tourist</a>
																</h3>
															</div>
														</div>
													</div>

												</div>

											</div> --}}
											<!-- mega menu end-->

										</div>
									</div>
									@endif
								</li>
								

								<li>
									@if(!empty($mainmenu_bar_links[1]->title))
									<a href="{{$mainmenu_bar_links[1]->content_type}}" title="{{$mainmenu_bar_links[1]->title}}">{{$mainmenu_bar_links[1]->title}}</a>
									@endif
								</li>
								
								<li>
									@if(!empty($mainmenu_bar_links[2]->title))
									<a href="#" >{{$mainmenu_bar_links[2]->title}}</a>
									
									<div class="megamenu-panel">
										<div class="row">
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech1.jpg" alt="">
														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>
													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech2.jpg" alt="">

														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>

													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech3.jpg" alt="">

														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>

													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
											<div class="col-12 col-lg-3">
												<div class="item">
													<div class="ts-post-thumb">
														<a href="#">
															<img class="img-fluid" src="images/news/tech/tech4.jpg" alt="">
														</a>
														<a href="https://www.youtube.com/watch?v=uZmz6fGRVW4" class="fa fa-play-circle-o ts-video-icon"></a>
													</div>
													<div class="post-content">
														<h3 class="post-title">
															<a href="#">Tourism in Dubai tourist favorite place</a>
														</h3>
													</div>
												</div>
											</div>
										</div>
									</div>
								</li>
								@endif
								<li>
									@if(!empty($mainmenu_bar_links[3]->title))
									<a href="{{$mainmenu_bar_links[3]->content_type}}" title="{{$mainmenu_bar_links[3]->title}}">{{$mainmenu_bar_links[3]->title}}</a>
									@endif
								</li>
								<li>
									@if(!empty($mainmenu_bar_links[4]->title))
									<a href="{{$mainmenu_bar_links[4]->content_type}}" title="{{$mainmenu_bar_links[4]->title}}">{{$mainmenu_bar_links[4]->title}}</a>
									<ul class="nav-dropdown">
										<li>
											<a href="#">Category layout</a>
											<ul class="nav-dropdown">
												<li>
													<a href="category-1.html">Category layout 1</a>
												</li>
												<li>
													<a href="category-2.html">Category layout 2 </a>
												</li>
												<li>
													<a href="category-3.html">Category layout 3</a>
												</li>
												<li>
													<a href="category-4.html">Category layout 4</a>
												</li>
												<li>
													<a href="category-5.html">Category layout 5</a>
												</li>
												<li>
													<a href="category-6.html">Category layout 6</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Posts Formate</a>
											<ul class="nav-dropdown">
												<li>
													<a href="single-post-1.html">Single Post 1</a>
												</li>
												<li>
													<a href="single-post-2.html">Single Post 2 </a>
												</li>
												<li>
													<a href="single-post-3.html">Single Post 3 </a>
												</li>
												<li>
													<a href="single-post-4.html">Single Post 4 </a>
												</li>
												<li>
													<a href="single-post-5.html">Single Post 5</a>
												</li>
												<li>
													<a href="single-post-6.html">Single Post 6</a>
												</li>
												<li>
													<a href="single-post-7.html">Single Post 7</a>
												</li>
												<li>
													<a href="single-post-8.html">Single Post 8</a>
												</li>
												<li>
													<a href="single-post-9.html">Single Post 9</a>
												</li>
												<li>
													<a href="single-post-10.html">Single Post 10</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Pages</a>
											<ul class="nav-dropdown">
												<li>
													<a href="author.html">Author</a>
												</li>
												<li>
													<a href="contact.html">Contact Us</a>
												</li>
												<li>
														<a href="login.html">Log In</a>
												</li>
												<li>
														<a href="registration.html">registration</a>
												</li>
												<li>
													<a href="404.html">404 </a>
												</li>
											</ul>
										</li><!--Pages end-->
									</ul>
									@endif
								</li>
								
							</ul>
							<!--nav menu end-->
						</div>
					</nav>
					<!-- nav end-->
				</div>
			</div>
		</div>
	</header>
	<!-- header nav end-->