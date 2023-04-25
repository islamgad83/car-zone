@php
    $setting = App\Models\SiteSetting::find(1);
@endphp

    <!-- FOOTER START -->
<div class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-middle">
                <div class="row">
                    <div class="col-lg-3 f-col">
                        <div class="footer-static-block">  <span class="opener plus"></span>
                            <div class="f-logo">
                                <a href="{{url('/')}}" class="">
                                    <img src="{{asset($setting->logo)}}" alt="Stylexpo" />
                                </a>
                            </div>
                            <div class="footer-block-contant">
                                <p>Lorem khaled ipsum is major key to success.’ on you how you to live your life. remember in the jungle' a lot of they. </p>
                                <p class="d-none d-xl-block">It’s on you how want to live your. Everyone has a choice. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 f-col">
                        <div class="footer-static-block">  <span class="opener plus"></span>
                            <h3 class="title">Help  <span></span></h3>
                            <ul class="footer-block-contant link">
                                <li><a href="#">Gift Cards </a></li>
                                <li><a href="#">Order Status </a></li>
                                <li><a href="#">Free Shipping </a></li>
                                <li><a href="#">Return & Exchange  </a></li>
                                <li><a href="#">International </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 f-col">
                        <div class="footer-static-block">  <span class="opener plus"></span>
                            <h3 class="title">Guidance  <span></span></h3>
                            <ul class="footer-block-contant link">
                                <li><a href="#"> Delivery information </a></li>
                                <li><a href="#"> Privacy Policy </a></li>
                                <li><a href="#"> Terms & Conditions </a></li>
                                <li><a href="#"> Contact </a></li>
                                <li><a href="#"> Sitemap </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 f-col">
                        <div class="footer-static-block">  <span class="opener plus"></span>
                            <h3 class="title">address <span></span></h3>
                            <ul class="footer-block-contant address-footer">
                                <li class="item">  <i class="fa fa-map-marker">  </i>
                                    <p>
                                        @if(App::getLocale() == 'ar')
                                            العنوان: كارزون المعادى شارع 9 ب
                                        @else
                                            Address: {{ $setting->company_name }}, Maadi, {{ $setting->company_address }}
                                        @endif

                                        <br />Allen st Road, new -405001. </p>
                                </li>
                                <li class="item">  <i class="fa fa-envelope">  </i>
                                    <p>  <a href="#">infoservices@stylexpo.com  </a>  </p>
                                </li>
                                <li class="item">  <i class="fa fa-phone">  </i>
                                    <p>(+91) 9834567890 </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <hr />
            <div class="footer-bottom ">
                <div class="row mtb-30">
                    <div class="col-lg-6 ">
                        <div class="copy-right ">© 2022 All Rights. Design By  <a href="#">Carzone </a></div>
                    </div>
                    <div class="col-lg-6 ">
                        <div class="footer_social pt-xs-15 center-sm">
                            <ul class="social-icon">
                                <li><div class="title">Follow us on : </div></li>
                                <li><a href="" title="Facebook" class="facebook"><i class="fa fa-facebook">  </i></a></li>
                                <li><a title="Twitter" class="twitter"><i class="fa fa-twitter">  </i></a></li>
                                <li><a title="Linkedin" class="linkedin"><i class="fa fa-linkedin">  </i></a></li>
                                <li><a title="RSS" class="rss"><i class="fa fa-rss">  </i></a></li>
                                <li><a title="Pinterest" class="pinterest"><i class="fa fa-pinterest">  </i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr />
                <div class="row align-center mtb-30 ">
                    <div class="col-12 ">
                        <div class="site-link">
                            <ul>
                                <li><a href="#">About Us </a></li>
                                <li><a href="#">Contact Us </a></li>
                                <li><a href="#">Customer  </a></li>
                                <li><a href="#">Service </a></li>
                                <li><a href="#">Privacy </a></li>
                                <li><a href="#">Policy  </a></li>
                                <li><a href="#">Accessibility </a></li>
                                <li><a href="#">Directory  </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row align-center">
                    <div class="col-12 ">
                        <div class="payment">
                            <div class="payment_icon">
                                <a href="javascript:void(0)"><img src="{{asset('user/images/payment-footer.png')}}" alt="Stylexpo" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="scroll-top">
    <div class="scrollup"></div>
</div>
<!-- FOOTER END -->
