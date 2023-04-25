@extends('user.main_master')

@section('title')
    Tag Wise Product
@endsection
@section('content')
    <!-- breadcrumb-section start -->
    <nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-15">
                        <h2 class="title text-dark text-capitalize">Tags</h2>
                    </div>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class='breadcrumb-item'>Tag</li>

                    </ol>
                </div>
            </div>
        </div>
    </nav>
    <!-- breadcrumb-section end -->
    <!-- product tab start -->
    <div class="product-tab bg-white pt-80 pb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 mb-30">
                    <div class="grid-nav-wraper bg-lighten2 mb-30">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <nav class="shop-grid-nav">
                                    <ul class="nav nav-pills align-items-center" id="pills-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                               href="#pills-home" role="tab" aria-controls="pills-home"
                                               aria-selected="true">
                                                <i class="fa fa-th"></i>

                                            </a>
                                        </li>
                                        <li class="nav-item mr-0">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                               href="#pills-profile" role="tab" aria-controls="pills-profile"
                                               aria-selected="false"><i class="fa fa-list"></i></a>
                                        </li>
                                        <li> <span class="total-products text-capitalize">There are 13 products.</span></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="col-12 col-md-6 position-relative">
                                <div class="shop-grid-button d-flex align-items-center">
                                    <span class="sort-by">Sort by:</span>
                                    <button class="btn-dropdown rounded d-flex justify-content-between" type="button"
                                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                        Relevance <span class="ion-android-arrow-dropdown"></span>
                                    </button>
                                    <div class="dropdown-menu shop-grid-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Relevance</a>
                                        <a class="dropdown-item" href="#"> Name, A to Z</a>
                                        <a class="dropdown-item" href="#"> Name, Z to A</a>
                                        <a class="dropdown-item" href="#"> Price, low to high</a>
                                        <a class="dropdown-item" href="#"> Price, high to low</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product-tab-nav end -->
                    <div class="tab-content" id="pills-tabContent">
                        <!-- first tab-pane -->
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                             aria-labelledby="pills-home-tab">
                            <div class="row grid-view theme1">
                                @foreach($products as $product)
                                    <div class="col-sm-6 col-lg-4 col-xl-3 mb-30">
                                        <div class="card product-card">
                                            <div class="card-body">
                                                <div class="product-thumbnail position-relative">
                                                    @php
                                                        $amount = $product->selling_price - $product->discount_price;
                                                        $discount = ($amount/$product->selling_price) * 100;
                                                    @endphp
                                                    @if ($product->discount_price == NULL)
                                                        <span class="badge badge-danger top-right">New</span>
                                                    @else
                                                        <div class="badge badge-success top-right"><span>{{ round($discount) }}%</span></div>
                                                    @endif
                                                    <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                        <img  src="{{ asset($product->product_thambnail) }}" alt=""></a>
                                                    <!-- product links -->
                                                    <ul class="product-links d-flex justify-content-center">
                                                        <li>
                                                            <a type="button" id="{{ $product->id }}" onclick="addToWishList(this.id)">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                  title="add to wishlist" class="icon-heart"> </span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#compare">
                                                        <span data-toggle="tooltip" data-placement="bottom"
                                                              title="Add to compare" class="icon-shuffle"></span>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#" data-toggle="modal" data-target="#quick-view">
                                                        <span data-toggle="tooltip" data-placement="bottom"
                                                              title="Quick view" class="icon-magnifier"></span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    <!-- product links end-->
                                                </div>
                                                <div class="product-desc py-0">
                                                    <h3 class="title"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                            @if(session()->get('language') == 'arabic') {{ $product->product_name_ar }} @else {{ $product->product_name_en }} @endif</a></h3>
                                                    <div class="star-rating">
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star"></span>
                                                        <span class="ion-ios-star de-selected"></span>
                                                    </div>
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        @if ($product->discount_price == NULL)
                                                            <h6 class="product-price">{{ $product->selling_price }} Egy</h6>
                                                        @else
                                                            <h6 class="product-price"> <span class="price"> {{ $product->discount_price }} Egy</span>
                                                                <span class="price-before-discount text-decoration-line-through"> {{ $product->selling_price }}</span>
                                                            </h6>
                                                        @endif
                                                        <button class="pro-btn" type="button" title="Add Cart" data-toggle="modal" data-target="#addToCart" id="{{ $product->id }}"
                                                                onclick="productView(this.id)"><i
                                                                class="icon-basket"></i></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- product-list End -->
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- second tab-pane -->
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="row grid-view-list theme1">
                                <div class="col-12 mb-30">
                                    <div class="card product-card">
                                        @foreach($products as $product)
                                            <div class="card-body">
                                                <div class="media flex-column flex-md-row">
                                                    <div class="product-thumbnail position-relative  product-thumbnail-search">
                                                        @php
                                                            $amount = $product->selling_price - $product->discount_price;
                                                            $discount = ($amount/$product->selling_price) * 100;
                                                        @endphp
                                                        @if ($product->discount_price == NULL)
                                                            <span class="badge badge-danger top-right">New</span>
                                                        @else
                                                            <div class="badge badge-success top-right"><span>{{ round($discount) }}%</span></div>
                                                        @endif
                                                        <a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                            <img class="first-img"  src="{{ asset($product->product_thambnail) }}" alt="">
                                                        </a>
                                                        <!-- product links -->
                                                        <ul class="product-links d-flex justify-content-center">
                                                            <li>
                                                                <a type="button" id="{{ $product->id }}" onclick="addToWishList(this.id)">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                  title="add to wishlist" class="icon-heart"> </span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#compare">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                  title="Add to compare" class="icon-shuffle"></span>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" data-toggle="modal" data-target="#quick-view">
                                                            <span data-toggle="tooltip" data-placement="bottom"
                                                                  title="Quick view" class="icon-magnifier"></span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <!-- product links end-->
                                                    </div>
                                                    <div class="media-body pl-30">
                                                        <div class="product-desc py-0">
                                                            <h3 class="title"><a href="{{ url('product/details/'.$product->id.'/'.$product->product_slug_en ) }}">
                                                                    @if(session()->get('language') == 'arabic') {{ $product->product_name_ar }} @else {{ $product->product_name_en }} @endif</a></h3>
                                                            <div class="star-rating mb-10">
                                                                <span class="ion-ios-star"></span>
                                                                <span class="ion-ios-star"></span>
                                                                <span class="ion-ios-star"></span>
                                                                <span class="ion-ios-star"></span>
                                                                <span class="ion-ios-star de-selected"></span>
                                                            </div>
                                                            @if ($product->discount_price == NULL)
                                                                <h6 class="product-price">{{ $product->selling_price }} Egy</h6>
                                                            @else
                                                                <h6 class="product-price"> <span class="price"> {{ $product->discount_price }} Egy</span>
                                                                    <span class="price-before-discount text-decoration-line-through"> {{ $product->selling_price }}</span>
                                                                </h6>
                                                            @endif
                                                        </div>
                                                        <ul class="product-list-des">
                                                            <li>
                                                                Block out the haters with the fresh adidas® Originals Kaval
                                                                Windbreaker
                                                                Jacket.
                                                            </li>
                                                            <li>
                                                                Part of the Kaval Collection.
                                                            </li>
                                                            <li>
                                                                Regular fit is eased, but not sloppy, and perfect for any
                                                                activity.
                                                            </li>
                                                            <li>
                                                                Plain-woven jacket specifically constructed for freedom of
                                                                movement.
                                                            </li>
                                                        </ul>
                                                        <div class="availability-list mb-30">
                                                            <p>Availability: <span>{{ $product->product_qty }} In Stock</span></p>
                                                        </div>
                                                        <button class="btn theme-btn--dark1 btn--xl rounded-5"
                                                                type="button" title="Add Cart" data-toggle="modal" data-target="#addToCart" id="{{ $product->id }}"
                                                                onclick="productView(this.id)"> <i class="fa fa-shopping-cart"></i>
                                                            Add to cart
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    <!-- product-list End -->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mb-30 order-lg-first">
                    <li class="left-sidebar theme1">
                        <!-- search-filter start -->
                        <div class="search-filter">
                            <div class="check-box-inner pt-0">
                                <h6 class="title">
                                    Categories
                                </h6>
                            </div>

                        </div>

                        @foreach($categories as $category)

                            <ul id="offcanvas-menu2" class="blog-ctry-menu">
                                <li><a href="javascript:void(0)"> @if(session()->get('language') == 'arabic') {{ $category->category_name_ar }} @else {{ $category->category_name_en }} @endif</a>

                                    @php
                                        $subcategories = App\Models\SubCategory::where('category_id',$category->id)->orderBy('subcategory_name_en','ASC')->get();
                                    @endphp
                                    @foreach($subcategories as $subcategory)
                                        <ul class="category-sub-menu">
                                            <li><a href="{{ url('subcategory/product/'.$subcategory->id.'/'.$subcategory->subcategory_slug_en ) }}">
                                                    @if(session()->get('language') == 'arabic') {{ $subcategory->subcategory_name_ar }} @else {{ $subcategory->subcategory_name_en }} @endif</a></li>

                                        </ul>
                                    @endforeach
                                </li>
                            </ul>
                        @endforeach
                        <div class="search-filter">
                            <form action="#">
                                <div class="check-box-inner mt-10">
                                    <h4 class="title">Filter By</h4>
                                    <h4 class="sub-title pt-10">Categories</h4>
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="20820">
                                        <label for="20820">Digital Cameras <span>(13)</span></label>
                                    </div>
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="20821">
                                        <label for="20821">Camcorders <span>(13)</span></label>
                                    </div>
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="20822">
                                        <label for="20822">Camera Drones<span>(13)</span></label>
                                    </div>
                                </div>
                                <!-- check-box-inner -->
                                <div class="check-box-inner mt-10">
                                    <h4 class="sub-title">Price</h4>
                                    <div class="price-filter mt-10">
                                        <div class="price-slider-amount">
                                            <input type="text" id="amount" name="price" readonly
                                                   placeholder="Add Your Price" />
                                        </div>
                                        <div id="slider-range"></div>
                                    </div>
                                </div>
                                <div class="check-box-inner mt-10">
                                    <h4 class="sub-title">Size</h4>
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="test9">
                                        <label for="test9">s <span>(2)</span></label>
                                    </div>
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="test10">
                                        <label for="test10">m <span>(2)</span></label>
                                    </div>
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="test11">
                                        <label for="test11">l <span>(2)</span></label>
                                    </div>
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="test12">
                                        <label for="test12">xl <span>(2)</span></label>
                                    </div>
                                </div>
                                <!-- check-box-inner -->
                                <div class="check-box-inner mt-10">
                                    <h4 class="sub-title">color</h4>
                                    <div class="filter-check-box color-grey">
                                        <input type="checkbox" id="20826">
                                        <label for="20826">grey <span>(4)</span></label>
                                    </div>
                                    <div class="filter-check-box color-white">
                                        <input type="checkbox" id="20827">
                                        <label for="20827">white <span>(3)</span></label>
                                    </div>
                                    <div class="filter-check-box color-black">
                                        <input type="checkbox" id="20828">
                                        <label for="20828">black <span>(6)</span></label>
                                    </div>
                                    <div class="filter-check-box color-camel">
                                        <input type="checkbox" id="20829">
                                        <label for="20829">camel <span>(2)</span></label>
                                    </div>
                                </div>
                                <!-- check-box-inner -->
                                <div class="check-box-inner mt-10">
                                    <h4 class="sub-title">Brand</h4>
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="20824">
                                        <label for="20824">Graphic Corner<span>(5)</span></label>
                                    </div>
                                    <div class="filter-check-box">
                                        <input type="checkbox" id="20825">
                                        <label for="20825">Studio Design<span>(8)</span></label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- search-filter end -->
                    @include('user.common.product_tags')
                    <!--second banner start-->
                        <div class="banner hover-animation position-relative overflow-hidden">
                            <a href="#" class="d-block">
                                <img src="{{asset('user/images/banner/2.jpg')}}" alt="img">
                            </a>
                        </div>
                        <!--second banner end-->
                    </li>
                </div>
            </div>
        </div>
    </div>
    <!-- product tab end -->
@endsection
