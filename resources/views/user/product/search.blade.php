@extends('user.main_master')
@section('title', 'Product Search Page')
@section('content')
<!-- Main Container  -->

<!-- Bread Crumb STRAT -->
<div class="banner inner-banner1 ">
    <div class="container">
        <section class="banner-detail center-xs">
            <h1 class="banner-title">Search </h1>
            <div class="bread-crumb right-side float-none-xs">
                <ul>
                    <li><a href="{{url('/')}}">Home </a>/ </li>
                    <li><span>Search </span></li>
                </ul>
            </div>
        </section>
    </div>
</div>
<!-- Bread Crumb END -->
@php
    $categories = \App\Models\Category::orderBy('category_name_en','ASC')->get();
@endphp
    <!-- CONTAIN START -->
<section class="ptb-70">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-3 mb-sm-30 col-lgmd-20per">
                <div class="sidebar-block">
                    <div class="sidebar-box listing-box mb-40">  <span class="opener plus"></span>
                        <div class="sidebar-title">
                            <h3><span>Categories </span></h3>
                        </div>
                        <div class="sidebar-contant">
                            <ul>
                                {{-- @foreach($categories as $category)
                                    <li><a href="#"> @if(App::getLocale() == 'ar')
                                                {{ $category->category_name_ar }} @else {{ $category->category_name_en }} @endif  </a></li>
                                @endforeach --}}
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-box mb-40 d-none d-lg-block">
                        <a href="#">
                            <img src="{{asset('user/images/blog-page.jpg')}}" alt="Stylexpo" />
                        </a>
                    </div>
                    @php
                        $best_seller = \App\Models\Product::where('special_offer', 1)->orderBy('id', 'DESC')->limit(3)->get();
                    @endphp
                    <div class="sidebar-box sidebar-item">  <span class="opener plus"></span>
                        <div class="sidebar-title">
                            <h3><span>Best Selle </span> </h3>
                        </div>
                        <div class="sidebar-contant">
                            <ul>
                                @forelse($best_seller as $product)
                                    <li>
                                        <div class="pro-media">
                                            <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                <img alt="T-shirt" src="{{asset($product->product_thambnail)}}" width="105" height="118"/>
                                            </a>
                                        </div>
                                        <div class="pro-detail-info">  <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                @if(App::getLocale() == 'ar')
                                                    {!! \Illuminate\Support\Str::limit($product->product_name_ar, 20 )  !!}
                                                @else
                                                    {!! \Illuminate\Support\Str::limit($product->product_name_en, 20 )  !!}
                                                @endif
                                            </a>
                                            <div class="rating-summary-block">
                                                <div class="rating-result" title="53%">  <span style="width:53%"></span>  </div>
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
                                    </li>
                                @empty
                                    <h5 class="text-danger">{{__('user.no_product_found')}}</h5>
                                @endforelse
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-10 col-lg-9 col-lgmd-80per">
                <div class="shorting mb-30">
                    <div class="row">
                        {{-- <div class="col-lg-6">
                            <div class="view">
                                <div class="list-types grid active ">  <a href="shop.html">
                                        <div class="grid-icon list-types-icon"></div>
                                    </a>
                                </div>
                                <div class="list-types list">  <a href="shop-list.html">
                                        <div class="list-icon list-types-icon"></div>
                                    </a>
                                </div>
                            </div>
                            <div class="short-by float-right-sm">  <span>Sort By : </span>
                                <div class="select-item select-dropdown">
                                    <fieldset>
                                        <select name="speed" id="sort-price" class="option-drop">
                                            <option value="" selected="selected" />Name (A to Z)
                                            <option value="" />Name(Z - A)
                                            <option value="" />price(low&gt;high)
                                            <option value="" />price(high &gt; low)
                                            <option value="" />rating(highest)
                                            <option value="" />rating(lowest)
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                        </div> --}}
                        {{-- <div class="col-lg-6">
                            <div class="show-item right-side float-left-sm">  <span>Show : </span>
                                <div class="select-item select-dropdown">
                                    <fieldset>
                                        <select name="speed" id="show-item" class="option-drop">
                                            <option value="" selected="selected" />24
                                            <option value="" />12
                                            <option value="" />6
                                        </select>
                                    </fieldset>
                                </div>
                                <span>Per Page </span>
                                <div class="compare float-right-sm">  <a href="#" class="btn btn-color">Compare (0) </a>  </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
                <div class="product-listing">
                    <div class="inner-listing">
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-4 col-6 item-width mb-30">
                                    <div class="product-item">
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
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="pagination-bar">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                        <li class="active"><a href="#">1 </a></li>
                                        <li><a href="#">2 </a></li>
                                        <li><a href="#">3 </a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- CONTAINER END -->
@endsection
