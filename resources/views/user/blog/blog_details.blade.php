@extends('user.main_master')
@section('title')
    {{ $blogpost->post_title_en }}
@endsection
@section('content')
    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Single-blog </h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{url('/')}}">Home </a>/ </li>
                        <li><a href="{{route('home.blog')}}">{{ $blogpost->post_title_en }} </a> </li>
                        <li><span>Blog Details </span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Bread Crumb END -->
    @php
        $adminData = \App\Models\Admin::where('id', '1')->max('name');

    @endphp
    <!-- CONTAIN START -->
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">

                        <div class="col-12 mb-60">
                            <div class="blog-media mb-30">
                                <img src="{{ asset($blogpost->post_image) }}" alt="Stylexpo" />
                            </div>
                            <div class="blog-detail ">
                                <div class="post-info">
                                    <ul>
                                        <li><div class="post-date">{{ Carbon\Carbon::parse($blogpost->created_at)->diffForHumans()  }}  </div></li>
                                        <li><span>By </span><a href="#"> {{$adminData}} </a></li>
                                    </ul>
                                </div>
                                <h3>@if(session()->get('language') == 'arabic') {{ $blogpost->post_title_ar }} @else {{ $blogpost->post_title_en }} @endif  </h3>
                                <p>@if(session()->get('language') == 'arabic') {!!  $blogpost->post_details_ar  !!} @else {!!  $blogpost->post_details_en  !!} @endif</p>
                                <hr />
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-lg-3">
                    <div class="sidebar-block">
                        <div class="sidebar-box mb-40">
                            <form>
                                <div class="search-box">
                                    <input type="text" placeholder="Search entire store here..." class="input-text" />
                                    <button class="search-btn"></button>
                                </div>
                            </form>
                        </div>
                        <div class="sidebar-box listing-box mb-40">  <span class="opener plus"></span>
                            <div class="sidebar-title">
                                <h3><span>Categories </span></h3>
                            </div>
                            <div class="sidebar-contant">
                                <ul>
                                    @foreach($blogcategory as $category)
                                        <li><a href="{{ url('blog/category/post/'.$category->id) }}">
                                                @if(session()->get('language') == 'arabic')
                                                    {{ $category->blog_category_name_ar }} @else {{ $category->blog_category_name_en }} @endif
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTAINER END -->
@endsection
