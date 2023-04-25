@extends('user.main_master')
@section('title')
    @if(App::getLocale() == 'ar'){{ $product->product_name_ar }}
    @else {{ $product->product_name_en }}
    @endif
@endsection

@section('content')

    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">Product Details </h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{url('/')}}">Home </a>/ </li>
                        <li><span>Product Details </span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Bread Crumb END -->

    <!-- CONTAIN START -->
    <section class="pt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-5 col-md-5 mb-xs-30">
                            <div class="fotorama" data-nav="thumbs" data-allowfullscreen="native">
                                @if ($muti_count >= 1)
                                    @foreach($multiImag as $img)
                                        <a href="#">
                                            <img src="{{ asset($img->photo_name ) }}" alt="car" />
                                        </a>
                                    @endforeach
                                @else
                                    <a href="#">
                                        <img src="{{ asset($product->product_thambnail ) }}" alt="car" />
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-7">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-detail-main">
                                        <div class="product-item-details">
                                            <h1 class="product-item-name" id="pname">
                                                @if(App::getLocale() == 'ar') {{ $product->product_name_ar }}
                                                @else {{ $product->product_name_en }}
                                                @endif
                                            </h1>
                                            {{-- <div class="rating-summary-block">
                                                <div title="53%" class="rating-result">  <span style="width:53%"></span>  </div>
                                            </div> --}}








                                            <div class="price-box">
                                                @if ($product->discount_price == NULL)
                                                    <span class="price">{{ $product->selling_price }} EGP </span>
                                                @else
                                                    <span class="price">{{ $product->discount_price}} EGP </span>
                                                    <del class="price old-price">{{ $product->selling_price}} </del>
                                                @endif
                                            </div>
                                            <div class="product-info-stock-sku">
                                                <div>
                                                    <label>Brand:  </label>
                                                    <span class="info-deta">
                                                         <img src="{{ asset($product->brand->brand_image) }}" alt="{{ $product->brand->brand_name_en }}" width="70" height="25" />
                                                    </span>
                                                </div>
                                                <div>
                                                    <label>Category:  </label>
                                                    <span class="info-deta">
                                                     @if(App::getLocale() == 'ar') {{ $product->category->category_name_ar }}
                                                        @else {{ $product->category->category_name_en }}
                                                        @endif
                                                    </span>
                                                </div>
                                                @if ( $product->subcategories == NULL)
                                                @else
                                                <div>
                                                    <label>Sub-Category:  </label>
                                                    <span class="info-deta">
                                                     @if(App::getLocale() == 'ar') {{ $product->subcategories->subcategory_name_ar }}
                                                        @else {{ $product->subcategories->subcategory_name_en }}
                                                        @endif
                                                    </span>
                                                </div>
                                                @endif

                                                @if ( $product->subsubcategories == NULL)
                                                @else
                                                <div>
                                                    <label> Sub-subCategory:  </label>
                                                    <span class="info-deta">
                                                         @if(App::getLocale() == 'ar') {{ $product->subsubcategories->subsubcategory_name_ar }}
                                                        @else {{ $product->subcategories->subsubcategory_name_en }}
                                                        @endif
                                                    </span>
                                                </div>
                                                @endif
                                                <div>
                                                    <label>Availability:  </label>
                                                    <span class="info-deta" style="color: #ff3030">In stock </span>
                                                </div>
                                                <div>
                                                    <label>SKU:  </label>
                                                    <span class="info-deta">{{$product->product_code}} </span>
                                                </div>
                                            </div>
                                            <p>
                                                @if(App::getLocale() == 'ar') {{ $product->short_descp_ar }}
                                                @else {{ $product->short_descp_en }} @endif
                                            </p>
                                            <div class="product-size select-arrow input-box select-dropdown mb-20 mt-30">
                                                @if($product->product_size_en == null)
                                                @else
                                                    <label>Size </label>
                                                <fieldset>

                                                        <select class="selectpicker form-control option-drop" id="size">
                                                            @foreach($product_size_en as $size)
                                                                <option selected="selected" value="{{ $size }}">{{ ucwords($size) }}</option>
                                                            @endforeach
                                                        </select>
                                                </fieldset>
                                                @endif
                                            </div>
                                            <div class="product-color select-arrow input-box select-dropdown mb-20">
                                                @if($product->product_color_en == null)
                                                @else
                                                    <label>Color </label>
                                                    <fieldset>
                                                        <select class="selectpicker form-control option-drop" id="color">
                                                            @foreach($product_color_en as $color)
                                                                <option selected="selected" value="{{ $color }}">{{ ucwords($color) }}</option>
                                                            @endforeach
                                                        </select>
                                                    </fieldset>
                                                @endif
                                            </div>
                                            <div class="mb-20">
                                                <div class="product-qty">
                                                    <label for="qty">Qty: </label>
                                                    <div class="custom-qty">
                                                        <button onclick="var result = document.getElementById('qty'); var qty = result.value;
                                                        if( !isNaN( qty ) && qty > 1 ) result.value--;return false;" class="reduced items" type="button">
                                                            <i class="fa fa-minus"></i>
                                                        </button>
                                                        <input type="text" class="input-text qty" title="Qty" value="1" maxlength="8" id="qty" name="qty" />
                                                        <button onclick="var result = document.getElementById('qty'); var qty = result.value;
                                                        if( !isNaN( qty )) result.value++;return false;" class="increase items" type="button">
                                                            <i class="fa fa-plus"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <input type="hidden" id="product_id" value="{{ $product->id }}">

                                                <div class="bottom-detail cart-button">
                                                    <ul>
                                                        <li class="pro-cart-icon">
                                                            <button type="button" id="{{ $product->id }}" class="btn-color" onclick="addToCartDetails(this.id)">
                                                                <span></span>Add to Cart </button>
                                                        </li>
                                                    </ul>0
                                                </div>
                                            </div>
                                            <div class="bottom-detail">
                                                <ul>
                                                    <li class="pro-wishlist-icon">
                                                        <a type="button" id="{{ $product->id }}" onclick="addToWishList(this.id)"><span></span>Wishlist </a>
                                                    </li>
                                                    <li class="pro-compare-icon"><a type="button" id="{{ $product->id }}" onclick="addToCompare(this.id)"><span></span>Compare </a></li>
                                                    <li class="pro-email-icon"><a href="#"><span></span>Email to Friends </a></li>

                                                </ul>
                                            </div>
                                            <div class="share-link">
                                                <label>Share This :  </label>
                                                <div class="social-link">
                                                    <ul class="social-icon">
                                                        <li><a class="facebook" title="Facebook" href="#"><i class="fa fa-facebook">  </i></a></li>
                                                        <li><a class="twitter" title="Twitter" href="#"><i class="fa fa-twitter">  </i></a></li>
                                                        <li><a class="linkedin" title="Linkedin" href="#"><i class="fa fa-linkedin">  </i></a></li>
                                                        <li><a class="rss" title="RSS" href="#"><i class="fa fa-rss">  </i></a></li>
                                                        <li><a class="pinterest" title="Pinterest" href="#"><i class="fa fa-pinterest">  </i></a></li>
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
                <div class="col-lg-3">
                    <div class="brand-logo-pro align-center mb-30">
                        <img src="{{asset('user/images/details-img-1.png')}}" alt="Stylexpo" />
                    </div>
                    <div class="sub-banner-block align-center">
                        <img src="{{asset('user/images/details-img-2.png')}}" alt="Stylexpo" />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ptb-70">
        <div class="container">
            <div class="product-detail-tab">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="tabs">
                            <ul class="nav nav-tabs">
                                <li><a class="tab-Description selected" title="Description">Description </a></li>
                                <li><a class="tab-Reviews" title="Reviews">Reviews </a></li>
                            </ul>
                        </div>
                        <div id="items">
                            <div class="tab_content">
                                <ul>
                                    <li>
                                        <div class="items-Description selected ">
                                            <div class="Description">
                                                <p>
                                                    @if(App::getLocale() == 'ar')
                                                        {!! $product->long_descp_ar !!}
                                                    @else {!! $product->long_descp_en !!}
                                                    @endif
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    @php
                                        $reviews = App\Models\Review::where('product_id',$product->id)->latest()->get();
                                    @endphp
                                    <li>

                                        <div class="items-Reviews">
                                            <div class="comments-area">
                                                <h4>Comments</h4>
                                                <ul class="comment-list mt-30">
                                                    @foreach($reviews as $item)
                                                    <li>
                                                        @if($item->status == 0)
                                                            <h4 class="sub-title">Not Found Reviews</h4>
                                                        @else
                                                        {{-- <div class="comment-user">
                                                            <img src="{{ (!empty($item->user->profile_photo_path))?
                                                            url('upload/user/profile/'.$item->user->profile_photo_path): url('upload/user/profile/no_image.jpg') }}"
                                                                                         alt="{{ $item->user->name }}" />
                                                        </div> --}}
                                                        <div class="comment-detail">
                                                            <div class="user-name">{{ $item->summary }} </div>
                                                            <div class="post-info">
                                                                <ul>
                                                                    <li>{{ Carbon\Carbon::parse($item->created_at)->diffForHumans() }} </li>
                                                                    <li><a href="#"><i class="fa fa-reply"></i>Reply </a></li>
                                                                </ul>
                                                            </div>
                                                            <p>{{ $item->comment }}</p>
                                                        </div>
                                                        @endif
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </div>


                                            <div class="main-form mt-30">
                                                <h4>Leave a comments </h4>
                                                @guest
                                                    <p> <b> For Add Product Review. You Need to login First <a style="color: #157ED2 !important;" href="{{ route('login') }}">Login Here..!</a> </b> </p>
                                                @else
                                                    <form role="form" class="review-form" method="post" action="{{ route('review.store') }}">
                                                        @csrf


                                                        <div class="row mt-30 ">
                                                            <div class="col-md-4 mb-30">
                                                                <input type="text" placeholder="Title for your review" name="summary" id="summary" required="" />
                                                          
                                                          <input type="hidden" id="custId" name="custId" value="{{3487}}">
                                                          <input type="hidden" id="product_id" name="product_id" value="{{ $product->id }}">

                                                            </div>
                                                            <div class="col-4 mb-30">
                                                                <textarea  cols="30" rows="3" placeholder="Write Your Review Here..." class="" name="comment" id="comment" required="">

                                                                    
                                                                </textarea>
                                                          
                                                            </div>
                                                            <div class="col-12 mb-30">
                                                                <button class="btn btn-color" name="submit" type="submit">Submit </button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                @endguest
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('user/product/upsellProducts')
@endsection
