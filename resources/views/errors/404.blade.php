@extends('user.main_master')
@section('content')
    <!-- Start of Main -->
    <main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav">
            <div class="container">
                <ul class="breadcrumb bb-no">
                    <li><a href="{{url('/')}}">Home </a></li>
                    <li>Error 404 </li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of Page Content -->
        <div class="page-content error-404">
            <div class="container">
                <div class="banner">
                    <figure>
                        <img src="{{asset('user/images/404.png')}}" alt="Error 404" width="820" height="460" />
                    </figure>
                    <div class="banner-content text-center">
                        <h2 class="banner-title">
                            <span class="text-secondary">Oops!!! </span> Something Went Wrong
                        </h2>
                        <p class="text-light">There may be an in the URL entered, the page you are for may no longer </p>
                        <a href="{{url('/')}}" class="btn btn-dark btn-rounded btn-icon-right">Go Back Home <i class="w-icon-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Page Content -->
    </main>
    <!-- End of Main -->

@endsection
