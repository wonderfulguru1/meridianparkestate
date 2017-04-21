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
        .button-1{
            background: #232a34;
        }
        h5 a{
                color: #1f223e;
    font-family: 'Montserrat', sans-serif;
    font-weight: bold;
        }
    </style>

    <link rel="stylesheet" type="text/css" href="{{ asset('properties/css/animate.min.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('properties/css/easy-responsive-tabs.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('properties/css/tabs.css') }}" >
    <link rel="stylesheet" type="text/css" href="{{ asset('properties/css/colors/color_1.css') }}" >
</head>

<body class="wide-layout">
<!--[if lt IE 8]>        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>    <![endif]-->
<!-- Body main wrapper start -->
<div class="wrapper">
    @include('nav.front-property-header-nav')
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

                        <div class="HorizontalTab HorizontalTab_2 tabs_hor_2">

                            <ul class="resp-tabs-list hor_1">
                                <li class="tabs-1"><i class="fc_icons fa fa-bed"></i> <span class="tabs-text">APARTMENTS</span></li>
                                <li class="tabs-2"><i class="fc_icons fa fa-building-o"></i>
                                    <span class="tabs-text">TERRACE</span></li>
                                <li class="tabs-3"><i class="fc_icons fa fa-diamond"
                                    ></i> <span class="tabs-text">SEMI DETACHED</span></li>
                                <li class="tabs-4"><i class="fc_icons fa fa-object-ungroup">

                                    </i> <span class="tabs-text">FULLY DETACHED</span>
                                </li>
                            </ul>

                            <div class="resp-tabs-container hor_1">

                                <div class="fc-tab-1">

                                    <h2 class="title_contanier"><a href="#">Apartments </a></h2>

                                    <div class="featured-flat">
                                        <div class="row">
                                            <!-- flat-item -->
                                            @foreach ($properties as $property)
                                                @if ($property->type_id == 3)
                                                <div class="col-sm-6col-xs-12">
                                                    <div class="flat-item">

                                                        <div class="flat-item-info">
                                                            <div class="flat-title-price">
                                                                <h5><a href="#">{{ $property->name}} </a></h5>  </div>
                                                            <p>
                                                            <img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/location.png" alt="">{{$property->location}}
                                                            </p>

                                                            <h5><a href="#">Payment Plans</a></h5>
                                                            <table border="1" cellspacing="1" cellpadding="1" width="100%" style="color: #232a34; border-color: #232a34;">
                                                                <tr>
                                                                    <td width="90" align="center" bgcolor="#f6f5f3" ><p>PLAN</p></td>
                                                                    <td width="135" align="center" bgcolor="#f6f5f3"><p>1ST PYMT</p></td>
                                                                    <td width="102" align="center" bgcolor="#f6f5f3"><p>2ND PYMT in 90days</p></td>
                                                                    <td width="144" align="center" bgcolor="#f6f5f3"><p>3RD PYMT IN 270 DAYS</p></td>
                                                                    <td width="124" align="center" bgcolor="#f6f5f3"><p>BAL @ DELIVERY</p></td>
                                                                    <td width="161" align="center" bgcolor="#f6f5f3"><p>TOTAL</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="90" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>OUTRIGHT</p></td>
                                                                    <td width="135" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">13,500,000.00</p></td>
                                                                    <td width="102" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="144" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="124" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="161" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">13,500,000.00</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="90" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>PLAN</p></td>
                                                                    <td width="135" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">6,000,000.00</p></td>
                                                                    <td width="102" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">3,000,000.00</p></td>
                                                                    <td width="144" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">3,000,000.00</p></td>
                                                                    <td width="124" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">3,000,000.00</p></td>
                                                                    <td width="161" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">14,000,000.00</p></td>
                                                                </tr>
                                                            </table>
                                                            <br>
                                                            <a href="{{ url('/apartments/'.$property->slug)}}" class="button-1  ">Get more infomation</a>
                                                        </div>

                                                    </div>
                                                </div>

                                                @endif
                                            @endforeach



                                        </div>
                                    </div>

                                </div>

                                <div class="fc-tab-2">

                                    <h2 class="title_contanier">Terrace</h2>
                                    <div class="featured-flat">
                                        <div class="row">
                                            <!-- flat-item -->
                                            @foreach ($properties as $property)
                                                @if ($property->type_id == 2)
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="flat-item">
                                                        <div class="flat-item-info">
                                                            <div class="flat-title-price">
                                                                <h5><a href="#">{{ $property->name}} </a></h5>  </div>
                                                            <p><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/location.png" alt="">{{$property->location}}</p>
                                                            <h5><a href="#">Payment Plans</a></h5>
                                                            @if ($property->bath_room_nos == 3)
                                                                <table  border="1" cellspacing="1" cellpadding="1" width="100%" style="color: #232a34; border-color: #232a34;">
                                                                <tr>
                                                                    <td width="78" align="center" bgcolor="#f6f5f3"><p>PLAN</p></td>
                                                                    <td width="100" align="center" bgcolor="#f6f5f3"><p>1ST PYMT</p></td>
                                                                    <td width="106" align="center" bgcolor="#f6f5f3"><p>2ND PYMT in 90days</p></td>
                                                                    <td width="92" align="center" bgcolor="#f6f5f3"><p>3RD PYMT IN 270 DAYS</p></td>
                                                                    <td width="106" align="center" bgcolor="#f6f5f3"><p>BAL @ DELIVERY</p></td>
                                                                    <td width="113" align="center" bgcolor="#f6f5f3"><p>TOTAL</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="78" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>OUTRIGHT</p></td>
                                                                    <td width="100" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">15,800,000.00</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="92" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="113" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">15,800,000.00</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="78" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>PLAN</p></td>
                                                                    <td width="100" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">6,000,000.00</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">3,000,000.00</p></td>
                                                                    <td width="92" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">3,000,000.00</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">4,000,000.00</p></td>
                                                                    <td width="113" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">16,000,000.00</p></td>
                                                                </tr>
                                                                 </table>
                                                                  <br>
                                                                 <a href="{{ url('/apartments/'.$property->slug)}}" class="button-1 ">Get more infomation</a>

                                                              @else

                                                                <table  border="1" cellspacing="1" cellpadding="1" width="100%" style="color: #232a34; border-color: #232a34;">
                                                                  <tr>
                                                                    <td width="78" align="center" bgcolor="#f6f5f3"><p>PLAN</p></td>
                                                                    <td width="100" align="center" bgcolor="#f6f5f3"><p>1ST PYMT</p></td>
                                                                    <td width="106" align="center" bgcolor="#f6f5f3"><p>2ND PYMT in 90days</p></td>
                                                                    <td width="92" align="center" bgcolor="#f6f5f3"><p>3RD PYMT IN 270 DAYS</p></td>
                                                                    <td width="106" align="center" bgcolor="#f6f5f3"><p>BAL @ DELIVERY</p></td>
                                                                    <td width="113" align="center" bgcolor="#f6f5f3"><p>TOTAL</p></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td width="78" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>OUTRIGHT</p></td>
                                                                    <td width="100" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">18,500,000.00</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="92" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="113" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">18,500,000.00</p></td>
                                                                  </tr>
                                                                  <tr>
                                                                    <td width="78" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>PLAN</p></td>
                                                                    <td width="100" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">6,000,000.00</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">4,000,000.00</p></td>
                                                                    <td width="92" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">4,000,000.00</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">5,000,000.00</p></td>
                                                                    <td width="113" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">19,000,000.00</p></td>
                                                                  </tr>
                                                                </table>
                                                                 <br>
                                                                  <a href="{{ url('/apartments/'.$property->slug)}}" class="button-1 ">Get more infomation</a>
                                                            @endif                                                          
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                                <div class="fc-tab-3">

                                    <h2 class="title_contanier">Semi Detached</h2>
                                    <div class="featured-flat">
                                        <div class="row">
                                            <!-- flat-item -->
                                            @foreach ($properties as $property)
                                                @if ($property->type_id == 4)
                                                    <div class="col-sm-12 col-xs-12">
                                                    <div class="flat-item">
                                                        <div class="flat-item-info">
                                                            <div class="flat-title-price">
                                                                <h5><a href="#">{{ $property->name}} </a></h5>  </div>
                                                            <p><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/location.png" alt="">{{$property->location}}</p>
                                                            <table  border="1" cellspacing="1" cellpadding="1" width="100%" style="color: #232a34; border-color: #232a34;">
                                                                <tr>
                                                                    <td width="78" align="center" bgcolor="#f6f5f3"><p>PLAN</p></td>
                                                                    <td width="100" align="center" bgcolor="#f6f5f3"><p>1ST PYMT</p></td>
                                                                    <td width="106" align="center" bgcolor="#f6f5f3"><p>2ND PYMT in 90days</p></td>
                                                                    <td width="92" align="center" bgcolor="#f6f5f3"><p>3RD PYMT IN 270 DAYS</p></td>
                                                                    <td width="106" align="center" bgcolor="#f6f5f3"><p>BAL @ DELIVERY</p></td>
                                                                    <td width="113" align="center" bgcolor="#f6f5f3"><p>TOTAL</p></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="78" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>OUTRIGHT</p></td>
                                                                    <td width="100" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">           23,00,000.00 </p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="92" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                    <td width="113" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>           23,00,000.00 </p></td>
                                                                </tr>
                                                                <tr>
                                                                    <td width="78" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p>PLAN</p></td>
                                                                    <td width="100" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">10,000,000.00</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">5,000,000.00</p></td>
                                                                    <td width="92" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">4,000,000.00</p></td>
                                                                    <td width="106" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">5,000,000.00</p></td>
                                                                    <td width="113" align="center" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">24,000,000.00</p></td>
                                                                </tr>
                                                            </table>
                                                             <br>
                                                              <a href="{{ url('/apartments/'.$property->slug)}}" class="button-1 ">Get more infomation</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>

                                <div class="fc-tab-4">

                                    <h2 class="title_contanier">Fully Detached</h2>
                                    <div class="featured-flat">
                                        <div class="row">
                                            <!-- flat-item -->
                                            @foreach ($properties as $property)
                                             @if ($property->type_id == 5)
                                                <div class="col-sm-12 col-xs-12">
                                                    <div class="flat-item">                                                        
                                                        <div class="flat-item-info">
                                                            <div class="flat-title-price">
                                                                <h5><a href="#">{{ $property->name}} </a></h5>  </div>
                                                            <p><img src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/location.png" alt="">{{$property->location}}</p>
                                                            <table border="1" cellspacing="1" cellpadding="1" width="100%" style="color: #232a34; border-color: #232a34;">
                                                              <tr>
                                                                <td width="78" bgcolor="#F6F5F3"><p>PLAN</p></td>
                                                                <td width="100" bgcolor="#F6F5F3"><p>1ST PYMT</p></td>
                                                                <td width="106" bgcolor="#F6F5F3"><p>2ND PYMT in 90days</p></td>
                                                                <td width="92" bgcolor="#F6F5F3"><p>3RD PYMT IN 270 DAYS</p></td>
                                                                <td width="106" bgcolor="#F6F5F3"><p>BAL @ DELIVERY</p></td>
                                                                <td width="113" bgcolor="#F6F5F3"><p>TOTAL</p></td>
                                                              </tr>
                                                              <tr>
                                                                <td width="78" nowrap="nowrap" bgcolor="#E6E6E6"><p>OUTRIGHT</p></td>
                                                                <td width="100" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">28,000,000.00</p></td>
                                                                <td width="106" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                <td width="92" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                <td width="106" nowrap="nowrap" bgcolor="#E6E6E6"><p>&nbsp;</p></td>
                                                                <td width="113" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">28,000,000.00</p></td>
                                                              </tr>
                                                              <tr>
                                                                <td width="78" nowrap="nowrap" bgcolor="#E6E6E6"><p>PLAN</p></td>
                                                                <td width="100" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">13,000,000.00</p></td>
                                                                <td width="106" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">5,000,000.00</p></td>
                                                                <td width="92" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">5,000,000.00</p></td>
                                                                <td width="106" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">6,000,000.00</p></td>
                                                                <td width="113" nowrap="nowrap" bgcolor="#E6E6E6"><p align="right">29,000,000.00</p></td>
                                                              </tr>
                                                            </table>
                                                             <br>
                                                              <a href="{{ url('/apartments/'.$property->slug)}}" class="button-1 ">Get more infomation</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                 @endif
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
        
    </section>
    @include('nav.foot-nav')

</div>


<script type="text/javascript" src="{{ asset('properties/js/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('properties/js/bootstrap.min.js') }}"></script>




<script type="text/javascript" src="{{ asset('properties/js/easyResponsiveTabs.js') }}"></script>
<script type="text/javascript" src="{{ asset('properties/js/jquery.nicescroll.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('properties/js/tabs.js') }}"></script>

<!-- All js plugins included in this file. -->
<script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/plugins.js"></script>
<!-- Main js file that contents all jQuery plugins activation. -->
<script src="https://www.devitems.com/html/sheltek-preview/sheltek/js/main.js"></script>
<a id="scrollUp" href="#top" style="display: none; position: fixed; z-index: 2147483647;"><i class="fa fa-angle-up"></i></a>


</body>

</html>
