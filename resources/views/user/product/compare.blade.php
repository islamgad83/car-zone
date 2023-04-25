@extends('user.main_master')
@section('title', ' Compare Page')
@section('content')
    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Product Comparison </h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{url('/')}}">Home </a>/ </li>
                        <li><span>Product Comparison </span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Bread Crumb END -->


    @if(session('product_compare'))
    <!-- CONTAIN START -->
    <section class="ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-xs-30">
                    <div class="cart-item-table commun-table">
                        <div class="table-responsive">
                            <table class="compare-info">
                                <tbody>
                                <tr>
                                    <td>{{__('user.ProductImage')}}</td>
                                    @foreach($products as $product)

                                    <td class="image">
                                        <a href="{{route('compare-remove',$product->id)}}"></a>
                                        <img src="{{asset($product->product_thambnail)}}" alt="Stylexpo" title="" class="img-thumbnail" />
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>{{__('user.ProductPrice')}}  </td>
                                    @foreach($products as $product)
                                    <td class="name">
                                        @if ($product->discount_price == NULL)
                                            <ins class="new-price">{{ $product->selling_price }} EGP</ins>

                                        @else
                                            <ins class="new-price">{{ $product->discount_price}}</ins>
                                            <del class="old-price">{{ $product->selling_price}} EGP</del>
                                        @endif
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>
                                        @if(App::getLocale() == 'ar')
                                            الاسم
                                        @else
                                            Name
                                        @endif
                                    </td>
                                    @foreach($products as $product)
                                    <td>
                                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                            @if(App::getLocale() == 'ar')
                                                {!! \Illuminate\Support\Str::limit($product->product_name_ar, 50 )  !!}
                                            @else
                                                {!! \Illuminate\Support\Str::limit($product->product_name_en, 50 )  !!}
                                            @endif
                                        </a>
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>
                                        @if(App::getLocale() == 'ar')
                                            العلامة التجارية
                                        @else
                                            Brand
                                        @endif </td>
                                    @foreach($products as $product)
                                    <td>
                                        @if(App::getLocale() == 'ar')
                                            {{$product->brand->brand_name_ar}}
                                        @else
                                            {{$product->brand->brand_name_en}}
                                        @endif
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>{{__('user.Productstock')}} </td>
                                    @foreach($products as $product)
                                    <td class="out_stock availability">In Stock </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>{{__('user.ProductDescription')}} </td>
                                    @foreach($products as $product)
                                    <td class="out_stock availability">
                                        @if(App::getLocale() == 'ar')
                                            {!! \Illuminate\Support\Str::limit($product->short_descp_ar, 60 )  !!}
                                            {{--                                                                    {{ $product->product_name_ar }} --}}
                                        @else
                                            {!! \Illuminate\Support\Str::limit($product->short_descp_en, 60 )  !!}
                                            {{--                                                                    {{ $product->product_name_en }}--}}
                                        @endif
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td>
                                        @if(App::getLocale() == 'ar')
                                            التقييمات والمراجعات
                                        @else
                                            Ratings &amp; Reviews
                                        @endif
                                    </td>
                                    @foreach($products as $product)
                                    <td class="rating">
                                        <div class="rating-summary-block">
                                            <div title="53%" class="rating-result">
                                                <span style="width:53%"></span>
                                            </div>
                                        </div>
                                         on 2 reviews.
                                    </td>
                                    @endforeach
                                </tr>

                                <tr>
                                    <td>{{__('user.categories')}} </td>
                                    @foreach($products as $product)
                                    <td>
                                        @if(App::getLocale() == 'ar')
                                            {{$product->category->category_name_ar}}
                                        @else
                                            {{$product->category->category_name_en}}
                                        @endif
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    <td> @if(App::getLocale() == 'ar')
                                            كود التخزين التعريفي
                                        @else
                                            SKU
                                        @endif
                                    </td>
                                    @foreach($products as $product)
                                    <td>{{$product->product_code}}</td>
                                    @endforeach
                                </tr>
                                </tbody>
                                <tr>
                                    <td></td>
                                    @foreach($products as $product)
                                    <td>
                                        <a  href="{{route('compare-remove',$product->id)}}" class="btn btn-color" type="button" title="Remove">Remove </a>
                                    </td>
                                    @endforeach
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTAINER END -->
    @else
        <div class="page-content mb-10 pb-2">
            <div class="container">
                <section class="element-section text-center mt-10 mb-10 pt-5 pb-2" id="section-elements">
                    <h3 class="empty-message">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" preserveAspectRatio="xMidYMid meet"><g>
                                <path d="M250,26.72c-74.8,0-135.42,60.62-135.42,135.42c0,33.9,12.44,64.84,33.01,88.56c16.47,19.06,38.19,33.49,62.92,40.97
                                    c12.47,3.85,25.76,5.88,39.49,5.88c13.73,0,27.02-2.04,39.49-5.88c24.72-7.48,46.45-21.91,62.92-40.97
                                    c20.58-23.72,33.01-54.66,33.01-88.56C385.41,87.34,324.79,26.72,250,26.72z M308.73,202.41c1.52,1.52,1.52,4,0,5.51l-12.92,12.92
                                    c-1.55,1.55-4.03,1.55-5.55,0L250,180.57l-40.27,40.27c-1.52,1.55-4,1.55-5.51,0l-12.95-12.92c-1.52-1.52-1.52-4,0-5.51
                                    l40.27-40.27l-40.27-40.27c-1.52-1.52-1.52-4,0-5.55l12.95-12.92c1.52-1.52,4-1.52,5.51,0L250,143.67l40.27-40.27
                                    c1.52-1.52,4-1.52,5.55,0l12.92,12.92c1.52,1.55,1.52,4.03,0,5.55l-40.27,40.27L308.73,202.41z"></path>
                                <path d="M68.59,491.26H5.68V209.21c0-1.1,0.89-1.99,1.99-1.99H66.6c1.1,0,1.99,0.89,1.99,1.99V491.26z"></path>
                                <path d="M147.6,291.47c18.25,14.47,39.64,25.17,62.92,30.9v168.88H147.6V291.47z"></path>
                                <path d="M289.49,322.38c23.28-5.74,44.67-16.43,62.92-30.9v199.78h-62.92V322.38z"></path>
                                <path d="M494.32,491.26h-62.92V10.75c0-1.11,0.9-2.01,2.01-2.01h58.89c1.11,0,2.01,0.9,2.01,2.01V491.26z"></path>
                            </g>
                        </svg>
                    </h3>
                    <p class="text-default section-desc mx-auto font-weight-bold">No product in the compare list.</p>
                </section>
            </div>
        </div>
    @endif
@endsection
