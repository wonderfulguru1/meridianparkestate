<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"
      lang="zxx">

<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Meridian Park Estate || Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon"
          href="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/favicon.png">
    <!-- All css files are included here. -->
    <!-- Bootstrap fremwork main css -->

    <link rel="stylesheet" href="https://www.devitems.com/html/sheltek-preview/sheltek/css/bootstrap.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="https://www.devitems.com/html/sheltek-preview/sheltek/lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="https://www.devitems.com/html/sheltek-preview/sheltek/css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="https://www.devitems.com/html/sheltek-preview/sheltek/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="https://www.devitems.com/html/sheltek-preview/sheltek/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="https://www.devitems.com/html/sheltek-preview/sheltek/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="https://www.devitems.com/html/sheltek-preview/sheltek/css/custom.css">
    <!-- Style customizer (Remove these two lines please) -->
    <link rel="stylesheet" href="https://www.devitems.com/html/sheltek-preview/sheltek/css/style-customizer.css">
    <link href="https://www.devitems.com/html/sheltek-preview/sheltek/css/color/skin-default.css" data-style="styles"
          rel="stylesheet">
    <!-- Modernizr JS -->
    <script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/vendor/modernizr-2.8.3.min.js"></script>

</head>

<body class="wide-layout">
<!--[if lt IE 8]>        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
        href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>    <![endif]-->
<!-- Body main wrapper start -->
<div class="wrapper">
    @include('nav.front-nav')
    <div class="slider-1 pos-relative slider-overlay">
        <div class="bend niceties preview-1">
            <div id="ensign-nivoslider-3" class="slides nivoSlider">
                <img
                        src="{{ asset('front/images/silde1.jpg') }}" alt=""
                        title="#slider-direction-1" style="width: 708px; visibility: hidden;">
                <img
                        src="{{ asset('front/images/silde2.jpg') }}" alt=""
                        title="#slider-direction-2" style="width: 708px; visibility: hidden;">
            </div>
            <div class="nivo-controlNav"><a class="nivo-control" rel="0">1</a><a class="nivo-control" rel="1">2</a><a
                        class="nivo-control active" rel="2">3</a></div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="slider-direction">
                <div class="slider-content text-center">
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.5s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <h4 class="slider-1-title-1">Welcome to <span>Meridian  Park Estate </span></h4></div>
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="1s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInUp;">
                        <h1 class="slider-1-title-2">FIND YOUR DREAM HOUSE WITH US</h1></div>
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="1.5s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 1.5s; animation-name: fadeInUp;">
                        <a class="slider-button mt-40" href="{{ url('/about-us/')}}">Read More</a></div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-content text-left">
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.5s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <h4 class="slider-1-title-1">At <span>Meridian Park Estate </span></h4></div>
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="1s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInUp;">
                        <h1 class="slider-1-title-2"> You get Luxury Homes at Extremely Affordable Prices</h1></div>
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="1.5s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 1.5s; animation-name: fadeInUp;">
                        <p class="slider-1-desc">
                            Meridian Luxury Park offers uniquely designed bungalows, terraces and semi-detached houses which bespeak elegance and class
                        </p>
                    </div>
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="2s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 2s; animation-name: fadeInUp;">
                        <a class="slider-button mt-40" href="{{ url('/about-us/')}}">Read More</a></div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-3" class="slider-direction">
                <div class="slider-content text-right">
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.5s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 0.5s; animation-name: fadeInUp;">
                        <h4 class="slider-1-title-1">Welcome to <span>Meridian Park Estate</span></h4></div>
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="1s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-name: fadeInUp;">
                        <h1 class="slider-1-title-2">FIND YOUR DREAM HOUSE WITH US</h1></div>
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="1.5s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 1.5s; animation-name: fadeInUp;">
                        <p class="slider-1-desc">Lorem consectetur adipiscing elit, sed do eiusmod tempor dolor sit amet
                            <br> contetur adipiscing elit, sed do eiusmod tempor incididunt </p>
                    </div>
                    <div class="wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="2s"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 2s; animation-name: fadeInUp;">
                        <a class="slider-button mt-40" href="{{ url('/about-us/')}}">Read More</a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- SLIDER SECTION END -->
    <!-- Start page content -->
    <section id="page-content" class="page-wrapper" style="margin-top: -70px;">
        <div class="about-sheltek-area ptb-115">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-xs-12">
                        <div class="section-title mb-30">
                            <h2>Welcome Meridian park estate</h2></div>
                        <div class="about-sheltek-info">
                            <p>

                               Welcome to a whole new world of luxury living. Our purpose is to give you what you cannot find anywhere else: Luxury Homes at Extremely Affordable Prices.


                            </p>
                            <p>
Nestled just few minutes from Ajah, Meridian Luxury Park is a gigantic housing project measuring about 25 hectares of land
                            </p>
                            <p>
Poised to set the pace for accelerated urban development in Awoyaya, Meridian Luxury Park offers uniquely designed bungalows, terraces and semi-detached houses which bespeak elegance and class.
                              </p>

                        </div>
                    </div>
                    <div class="col-sm-6 col-xs-12">
                        <div class="about-image">
                            <a href="about.html"><img
                                        src="{{ asset('front/images/home-image.jpg') }}"
                                        alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="features-area fix">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-7 col-md-offset-5">
                        <div class="features-info bg-gray">
                            <div class="section-title mb-30">

                                <h4 >WHY CHOOSE US</h4></div>
                            <div class="features-desc">
                                <p>
                                    <b>DELIVERY TIMELINES</b>
                                    <br>
                                   Meridian luxury park takes commitments made to customer and timelines very seriously and Meridian luxury park development is no exception. This will ensure that our clients are carried along at every stage of the way and we are supervised by you our client, thus keeping to our service level commitments which we made at the beginning of our engagement and reinforcing one of our underlying business principles: “Meridian Luxury Park Always delivers”.
                                </p>
                                <p>
                                    <b>RETURN ON INVESTMENT</b>
                                    <br>
                                   Meridian luxury park , is one of the best real estate investments in the Nigerian market presently and offers a return on investment unmatched anywhere else in this area. We will demonstrate this using the simple and most basic model of real estate investment – the income based approach, which focuses on the potential income relative to initial investment.
                                </p>
                                <p>
                                    <b>AFFORDABILITY</b>
                                    <br>
                                   To own a 2 bedroom bungalow at Meridian Luxury Park Awoyaya, you simply pay N11.5 million and you will earn a minimum of N1.5 million per annum in rental income (a potential minimum Return on Risk Free Investment “ROI” of 11% per annum)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="featured-flat-area pt-115 pb-80">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-2 text-center">
                            <h2>Featured PROPERTY</h2>

                        </div>
                    </div>
                </div>
                <div class="featured-flat">
                    <div class="row">
                    @foreach ($properties as $property)
                        <!-- flat-item -->
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="flat-item">
                                <div class="flat-item-image"><span class="for-sale">{{$property->price}}</span>
                                    <a href="properties-details.html"><img
                                                src="{{ asset('front/images/upload/'.$property->image) }}"
                                                alt=""></a>
                                    <div class="flat-link"><a href="{{ url('/apartments/'.$property->slug)}}">More Details</a></div>
                                    <ul class="flat-desc">

                                            <img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/5.png"
                                                 alt=""> <span>{{$property->bed_nos}}</span></li>
                                        <li>
                                            <img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/6.png"
                                                 alt=""> <span>{{$property->bath_room_nos}}</span></li>
                                    </ul>
                                </div>
                                <div class="flat-item-info">
                                    <div class="flat-title-price">
                                        <h5><a href="#">{{$property->name}}</a></h5> </div>
                                    <p>
                                        {{$property->location}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
       
        <div class="blog-area pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title-2 text-center">
                            <h2>Our Apartments</h2>
                            <p>Meridian Luxury Park offers uniquely designed bungalows, terraces and semi-detached houses</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="blog-carousel slick-initialized slick-slider">
                        <!-- blog-item -->
                        <!-- blog-item -->
                        <!-- blog-item -->
                        <!-- blog-item -->
                        <div aria-live="polite" class="slick-list draggable">
                            <div class="slick-track"
                                 style="opacity: 1; width: 1800px; transform: translate3d(0px, 0px, 0px);"
                                 role="listbox">
                                <div class="col-md-12 slick-slide slick-current slick-active" style="width: 450px;"
                                     tabindex="-1" role="option" aria-describedby="slick-slide30" data-slick-index="0"
                                     aria-hidden="false">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="#" tabindex="0"><img
                                                        src="{{ asset('front/images/gallery-img1.jpg') }}"
                                                        alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="#" tabindex="0">STREET VIEW OF TERRACE DUPLEXES</a></h5>

                                            </div>
                                            <p>Meridian Luxury Park offers uniquely designed bungalows, terraces and semi-detached houses </p> <a
                                                    class="read-more" href="single-blog.html" tabindex="0">Read more</a>
                                        </div>
                                    </article>
                                </div>
                                <div class="col-md-12 slick-slide" style="width: 450px;" tabindex="-1" role="option"
                                     aria-describedby="slick-slide31" data-slick-index="1" aria-hidden="true">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="#" tabindex="-1"><img
                                                        src="{{ asset('front/images/gallery-img2.jpg') }}"
                                                        alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="#" tabindex="-1"> BLOCKS OF TERRACE DUPLEXES</a>
                                                </h5>
                                            </div>
                                            <p>
                                                Meridian Luxury Park offers uniquely designed bungalows, terraces and semi-detached houses
                                            </p> <a
                                                    class="read-more" href="#" tabindex="-1">Read
                                                more</a></div>
                                    </article>
                                </div>
                                <div class="col-md-12 slick-slide" style="width: 450px;" tabindex="-1" role="option"
                                     aria-describedby="slick-slide32" data-slick-index="2" aria-hidden="true">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="#" tabindex="-1"><img
                                                        src="{{ asset('front/images/gallery-img3.jpg') }}"
                                                        alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="#" tabindex="-1">FULLY-DETACHED BUNGALOWS</a></h5>

                                            </div>
                                            <p>Meridian Luxury Park offers uniquely designed bungalows, terraces and semi-detached houses </p> <a
                                                    class="read-more" href="#" tabindex="-1">Read
                                                more</a></div>
                                    </article>
                                </div>
                                <div class="col-md-12 slick-slide" style="width: 450px;" tabindex="-1" role="option"
                                     aria-describedby="slick-slide33" data-slick-index="3" aria-hidden="true">
                                    <article class="blog-item bg-gray">
                                        <div class="blog-image">
                                            <a href="single-blog.html" tabindex="-1"><img
                                                        src="{{ asset('front/images/gallery-img4.jpg') }}"
                                                        alt=""></a>
                                        </div>
                                        <div class="blog-info">
                                            <div class="post-title-time">
                                                <h5><a href="single-blog.html" tabindex="-1">BLOCK OF TERRACE DUPLEXES</a>
                                                </h5>
                                                <p>July 30, 2016 / 10 am</p>
                                            </div>
                                            <p>Lorem must explain to you how all this mistaolt denouncing pleasure and
                                                praising pain wasnad I will give you a complete pain was praising</p> <a
                                                    class="read-more" href="single-blog.html" tabindex="-1">Read
                                                more</a></div>
                                    </article>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
        <!-- SUBSCRIBE AREA END -->
    </section>
    <!-- End page content -->
    <!-- Start footer area -->
    @include('nav.foot-nav')

    <!--style-customizer end -->
</div>
<!-- Body main wrapper end -->
<!-- Placed js at the end of the document so the pages load faster -->
<!-- jquery latest version -->
<script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/vendor/jquery-3.1.1.min.js"></script>
<!-- Bootstrap framework js -->
<script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/bootstrap.min.js"></script>
<!-- Nivo slider js -->
<script src="https://www.devitems.com/html/sheltek-preview/sheltek/lib/js/jquery.nivo.slider.js"></script>
<!-- ajax-mail js -->
<script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/ajax-mail.js"></script>
<!-- All js plugins included in this file. -->
<script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/main.js"></script>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up"></i></a>

</body>

</html>
