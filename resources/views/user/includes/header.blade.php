@php
    $setting = App\Models\SiteSetting::find(1);
    $categories = \App\Models\Category::orderBy('category_name_en', 'ASC')->get();
@endphp

<style>

    .search-area{
        position: relative;
    }
    #searchProducts {
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: #ffffff;
        z-index: 999;
        border-radius: 8px;
        margin-top: 5px;
    }
</style>


<!-- Popup Links Start -->
<div class="popup-part">
    <div class="popup-links">
        <div class="popup-links-inner">
            <ul>
                <li class="categories">
                    <a class="popup-with-form" href="#categories_popup" data-toggle="modal"><span class="icon"></span><span class="icon-text">{{__('user.category')}} </span></a>
                </li>
                <li class="cart-icon">
                    <a class="popup-with-form" href="#cart_popup" data-toggle="modal"><span class="icon"></span><span class="icon-text">{{__('user.cart')}} </span></a>
                </li>
                <li class="account">
                    <a class="popup-with-form" href="#account_popup" data-toggle="modal"><span class="icon"></span><span class="icon-text">{{__('user.account')}} </span></a>
                </li>
                <li class="search">
                    <a class="popup-with-form" href="#search_popup" data-toggle="modal"><span class="icon"></span><span class="icon-text">{{__('user.search')}} </span></a>
                </li>
                <li class="scroll scrollup">
                    <a href="#"><span class="icon"></span><span class="icon-text">top </span></a>
                </li>
            </ul>
        </div>
    </div>
    <div class="popup_containt">
        <div class="modal fade" id="categories_popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="popup-title">
                            <h2 class="main_title heading m-0"><span>{{__('user.category')}} </span></h2>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times; </span>
                        </button>
                    </div>
                    <div class="modal-body pl-4">
                        <div style="height: 100%;" data-simplebar="" data-simplebar-auto-hide="false">
                            <div class="popup-detail">
                                <ul class="cate-inner">
                                    @foreach($categories as $category)
                                    <li class="level sub-megamenu">
                                        <span class="opener plus"></span>
                                        <a href="#" class="page-scroll">
                                            <img src="{{asset($category->category_icon)}}" alt="" style="width: 6% !important">
                                            @if(App::getLocale() == 'ar')
                                                {{ $category->category_name_ar }}
                                            @else
                                                {{ $category->category_name_en }}
                                            @endif</a>
                                        <div class="megamenu  mega-sub-menu">
                                            <div class="megamenu-inner-top">
                                                <ul class="sub-menu-level1">
                                                    <li class="level2">
                                                        <ul class="sub-menu-level2 ">
                                                            @php
                                                                $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                                            @endphp
                                                            @foreach($subcategories as $subcategory)
                                                            <li class="level3">
                                                                <a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}">
                                                                    @if(App::getLocale() == 'ar')
                                                                        {{ $subcategory->subcategory_name_ar }}
                                                                    @else
                                                                        {{ $subcategory->subcategory_name_en }}
                                                                    @endif
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="cart_popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="popup-title">
                            <h2 class="main_title heading m-0"><span>cart </span></h2>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times; </span>
                        </button>
                    </div>
                    <div class="modal-body pl-4">
                        <div class="popup-detail">
                            <div class="cart-dropdown ">
                                <div style="height: 300px;" data-simplebar="" data-simplebar-auto-hide="false">
                                    <ul class="cart-list link-dropdown-list" id="miniCart2">

                                    </ul>
                                </div>
                                <p class="cart-sub-totle">
                                    <span class="pull-left">{{__('user.sub_total')}} </span>
                                    <span class="pull-right"><strong class="price-box" id="cartSubTotal"> </strong> EGP</span>
                                </p>
                                <div class="clearfix"></div>
                                <div class="mt-20">
                                    <a href="{{route('mycart')}}" class="btn-color btn left-side">{{__('user.view_cart')}} </a>
                                    <a href="{{route('checkout')}}" class="btn-color btn right-side">{{__('user.checkout')}} </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="account_popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="popup-title">
                            <h2 class="main_title heading m-0"><span>{{__('user.account')}} </span></h2>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times; </span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="popup-detail pr-0">
                            <div class="row">
                                <div class="col-lg-4">
                                    <a href="{{route('dashboard')}}">
                                        <div class="account-inner mb-30">
                                            <i class="fa fa-user"></i><br />
                                            <span> {{__('user.dashboard')}} </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{route('login')}}">
                                        <div class="account-inner mb-30">
                                            <i class="fa fa-user-plus"></i><br />
                                            <span>{{__('user.login')}} </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{route('mycart')}}">
                                        <div class="account-inner mb-30">
                                            <i class="fa fa-shopping-bag"></i><br />
                                            <span>{{__('user.cart')}} </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{route('user.changePassword')}}">
                                        <div class="account-inner">
                                            <i class="fa fa-key"></i><br />
                                            <span>{{__('user.change_password')}} </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{ route('my.orders') }}">
                                        <div class="account-inner">
                                            <i class="fa fa-history"></i><br />
                                            <span> {{__('user.orders')}} </span>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-lg-4">
                                    <a href="{{route('user.logout')}}">
                                        <div class="account-inner">
                                            <i class="fa fa-share-square-o"></i><br />
                                            <span>{{__('user.logout')}} </span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="search_popup" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="popup-title">
                            <h2 class="main_title heading m-0"><span>Search </span></h2>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times; </span>
                        </button>
                    </div>
                    <div class="modal-body p-4 search-area">
                        <div class="popup-detail pr-0">
                            <div class="main-search">
                                <div class="header_search_toggle desktop-view">
                                    <form method="post" action="{{ route('product.search') }}">
                                        @csrf
                                        <div class="search-box">
                                            <input class="input-text"  type="search"
                                                   onfocus="search_result_show()"
                                                   onblur="search_result_hide()"
                                                   name="search" id="search" placeholder="Search entire store here..." />
                                            <button class="search-btn"></button>
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
</div>
<!-- Popup Links End -->

<!-- HEADER START -->
<header class="navbar navbar-custom container-full-sm" id="header">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <div class="top-link top-link-left">

                        <fieldset style="margin-top: 5px">
                            {{__('user.top_title')}}
                        </fieldset>
                    </div>
                </div>
                <div class="col-6">
                    <div class="top-right-link right-side">
                        <ul>
                            <li class="login-icon content">
                                <a class="content-link">
                                    <span class="content-icon"></span>
                                </a>
                                @auth
                                    <a href="{{route('user.logout')}}" class="d-lg-show">
                                        {{__('user.logout')}}
                                    </a>
                                @else
                                    <a href="{{route('login')}}" class="d-lg-show">
                                        {{__('user.login')}}
                                    </a>
                                @endauth
                                <div class="content-dropdown">
                                    <ul>
                                        <li class="login-icon">
                                            @auth
                                                <a href="{{route('user.logout')}}" title="Logout" class="d-lg-show">
                                                    {{__('user.logout')}}
                                                </a>
                                            @else
                                                <a href="{{route('login')}}" title="Login" class="d-lg-show">
                                                    {{__('user.login')}}
                                                </a>
                                            @endauth
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            @auth()
                                <li class="login-icon">
                                    <i class="las la-sign-in-alt"></i>
                                    <a href="{{route('dashboard')}}">
                                        Ahlan  {{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                                </li>
                            @endauth

                            <li class="track-icon">
                                <a href="{{route('order.tracking')}}" title="Track your order"><span></span> {{__('user.TrackYourOrder')}} </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-middle">
        <div class="container">
            <hr />
            <div class="row">
                <div class="col-xl-3 col-md-3 col-6 col-lgmd-20per order-md-1">
                    <div class="header-middle-left">
                        <div class="navbar-header float-none-sm">
                            <a class="navbar-brand page-scroll" href="{{url('/')}}">
                                <img alt="Stylexpo" src="{{asset($setting->logo)}}" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-3 col-6 col-lgmd-20per order-md-3">
                    <div class="right-side header-right-link">
                        <ul>
                            <li class="compare-icon">
                                <a href="{{route('compare')}}">
                                    <span>  <small class="cart-notification" id="count_compare">{{ count((array) session('product_compare')) }} </small>  </span>
                                </a>
                            </li>
                            <li class="wishlist-icon">
                                <a href="{{route('wishlist')}}">
                                    <span>  <small class="cart-notification" id="wishlistTotal"> </small>  </span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="#">  <span>  <small class="cart-notification" id="cartQty"> </small>  </span>  </a>
                                <div class="cart-dropdown header-link-dropdown">
                                    <div style="height: 245px;" data-simplebar="" data-simplebar-auto-hide="false">
                                        <ul class="cart-list link-dropdown-list" id="miniCart">

                                        </ul>
                                    </div>
                                    <p class="cart-sub-totle">
                                        <span class="pull-left">{{__('user.sub_total')}} </span>
                                        <span class="pull-right">
                                            <strong class="price-box" id="cartSubTotal">  </strong> EGP
                                        </span>
                                    </p>
                                    <div class="clearfix"></div>
                                    <div class="mt-20">
                                        <a href="{{route('mycart')}}" class="btn-color btn left-side">{{__('user.view_cart')}} </a>
                                        <a href="{{route('checkout')}}" class="btn-color btn right-side">{{__('user.checkout')}} </a>
                                    </div>
                                </div>
                            </li>
                            <li class="side-toggle">
                                <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button"><i class="fa fa-bars"></i></button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-6 col-md-6 col-12 col-lgmd-60per order-md-2">
                    <div class="header-right-part">
                        <div class="category-dropdown select-dropdown">
                            <fieldset>
                                <select id="search-category" class="option-drop" name="search-category">
                                    <option value="" /> {{__('user.categories')}}
                                    @foreach($categories as $category)
                                    <option value="20" />
                                        @if(App::getLocale() == 'ar')
                                            {{ $category->category_name_ar }}
                                        @else
                                            {{ $category->category_name_en }}
                                        @endif
                                    @endforeach
                                </select>
                            </fieldset>
                        </div>
                        <div class="main-search search-area">
                            <div class="header_search_toggle desktop-view">
                                <form method="post" action="{{ route('product.search') }}">
                                    @csrf
                                    <div class="search-box">
                                        <input class="input-text" type="search"
                                               onfocus="search_result_show()"
                                               onblur="search_result_hide()"
                                               class="form-control" name="search" id="search" placeholder="Search entire store here..." />
                                        <button class="search-btn" type="submit"></button>
                                    </div>
                                </form>
                                <div id="searchProducts"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row position-r">
                <div class="col-xl-2 col-lg-2 col-lgmd-20per position-s">
                    <div class="sidebar-menu-dropdown home">
                        <a class="btn-sidebar-menu-dropdown"><span></span> {{__('user.categories')}}  </a>
                        <div id="cat" class="cat-dropdown">
                            <div class="sidebar-contant">
                                <div id="menu" class="navbar-collapse collapse">
                                    <div class="top-right-link mobile right-side">
                                        <ul>
                                            <li class="login-icon content">
                                                <a class="content-link">
                                                    <span class="content-icon"></span>
                                                </a>
                                                <a href="{{route('login')}}" title="Login">Login </a> or
                                                <a href="{{route('login')}}" title="Register">Register </a>
                                                <div class="content-dropdown">
                                                    <ul>
                                                        <li class="login-icon"><a href="{{route('login')}}" title="Login"><i class="fa fa-user"></i> Login </a></li>
                                                        <li class="register-icon"><a href="{{route('login')}}" title="Register"><i class="fa fa-user-plus"></i> Register </a></li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="track-icon">
                                                <a href="{{route('order.tracking')}}" title="Track your order"><span></span> {{__('user.TrackYourOrder')}} </a>
                                            </li>
{{--                                            <li class="gift-icon">--}}
{{--                                                <a href="index.html" title="Gift card"><span></span> Gift card </a>--}}
{{--                                            </li>--}}
                                        </ul>
                                    </div>
                                    <ul class="nav navbar-nav ">
                                        @foreach($categories as $category)
                                        <li class="level sub-megamenu">
                                            <span class="opener plus"></span>
                                            <a href="#" class="page-scroll">
                                                <img src="{{asset($category->category_icon)}}" alt="" style="width: 8% !important">
                                                @if(App::getLocale() == 'ar')
                                                    {{ $category->category_name_ar }}
                                                @else
                                                    {{ $category->category_name_en }}
                                                @endif
                                            </a>
                                            <div class="megamenu mobile-sub-menu">
                                                <div class="megamenu-inner-top">
                                                    <ul class="sub-menu-level1 ">
                                                        @php
                                                            $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                                        @endphp
                                                        @foreach($subcategories as $subcategory)
                                                        <li class="level2">
                                                            <a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}">
                                                                <span>
                                                                @if(App::getLocale() == 'ar')
                                                                    {{ $subcategory->subcategory_name_ar }}
                                                                @else
                                                                    {{ $subcategory->subcategory_name_en }}
                                                                @endif
                                                                </span>
                                                            </a>

                                                            <ul class="sub-menu-level2 ">
                                                                @php
                                                                    $subsubcategories = App\Models\SubSubCategory::where('subcategory_id',$subcategory->id)->orderBy('subsubcategory_name_en','ASC')->get();
                                                                @endphp
                                                                @foreach($subsubcategories as $subsubcategory)
                                                                <li class="level3">
                                                                    <a href="{{ url('subsubcategory/product/'.$subsubcategory->id.'/'.$subsubcategory->subsubcategory_slug_en )}}">
                                                                        <span>
                                                                        @if(App::getLocale() == 'ar') {{ $subsubcategory->subsubcategory_name_ar }}
                                                                        @else {{ $subsubcategory->subsubcategory_name_en }}
                                                                        @endif
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                        </li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach

                                        <li class="level"><a href="#" class="page-scroll"><i class="fa fa-plus-square"></i>More Categories </a></li>
                                    </ul>
                                    <div class="header-top mobile">
                                        <div class="">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="top-link top-link-left select-dropdown ">

                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="top-link right-side">
                                                        <div class="help-num">Need Help? : 0100000000000 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-8 col-lgmd-60per">
                    <div class="bottom-inner">
                        <div class="position-r">
                            <div class="nav_sec position-r">
                                <div class="mobilemenu-title mobilemenu">
                                    <span>Menu </span>
                                    <i class="fa fa-bars pull-right"></i>
                                </div>
                                <div class="mobilemenu-content">
                                    <ul class="nav navbar-nav" id="menu-main">
                                        <li @if(Route::is('user.index')) class="active" @endif>
                                            <a href="{{url('/')}}"><span>{{__('user.Home')}} </span></a>
                                        </li>
                                        <li @if(Route::is('user.shop')) class="active" @endif>
                                            <a href="{{route('user.shop')}}"><span>{{__('user.shop')}} </span></a>
                                        </li>
                                        <li @if(Route::is('about')) class="active" @endif>
                                            <a href="{{route('about')}}"><span>{{__('user.about')}} </span></a>
                                        </li>
                                        <li @if(Route::is('home.blog')) class="active" @endif>
                                            <a href="{{route('home.blog')}}"><span>{{__('user.blog')}} </span></a>
                                        </li>
                                        <li @if(Route::is('contactUs')) class="active" @endif>
                                            <a href="{{route('contactUs')}}"><span>{{__('user.contactUs')}} </span></a>
                                        </li>
                                        <li @if(Route::is('user.daily_deals')) class="active" @endif>
                                            <a href="{{route('user.daily_deals')}}"><span>{{__('user.daily_deals')}} </span></a>
                                        </li>
                                        <li @if(Route::is('chatify')) class="active" @endif>
                                            <a target="_blank" href="{{route('chatify')}}"><span>{{__('user.helps')}} </span></a>
                                        </li>
                                        @auth
                                        <li class="level dropdown ">
                                            <span class="opener plus"></span>
                                            <a href="#" class="page-scroll"><span>{{__('user.account')}} </span></a>
                                            <div class="megamenu mobile-sub-menu">
                                                <div class="megamenu-inner-top">
                                                    <ul class="sub-menu-level1">
                                                        <li class="level2">
                                                            <ul class="sub-menu-level2 ">

{{--                                                                <li class="level3"><a href="account.html"><span>■ </span>Account </a></li>--}}
                                                                <li>
                                                                    <a class="account-header" href="{{route('dashboard')}}"><i class="las la-tachometer-alt"></i>
                                                                        {{__('user.dashboard')}}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="account-header" href="{{route('user.profile')}}" class="active"><i class="las la-user-circle"></i>
                                                                        {{__('user.account_details')}}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="account-header" href="{{route('user.changePassword')}}"><i class="las la-lock-open"></i>
                                                                        {{__('user.change_password')}}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="account-header" href="{{ route('my.orders') }}"><i class="las la-cart-arrow-down"></i>
                                                                        {{__('user.orders')}}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="account-header" href="{{ route('return.order.list') }}"><i class="las la-luggage-cart"></i>
                                                                        {{__('user.return_orders')}}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="account-header" href="{{ route('cancel.orders') }}"><i class="las la-shopping-cart"></i>
                                                                        {{__('user.cancel_orders')}}
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a class="account-header" href="{{route('user.logout')}}">
                                                                        <i class="las la-sign-out-alt"></i>
                                                                        {{__('user.logout')}}
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        @else
                                        @endauth
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-lgmd-20per">
                    <div class="right-side float-left-xs header-right-link">
                        <div class="right-side">
                            <div class="help-num ">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <a class="text-white" href="{{ route('lang.switch', $lang) }}">
                                            <span class= "flag-icon flag-icon-{{$language['flag-icon']}}"></span> {{$language['display']}}
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- HEADER END -->

<script>
    function search_result_hide(){
        $("#searchProducts").slideUp();
    }
    function search_result_show(){
        $("#searchProducts").slideDown();
    }
</script>
