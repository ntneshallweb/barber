<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Barber shop</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{URL::to('/')}}/assets/img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{URL::to('/')}}/assets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<!-- Web Fonts  -->
		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/animate/animate.compat.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/theme.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/theme-elements.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/theme-blog.css">
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/theme-shop.css">



		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{URL::to('/')}}/assets/css/skins/skin-grey.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/custom.css">

		<!-- Head Libs -->
		<script src="{{URL::to('/')}}/assets/vendor/modernizr/modernizr.min.js"></script>

	</head>
	<body class="one-page alternative-font-5" data-target="#header" data-spy="scroll" data-offset="100">
		<div class="body">

			<header id="header" class="header-transparent header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0 box-shadow-none" style="background:#cacaca">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="index.html">
											<img alt="Porto" width="82" height="40" src="{{URL::to('/')}}/assets/img/logo-default-slim-dark-small.png">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-font-lg header-nav-main-font-lg-upper-2 header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a data-hash class="dropdown-item dropdown-toggle active" href="#home">
															Home
														</a>
														<ul class="dropdown-menu">
															<li><a class="dropdown-item" href="index-classic.html">Default Home</a></li>
															<li><a class="dropdown-item" href="index-one-page.html">One Page Website</a></li>
														</ul>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#services">Services</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#aboutus">Projects</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#clients">Clients</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#team">Meet the Team</a>
													</li>
													<li>
														<a class="dropdown-item" data-hash data-hash-offset="68" href="#contact">Contact Us</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main" id="home">
				<div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual dots-inside dots-horizontal-center show-dots-hover nav-inside nav-inside-plus nav-dark nav-md nav-font-size-md show-nav-hover mb-0" data-plugin-options="{'autoplayTimeout': 7000}" style="height: 100vh;">
					<div class="owl-stage-outer">
						<div class="owl-stage">

							<!-- Carousel Slide 1 -->
							<div class="owl-item position-relative pt-5" style="background-image: url({{ ($banners->image) ? URL::to('/public/uploads/'.$banners->image ) : '' }}); background-size: cover; background-position: center; background-color: #35383d;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">
												<h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-3 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="{{URL::to('/')}}/assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}" alt="" />
													</span>
													{{ $banners->sub_title }}
													<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="{{URL::to('/')}}/assets/img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}" alt="" />
													</span>
												</h3>
												<h2 class="text-color-light font-weight-extra-bold text-12 mb-4 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">{{ $banners->title }}<img src="{{URL::to('/')}}/assets/img/slides/slide-blue-line-big.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="1000" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}" alt="" /></span></span> DESIGN
												</h2>
												<p class="text-4 text-color-light font-weight-light opacity-7 text-center mt-2 mb-4" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'firstLoadNoAnim': true, 'minWindowWidth': 0, 'animationSpeed': 25}"><?php echo $banners->description;?></p>
												<a href="#" class="btn btn-primary btn-rounded font-weight-bold text-3 px-5 py-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1600" data-plugin-options="{'firstLoadNoAnim': true, 'minWindowWidth': 0}">GET STARTED NOW!</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- Carousel Slide 2 -->
							<!-- <div class="owl-item position-relative overlay overlay-show overlay-op-8 pt-5" style="background-image: url(img/slides/slide-bg-2.jpg); background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">
												<h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
													WE WORK HARD AND PORTO HAS
													<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>
												<h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">THE BEST DESIGN</h2>
												<p class="text-4 text-color-light font-weight-light opacity-7 text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 25}">Trusted by over <strong class="text-color-light">40,000</strong> satisfied users, Porto is a huge success in the one of larest world's MarketPlace</p>
											</div>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Carousel Slide 3 -->
							<!-- <div class="owl-item position-relative overlay overlay-show overlay-op-8 pt-5" style="background-image: url(img/slides/slide-bg-6.jpg); background-size: cover; background-position: center;">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">
												<h3 class="position-relative text-color-light text-4 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
													WE CREATE DESIGNS, WE ARE
													<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>
												<h2 class="porto-big-title text-color-light font-weight-extra-bold mb-3" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 250, 'animationName': 'fadeInRightShorterOpacity', 'letterClass': 'd-inline-block'}">PORTO</h2>
												<p class="text-4 text-color-light font-weight-light text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 2000, 'minWindowWidth': 0}">The best choice for your new website</p>
											</div>
										</div>
									</div>
								</div>
							</div> -->

							<!-- Carousel Slide 4 -->
							<!-- <div class="owl-item position-relative video overlay overlay-show overlay-op-8 pt-5" data-video-path="video/memory-of-a-woman" data-plugin-video-background data-plugin-options="{'posterType': 'jpg', 'position': '50% 50%'}">
								<div class="container position-relative z-index-3 h-100">
									<div class="row justify-content-center align-items-center h-100">
										<div class="col-lg-6">
											<div class="d-flex flex-column align-items-center">
												<h3 class="position-relative text-color-light text-5 line-height-5 font-weight-medium px-4 mb-2 appear-animation" data-appear-animation="fadeInDownShorterPlus" data-plugin-options="{'minWindowWidth': 0}">
													<span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
													WE WORK HARD AND PORTO HAS
													<span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-3">
														<img src="img/slides/slide-title-border.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250" data-plugin-options="{'minWindowWidth': 0}" alt="" />
													</span>
												</h3>
												<h2 class="text-color-light font-weight-extra-bold text-12 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="500" data-plugin-options="{'minWindowWidth': 0}">THE BEST DESIGN</h2>
												<p class="text-4 text-color-light font-weight-light opacity-7 text-center mb-0" data-plugin-animated-letters data-plugin-options="{'startDelay': 1000, 'minWindowWidth': 0, 'animationSpeed': 25}">Trusted by over <strong class="text-color-light">40,000</strong> satisfied users, Porto is a huge success in the one of largest world's MarketPlace<strong class="bg-light">Oi oi oi</strong></p>
											</div>
										</div>
									</div>
								</div>
							</div> -->

						</div>
					</div>
				</div>
				<section id="services" class="section section-height-3 bg-primary border-0 m-0 appear-animation" data-appear-animation="fadeIn">
					<div class="container my-3">
						<div class="row mb-5">
							<div class="col text-center appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="200">
								<h2 class="font-weight-bold text-color-light mb-2">Services</h2>
								<p class="text-color-light opacity-7">LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT</p>
							</div>
						</div>
						<div class="row mb-lg-4">
							<?php 
							$i = 0;
							?>
							@foreach ($services as $service)
								<?php
								if ( $i == ( count($services)/2 ) )
								{
									?>
									</div>
									<div class="row">
									<?php
								}
								?>
		                        <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
									<div class="feature-box feature-box-style-2">
										<img src="{{ ($service->icon) ? URL::to('/public/uploads/'.$service->icon ) : '' }}" class="img-fluid mb-3" alt="" />
										<div class="feature-box-info">
											<h4 class="font-weight-bold text-color-light text-4 mb-2">{{$service->title}}</h4>
											<p class="text-color-light opacity-7">{{$service->description}}</p>
										</div>
									</div>
								</div>
			    			@endforeach
							<!-- <div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-support text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">CUSTOMER SUPPORT</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font text-color-light">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-layers text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">SLIDERS</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-menu text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">BUTTONS</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div> -->
						</div>
						<!-- <div class="row">
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-doc text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">HTML5 / CSS3 / JS</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-user text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">ICONS</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font text-color-light">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
									</div>
								</div>
							</div>
							<div class="col-lg-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">
								<div class="feature-box feature-box-style-2">
									<div class="feature-box-icon">
										<i class="icons icon-screen-desktop text-color-light"></i>
									</div>
									<div class="feature-box-info">
										<h4 class="font-weight-bold text-color-light text-4 mb-2">LIGHTBOX</h4>
										<p class="text-color-light opacity-7">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
									</div>
								</div>
							</div>
						</div> -->
					</div>
				</section>

				<div id="aboutus" class="container py-5 my-5">
                    <div class="row my-sm-5">
                        <div class="col-lg-6 d-flex align-items-center justify-content-center mb-5 mb-lg-0 pb-sm-5 pb-lg-0 mt-sm-5 mt-lg-0">
                            <div class="custom-images-position-1 position-relative d-flex align-items-center justify-content-center custom-mobile-scale-1 mb-sm-5 mb-lg-0">
                                <svg height="100%" width="100%" class="svg-primary opacity-2 position-absolute overflow-visible top-0 left-0">
                                    <circle cx="50%" cy="50%" r="80%" stroke="#CCC" stroke-width="7" fill="#CCC" class="appear-animation" data-appear-animation="lineProgressAndFill" data-appear-animation-duration="5.5s" />
                                </svg>
                                <?php
                                $flag = true;
                                $cls = array('maskRight','maskUp','maskLeft');
		                        $imgs = explode(", ",$abouts->images);
		                        for($i = 0; $i < sizeof($imgs); $i++){
		                            ?>
		                            <div class="overflow-hidden position-{{($flag)?'relative':'absolute'}} top-0 left-0">
	                                    <img src="{{ url('public/uploads/'.$imgs[$i]) }}" class="img-fluid appear-animation" data-appear-animation="{{($cls[$i])?$cls[$i]:''}}" data-appear-animation-delay="1100" data-appear-animation-duration="1.5s" alt="" />
	                                </div>
		                            <?php
		                            break;
		                            if( $flag ) {
		                            	$flag = false;
		                            }
		                        }
		                        ?><!-- 
                                <div class="overflow-hidden position-relative top-0 left-0">
                                    <img src="{{URL::to('/')}}/assets/img/demos/barber/others/others-1.jpg" class="img-fluid appear-animation" data-appear-animation="maskRight" data-appear-animation-delay="1100" data-appear-animation-duration="1.5s" alt="" />
                                </div>
                                <div class="overflow-hidden position-absolute top-0 left-0">
                                    <img src="{{URL::to('/')}}/assets/img/demos/barber/others/others-2.jpg" class="img-fluid appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500" data-appear-animation-duration="1.5s" alt="" />
                                </div>
                                <div class="overflow-hidden position-absolute top-0 left-0">
                                    <img src="{{URL::to('/')}}/assets/img/demos/barber/others/others-3.jpg" class="img-fluid appear-animation" data-appear-animation="maskLeft" data-appear-animation-delay="800" data-appear-animation-duration="1.5s" alt="" />
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="overflow-hidden mb-1">
                                <h2 class="text-color-primary font-weight-bold text-7 custom-side-dots custom-side-dots-rm-right negative-ls-05 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="500"> {{ $abouts->title }}</h2>
                            </div>
                             <?php echo $abouts->content; ?>
                        </div>
                    </div>
                </div>

				<section id="clients" class="section section-background section-height-4 overlay overlay-show overlay-op-9 border-0 m-0" style="background-image: url({{URL::to('/')}}/assets/img/bg-one-page-1-1.jpg); background-size: cover; background-position: center;">
					<div class="container">
						<div class="row">
							<div class="col text-center">
								<h2 class="font-weight-bold text-color-light mb-2">We’re excited about Porto Template</h2>
								<p class="text-color-light opacity-7">30,000 CUSTOMERS IN 100 COUNTRIES USE PORTO TEMPLATE. MEET OUR CUSTOMERS.</p>
							</div>
						</div>
						<div class="row text-center py-3 my-4">
							<div class="owl-carousel owl-theme carousel-center-active-item carousel-center-active-item-style-2 mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">
								@foreach ($clients as $client)
		                            <div>
		                                <img class="img-fluid" src="{{ ($client->image) ? URL::to('/public/uploads/'.$client->image ) : '' }}" alt="">
		                            </div>
				    			@endforeach
								<!-- <div>
									<img class="img-fluid" src="img/logos/logo-light-1.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-2.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-3.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-5.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-6.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-4.png" alt="">
								</div>
								<div>
									<img class="img-fluid" src="img/logos/logo-light-2.png" alt="">
								</div> -->
							</div>
						</div>
						<div class="row">
							<div class="col">

								<div class="owl-carousel owl-theme nav-bottom rounded-nav mb-0" data-plugin-options="{'items': 1, 'loop': true, 'autoHeight': true}">
									@foreach ($quotes as $quote)
										<div>
											<div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
												<?php echo str_replace("”","",str_replace("“","",str_replace("col-lg-9", "col-lg-12", $quote->description))); ?>
											</div>
										</div>
					    			@endforeach
									
									<!-- <div>
										<div class="testimonial testimonial-style-2 testimonial-light testimonial-with-quotes testimonial-quotes-primary mb-0">
											<blockquote>
												<p class="text-5 line-height-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget risus porta, tincidunt turpis at, interdum tortor. Suspendisse potenti.</p>
											</blockquote>
											<div class="testimonial-author">
												<p><strong class="font-weight-extra-bold text-2">- John Smith. Okler</strong></p>
											</div>
										</div>
									</div> -->
								</div>

							</div>
						</div>
					</div>
				</section>
				<section id="teams" class="container py-5 my-5" data-appear-animation="fadeIn" style="background-image: linear-gradient(#a2a2a2, #f3f3f3); background-size: cover; background-position: center;">
					<div id="team" class="container pb-4">
						<div class="row">
                            <div class="col-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                <h3 class="text-color-light font-weight-semibold  text-4 d-inline-block custom-padding-1">HAIRCUT</h3>
		                    	@foreach ($prices as $price)
		                    		@if ( $price->type == 'Haircut' )
			                        <div class="custom-menu-item">
	                                    <div class="custom-menu-item-details">
	                                        <div class="custom-menu-item-title"><h3 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">{{$price->title}}</h3></div>
	                                        <div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
	                                        <div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">₹ </span> {{$price->price}}</strong></div>
	                                    </div>
	                                    <div class="custom-menu-item-desc">
	                                        <p class="text-2 line-height-4">{{$price->description}}</p>
	                                    </div>
	                                </div>
	                                @endif
				    			@endforeach
                                <!-- <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title"><h3 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Haircut</h3></div>
                                        <div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
                                        <div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 20</strong></div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title"><h3 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Clipper Cut</h3></div>
                                        <div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
                                        <div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 10</strong></div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title"><h3 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Skin Fade</h3></div>
                                        <div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
                                        <div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 15</strong></div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title"><h3 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Hot Towel Head Shave</h3></div>
                                        <div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
                                        <div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 25</strong></div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div> -->
                            </div>
                            <div class="col-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="600">
                                <h3 class="text-color-light font-weight-semibold text-4 d-inline-block custom-padding-1">SHAVE</h3>

		                    	@foreach ($prices as $price)
		                    		@if ( $price->type == 'Shave' )
			                        <div class="custom-menu-item">
	                                    <div class="custom-menu-item-details">
	                                        <div class="custom-menu-item-title"><h3 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">{{$price->title}}</h3></div>
	                                        <div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
	                                        <div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">₹ </span> {{$price->price}}</strong></div>
	                                    </div>
	                                    <div class="custom-menu-item-desc">
	                                        <p class="text-2 line-height-4">{{$price->description}}</p>
	                                    </div>
	                                </div>
	                                @endif
				    			@endforeach
                                <!-- <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title"><h3 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Hot Towel Face Shave</h3></div>
                                        <div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
                                        <div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 30</strong></div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title"><h3 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Beard Trim</h3></div>
                                        <div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
                                        <div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 35</strong></div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title"><h3 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Beard Styling</h3></div>
                                        <div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
                                        <div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 12</strong></div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                                <div class="custom-menu-item">
                                    <div class="custom-menu-item-details">
                                        <div class="custom-menu-item-title"><h3 class="custom-secondary-font text-transform-none font-weight-semibold text-4 mb-0">Line Up</h3></div>
                                        <div class="custom-menu-item-line mx-3 mb-2 opacity-4"></div>
                                        <div class="custom-menu-item-price"><strong class="custom-tertiary-font text-color-dark"><span class="custom-tertiary-font">$</span> 18</strong></div>
                                    </div>
                                    <div class="custom-menu-item-desc">
                                        <p class="text-2 line-height-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
					</div>
				</section>
				<section id="contact" class="section bg-color-grey-scale-1 border-0 py-0 m-0">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">

								<!-- Google Maps - Settings on footer --><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.9734308059337!2d72.95686321539813!3d20.589142608015027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c3972106dac3%3A0x11bee6f8b1282a37!2sneshallWeb%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1614758152571!5m2!1sen!2sin" width="900" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

							</div>
							<div class="col-md-6 p-5 my-5">

								<div class="px-4">
									<h2 class="font-weight-bold line-height-1 mb-2">Contact Us</h2>
									<p class="text-3 mb-4">LOREM IPSUM DOLOR SIT A MET</p>
									<form class="contact-form form-style-2 pr-xl-5" action="php/contact-form.php" method="POST">
										<div class="contact-form-success alert alert-success d-none mt-4">
											<strong>Success!</strong> Your message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none mt-4">
											<strong>Error!</strong> There was an error sending your message.
											<span class="mail-error-message text-1 d-block"></span>
										</div>

										<div class="form-row">
											<div class="form-group col-xl-4">
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" placeholder="Name" required>
											</div>
											<div class="form-group col-xl-8">
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" placeholder="Email" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="subject" placeholder="Subject" required>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" name="message" placeholder="Message" required></textarea>
											</div>
										</div>
										<div class="form-row">
											<div class="form-group col">
												<input type="submit" value="SUBMIT" class="btn btn-primary btn-rounded font-weight-semibold px-5 btn-py-2 text-2" data-loading-text="Loading...">
											</div>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
				</section>

				<section class="section bg-primary border-0 m-0">
					<div class="container">
						<div class="row justify-content-center text-center text-lg-left py-4">
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0">
									<div class="feature-box-icon">
										<i class="icon-location-pin icons text-color-light"></i>
									</div>
									<div class="feature-box-info pl-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">ADDRESS</h5>
										<p class="text-color-light font-weight-semibold mb-0">MON - FRI: 10:00am - 6:00pm</p>
									</div>
								</div>
							</div>
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="200">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex mb-4 mb-lg-0 px-xl-4 mx-lg-5">
									<div class="feature-box-icon">
										<i class="icon-call-out icons text-color-light"></i>
									</div>
									<div class="feature-box-info pl-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">CALL US NOW</h5>
										<a href="tel:+8001234567" class="text-color-light font-weight-semibold text-decoration-none">800-123-4567</a>
									</div>
								</div>
							</div>
							<div class="col-lg-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
								<div class="feature-box feature-box-style-2 d-block d-lg-flex">
									<div class="feature-box-icon">
										<i class="icon-share icons text-color-light"></i>
									</div>
									<div class="feature-box-info pl-1">
										<h5 class="font-weight-light text-color-light opacity-7 mb-0">FOLLOW US</h5>
										<p class="mb-0">
											<span class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" class="text-color-light font-weight-semibold" title="Facebook"><i class="mr-1 fab fa-facebook-f"></i> FACEBOOK</a></span>
											<span class="social-icons-twitter pl-3"><a href="http://www.twitter.com/" target="_blank" class="text-color-light font-weight-semibold" title="Twitter"><i class="mr-1 fab fa-twitter"></i> TWITTER</a></span>
											<span class="social-icons-instagram pl-3"><a href="http://www.linkedin.com/" target="_blank" class="text-color-light font-weight-semibold" title="Linkedin"><i class="mr-1 fab fa-instagram"></i> INSTAGRAM</a></span>
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			
			<footer id="footer" class="mt-0">
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col d-flex align-items-center justify-content-center">
								<p><strong>neshallWeb.com</strong> - © Copyright 2021. All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</footer>

		</div>

		<!-- Vendor -->
		<script src="{{URL::to('/')}}/assets/vendor/jquery/jquery.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/popper/umd/popper.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/lazysizes/lazysizes.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/isotope/jquery.isotope.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/vide/jquery.vide.min.js"></script>
		<script src="{{URL::to('/')}}/assets/vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{URL::to('/')}}/assets/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->

		<script src="{{URL::to('/')}}/assets/js/views/view.contact.js"></script>
		<!-- Theme Custom -->
		<script src="{{URL::to('/')}}/assets/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="{{URL::to('/')}}/assets/js/theme.init.js"></script>

		<!-- Examples -->
		<script src="{{URL::to('/')}}/assets/js/examples/examples.portfolio.js"></script>

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->

	</body>
</html>
