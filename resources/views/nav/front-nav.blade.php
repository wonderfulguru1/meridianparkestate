<!-- HEADER AREA START -->
<?php
$input = array("090 995 60005", "080 393 81422", "080 972 41000", "090 900 55010", "090 911 17809","081 466 56224");
$rand_keys = array_rand($input, 2);
$rand = rand(0,5)
?>
<style>
    .transparent-header {
        position: absolute;
        width: 100%;
        margin: auto;
            background: rgba(23, 23, 23, 0.7) none repeat scroll 0 0;
    border-top: 1px solid #484848;
        transition: all 0.3s ease 0s;
    }
    .features-area {
        background: #f5f5f5 url({{ asset('front/images/features.jpg') }}) no-repeat scroll 0 0;
    }
    .bg-white {
    background: #fff;
    height: 80px;
}
.nivoSlider {
    position: relative;
    width: 100%;
    height: auto;
    overflow: hidden;
}
.mb-30 {
    margin-bottom: 0px;
}
</style>
<header class="header-area header-wrapper">
    <div class="header-top-bar bg-white">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="logo">
                        <a href=""{{ url('/') }}""> <img
                                src="{{ asset('front/images/logo.png') }}"
                                        alt="" style="width: 150px;"> </a>
                    </div>
                </div>
                <div class="col-md-6 hidden-sm hidden-xs">
                    <div class="company-info clearfix">
                        <div class="company-info-item">
                            <div class="header-icon"><img
                                        src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/phone.png"
                                        alt=""></div>
                            <div class="header-info">
                                <h6 style="font-size: 13px;">{{$input[$rand]}}</h6>
                                <p>We are open 9 am - 10pm</p>
                            </div>
                        </div>
                        <div class="company-info-item">
                            <div class="header-icon"><img
                                        src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/mail-open.png"
                                        alt=""></div>
                            <div class="header-info">
                                <h6><a href="info@meridianparkestate.com" style="font-size: 13px;">info@meridianparkestate.com</a></h6>
                                <p>You can mail us</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="header-search clearfix">
                        <form action="#">
                            <button class="search-icon" type="submit"><img
                                        src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/search.png"
                                        alt=""></button>
                            <input type="text" placeholder="Search..."></form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="header-middle-area transparent-header hidden-xs">
        <div class="container">
            <div class="full-width-mega-drop-menu">
                <div class="row">
                    <div class="col-md-12">
                        <div class="sticky-logo">
                            <a href=""{{ url('/') }}""> <img
                                        src="{{ asset('front/images/logo.png') }}"
                                        alt=""> </a>
                        </div>
                        <nav id="primary-menu">
                            <ul class="main-menu text-center">
                                <li>
                                    <a href="{{ url('/') }}">Home</a>
                                <li><a href="{{ url('/about-us') }}">About us</a>

                                <li><a href="{{ url('/apartments') }}">Properties</a>

                                <li><a href="#">Blog</a>

                                <li class="mean-last"><a href="{{ url('/contact-us') }}">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <link rel="stylesheet" type="text/css" href="{{ asset('properties/css/font-awesome.min.css') }}" >

</header>
<!-- HEADER AREA END -->
<!-- MOBILE MENU AREA START -->
<div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
    <div class="container mean-container">
        <div class="mean-bar"><a href="#nav" class="meanmenu-reveal"
                                 style="background:;color:;right:0;left:auto;"><span></span><span></span><span></span></a>
            <nav class="mean-nav">
                <ul style="display: none;">
                    <li>
                        <a href="{{ url('/') }}">Home</a>
                    <li><a href="{{ url('/about-us') }}">About us</a>

                    <li><a href="{{ url('/apartments') }}">Properties
                    <li><a href="#">Blog</a>

                    <li class="mean-last"><a href="{{ url('/contact-us') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
       
    </div>
</div>
<!-- MOBILE MENU AREA END -->
<!-- SLIDER SECTION START -->