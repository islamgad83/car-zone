@extends('user.main_master')
@section('title', ' Blog Page')

@section('content')
    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Blog </h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{url('/')}}">Home </a>/ </li>
                        <li><span>Blog </span></li>
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
                <div class="col-xl-10 col-lg-9 col-lgmd-80per">
                    <div class="blog-listing">
                        <div class="row">
                            @foreach($blogpost as $blog)
                            <div class="col-xl-6 col-12">
                                <div class="blog-item">
                                    <div class="blog-media mb-30">
                                        <img src="{{ asset($blog->post_image) }}" alt="Stylexpo" />
                                        <div class="blog-effect"></div>
                                        <a href="{{ route('post.details',$blog->id) }}" title="Click For Read More" class="read">&nbsp; </a>
                                    </div>
                                    <div class="blog-detail">
                                        <div class="post-date">{{ Carbon\Carbon::parse($blog->created_at)->diffForHumans()  }}  </div>
                                        <div class="blog-title"><a href="{{ route('post.details',$blog->id) }}">@if(session()->get('language') == 'arabic') {{ $blog->post_title_ar }}
                                                @else {{ $blog->post_title_en }} @endif </a></div>
                                        <p>@if(session()->get('language') == 'arabic') {!! \Illuminate\Support\Str::limit($blog->post_details_ar, 200 )  !!}
                                            @else {!! \Illuminate\Support\Str::limit($blog->post_details_en, 200 )  !!} @endif </p>
                                        <hr />
                                        <div class="post-info mt-2">
                                            <ul>
                                                <li><span>By </span><a href="#"> {{$adminData}} </a></li>
                                                <li>
                                                    <a href="{{ route('post.details',$blog->id) }}">Read more
                                                        <i class="fa fa-angle-double-right"></i>
                                                    </a>
                                                </li>
                                            </ul>
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
                <div class="col-xl-2 col-lg-3 col-lgmd-20per">
                    <div class="sidebar-block">
                        <div class="sidebar-box mb-40">
                            <form>
                                <div class="search-box">
                                    <input type="text" placeholder="Search here..." class="input-text" />
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
                                    <li>
                                        <a href="{{ url('blog/category/post/'.$category->id) }}">
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
