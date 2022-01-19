<!doctype html>


<html lang="en" class="no-js">
<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="stylesheet" href="{{URL::to('/')}}/assets/css/restory-assets.min.css">
    <link rel="stylesheet" type="text/css" href="{{URL::to('/')}}/assets/css/style.css">
    <link href="{{URL::to('/')}}/assets/css/slider.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/assets/css/slick.css" rel="stylesheet">
    <link href="{{URL::to('/')}}/assets/css/slick-theme.css" rel="stylesheet">

    <script src="{{URL::to('/')}}/assets/js/restory-assets.min.js"></script>
    <script type="text/javascript" src="{{URL::to('/')}}/assets/js/script.js"></script>
    <script src="{{URL::to('/')}}/assets/js/slick.js"></script>
    <script src="{{URL::to('/')}}/assets/js/slick.min.js"></script>
    <script src="{{URL::to('/')}}/assets/js/slider-bg.js"></script>
    <script>
    $(document).ready(function(){
      $('.ct-slick-homepage').slick({
      });
    });
    </script>
    <link rel="icon" href="{{URL::to('/')}}/assets/images/favicon.ico" sizes="16x16">



</head>
<body>

    <!-- Container -->
    <div id="container">
        <!-- Header
            ================================================== -->
        <header class="clearfix trans">
            <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="inner-navbar">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="{{URL::to('/')}}">Restory</a>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right navigate-section">
                                <li><a class="{{ '/' == request()->path() ? 'active' : ''}}" href="{{URL::to('/')}}">Home</a></li>
                                <li><a class="{{ 'about' == request()->path() ? 'active' : ''}}" href="{{URL::to('/about')}}">About Us</a></li>
                                <li><a class="{{ 'menu' == request()->path() ? 'active' : ''}}" href="{{URL::to('/menu')}}">Menu</a></li>
                                <li><a class="{{ 'contact' == request()->path() ? 'active' : ''}}" href="{{URL::to('/contact')}}">contact</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div>
                </div><!-- /.container -->
            </nav>
        </header>
        <!-- End Header -->
        @yield('content')
        <!-- End contact section -->

        <!-- footer 
            ================================================== -->
        <footer>
            <div class="instagram-widget">
                <h3>@restory_instagram</h3>
                @yield('insta')
                <!-- <ul>
                    <li>
                        <img src="{{URL::to('/')}}/assets/upload/instagram/1.jpg" alt="">
                        <div class="hover-box">
                            <a href="#">
                                <i aria-hidden="true" class="fa fa-heart-o"></i><span class="numb-like">144</span>
                                <span class="numb-comm">21</span><i aria-hidden="true" class="fa fa-comment-o"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <img src="{{URL::to('/')}}/assets/upload/instagram/2.jpg" alt="">
                        <div class="hover-box">
                            <a href="#">
                                <i aria-hidden="true" class="fa fa-heart-o"></i><span class="numb-like">144</span>
                                <span class="numb-comm">21</span><i aria-hidden="true" class="fa fa-comment-o"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <img src="{{URL::to('/')}}/assets/upload/instagram/3.jpg" alt="">
                        <div class="hover-box">
                            <a href="#">
                                <i aria-hidden="true" class="fa fa-heart-o"></i><span class="numb-like">144</span>
                                <span class="numb-comm">21</span><i aria-hidden="true" class="fa fa-comment-o"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <img src="{{URL::to('/')}}/assets/upload/instagram/4.jpg" alt="">
                        <div class="hover-box">
                            <a href="#">
                                <i aria-hidden="true" class="fa fa-heart-o"></i><span class="numb-like">144</span>
                                <span class="numb-comm">21</span><i aria-hidden="true" class="fa fa-comment-o"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <img src="{{URL::to('/')}}/assets/upload/instagram/5.jpg" alt="">
                        <div class="hover-box">
                            <a href="#">
                                <i aria-hidden="true" class="fa fa-heart-o"></i><span class="numb-like">144</span>
                                <span class="numb-comm">21</span><i aria-hidden="true" class="fa fa-comment-o"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <img src="{{URL::to('/')}}/assets/upload/instagram/6.jpg" alt="">
                        <div class="hover-box">
                            <a href="#">
                                <i aria-hidden="true" class="fa fa-heart-o"></i><span class="numb-like">144</span>
                                <span class="numb-comm">21</span><i aria-hidden="true" class="fa fa-comment-o"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <img src="{{URL::to('/')}}/assets/upload/instagram/7.jpg" alt="">
                        <div class="hover-box">
                            <a href="#">
                                <i aria-hidden="true" class="fa fa-heart-o"></i><span class="numb-like">144</span>
                                <span class="numb-comm">21</span><i aria-hidden="true" class="fa fa-comment-o"></i>
                            </a>
                        </div>
                    </li>
                    <li>
                        <img src="{{URL::to('/')}}/assets/upload/instagram/8.jpg" alt="">
                        <div class="hover-box">
                            <a href="#">
                                <i aria-hidden="true" class="fa fa-heart-o"></i><span class="numb-like">144</span>
                                <span class="numb-comm">21</span><i aria-hidden="true" class="fa fa-comment-o"></i>
                            </a>
                        </div>
                    </li>
                </ul> -->
            </div>
            <div class="last-line">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; 2021 neshallWeb. All rights reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <ul class="social-icons">
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Pinterest</a></li>
                                <li><a href="#">Instagram</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End footer -->

    </div>
    @yield('script')
    <!-- End Container -->
    <script type="text/javascript">
        $(document).ready(function() {
          if ($('[data-background]').length > 0) {
            $('[data-background]').each(function() {
              var $background, $backgroundmobile, $this;
              $this = $(this);
              $background = $(this).attr('data-background');
              $backgroundmobile = $(this).attr('data-background-mobile');
              if ($this.attr('data-background').substr(0, 1) === '#') {
                return $this.css('background-color', $background);
              } else if ($this.attr('data-background-mobile') && device.mobile()) {
                return $this.css('background-image', 'url(' + $backgroundmobile + ')');
              } else {
                return $this.css('background-image', 'url(' + $background + ')');
              }
            });
          }
        });
    </script>   

    <script type="text/javascript">
        var tpj=jQuery;
        var revapi202;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_202_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_202_1");
            } else {
                revapi202 = tpj("#rev_slider_202_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "js/",
                    sliderLayout: "fullscreen",
                    dottedOverlay: "none",
                    delay: 5000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 50,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        bullets: {
                            enable: false,
                            hide_onmobile: true,
                            hide_under: 800,
                            style: "zeus",
                            hide_onleave: false,
                            direction: "vertical",
                            h_align: "right",
                            v_align: "center",
                            h_offset: 40,
                            v_offset: 0,
                            space: 10,
                            tmp: '<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title"></span>'
                        }
                    },
                    responsiveLevels: [1140, 1024, 778, 480],
                    visibilityLevels: [1140, 1024, 778, 480],
                    gridwidth: [1140, 1024, 778, 480],
                    gridheight: [700, 700, 600, 600],
                    lazyType: "none",
                    parallax: {
                        type: "scroll",
                        origo: "slidercenter",
                        speed: 1000,
                        levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                        type: "scroll",
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    fullScreenAutoWidth: "off",
                    fullScreenAlignForce: "off",
                    fullScreenOffsetContainer: "",
                    fullScreenOffset: "0px",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>   

    
</body>
</html>