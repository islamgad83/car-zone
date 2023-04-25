@extends('user.main_master')
@section('title', 'Carzone Shop')
@section('content')

    <!-- BANNER STRAT -->
    <section class="">
        <div id="owl-example" class="banner owl-carousel" style="background-image: url({{ asset('user/images/slider-section.webp') }});">
            <div class="main-banner">
                @foreach($sliders as $slider)

                <div class="item">
                    <div class="banner-1">  <img src="{{asset($slider->slider_img)}}" alt="Stylexpo" />
                        <div class="banner-detail">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-6 col-7 offset-lg-6 offset-5">
                                        <div class="banner-detail-inner slider-animation animated-1">
                                            <span class="slogan">{{ $slider->title }} </span>
                                            <h1 class="banner-title animated">Everything </h1>
                                            <p class="offer">{{ $slider->description }} </p>
                                            <a class="btn btn-color" href="#">Shop Now! </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- BANNER END -->

    <!-- CONTAIN START -->

    <!-- SUB-BANNER START -->
    <div class="sub-banner-block ">
        <div class="">
            <div class="container">
                <div class="row mlr_-10">
                    <div class="col-md-4 plr-10">
                        <div class="sub-banner sub-banner1">
                            <img alt="Stylexpo" src="{{asset('user/images/banner/banner4.jpg')}}" />
                            <div class="sub-banner-detail">
                                <div class="sub-banner-slogan">Top Brands </div>
                                <div class="sub-banner-title sub-banner-title-color">sunglasses </div>
                                <div class="sub-banner-subtitle">Flash sale </div>
                                <a class="btn btn-color" href="#">Shop Now! </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-xs-10 plr-10">
                        <div class="">
                            <div class="sub-banner sub-banner2">
                                <img alt="Stylexpo" src="{{asset('user/images/banner/banner4.jpg')}}" />
                                <div class="sub-banner-detail">
                                    <div class="sub-banner-slogan">Lifestyle </div>
                                    <div class="sub-banner-title sub-banner-title-color">Trending 2021 </div>
                                    <div class="sub-banner-subtitle"> Ultimate Sale </div>
                                    <a class="btn btn-color " href="#">Shop Now! </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mt-xs-10 plr-10">
                        <div class="sub-banner sub-banner3">
                            <img alt="Stylexpo" src="{{asset('user/images/banner/banner4.jpg')}}" />
                            <div class="sub-banner-detail">
                                <div class="sub-banner-slogan">Featured </div>
                                <div class="sub-banner-title sub-banner-title-color">Classic Watch </div>
                                <div class="sub-banner-subtitle">Collection </div>
                                <a class="btn btn-color " href="#">Shop Now! </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SUB-BANNER END -->

    <!--  New arrivals Products Slider Block Start  -->
    <section class="pt-70">
        <div class="container">
            <div class="product-listing">
                <div class="row">
                    <div class="col-12">
                        <div class="heading-part mb-30">
                            <h2 class="main_title heading"><span>{{__('user.new_arrivals')}} </span></h2>
                        </div>
                    </div>
                </div>
                <div class="pro_cat">
                    <div class="row">
                        <div class="owl-carousel pro-cat-slider ">
                            @forelse($featured as $product)
                            <div class="item">
                                <div class="product-item mb-30">
                                    <input type="hidden" id="product_id" value="{{ $product->id }}">
                                    @php
                                        $amount = $product->selling_price - $product->discount_price;
                                        $discount = ($amount/$product->selling_price) * 100;
                                    @endphp
                                    @if ($product->discount_price == NULL)
                                        <div class="main-label new-label"><span>New </span></div>
                                    @else
                                        <label class="product-label label-discount"> </label>
                                        <div class="main-label off-label"><span>{{ round($discount) }}% </span></div>
                                    @endif

                                    <div class="product-image">  <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                            <img src="{{asset($product->product_thambnail)}}" alt="Stylexpo" />
                                        </a>
                                        <div class="product-detail-inner">
                                            <div class="detail-inner-left align-center">
                                                <ul>
                                                    <li class="pro-cart-icon">
                                                            <button type="button" id="{{ $product->id }}" onclick="addToCart(this.id)" title="Add to Cart">
                                                                <span></span>Add to Cart </button>
                                                    </li>
                                                    <li class="pro-wishlist-icon active">
                                                        <a type="button" id="{{ $product->id }}" onclick="addToWishList(this.id)" title="Wishlist"></a>
                                                    </li>
                                                    <li class="pro-compare-icon">
                                                        <a type="button" id="{{ $product->id }}" onclick="addToCompare(this.id)" title="Compare">

                                                        </a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-item-details">
                                        <div class="product-item-name" id="pname">
                                            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                @if(App::getLocale() == 'ar')
                                                    {!! \Illuminate\Support\Str::limit($product->product_name_ar, 20 )  !!}
                                                @else
                                                    {!! \Illuminate\Support\Str::limit($product->product_name_en, 20 )  !!}
                                                @endif
                                            </a>
                                        </div>
                                        <div class="price-box">
                                            @if ($product->discount_price == NULL)
                                                <span class="price">{{ $product->selling_price }} EGP </span>

                                            @else

                                                <span class="price">{{ $product->discount_price}} EGP </span>
                                                <del class="price old-price">{{ $product->selling_price}} </del>
                                            @endif

                                        </div>
                                    </div>
                                    @php
                                        $size_en= $product->product_size_en;
                                        $color_en =$product->product_color_en;
                                        $product_size_en = explode(',',$size_en );
                                        $product_color_en = explode(',',$color_en );
                                    @endphp
                                    <div class="fix-bottom product-sticky-content sticky-content"  style="display: none !important;">
                                        <div class="product-form container">
                                            <div class="product-qty-form mb-2 mr-2">
                                                <div class="input-group">
                                                    <input id="qty" class="quantity form-control" type="number" min="1" max="10000000" />
                                                </div>
                                            </div>
                                            <div class="product-qty-form">
                                                <div class="input-group">

                                                    @if($product->product_size_en == null)
                                                    @else
                                                        <label class="mb-1">size: </label>
                                                        <select id="size">
                                                            @foreach($product_size_en as $size)
                                                                <option value="{{ $size }}">{{ ucwords($size) }}</option>
                                                            @endforeach
                                                        </select>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="product-qty-form">
                                                <div class="input-group">
                                                    @if($product->product_color_en == null)
                                                    @else
                                                        <label  class="mb-1 ml-10">Color: </label>
                                                        <select id="color">
                                                            @foreach($product_color_en as $color)
                                                                <option value="{{ $color }}">{{ ucwords($color) }}</option>
                                                            @endforeach
                                                        </select>
                                                    @endif
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h5 class="text-danger">{{__('user.no_product_found')}}</h5>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  New arrivals Products Slider Block End  -->

    <!-- Top Categories Start-->
{{--    <section class="pt-70">--}}
{{--        <div class="top-cate-bg ptb-70">--}}
{{--            <div class="container">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-12">--}}
{{--                        <div class="heading-part mb-30">--}}
{{--                            <h2 class="main_title heading"><span>{{__('TopCategoriesOfTheMonth')}}</span></h2>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="pro_cat">--}}
{{--                    <div class="row">--}}
{{--                        <div id="top-cat-pro" class="owl-carousel sell-pro align-center">--}}
{{--                            @foreach($categories as $category)--}}
{{--                            <div class="item ">--}}
{{--                                <a href="#">--}}
{{--                                    <div class="item-inner">--}}
{{--                                        <img src="{{asset($category->category_icon)}}" alt="Stylexpo" />--}}
{{--                                        <div class="effect"></div>--}}
{{--                                        <div class="cate-detail">--}}
{{--                                            <span> @if(App::getLocale() == 'ar')--}}
{{--                                                    {{ $category->category_name_ar }}--}}
{{--                                                @else--}}
{{--                                                    {{ $category->category_name_en }}--}}
{{--                                                @endif </span>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </a>--}}
{{--                            </div>--}}
{{--                            @endforeach--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- Top Categories End-->

    <!-- perellex-banner Start -->
    <section>
        <div class="perellex-banner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 ptb-70 client-box">
                        <div class="perellex-delail align-center">
                            <div class="perellex-offer"><span class="line-bottom">Sale Up to 30% </span></div>
                            <div class="perellex-title ">Lifestyle Collection  </div>
                            <p>We offer cheap fashion at discount price </p>
                            <a class="btn btn-color">Shop Now! </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- perellex-banner End -->

    <!-- Daily Deals Start -->
    <section class=" ptb-70">
        <div class="container">
            <div class="daily-deals">
                <div class="row m-0">
                    <div class="col-12 p-0">
                        <div class="heading-part mb-30">
                            <h2 class="main_title heading"><span>{{__('user.DealsHotTheDay')}} </span></h2>
                        </div>
                    </div>
                </div>
                <div class="pro_cat">
                    <div class="row">
                        <div id="daily_deals" class="owl-carousel ">
                            @forelse($hot_deals as $product)
                                <div class="item">
                                <div class="product-item" id="product_id" value="{{ $product->id }}">
                                    <div class="row ">
                                        <div class="col-md-6 col-12 deals-img ">
                                            <div class="product-image">
                                                <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                    <img src="{{asset($product->product_thambnail)}}" alt="Stylexpo" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12 mt-xs-30">
                                            <div class="product-item-details">
                                                <div class="product-item-name">
                                                    <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                        @if(App::getLocale() == 'ar')
                                                            {!! \Illuminate\Support\Str::limit($product->product_name_ar, 20 )  !!}
                                                        @else
                                                            {!! \Illuminate\Support\Str::limit($product->product_name_en, 20 )  !!}
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="price-box">
                                                    @if ($product->discount_price == NULL)
                                                        <span class="price">{{ $product->selling_price }} EGP </span>

                                                    @else

                                                        <span class="price">{{ $product->discount_price}} EGP </span>
                                                        <del class="price old-price">{{ $product->selling_price}} </del>
                                                    @endif
                                                </div>
                                                <p>
                                                    @if(App::getLocale() == 'ar')
                                                        {!! $product->long_descp_ar !!}
                                                    @else {!! $product->long_descp_en !!}
                                                    @endif
                                                </p>
                                            </div>
                                            @php
                                                $size_en= $product->product_size_en;
                                                $color_en =$product->product_color_en;
                                                $product_size_en = explode(',',$size_en );
                                                $product_color_en = explode(',',$color_en );
                                            @endphp
                                            <div class="fix-bottom product-sticky-content sticky-content"  style="display: none !important;">
                                                <div class="product-form container">
                                                    <div class="product-qty-form mb-2 mr-2">
                                                        <div class="input-group">
                                                            <input id="qty" class="quantity form-control" type="number" min="1" max="10000000" />
                                                        </div>
                                                    </div>
                                                    <div class="product-qty-form">
                                                        <div class="input-group">

                                                            @if($product->product_size_en == null)
                                                            @else
                                                                <label class="mb-1">size: </label>
                                                                <select id="size">
                                                                    @foreach($product_size_en as $size)
                                                                        <option value="{{ $size }}">{{ ucwords($size) }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="product-qty-form">
                                                        <div class="input-group">
                                                            @if($product->product_color_en == null)
                                                            @else
                                                                <label  class="mb-1 ml-10">Color: </label>
                                                                <select id="color">
                                                                    @foreach($product_color_en as $color)
                                                                        <option value="{{ $color }}">{{ ucwords($color) }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="product-detail-inner">
                                                <div class="detail-inner-left">
                                                    <ul>
                                                        <li class="pro-cart-icon">
                                                            <button type="button" id="{{ $product->id }}" onclick="addToCart(this.id)" title="Add to Cart">
                                                                <span></span>Add to Cart </button>
                                                        </li>
                                                        <li class="pro-wishlist-icon active">
                                                            <a type="button" id="{{ $product->id }}" onclick="addToWishList(this.id)" title="Wishlist"></a>
                                                        </li>
                                                        <li class="pro-compare-icon">
                                                            <a type="button" id="{{ $product->id }}" onclick="addToCompare(this.id)" title="Compare">

                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="item-offer-clock">
                                                <ul class="countdown-clock">
                                                    <li>
                                                        <span class="days">00 </span>
                                                        <p class="days_ref">days </p>
                                                    </li>
                                                    <li class="seperator">: </li>
                                                    <li>
                                                        <span class="hours">00 </span>
                                                        <p class="hours_ref">hrs </p>
                                                    </li>
                                                    <li class="seperator">: </li>
                                                    <li>
                                                        <span class="minutes">00 </span>
                                                        <p class="minutes_ref">min </p>
                                                    </li>
                                                    <li class="seperator">: </li>
                                                    <li>
                                                        <span class="seconds">00 </span>
                                                        <p class="seconds_ref">sec </p>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @empty
                                <h5 class="text-danger">{{__('user.no_product_found')}}</h5>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Daily Deals End -->

    <!--  Site Services Features Block Start  -->
    <div class="ser-feature-block">
        <div class="container">
            <div class="center-xs">
                <div class="row">
                    <div class="col-xl-3 col-6 service-box">
                        <div class="feature-box ">
                            <div class="feature-icon feature1"></div>
                            <div class="feature-detail">
                                <div class="ser-title">{{__('user.FreeShipping&Returns')}} </div>
                                <div class="ser-subtitle">{{__('user.ForAllOrdersOver')}} </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 service-box">
                        <div class="feature-box">
                            <div class="feature-icon feature2"></div>
                            <div class="feature-detail">
                                <div class="ser-title">{{__('user.CustomerSupport')}}</div>
                                <div class="ser-subtitle">{{__('user.CallOrEmail')}} </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 service-box">
                        <div class="feature-box ">
                            <div class="feature-icon feature3"></div>
                            <div class="feature-detail">
                                <div class="ser-title">{{__('user.MoneyBackGuarantee')}} </div>
                                <div class="ser-subtitle">{{__('user.AnyBackWithin30days')}} </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-6 service-box">
                        <div class="feature-box ">
                            <div class="feature-icon feature4"></div>
                            <div class="feature-detail">
                                <div class="ser-title">{{__('user.SecurePayment')}} </div>
                                <div class="ser-subtitle">{{__('user.WeEnsureSecurePayment')}}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--  Site Services Features Block End  -->

    <!--small banner Block Start-->
    <section class="pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="sub-banner small-banner small-banner1">
                        <a href="#">
                            <img src="{{asset('user/images/banner/banner8.jpg')}}" alt="Stylexpo" />
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 mt-sm-30">
                    <div class="sub-banner small-banner small-banner2">
                        <a href="#">
                            <img src="{{asset('user/images/banner/banner8.jpg')}}" alt="Stylexpo" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--small banner Block Start-->

    <!--  Special products Products Slider Block Start  -->
    <section class="ptb-70">
        <div class="container">
            <div class="product-listing">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part mb-30">
                                    <h2 class="main_title heading"><span>{{__('user.TopBestSeller')}} </span></h2>
                                </div>
                            </div>
                        </div>
                        @php
                            $best_seller = \App\Models\Product::where('special_offer', 1)->orderBy('id', 'DESC')->limit(3)->get();
                        @endphp
                        <div class="pro_cat">
                            <div class="row">
                                <div class="owl-carousel best-seller-pro">
                                    @forelse($best_seller as $product)
                                    <div class="item">
                                        <div class="product-item mb-30">
                                            <input type="hidden" id="product_id" value="{{ $product->id }}">
                                            @php
                                                $amount = $product->selling_price - $product->discount_price;
                                                $discount = ($amount/$product->selling_price) * 100;
                                            @endphp
                                            @if ($product->discount_price == NULL)
                                                <div class="main-label new-label"><span>New </span></div>
                                            @else
                                                <label class="product-label label-discount"> </label>
                                                <div class="main-label off-label"><span>{{ round($discount) }}% </span></div>
                                            @endif
                                            <div class="product-image">  <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                    <img src="{{asset($product->product_thambnail)}}" alt="Stylexpo" />
                                                </a>

                                                <div class="product-detail-inner">
                                                    <div class="detail-inner-left align-center">
                                                        <ul>
                                                            <li class="pro-cart-icon">
                                                                <button type="button" id="{{ $product->id }}" onclick="addToCart(this.id)" title="Add to Cart">
                                                                    <span></span>Add to Cart </button>
                                                            </li>
                                                            <li class="pro-wishlist-icon active">
                                                                <a type="button" id="{{ $product->id }}" onclick="addToWishList(this.id)" title="Wishlist"></a>
                                                            </li>
                                                            <li class="pro-compare-icon">
                                                                <a type="button" id="{{ $product->id }}" onclick="addToCompare(this.id)" title="Compare">

                                                                </a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-item-details">
                                                <div class="product-item-name" id="pname">
                                                    <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                        @if(App::getLocale() == 'ar')
                                                            {!! \Illuminate\Support\Str::limit($product->product_name_ar, 20 )  !!}
                                                        @else
                                                            {!! \Illuminate\Support\Str::limit($product->product_name_en, 20 )  !!}
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="price-box">
                                                    @if ($product->discount_price == NULL)
                                                        <span class="price">{{ $product->selling_price }} EGP </span>

                                                    @else

                                                        <span class="price">{{ $product->discount_price}} EGP </span>
                                                        <del class="price old-price">{{ $product->selling_price}} </del>
                                                    @endif

                                                </div>
                                            </div>
                                            @php
                                                $size_en= $product->product_size_en;
                                                $color_en =$product->product_color_en;
                                                $product_size_en = explode(',',$size_en );
                                                $product_color_en = explode(',',$color_en );
                                            @endphp
                                            <div class="fix-bottom product-sticky-content sticky-content"  style="display: none !important;">
                                                <div class="product-form container">
                                                    <div class="product-qty-form mb-2 mr-2">
                                                        <div class="input-group">
                                                            <input id="qty" class="quantity form-control" type="number" min="1" max="10000000" />
                                                        </div>
                                                    </div>
                                                    <div class="product-qty-form">
                                                        <div class="input-group">

                                                            @if($product->product_size_en == null)
                                                            @else
                                                                <label class="mb-1">size: </label>
                                                                <select id="size">
                                                                    @foreach($product_size_en as $size)
                                                                        <option value="{{ $size }}">{{ ucwords($size) }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="product-qty-form">
                                                        <div class="input-group">
                                                            @if($product->product_color_en == null)
                                                            @else
                                                                <label  class="mb-1 ml-10">Color: </label>
                                                                <select id="color">
                                                                    @foreach($product_color_en as $color)
                                                                        <option value="{{ $color }}">{{ ucwords($color) }}</option>
                                                                    @endforeach
                                                                </select>
                                                            @endif
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                        <h5 class="text-danger">{{__('user.no_product_found')}}</h5>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-12 mt-xs-30">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part mb-30">
                                    <h2 class="main_title heading"><span>{{__('user.special_Deals')}}  </span></h2>
                                </div>
                            </div>
                        </div>
                        <div class="pro_cat">
                            <div class="row">
                                <div class="owl-carousel best-seller-pro">
                                    @forelse($special_deals as $product)
                                        <div class="item">
                                            <div class="product-item mb-30">
                                                <input type="hidden" id="product_id" value="{{ $product->id }}">
                                                @php
                                                    $amount = $product->selling_price - $product->discount_price;
                                                    $discount = ($amount/$product->selling_price) * 100;
                                                @endphp
                                                @if ($product->discount_price == NULL)
                                                    <div class="main-label new-label"><span>New </span></div>
                                                @else
                                                    <label class="product-label label-discount"> </label>
                                                    <div class="main-label off-label"><span>{{ round($discount) }}% </span></div>
                                                @endif
                                                <div class="product-image">  <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                        <img src="{{asset($product->product_thambnail)}}" alt="Stylexpo" />
                                                    </a>
                                                    <div class="product-detail-inner">
                                                        <div class="detail-inner-left align-center">
                                                            <ul>
                                                                <li class="pro-cart-icon">
                                                                    <button type="button" id="{{ $product->id }}" onclick="addToCart(this.id)" title="Add to Cart">
                                                                        <span></span>Add to Cart </button>
                                                                </li>
                                                                <li class="pro-wishlist-icon active">
                                                                    <a type="button" id="{{ $product->id }}" onclick="addToWishList(this.id)" title="Wishlist"></a>
                                                                </li>
                                                                <li class="pro-compare-icon">
                                                                    <a type="button" id="{{ $product->id }}" onclick="addToCompare(this.id)" title="Compare">

                                                                    </a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-item-details">
                                                    <div class="product-item-name" id="pname">
                                                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                            @if(App::getLocale() == 'ar')
                                                                {!! \Illuminate\Support\Str::limit($product->product_name_ar, 20 )  !!}
                                                            @else
                                                                {!! \Illuminate\Support\Str::limit($product->product_name_en, 20 )  !!}
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="price-box">
                                                        @if ($product->discount_price == NULL)
                                                            <span class="price">{{ $product->selling_price }} EGP </span>

                                                        @else

                                                            <span class="price">{{ $product->discount_price}} EGP </span>
                                                            <del class="price old-price">{{ $product->selling_price}} </del>
                                                        @endif

                                                    </div>
                                                </div>
                                                @php
                                                    $size_en= $product->product_size_en;
                                                    $color_en =$product->product_color_en;
                                                    $product_size_en = explode(',',$size_en );
                                                    $product_color_en = explode(',',$color_en );
                                                @endphp
                                                <div class="fix-bottom product-sticky-content sticky-content"  style="display: none !important;">
                                                    <div class="product-form container">
                                                        <div class="product-qty-form mb-2 mr-2">
                                                            <div class="input-group">
                                                                <input id="qty" class="quantity form-control" type="number" min="1" max="10000000" />
                                                            </div>
                                                        </div>
                                                        <div class="product-qty-form">
                                                            <div class="input-group">

                                                                @if($product->product_size_en == null)
                                                                @else
                                                                    <label class="mb-1">size: </label>
                                                                    <select id="size">
                                                                        @foreach($product_size_en as $size)
                                                                            <option value="{{ $size }}">{{ ucwords($size) }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="product-qty-form">
                                                            <div class="input-group">
                                                                @if($product->product_color_en == null)
                                                                @else
                                                                    <label  class="mb-1 ml-10">Color: </label>
                                                                    <select id="color">
                                                                        @foreach($product_color_en as $color)
                                                                            <option value="{{ $color }}">{{ ucwords($color) }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                @endif
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <h5 class="text-danger">{{__('user.no_product_found')}}</h5>
                                    @endforelse
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Special Products Slider Block End  -->



    <!-- Brand logo block Start  -->
    @include('user.includes.brands')
    <!-- Brand logo block End  -->
    <!-- CONTAINER END -->

    <!-- News Letter Start -->
    <section>
        <div class="newsletter">
            <div class="container">
                <div class="newsletter-inner center-sm">
                    <div class="row justify-content-center align-items-center">
                        <div class=" col-xl-10 col-md-12">
                            <div class="newsletter-bg">
                                <div class="row  align-items-center">
                                    <div class="col-xl-6 col-lg-6">
                                        <div class="d-lg-flex align-items-center">
                                            <div class="newsletter-icon">
                                                <img alt="Stylexpo" src="{{asset('user/images/newsletter-icon.png')}}" />
                                            </div>
                                            <div class="newsletter-title">
                                                <h2 class="main_title">Subscribe to our newsletter </h2>
                                                <div class="sub-title">Sign up for newsletter ___ Get upto 50% off </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6">
                                        <form>
                                            <div class="newsletter-box">
                                                <input type="email" placeholder="Email Here..." />
                                                <button title="Subscribe" class="btn-color">Subscribe </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- News Letter End -->
@endsection
