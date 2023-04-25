@extends('user.main_master')
@section('title', ' About Page')


@section('content')
    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">About us </h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{url('/')}}">Home </a>/ </li>
                        <li><span>About us </span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Bread Crumb END -->

    <!-- CONTAIN START ptb-95-->
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="row">
                        <div class="col-12">
                            <h3>What's the secret of  carzone ? </h3>
                            <p>Lorem ipsum dolor sit, consectetur adipiscing elit. etiam suscipit arcu, feugiat fermentum  cras nec scelerisque magna,  dignissim ante. mauris ullamcorper sed dapibus scelerisque, vestibulum  auctor odio. Fusce dapibus vel quam venenatis rutrum sagittis mauris nisi, eu nisl lacinia at. Suspendiss, nulla nisi mi, hendrerit faucibus id, ultricies si nisi. </p>
                        </div>
                    </div>
                    <div class="about-detail mt-40">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part mb-30">
                                    <h2 class="maititle  heading"><span>Who We Are </span></h2>
                                </div>
                            </div>
                            <div class="col-sm-5 mb-xs-30">
                                <div class="image-part center-xs">  <img alt="Stylexpo" src="{{asset('user/images/blog-page.jpg')}}" />  </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="heading-part-desc aligleft center-md">
                                    <h2 class="heading">Nullam vel sollicitudin diam congue lacinia tortor vel morbi et mauris nec id at odio. </h2>
                                </div>
                                <p>Class aptent taciti sociosqu  litora torquent per conubia, per inceptos himenaeos nunc purus sed elit alique luctus pulvivvvvnar tortor, cras mi gravida, vehiculaue vitae, erat, aenean ullamcorper nibh sem interdum </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="responsive-part">
                        <div class="row">
                            <div class="col-sm-12 partner-detail-main">
                                <div class="heading-part mb-30">
                                    <h2 class="maititle  heading"><span>Our Partners </span></h2>
                                </div>
                                <p>Nullam vel sollicitudin diam congue lacinia tortor vel morbi et mauris nec feugiat malesuada id a nulla ornare scelerisque est, rutrum arcu elementu. </p>
                            </div>
                            <div class="col-sm-12">
                                <div class="partner-block mb-sm-30 light-gray-bg">
                                    <ul>
                                        <li><span><img src="{{asset('user/images/brand1.png')}}" alt="Stylexpo" /></span></li>
                                        <li><span><img src="{{asset('user/images/brand2.png')}}" alt="Stylexpo" /></span></li>
                                        <li><span><img src="{{asset('user/images/brand3.png')}}" alt="Stylexpo" /></span></li>
                                        <li><span><img src="{{asset('user/images/brand4.png')}}" alt="Stylexpo" /></span></li>
                                        <li class="owner-logo ">
                                            <span><img src="{{asset('user/images/owner-logo.png')}}" alt="Stylexpo" /></span>
                                        </li>
                                        <li><span><img src="{{asset('user/images/brand5.png')}}" alt="Stylexpo" /></span></li>
                                        <li><span><img src="{{asset('user/images/brand6.png')}}" alt="Stylexpo" /></span></li>
                                        <li><span><img src="{{asset('user/images/brand7.png')}}" alt="Stylexpo" /></span></li>
                                        <li><span><img src="{{asset('user/images/brand8.png')}}" alt="Stylexpo" /></span></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Testimonial Block Start -->
    <section class="client-bg ptb-70">
        <div class="top-shadow">
            <img alt="Stylexpo" src="{{asset('user/images/top-shadow.png')}}" />
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="client-main client-bg">
                        <div class="client-inner align-center">
                            <div id="client" class="owl-carousel">
                                <div class="item client-detail">
                                    <div class="client-img left-side mt-40">
                                        <img alt="Stylexpo" src="{{asset('user/images/testimoniaimg1.jpg')}}" />
                                        <h4 class="sub-title client-title">- Joseph deboungawer -  </h4>
                                        <div class="designation">Maneger of Business , 2base </div>
                                    </div>
                                    <div class="quote right-side">
                                        <div class="quote1-img">
                                            <img src="{{asset('user/images/quote1.png')}}" alt="Stylexpo" />
                                        </div>
                                        <p>It is a long fact that a reade be distracted by the content of a pag looking at its layout. point of using Lorem is that it has more-or-less normal distribution o
                                        </p>
                                        <div class="quote2-img">
                                            <img src="{{asset('user/images/quote2.png')}}" alt="Stylexpo" />
                                        </div>
                                    </div>
                                </div>
                                <div class="item client-detail">
                                    <div class="client-img left-side mt-40">
                                        <img alt="Stylexpo" src="{{asset('user/images/testimoniaimg2.jpg')}}" />
                                        <h4 class="sub-title client-title">- Joseph deboungawer -  </h4>
                                        <div class="designation">Maneger of Business , 2base </div>
                                    </div>
                                    <div class="quote-border right-side">
                                        <div class="quote">
                                            <div class="quote1-img">
                                                <img src="{{asset('user/images/quote1.png')}}" alt="Stylexpo" />
                                            </div>
                                            <p>It is a long fact that a reade be distracted by the content of a pag looking at its layout. point of using Lorem is that it has more-or-less normal distribution o
                                            </p>
                                            <div class="quote2-img">
                                                <img src="{{asset('user/images/quote2.png')}}" alt="Stylexpo" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item client-detail">
                                    <div class="client-img left-side mt-40">
                                        <img alt="Stylexpo" src="{{asset('user/images/testimoniaimg3.jpg')}}" />
                                        <h4 class="sub-title client-title">- Joseph deboungawer -  </h4>
                                        <div class="designation">Maneger of Business , 2base </div>
                                    </div>
                                    <div class="quote right-side">
                                        <div class="quote1-img">
                                            <img src="{{asset('user/images/quote1.png')}}" alt="Stylexpo" />
                                        </div>
                                        <p>It is a long fact that a reade be distracted by the content of a pag looking at its layout. point of using Lorem is that it has more-or-less normal distribution o
                                        </p>
                                        <div class="quote2-img">
                                            <img src="{{asset('user/images/quote2.png')}}" alt="Stylexpo" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-shadow">
            <img alt="Stylexpo" src="{{asset('user/images/bottom-shadow.png')}}" />
        </div>
    </section>
    <!--Testimonial Block End -->

    <!--team-part Start -->
    <section class="ptb-70">
        <div class="container">
            <div class="team-part team-opt-1">
                <div class="row">
                    <div class="col-12 ">
                        <div class="heading-part mb-30">
                            <h2 class="maititle heading"><span>Our Team </span></h2>
                        </div>
                    </div>
                </div>
                <div class="prcat">
                    <div class="row">
                        <div class="owl-carousel our-team ">
                            <div class="item">
                                <div class="team-item listing-effect col-sm-margin-b">  <img alt="Stylexpo" src="{{asset('user/images/tm1.jpg')}}" />
                                    <div class="team-item-detail">
                                        <h3 class="sub-title listing-effect-title">Adamaris Corliss </h3>
                                        <div class="listing-meta">Co-Founder </div>
                                        <div class="sociaicon">
                                            <ul>
                                                <li><a href="javascript:void(0)" title="Facebook" class="facebook"><i class="fa fa-facebook">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Twitter" class="twitter"><i class="fa fa-twitter">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-pinterest">  </i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-item listing-effect col-sm-margin-b">  <img alt="Stylexpo" src="{{asset('user/images/tm2.jpg')}}" />
                                    <div class="team-item-detail">
                                        <h3 class="sub-title listing-effect-title">Lusi Rose </h3>
                                        <div class="listing-meta">Project Manager </div>
                                        <div class="sociaicon">
                                            <ul>
                                                <li><a href="javascript:void(0)" title="Facebook" class="facebook"><i class="fa fa-facebook">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Twitter" class="twitter"><i class="fa fa-twitter">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-pinterest">  </i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-item listing-effect col-sm-margin-b">  <img alt="Stylexpo" src="{{asset('user/images/tm3.jpg')}}" />
                                    <div class="team-item-detail">
                                        <h3 class="sub-title listing-effect-title">Adamaris Corliss </h3>
                                        <div class="listing-meta">Co-Founder </div>
                                        <div class="sociaicon">
                                            <ul>
                                                <li><a href="javascript:void(0)" title="Facebook" class="facebook"><i class="fa fa-facebook">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Twitter" class="twitter"><i class="fa fa-twitter">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-pinterest">  </i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-item listing-effect col-sm-margin-b">  <img alt="Stylexpo" src="{{asset('user/images/tm4.jpg')}}" />
                                    <div class="team-item-detail">
                                        <h3 class="sub-title listing-effect-title">Adamaris Corliss </h3>
                                        <div class="listing-meta">Co-Founder </div>
                                        <div class="sociaicon">
                                            <ul>
                                                <li><a href="javascript:void(0)" title="Facebook" class="facebook"><i class="fa fa-facebook">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Twitter" class="twitter"><i class="fa fa-twitter">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-pinterest">  </i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-item listing-effect col-sm-margin-b">  <img alt="Stylexpo" src="{{asset('user/images/tm5.jpg')}}" />
                                    <div class="team-item-detail">
                                        <h3 class="sub-title listing-effect-title">Adamaris Corliss </h3>
                                        <div class="listing-meta">Co-Founder </div>
                                        <div class="sociaicon">
                                            <ul>
                                                <li><a href="javascript:void(0)" title="Facebook" class="facebook"><i class="fa fa-facebook">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Twitter" class="twitter"><i class="fa fa-twitter">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-pinterest">  </i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-item listing-effect col-sm-margin-b">  <img alt="Stylexpo" src="{{asset('user/images/tm6.jpg')}}" />
                                    <div class="team-item-detail">
                                        <h3 class="sub-title listing-effect-title">Lusi Rose </h3>
                                        <div class="listing-meta">Project Manager </div>
                                        <div class="sociaicon">
                                            <ul>
                                                <li><a href="javascript:void(0)" title="Facebook" class="facebook"><i class="fa fa-facebook">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Twitter" class="twitter"><i class="fa fa-twitter">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-pinterest">  </i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="team-item listing-effect col-sm-margin-b">  <img alt="Stylexpo" src="{{asset('user/images/tm7.jpg')}}" />
                                    <div class="team-item-detail">
                                        <h3 class="sub-title listing-effect-title">Adamaris Corliss </h3>
                                        <div class="listing-meta">Co-Founder </div>
                                        <div class="sociaicon">
                                            <ul>
                                                <li><a href="javascript:void(0)" title="Facebook" class="facebook"><i class="fa fa-facebook">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Twitter" class="twitter"><i class="fa fa-twitter">  </i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-dribbble"></i></a></li>
                                                <li><a href="javascript:void(0)" title="Pinterest" class="pinterest"><i class="fa fa-pinterest">  </i></a></li>
                                            </ul>
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
    <!--team-part End -->
    <!-- CONTAINER END -->
@endsection
