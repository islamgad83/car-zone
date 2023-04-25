@extends('user.main_master')
@section('title', ' Wish List Page')
@section('content')

    <!-- Start of Main -->
    <main class="main wishlist-page">
        <!-- Start of Page Header -->
        <div class="page-header">
            <div class="container">
                <h1 class="page-title mb-0">Wishlist </h1>
            </div>
        </div>
        <!-- End of Page Header -->

        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav mb-10">
            <div class="container">
                <ul class="breadcrumb">
                    <li>
                        <a href="{{url('/')}}">
                            @if(session()->get('language') == 'arabic')
                                {{__('الرئيسية')}}
                            @else
                                {{__( 'Home')}}
                            @endif </a>
                    </li>
                    <span> / </span>
                    <li>
                        @if(session()->get('language') == 'arabic')
                            {{__('المفضل ')}}
                        @else
                            {{__( 'My Wish')}}
                        @endif
                    </li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->

        <!-- Start of PageContent -->
        <div class="page-content">
            <div class="container">

                @if($wishlist->count() > 0)

                    <div class="row gutter-lg mb-10 ">
                        <div class="wishlist-table col-lg-12 pr-lg-4 mb-6">
                            <div class="wishlist-title"><h4>
                                    @if(App::getLocale() == 'ar')
                                        {{__('المفضل لدي')}}
                                    @else
                                        {{__( 'My Wish List')}}
                                    @endif

                                </h4></div>
                            <div class="shopping-cart-inner">
                                <div class="table-responsive">
                                    <table class="table table-borderless shopping-cart-table">
                                        <thead>
                                        <tr>
                                            <th class="text-left">{{__('user.ProductImage')}}</th>
                                            <th class="text-left">
                                                {{__('user.ProductName')}}
                                            </th>
                                            <th class="text-left">
                                                {{__('user.ProductPrice')}}
                                            </th>

                                            <th class="text-left">{{__('user.Productstock')}}</th>
                                            <th class="text-left">
                                                <button class="btn-remove">
                                                    <i class="fa fa-times-circle"></i>
                                                </button>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody id="wishlist">

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                @else
                    <div class="panel-wrap"><div class="panel"><div class="panel-header">
                                <h4> @if(App::getLocale() == 'ar')
                                        {{__('المفضل لدي')}}
                                    @else
                                        {{__( 'My Wish List')}}
                                    @endif
                                </h4>
                            </div> <div class="panel-body">
                                <div class="empty-message">
                                    <h3>
                                        @if(App::getLocale() == 'ar')
                                            {{__('قائمة رغباتك فارغة.')}}
                                        @else
                                            {{__( ' Your wishlist is empty.')}}
                                        @endif

                                    </h3>
                                </div>
                            </div>
                            <div class="panel-footer"></div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!-- End of PageContent -->
    </main>
    <!-- End of Main -->
@endsection
