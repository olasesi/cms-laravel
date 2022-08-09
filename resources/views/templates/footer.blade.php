<!-- footer social list start-->
<section class="ts-footer-social-list">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="footer-logo">
                    <a href="#">
                        <img src="images/logo/footer_logo.png" alt="">
                    </a>
                </div>
                <!-- footer logo end-->
            </div>
            <!-- col end-->

            <div class="col-lg-8 align-self-center">
                <ul class="footer-social">
                    <li class="ts-facebook">
                        @if(!empty($social_media_links[0]->url))
							<a href="{{$social_media_links[0]->url}}" title="{{$social_media_links[0]->name}}" target="_blank">
								<i class="fa fa-facebook"></i>
                                <span>Facebook</span>
							</a>
					    @endif	
                        
                    </li>
                    <li class="ts-twitter">
                        @if(!empty($social_media_links[1]->url))
							<a href="{{$social_media_links[1]->url}}" title="{{$social_media_links[1]->name}}" target="_blank">
								<i class="fa fa-twitter"></i>
                                <span>Twitter</span>
							</a>
					    @endif	
                        
                    </li>
                     <li class="ts-google-plus">
                        @if(!empty($social_media_links[2]->url))
							<a href="{{$social_media_links[2]->url}}" title="{{$social_media_links[2]->name}}" target="_blank">
								<i class="fa fa-google-plus"></i>
                                <span>Google plus</span>
							</a>
					    @endif	
                        
                    </li>
                    <li class="ts-instagram">
                        @if(!empty($social_media_links[3]->url))
							<a href="{{$social_media_links[3]->url}}" title="{{$social_media_links[3]->name}}" target="_blank">
								<i class="fa fa-instagram"></i>
                                <span>Instagram</span>
							</a>
					    @endif	
                        
                    </li>
                    <li class="ts-youtube">
                        @if(!empty($social_media_links[4]->url))
							<a href="{{$social_media_links[4]->url}}" title="{{$social_media_links[4]->name}}" target="_blank">
								<i class="fa fa-youtube"></i>
                                <span>Youtube</span>
							</a>
					    @endif	
                        
                    </li>
                    
                    <li class="ts-linkedin">
                        @if(!empty($social_media_links[5]->url))
							<a href="{{$social_media_links[5]->url}}" title="{{$social_media_links[5]->name}}" target="_blank">
								<i class="fa fa-linkedin"></i>
                                <span>Linkedin</span>
							</a>
					    @endif	
                        
                    </li>
                </ul>
            </div>
            <!-- col end-->

        </div>
    </div>
</section>
<!-- footer social list end-->

<!-- newslater start -->
<section class="ts-newslatter">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="ts-newslatter-content">
                    <h2>
                        Sign up for the Newsletter
                    </h2>
                    <p>
                        Join our newsletter and get updates in your inbox. We won’t spam you and we respect your privacy.
                    </p>
                </div>
            </div>
            <!-- col end-->

            <div class="col-lg-6 align-self-center">
                <div class="newsletter-form">
                    <form action="#" method="post" class="media align-items-end">
                        <div class="email-form-group media-body">
                            <i class="fa fa-paper-plane" aria-hidden="true"></i>
                            <input type="email" name="email" id="newsletter-form-email" class="form-control" placeholder="Enter Your Email" autocomplete="off"
                             required>
                        </div>
                        <div class="d-flex ts-submit-btn">
                            <button class="btn btn-primary">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- newslater end -->

<!-- footer start -->
<footer class="ts-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-menu text-center">
                    <ul>
                        <li>
                            <a href="#">Support</a>
                        </li>
                        <li>
                            <a href="#">Suggestion</a>
                        </li>
                        <li>
                            <a href="#">Privacy</a>
                        </li>
                        <li>
                            <a href="#">About</a>
                        </li>
                        <li>
                            <a href="#">Our Ads </a>
                        </li>
                        <li>
                            <a href="#">Terms</a>
                        </li>
                    </ul>
                </div>
                <div class="copyright-text text-center">
                    <p>&copy; 2018, Vinazine. All rights reserved</p>
                </div>
            </div><!-- col end -->
        </div><!-- row end -->
        <div id="back-to-top" class="back-to-top">
            <button class="btn btn-primary" title="Back to Top">
                <i class="fa fa-angle-up"></i>
            </button>
        </div><!-- Back to top end -->
    </div><!-- Container end-->
</footer>
<!-- footer end -->