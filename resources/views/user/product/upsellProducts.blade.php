<section class="pb-70">
    <div class="container">
        <div class="product-listing">
            <div class="row">
                <div class="col-12">
                    <div class="heading-part mb-40">
                        <h2 class="main_title heading"><span>
                             @if(session()->get('language') == 'arabic')
                                    منتجات ذات صله
                                @else
                                    Related Products
                                @endif
                            </span></h2>
                    </div>
                </div>
            </div>
            <div class="pro_cat">
                <div class="row">
                    <div class="owl-carousel pro-cat-slider">
                        @forelse($relatedProduct as $product)
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
<!-- CONTAINER END -->







