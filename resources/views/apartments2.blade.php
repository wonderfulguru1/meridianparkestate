<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Meridian Park Estate || Properties Left Sidebar</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/favicon.png">
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
    <link rel="stylesheet" href="https://www.devitems.com/html/sheltek-preview/sheltek/css/https://www.devitems.com/html/sheltek-preview/sheltek/https://www.devitems.com/html/sheltek-preview/sheltek/images.css">
    <link href="https://www.devitems.com/html/sheltek-preview/sheltek/css/color/skin-default.css" data-style="styles" rel="stylesheet">
    <!-- Modernizr JS -->
    <script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/vendor/modernizr-2.8.3.min.js"></script>
    <style>
        .breadcrumbs-title {
            color: #fff;
            font-size: 40px;
            line-height: 30px;
            margin-bottom: 0;
            padding: 100px 0 10px;
            text-align: center;
            text-transform: uppercase;
        }
    </style>
</head>

<body class="wide-layout">
<!--[if lt IE 8]>        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>    <![endif]-->
<!-- Body main wrapper start -->
<div class="wrapper">
    @include('nav.front-nav')
    <div class="breadcrumbs-area bread-bg-1 bg-opacity-black-70">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="breadcrumbs">
                        <h2 class="breadcrumbs-title">Properties</h2>
                        <ul class="breadcrumbs-list">
                            <li><a href="index.html">Home</a></li>
                            <li>Properties</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS AREA END -->
    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">
        <!-- FEATURED FLAT AREA START -->
        <div class="featured-flat-area pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                        <div class="featured-flat">
                            <div class="row">
                                <!-- flat-item -->
                                @foreach ($properties as $property)
                                    <div class="col-sm-6 col-xs-12">
                                        <div class="flat-item">
                                            <div class="flat-item-image"> <span class="for-sale">{{$property->price}}</span>
                                                <a href="#">
                                                    <img src="{{ asset('front/images/upload/'.$property->image)}}" alt=""></a>
                                                <div class="flat-link"> <a href="{{ url('/apartments/'.$property->slug)}}">More Details</a> </div>
                                                <ul class="flat-desc">
                                                    <li> <img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/5.png" alt=""> <span>5</span> </li>
                                                    <li> <img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/6.png" alt=""> <span>3</span> </li>
                                                </ul>
                                            </div>
                                            <div class="flat-item-info">
                                                <div class="flat-title-price">
                                                    <h5><a href="#">{{ $property->name}} </a></h5>  </div>
                                                <p><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/location.png" alt="">{{$property->location}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-md-pull-8 hidden">
                        <!-- widget-search-property -->
                        <aside class="widget widget-search-property mb-30">
                            <h5>Search For Property</h5>
                            <div class="row">
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item custom-select">
                                        <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true">
                                            <optgroup disabled="disabled" label="disabled">
                                                <option>Hidden</option>
                                            </optgroup>
                                            <optgroup label="Australia">
                                                <option>Sydney</option>
                                                <option>Melbourne</option>
                                                <option>Cairns</option>
                                            </optgroup>
                                            <optgroup label="USA">
                                                <option>South Carolina</option>
                                                <option>Florida</option>
                                                <option>Rhode Island</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item custom-select">
                                        <select class="selectpicker" title="Sub - Location" data-hide-disabled="true" data-live-search="true">
                                            <optgroup disabled="disabled" label="disabled">
                                                <option>Hidden</option>
                                            </optgroup>
                                            <optgroup label="Australia">
                                                <option>southeastern coast</option>
                                                <option>southeastern tip</option>
                                                <option>northwest corner</option>
                                            </optgroup>
                                            <optgroup label="USA">
                                                <option>Charleston</option>
                                                <option>St. Petersburg</option>
                                                <option>Newport</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item">
                                        <input type="text" name="min-area" placeholder="Min area (sqft)"> </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item">
                                        <input type="text" name="max-area" placeholder="Max area (sqft)"> </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item  custom-select">
                                        <select class="selectpicker" title="No. of Beadrooms" data-hide-disabled="true">
                                            <optgroup label="1">
                                                <option label="1">1 Beadrooms</option>
                                                <option>2 Beadrooms</option>
                                                <option>3 Beadrooms</option>
                                                <option>4 Beadrooms</option>
                                                <option>5 Beadrooms</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item custom-select">
                                        <select class="selectpicker" title="No. of Bathrooms" data-hide-disabled="true">
                                            <optgroup label="2">
                                                <option>1 Bathrooms</option>
                                                <option>2 Bathrooms</option>
                                                <option>3 Bathrooms</option>
                                                <option>4 Bathrooms</option>
                                                <option>5 Bathrooms</option>
                                            </optgroup>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-6 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-7 col-xs-12">
                                            <div class="find-home-item">
                                                <!-- shop-filter -->
                                                <div class="shop-filter">
                                                    <div class="price_filter">
                                                        <div class="price_slider_amount">
                                                            <input type="submit" value="You range :">
                                                            <input type="text" id="amount" name="price" placeholder="Add Your Price"> </div>
                                                        <div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all">
                                                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 2.41935%; width: 77.4194%;"></div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 2.41935%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 79.8387%;"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-5 col-xs-12">
                                            <div class="find-home-item"> <a class="button-1 btn-block btn-hover-1" href="#">SEARCH</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
        <!-- FEATURED FLAT AREA END -->
        <!-- SUBSCRIBE AREA START -->
        <div class="subscribe-area bg-blue call-to-bg plr-140 ptb-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="section-title text-white">
                            <h3>SUBSCRIBE</h3>
                            <h2 class="h1">NEWSLETTER</h2> </div>
                    </div>
                    <div class="col-md-9 col-sm-8 col-xs-12">
                        <div class="subscribe">
                            <form action="#">
                                <input type="text" name="subscribe" placeholder="Enter yur email here...">
                                <button type="submit" value="send">Send</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SUBSCRIBE AREA END -->
    </section>
    @include('nav.foot-nav')

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
<script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/main.js"></script><a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a>

</body>

</html>
