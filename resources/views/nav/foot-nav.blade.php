<?php
$input = array("090 995 60005", "080 393 81422");
$rand_keys = array_rand($input, 2);
$rand = rand(0,1);
$rand2 = rand(0,1);
?>
<footer id="footer" class="footer-area bg-2 bg-opacity-black-90">
    <div class="footer-top pt-110 pb-80">
        <div class="container">
            <div class="row">
                <!-- footer-address -->
                <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h6 class="footer-titel">GET IN TOUCH</h6>
                        <ul class="footer-address">
                            <li>
                                <div class="address-icon"><img
                                            src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/location-2.png"
                                            alt=""></div>
                                <div class="address-info"><span>Km 35 Lekki Epe Expressway, Awoyaya, Ibeju Lekki, Lagos.</span>
                            </li>
                            <li>
                                <div class="address-icon"><img
                                            src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/phone-3.png"
                                            alt=""></div>
                                <div class="address-info"><span>Telephone : {{$input[$rand2]}}</span> 
                                </div>
                            </li>
                            <li>
                                <div class="address-icon"><img
                                            src="https://www.devitems.com/html/sheltek-preview/sheltek/images/icons/world.png"
                                            alt=""></div>
                                <div class="address-info"><span>Email : info@meridianparkestate.com</span> <span>Web :<a
                                                href="#" target="_blank"> http://meridianparkestate.com/</a></span></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                    <div class="footer-widget">
                        <h6 class="footer-titel">QUICK CONTACT</h6>
                        <div class="footer-contact">
                            <p>Please drop us a short message</p>
                            <form id="contact-form-2" action="mail_footer.php" method="post">
                                <input type="email" name="email2" placeholder="Type your E-mail address...">
                                <textarea name="message2" placeholder="Write here..."></textarea>
                                <button type="submit" value="send">Send</button>
                            </form>
                            <p class="form-messege"></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="copyright text-center">
                        <p>Copyright © 2017 <a
                                    href="http://meridianparkestate.com"><b>meridian park estate</b></a>. All
                            rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
    <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = 'QwOnfXWFyg';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- {/literal} END JIVOSITE CODE -->

</footer>