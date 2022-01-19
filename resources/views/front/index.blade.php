<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

		<title>Barber 5</title>	

		<meta name="keywords" content="HTML5 Template" />
		<meta name="description" content="Porto - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Favicon -->
		<link rel="shortcut icon" href="{{URL::to('/')}}/assets/images/favicon.png" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{URL::to('/')}}/assets/img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700%7CPoppins:200,300,400,500,600,700,800%7CPlayfair+Display:400,700,900&display=swap" rel="stylesheet" type="text/css">

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



		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/demos/demo-barber.css">
		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="{{URL::to('/')}}/assets/css/skins/skin-barber.css">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{URL::to('/')}}/assets/css/custom.css">

		<!-- Head Libs -->
		<script src="{{URL::to('/')}}/assets/vendor/modernizr/modernizr.min.js"></script>

	</head>
    <body data-target="#header" data-spy="scroll" data-offset="100">

        <div class="body">
            <header id="header" class="header-transparent header-transparent-dark-bottom-border header-transparent-dark-bottom-border-1 header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
                <div class="header-body border-top-0 bg-dark box-shadow-none">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column d-lg-none">
                                <div class="header-row">
                                    <h1 class="font-weight-semibold text-7 mb-0"><a href="demo-barber.html" class="text-decoration-none text-color-light custom-primary-font">BARBER SHOP</a></h1>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row justify-content-end">
                                    <div class="header-nav header-nav-links header-nav-dropdowns-dark header-nav-light-text justify-content-center">
                                        <div class="header-nav-main header-nav-main-mobile-dark header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-2 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li>
                                                        <a data-hash class="dropdown-item active" href="#home">Home</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" data-hash data-hash-offset="68" href="#aboutus">About Us</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" data-hash data-hash-offset="68" href="#ourservices">Our Services</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" data-hash data-hash-offset="68" href="#hours">Hours</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" data-hash data-hash-offset="68" href="#prices">Prices</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" data-hash data-hash-offset="68" href="#footer">Contact Us</a>
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

            <div role="main" class="main">

                <div class="bg-dark">
                    <section id="home" class="section overlay overlay-show overlay-op-7 animated fadeIn border-0 m-0" style="background-image: url({{ ($banners->image) ? URL::to('/public/uploads/'.$banners->image ) : '' }}); background-size: cover; background-position: center; height: 100vh;">
                        <div class="container position-relative z-index-3 h-100">
                            <div class="row justify-content-center align-items-center h-100">
                                <div class="col-lg-7 text-center">
                                    <div class="d-flex flex-column align-items-center justify-content-center h-100">
                                        <h2 class="position-relative text-color-light text-5 line-height-5 font-weight-light ls-0 px-3 mb-2 appear-animation" data-appear-animation="blurIn" data-plugin-options="{'minWindowWidth': 0}">
                                            <span class="position-absolute right-100pct top-50pct transform3dy-n50 opacity-7">
                                                <img src="{{URL::to('/')}}/assets/img/demos/barber/bar.png" class="w-auto appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                            {{ $banners->sub_title }}
                                            <span class="position-absolute left-100pct top-50pct transform3dy-n50 opacity-7">
                                                <img src="{{URL::to('/')}}/assets/img/demos/barber/bar.png" class="w-auto appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="1000" data-plugin-options="{'minWindowWidth': 0}" alt="" />
                                            </span>
                                        </h2>
                                        <h1 class="text-color-light font-weight-extra-bold text-15 line-height-2 mb-3 appear-animation" data-appear-animation="blurIn" data-appear-animation-delay="1100" data-plugin-options="{'minWindowWidth': 0}">{{ $banners->title }}</h1>
                                        <p class="position-relative bg-primary text-color-light line-height-5 font-weight-light text-3 ls-0 py-2 px-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="1500" data-plugin-options="{'minWindowWidth': 0}">
                                            <?php echo $banners->description;?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="position-absolute bottom-0 left-50pct transform3dx-n50">
                                <a href="#aboutus" data-hash data-hash-offset="68" class="d-block text-decoration-none text-color-light appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="3000" data-plugin-options="{'minWindowWidth': 0, 'forceAnimation': true, 'accY': 200}">
                                    <i class="icons icon-arrow-down p-events-none"></i>
                                </a>
                            </div>
                        </div>
                    </section>
                </div>

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
                <?php 
                $quote_section = array();
                $i = 1;
                foreach ($quotes as $quote) {
                	$quote_section[$i] = $quote;
                	$i++;
                }
                ?>
                <?php 
                if ( $quote_section[1] ) {
                	?>
	                <section class="section section-parallax section-height-4 overlay overlay-show overlay-op-7 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '129%'}" data-image-src="{{ url('public/uploads/'.$quote_section[1]->image) }}">
	                    <div class="container mb-4">
	                        <div class="row justify-content-center">
	                            <div class="col col-lg-9">
	                                <div class="testimonial testimonial-style-2 custom-testimonial-style-1 mb-0">
	                                	<?php echo $quote_section[1]->description; ?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </section>
                	<?php
                }
               	?>

                <div id="ourservices" class="container py-5 my-5">
                    <div class="row mt-4 mb-5">
                        <div class="col text-center text-md-left">
                            <div class="overflow-hidden mb-1">
                                <h2 class="text-color-primary font-weight-bold text-7 negative-ls-05 custom-side-dots custom-side-dots-rm-right mb-0 appear-animation" data-appear-animation="maskUp">OUR SERVICES</h2>
                            </div>
                            <div class="overflow-hidden mb-3">
                                <p class="font-weight-semibold text-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                    	@foreach ($services as $service)
							<div class="col-md-4 text-center mb-md-5">
	                            <img src="{{ ($service->icon) ? URL::to('/public/uploads/'.$service->icon ) : '' }}" class="img-fluid mb-3" alt="" />
	                            <h2 class="font-weight-semibold text-5 line-height-3 mb-3">{{$service->title}}</h2>
	                            <p class="px-4">{{$service->description}} </p>
	                        </div>
		    			@endforeach
                        <!-- <div class="col-md-4 text-center mb-md-5">
                            <img src="{{URL::to('/')}}/assets/img/demos/barber/icons/scissors.png" class="img-fluid mb-3" alt="" />
                            <h2 class="font-weight-semibold text-5 line-height-3 mb-3">Basic Haircut</h2>
                            <p class="px-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. </p>
                        </div>
                        <div class="col-md-4 text-center custom-side-dots custom-side-dots-big custom-side-dots-at-top custom-side-dots-rm-sm mb-md-5">
                            <img src="{{URL::to('/')}}/assets/img/demos/barber/icons/blade.png" class="img-fluid mb-3" alt="" />
                            <h2 class="font-weight-semibold text-5 line-height-3 mb-3">Classic Shave</h2>
                            <p class="px-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. </p>
                        </div>
                        <div class="col-md-4 text-center mb-md-5">
                            <img src="{{URL::to('/')}}/assets/img/demos/barber/icons/hair-dryer.png" class="img-fluid mb-3" alt="" />
                            <h2 class="font-weight-semibold text-5 line-height-3 mb-3">Hair Wash</h2>
                            <p class="px-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. </p>
                        </div>
                        <div class="col-md-4 text-center">
                            <img src="{{URL::to('/')}}/assets/img/demos/barber/icons/bottle.png" class="img-fluid mb-3" alt="" />
                            <h2 class="font-weight-semibold text-5 line-height-3 mb-3">Hair Repair</h2>
                            <p class="px-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. </p>
                        </div>
                        <div class="col-md-4 text-center custom-side-dots custom-side-dots-big custom-side-dots-rm-right custom-side-dots-at-top custom-side-dots-rm-sm">
                            <img src="{{URL::to('/')}}/assets/img/demos/barber/icons/beard.png" class="img-fluid mb-3" alt="" />
                            <h2 class="font-weight-semibold text-5 line-height-3 mb-3">Beard Shave</h2>
                            <p class="px-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur imperdiet hendrerit volutpat. </p>
                        </div> -->
                    </div>
                </div>

                <?php 
                if ( $quote_section[2] ) {
                	?>
	                <section class="section section-parallax section-height-5 overlay overlay-show overlay-op-7 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '138%'}" data-image-src="{{ url('public/uploads/'.$quote_section[2]->image) }}">
	                    <div class="container">
	                        <div class="row justify-content-center">
								<?php echo $quote_section[2]->description; ?>
	                        </div>
	                    </div>
	                </section>
                	<?php
                }
               	?>

                <section id="hours" class="section section-height-4 bg-light position-relative border-0 m-0">
                    <div class="container">
                        <div class="row mb-5">
                            <div class="col">
                                <div class="overflow-hidden mb-1">
                                    <h2 class="text-color-primary font-weight-bold text-7 negative-ls-05 custom-side-dots custom-side-dots-rm-right mb-0 appear-animation" data-appear-animation="maskUp">WORKING HOURS</h2>
                                </div>
                                <div class="overflow-hidden mb-3">
                                    <p class="font-weight-semibold text-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 pb-4">
                            <div class="col">
                                <div class="custom-working-hours appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
			                    	@foreach ($hours as $hour)
	                                    <div class="custom-working-hours-item">
	                                        <h3 class="text-color-dark font-weight-bold text-6 mb-4">{{$hour->day}}</h3>
	                                        <?php
	                                        if ( ! empty( $hour->starttime ) || ! empty( $hour->endtime ) ) {
	                                        	?>
	                                        	<p class="font-weight-normal mb-0"><span class="d-block text-color-dark">{{$hour->starttime}}</span> <span class="opacity-6">TO</span> <span class="d-block text-color-dark">{{$hour->endtime}}</span></p>
	                                        	<?php
	                                        } else {
	                                        	?>
	                                        	<p class="font-weight-normal mb-0"><span class="d-block text-color-dark">CLOSED</span></p>
	                                        	<?php
	                                        }
	                                        ?>
	                                    </div>
					    			@endforeach
                                    <!-- <div class="custom-working-hours-item">
                                        <h3 class="text-color-dark font-weight-bold text-6 mb-4">MON</h3>
                                        <p class="font-weight-normal mb-0"><span class="d-block text-color-dark">10:00 AM</span> <span class="opacity-6">TO</span> <span class="d-block text-color-dark">8:00 PM</span></p>
                                    </div>
                                    <div class="custom-working-hours-item">
                                        <h3 class="text-color-dark font-weight-bold text-6 mb-4">TUE</h3>
                                        <p class="font-weight-normal mb-0"><span class="d-block text-color-dark">10:00 AM</span> <span class="opacity-6">TO</span> <span class="d-block text-color-dark">8:00 PM</span></p>
                                    </div>
                                    <div class="custom-working-hours-item">
                                        <h3 class="text-color-dark font-weight-bold text-6 mb-4">WED</h3>
                                        <p class="font-weight-normal mb-0"><span class="d-block text-color-dark">10:00 AM</span> <span class="opacity-6">TO</span> <span class="d-block text-color-dark">8:00 PM</span></p>
                                    </div>
                                    <div class="custom-working-hours-item">
                                        <h3 class="text-color-dark font-weight-bold text-6 mb-4">THU</h3>
                                        <p class="font-weight-normal mb-0"><span class="d-block text-color-dark">10:00 AM</span> <span class="opacity-6">TO</span> <span class="d-block text-color-dark">8:00 PM</span></p>
                                    </div>
                                    <div class="custom-working-hours-item">
                                        <h3 class="text-color-dark font-weight-bold text-6 mb-4">FRI</h3>
                                        <p class="font-weight-normal mb-0"><span class="d-block text-color-dark">10:00 AM</span> <span class="opacity-6">TO</span> <span class="d-block text-color-dark">8:00 PM</span></p>
                                    </div>
                                    <div class="custom-working-hours-item">
                                        <h3 class="text-color-dark font-weight-bold text-6 mb-4">SAT</h3>
                                        <p class="font-weight-normal mb-0"><span class="d-block text-color-dark">10:00 AM</span> <span class="opacity-6">TO</span> <span class="d-block text-color-dark">8:00 PM</span></p>
                                    </div>
                                    <div class="custom-working-hours-item">
                                        <h3 class="text-color-dark font-weight-bold text-6 mb-4">SUN</h3>
                                        <p class="font-weight-normal mb-0"><span class="d-block text-color-dark">CLOSED</span></p>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card bg-dark border-0 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">
                                    <div class="card-body d-flex flex-column flex-lg-row align-items-center justify-content-center py-5 my-3">
                                        <span class="custom-tertiary-font text-color-light font-weight-bold line-height-1 text-7 mr-lg-5 mb-3 mb-lg-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">RESERVATION? CALL US</span>
                                        <a href="tel:+0123456789" class="custom-primary-font text-decoration-none text-color-light font-weight-bold text-12 line-height-1 mb-1 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">123-456-7890</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="custom-circle-pos-2 position-absolute z-index-1 bottom-0 right-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-plugin-options="{'accY': -600}">
                        <svg height="456" width="456" class="svg-primary opacity-1 overflow-visible">
                            <circle cx="228" cy="228" r="228" stroke="#CCC" stroke-width="12" fill="#CCC" />
                        </svg>
                    </div>
                </section>
				<?php 
                if ( $quote_section[3] ) {
                	?>
	                <section class="section section-parallax section-height-4 overlay overlay-show overlay-op-7 border-0 m-0 appear-animation" data-appear-animation="fadeIn" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'parallaxHeight': '129%'}" data-image-src="{{ url('public/uploads/'.$quote_section[3]->image) }}">
	                    <div class="container mb-4">
	                        <div class="row justify-content-center">
	                            <div class="col col-lg-9">
	                                <div class="testimonial testimonial-style-2 custom-testimonial-style-1 mb-0">
	                                   <?php echo $quote_section[3]->description; ?>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </section>
                	<?php
                }
               	?>
                

                <section id="prices" class="section section-height-4 bg-light border-0 position-relative m-0">
                    <div class="custom-circle-pos-1 position-absolute z-index-1 top-0 left-0 appear-animation" data-appear-animation="fadeInRightShorter" data-plugin-options="{'accY': -500}">
                        <svg height="362" width="362" class="svg-primary opacity-1">
                            <circle cx="0" cy="181" r="181" stroke="#CCC" stroke-width="12" fill="#CCC" />
                        </svg>
                    </div>
                    <div class="container">
                        <div class="row pb-2 mb-4">
                            <div class="col">
                                <div class="overflow-hidden mb-1">
                                    <h2 class="text-color-primary font-weight-bold text-7 negative-ls-05 custom-side-dots custom-side-dots-rm-right mb-0 appear-animation" data-appear-animation="maskUp">OUR PRICES</h2>
                                </div>
                                <div class="overflow-hidden mb-3">
                                    <p class="font-weight-semibold text-3 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="200">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="400">
                                <h3 class="text-color-light font-weight-semibold bg-dark text-4 d-inline-block custom-padding-1">HAIRCUT</h3>
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
                                <h3 class="text-color-light font-weight-semibold bg-dark text-4 d-inline-block custom-padding-1">SHAVE</h3>

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

                <hr>
                
                <div class="container">
                    <div class="row text-center py-5 my-3">
                        <div class="owl-carousel owl-theme carousel-center-active-item mb-0" data-plugin-options="{'responsive': {'0': {'items': 1}, '476': {'items': 1}, '768': {'items': 5}, '992': {'items': 7}, '1200': {'items': 7}}, 'autoplay': true, 'autoplayTimeout': 3000, 'dots': false}">

	                    	@foreach ($clients as $client)
		                        
	                            <div>
	                                <img class="img-fluid" src="{{ ($client->image) ? URL::to('/public/uploads/'.$client->image ) : '' }}" alt="">
	                            </div>
			    			@endforeach
                            <!-- <div>
                                <img class="img-fluid" src="{{URL::to('/')}}/assets/img/logos/logo-1.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{URL::to('/')}}/assets/img/logos/logo-2.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{URL::to('/')}}/assets/img/logos/logo-3.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{URL::to('/')}}/assets/img/logos/logo-4.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{URL::to('/')}}/assets/img/logos/logo-5.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{URL::to('/')}}/assets/img/logos/logo-6.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{URL::to('/')}}/assets/img/logos/logo-4.png" alt="">
                            </div>
                            <div>
                                <img class="img-fluid" src="{{URL::to('/')}}/assets/img/logos/logo-2.png" alt="">
                            </div> -->
                        </div>
                    </div>
                </div>

			</div> 

			<footer id="footer" class="border-0 bg-dark mt-0">
				<div class="container-fluid px-0">
					<div class="row">
						<div class="col-lg-4 px-0" style="background: #f8f9fa;">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.9734308059337!2d72.95686321539813!3d20.589142608015027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be0c3972106dac3%3A0x11bee6f8b1282a37!2sneshallWeb%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1614758152571!5m2!1sen!2sin" width="700" height="700" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						<div class="col-m-6 col-lg-4 px-0">
							<div class="card bg-secondary border-0 h-100">
								<div class="card-body text-center p-5 my-3">
									<img src="{{URL::to('/')}}/assets/img/demos/barber/bar-sm.png" class="img-fluid position-relative bottom-2 d-none d-xl-inline-block" alt="" />
									<span class="text-color-light font-weight-semibold text-4 mx-2">PORTO'S AMAZING</span>
									<img src="{{URL::to('/')}}/assets/img/demos/barber/bar-sm.png" class="img-fluid position-relative bottom-2 d-none d-xl-inline-block" alt="" />
									
									<h2 class="font-weight-semibold text-color-light line-height-1 custom-fs-2 ls-0 mb-3">BARBER SHOP</h2>
									<div class="bg-primary d-inline-flex custom-side-dots custom-side-dots-outside py-2 px-4">
										<span class="text-color-light">LOS ANGELES / CA</span>
										<span class="vertical-divider mx-3 border-color-light opacity-3 my-1"></span>
										<span class="text-color-light">EST 1999</span>
									</div>
									<hr class="bg-primary mt-5 mb-4">
									<ul class="list list-unstyled text-color-light font-weight-semibold custom-fs-1 py-2 m-0">
										<li>123, Porto Blvd</li>
										<li>Los Angeles, CA</li>
										<li class="mb-0"><a href="mailto:mail@domain.com" class="text-color-light">info@porto.com</a></li>
									</ul>
									<hr class="bg-primary mt-4 mb-4">
									<h3 class="text-color-dark font-weight-bold custom-tertiary-font text-5 mb-3">RESERVATION? CALL US</h3>
									<a href="tel:+0123456789" class="text-color-light custom-primary-font font-weight-bold text-12">123-456-7890</a>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-lg-4 px-0 d-flex align-items-center">
							<div class="w-100 p-5 mx-3 my-5">
								<h3 class="text-color-primary font-weight-bold negative-ls-05 custom-side-dots custom-side-dots-rm-right text-8 mb-3">CONTACT US</h3>
								<p class="font-weight-semibold text-3 pb-3 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
								<form class="contact-form form-style-4 form-errors-light custom-form-style-1" action="php/contact-form.php" method="POST">
									<input type="hidden" value="Contact Form" name="subject" id="subject">
									<div class="form-group col-lg-12 ml-auto my-0">
										<div class="contact-form-success alert alert-success d-none">
											Message has been sent to us.
										</div>

										<div class="contact-form-error alert alert-danger d-none">
											Error sending your message.
											<span class="mail-error-message text-1 d-block"></span>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col-lg-6">
											<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control py-2" placeholder="Name" name="name" id="name" required>
										</div>
										<div class="form-group col-lg-6">
											<input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control py-2" placeholder="Phone" name="phone" id="phone" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control py-2" placeholder="E-mail" name="email" id="email" required>
										</div>
									</div>
									<div class="form-row">
										<div class="form-group col">
											<textarea maxlength="5000" data-msg-required="Please enter your message." rows="4" class="form-control" placeholder="Message" name="message" id="message" required></textarea>
										</div>
									</div>
									<input type="submit" value="SEND" class="custom-btn-style-1 btn btn-dark font-weight-bold text-uppercase btn-px-5 py-3" data-loading-text="Loading...">
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-copyright bg-dark py-5">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-12 text-center">
								<ul class="social-icons social-icons-clean social-icons-icon-light mb-2">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-twitter mx-3"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
									<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
							</div>
							<div class="col-12 text-center">
								<p class="text-color-light font-weight-light opacity-4 mb-0">Copyrights © 2021 All Rights Reserved by Okler</p>
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
		<script src="{{URL::to('/')}}/assets/vendor/jquery.instagramfeed/jquery.instagramFeed.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="{{URL::to('/')}}/assets/js/theme.js"></script>

		<!-- Current Page Vendor and Views -->


		<!-- Current Page Vendor and Views -->
		<script src="{{URL::to('/')}}/assets/js/views/view.contact.js"></script>
		
		<!-- Demo -->
		<script src="{{URL::to('/')}}/assets/js/demos/demo-barber.js"></script>

		<!-- Theme Custom -->
		<script src="{{URL::to('/')}}/assets/js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="{{URL::to('/')}}/assets/js/theme.init.js"></script>
	

	</body>
</html>
