<html class=" js flexbox canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="zxx">
<?php
$input = array(
    array("name"=>"Oyinda","number"=>"090 995 60005","email"=>"Oyinda@meridianparkestate.com"),
    array("name"=>"Nene","number"=>"080 393 81422","email"=>"Nene@meridianparkestate.com"),
    array("name"=>"Mary","number"=>"080 972 41000","email"=>"Mary@meridianparkestate.com"),
    array("name"=>"Onyinye ","number"=>"090 900 55010","email"=>"Onyinye@meridianparkestate.com"),
    array("name"=>"Lola","number"=>"090 911 17809","email"=>"info@meridianparkestate.com"),
    array("name"=>"Stephanie","number"=>"081 466 56224","email"=>"info@meridianparkestate.com"),
    );
$rand_keys = array_rand($input, 2);
$rand = rand(0,5);
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Meridian Park Estate || {{$properties->name}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="https://www.devitems.com/html/sheltek-preview/sheltek/https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/favicon.png">
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
                        <h2 class="breadcrumbs-title">Properties Details</h2>
                        <ul class="breadcrumbs-list">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="properties.html">Properties</a></li>
                            <li>{{$properties->name}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMBS AREA END -->
    <!-- Start page content -->
    <section id="page-content" class="page-wrapper">
        <!-- PROPERTIES DETAILS AREA START -->
        <div class="properties-details-area pt-115 pb-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- pro-details-image -->
                        <div class="pro-details-image mb-60">
                            <div class="pro-details-big-image">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="pro-1">
                                        <a href="https://www.devitems.com/html/sheltek-preview/sheltek/images/single-property/big/1.jpg" data-lightbox="image-1" data-title="Sheltek Properties - 1"> <img src="{{asset('front/images/upload/'.$properties->image)}}" alt=""> </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- pro-details-short-info -->
                        <div class="pro-details-short-info mb-60">
                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <div class="pro-details-condition">
                                        <h5>Condition</h5>
                                        <div class="pro-details-condition-inner bg-gray">
                                            <ul class="condition-list">
                                                <li><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/6.png" alt="">Bedroom {{$properties->bed_nos}}</li>
                                                <li><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/7.png" alt="">Bathroom {{$properties->bath_room_nos}}</li>
                                                <li><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/13.png" alt="">Garage {{$properties->garage}}</li>
                                                <li><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/14.png" alt="">Kitchen {{$properties->kitchen}}</li>
                                                 <li><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/6.png" alt="">Toilet {{$properties->toilet}}</li>
                                            </ul>
                                            <p><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/location.png" alt="">{{$properties->location}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-xs-12">
                                    <div class="pro-details-amenities">
                                        <h5> Services include</h5>
                                        <div class="pro-details-amenities-inner bg-gray">
                                            <ul class="amenities-list">
                                                <li>Stealth-level security</li>
                                                <li>Affordable 24/7 power</li>
                                                <li>Streetlights</li>
                                                <li>Green recreational areas</li>
                                                <li>Good road network</li>
                                                <li>Good Drainage</li>
                                                <li>Recreational centre</li>
                                                <li>Children playground</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- pro-details-description -->
                        <div class="pro-details-description mb-50">
                            <p><span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Meridian Park Estate</span>  is Located in  Awoyaya, Ibeju Lekki, Lagos and offer an exciting new concept in affordable luxury lagoon living From its inception and conceptual phases these estates are envisaged to be pristine developments, offering the upper middle class and enviable classy opportunity for living the upwardly mobile “ yuppie” lifestyle.</p>
                        </div>

                        <div class="pro-details-agent-review">
                            <div class="row">
                                <!-- single-agent -->
                                <div class="col-md-5 col-sm-5 col-xs-12">
                                    <div class="pro-details-agent">
                                        <h5>Contact Agent</h5>
                                        <div class="single-agent">
                                            <div class="agent-image"> <img src="{{ asset('front/images/team2.jpg') }}" alt=""> </div>
                                            <div class="agent-info">
                                                <div class="agent-name">
                                                    <h5><a href="#">{{$input[$rand]['name']}}</a></h5>
                                                    <p>{{$input[$rand]['number']}}</p>
                                                </div>
                                            </div>
                                            <div class="agent-info-hover">
                                                <div class="agent-name">
                                                    <h5><a href="#">{{$input[$rand]['name']}}</a></h5>
                                                    <p>Real Estate Broker</p>
                                                </div>
                                                <ul class="agent-address">
                                                    <li><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/phone-2.png" alt="">{{$input[$rand]['number']}}</li>
                                                    <li><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/mail-close.png" alt="">{{$input[$rand]['email']}} </li>
                                                </ul>
                                                <ul class="social-media">
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- leave-massage -->
                                <div class="col-md-7  col-sm-7 col-xs-12">
                                    <div class="leave-review">
                                        <h5>For more information</h5>
                                        <form action="#">
                                            <label>Enter Name *</label>
                                            <input type="text" name="name" placeholder="Your name">
                                            <label>Enter email *</label>
                                            <input type="email" name="email" placeholder="Email here" required>
                                            <label>Enter email *</label>
                                            <input type="text" name="email" placeholder="Phone here" required>
                                            <textarea></textarea>
                                            <button type="button" class="submit-btn-1">SUBMIT </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <!-- widget-search-property -->
                        <aside class="widget widget-search-property">
                            <h5>Search For Property</h5>
                            <div class="row">
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item custom-select">
                                        <div class="btn-group bootstrap-select">
                                            <button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="Location"><span class="filter-option pull-left">Location</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
                                            </button>
                                            <div class="dropdown-menu open" role="combobox">
                                                <div class="bs-searchbox">
                                                    <input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search">
                                                </div>
                                                <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                    <li class="dropdown-header " data-optgroup="1"><span class="text">Australia</span></li>
                                                    <li data-original-index="2" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Sydney</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="3" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Melbourne</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="4" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Cairns</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li class="divider" data-optgroup="2div"></li>
                                                    <li class="dropdown-header " data-optgroup="2"><span class="text">USA</span></li>
                                                    <li data-original-index="5" data-optgroup="2"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">South Carolina</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="6" data-optgroup="2"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Florida</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="7" data-optgroup="2"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Rhode Island</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                </ul>
                                            </div>
                                            <select class="selectpicker" title="Location" data-hide-disabled="true" data-live-search="true" tabindex="-98">
                                                <option class="bs-title-option" value="">Location</option>
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
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item custom-select">
                                        <div class="btn-group bootstrap-select">
                                            <button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="Sub - Location"><span class="filter-option pull-left">Sub - Location</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
                                            </button>
                                            <div class="dropdown-menu open" role="combobox">
                                                <div class="bs-searchbox">
                                                    <input type="text" class="form-control" autocomplete="off" role="textbox" aria-label="Search">
                                                </div>
                                                <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                    <li class="dropdown-header " data-optgroup="1"><span class="text">Australia</span></li>
                                                    <li data-original-index="2" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">southeastern coast</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="3" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">southeastern tip</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="4" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">northwest corner</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li class="divider" data-optgroup="2div"></li>
                                                    <li class="dropdown-header " data-optgroup="2"><span class="text">USA</span></li>
                                                    <li data-original-index="5" data-optgroup="2"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Charleston</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="6" data-optgroup="2"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">St. Petersburg</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="7" data-optgroup="2"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">Newport</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                </ul>
                                            </div>
                                            <select class="selectpicker" title="Sub - Location" data-hide-disabled="true" data-live-search="true" tabindex="-98">
                                                <option class="bs-title-option" value="">Sub - Location</option>
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
                                        <div class="btn-group bootstrap-select">
                                            <button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="No. of Beadrooms"><span class="filter-option pull-left">No. of Beadrooms</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
                                            </button>
                                            <div class="dropdown-menu open" role="combobox">
                                                <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                    <li class="dropdown-header " data-optgroup="1"><span class="text">1</span></li>
                                                    <li data-original-index="1" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">1 Beadrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="2" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">2 Beadrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="3" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">3 Beadrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="4" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">4 Beadrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="5" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">5 Beadrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                </ul>
                                            </div>
                                            <select class="selectpicker" title="No. of Beadrooms" data-hide-disabled="true" tabindex="-98">
                                                <option class="bs-title-option" value="">No. of Beadrooms</option>
                                                <optgroup label="1">
                                                    <option label="1">1 Beadrooms</option>
                                                    <option>2 Bedrooms</option>
                                                    <option>3 Bedrooms</option>
                                                    <option>4 Bedrooms</option>
                                                    <option>5 Bedrooms</option>
                                                </optgroup>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-3 col-xs-12">
                                    <div class="find-home-item custom-select">
                                        <div class="btn-group bootstrap-select">
                                            <button type="button" class="btn dropdown-toggle bs-placeholder btn-default" data-toggle="dropdown" role="button" title="No. of Bathrooms"><span class="filter-option pull-left">No. of Bathrooms</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span>
                                            </button>
                                            <div class="dropdown-menu open" role="combobox">
                                                <ul class="dropdown-menu inner" role="listbox" aria-expanded="false">
                                                    <li class="dropdown-header " data-optgroup="1"><span class="text">2</span></li>
                                                    <li data-original-index="1" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">1 Bathrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="2" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">2 Bathrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="3" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">3 Bathrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="4" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">4 Bathrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                    <li data-original-index="5" data-optgroup="1"><a tabindex="0" class="opt  " data-tokens="null" role="option" aria-disabled="false" aria-selected="false"><span class="text">5 Bathrooms</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li>
                                                </ul>
                                            </div>
                                            <select class="selectpicker" title="No. of Bathrooms" data-hide-disabled="true" tabindex="-98">
                                                <option class="bs-title-option" value="">No. of Bathrooms</option>
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
                                </div>
                                <div class="col-md-10 col-sm-6 col-xs-12">
                                    <div class="row">
                                       
                                        <div class="col-md-12 col-sm-5 col-xs-12">
                                            <div class="find-home-item"> <a class="button-1 btn-block btn-hover-1" href="#">SEARCH</a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </aside>
                        <!-- widget-featured-property -->
                        <aside class="widget widget-featured-property">
                            <h5>Featured Property</h5>
                            <div class="row">

                            @foreach ($allproperties as $property)
                                <!-- flat-item -->
                                <div class="col-md-12 col-sm-6 col-xs-12">
                                    <div class="flat-item">
                                        <div class="flat-item-image"> <span class="for-sale">{{ $property->price}}</span>
                                            <a href="#"><img src="{{ asset('front/images/upload/'.$property->image)}}" alt=""></a>
                                            <div class="flat-link"> <a href="{{ url('/apartments/'.$property->slug)}}">More Details</a> </div>
                                            <ul class="flat-desc">
                                                <li> <img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/5.png" alt=""> <span>5</span> </li>
                                                <li> <img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/6.png" alt=""> <span>3</span> </li>
                                            </ul>
                                        </div>
                                        <div class="flat-item-info">
                                            <div class="flat-title-price">
                                                <h5><a href="#">{{ $property->name}} </a></h5> </div>
                                            <p><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/location.png" alt="">{{ $property->location}}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
        
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
<script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/main.js"></script>
<a id="scrollUp" href="#top" style="position: fixed; z-index: 2147483647; display: none;"><i class="fa fa-angle-up"></i></a>
</body>

</html>
