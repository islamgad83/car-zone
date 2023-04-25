@php
    $seo = App\Models\Seo::find(1);
@endphp

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta name="description" content="{{ $seo->meta_description }}">
    <meta name="author" content="{{ $seo->meta_author }}">
    <meta name="keywords" content="{{ $seo->meta_keyword }}">
    <meta name="robots" content="all">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <!-- /// Google Analytics Code // -->
    <script>
        {{ $seo->google_analytics }}
    </script>
    <link rel="shortcut icon" href="{{asset('user/images/favicon.png')}}" />

    <!-- Favicon -->
    <link rel="preload" href="{{asset('user/vendor/fontawesome-free/webfonts/fa-regular-400.woff2')}}" as="font" type="font/woff2" crossorigin="anonymous" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/vendor/fontawesome-free/css/line-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/bootstrap.css')}}" />
    @if(App::getLocale() == 'ar')
        <link rel="stylesheet" type="text/css" href="{{asset('user/css/bootstrap-rtl.css')}}" />>
    @else
    @endif
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/chat.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/simplebar.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/fotorama.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/custom.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/main.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('user/css/responsive.css')}}" />
    <link rel="apple-touch-icon" href="{{asset('user/images/apple-touch-icon.png')}}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('user/images/apple-touch-icon-72x72.png')}}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('user/images/apple-touch-icon-114x114.png')}}" />

    <!-- Default CSS -->
    @if(App::getLocale() == 'ar')
        <link rel="stylesheet" type="text/css" href="{{asset('user/css/custom-rtl.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{asset('user/css/responsive-rtl.css')}}" />
    @else
    @endif

    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" type="text/css" rel="stylesheet" />

</head>

<body class="homepage">

    {{-- <div class="se-pre-con"></div> --}}

    <!-- newslatter-popup Start -->
{{--    <div id="onload-popup" class="modal fade subscribe-popup" tabindex="-1" role="dialog" aria-hidden="true">--}}
{{--        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">--}}
{{--            <div class="modal-content">--}}
{{--                <div class="modal-body">--}}
{{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
{{--                        <span aria-hidden="true">&times; </span>--}}
{{--                    </button>--}}
{{--                    <div class="newsletter-popup">--}}
{{--                        <div class="nl-popup-main">--}}
{{--                            <div class="nl-popup-inner">--}}
{{--                                <div class="newsletter-inner">--}}
{{--                                    <div class="row no-gutters">--}}
{{--                                        <div class="col-md-5 d-none d-md-block">--}}
{{--                                            <div class="newslatter-popup-img h-100">--}}
{{--                                                <img src="images/newspopup.jpg" alt="Medizee" />--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-md-7 col-12">--}}
{{--                                            <div class="d-flex align-items-center h-100">--}}
{{--                                                <div class="newslatter-popup-detail text-center w-100">--}}
{{--                                                    <h2 class="main_title">Subscribe Emails </h2>--}}
{{--                                                    <div class="newsletter-subtitle">Get Latest News & </div>--}}
{{--                                                    <p class="text-muted">Subscribe to the Stylexpo newsletter to receive timely from your favorite products. </p>--}}
{{--                                                    <form class="main-form">--}}
{{--                                                        <input type="email" placeholder="Email Here..." />--}}
{{--                                                        <button class="btn btn-color" title="Subscribe">Subscribe </button>--}}
{{--                                                    </form>--}}
{{--                                                    <div class="check-box mt-20">--}}
{{--                                                       <span>--}}
{{--                                                         <input id="no_show" type="checkbox" name="remember_me" class="checkbox" />--}}
{{--                                                         <label class="text-muted" for="no_show">Don't show this popup ! </label>--}}
{{--                                                       </span>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- newslatter-popup End -->

    <div class="main">

        <!-- ============================================== HEADER ============================================== -->
        @include('user.includes.header')

        <!-- ============================================== HEADER : END ============================================== -->
        @yield('content')

        <!-- ============================================================= FOOTER ============================================================= -->
        @include('user.includes.footer')
        <!-- ============================================================= FOOTER : END============================================================= -->
    </div>



<!--***********************
    all js files
 ***********************-->
    <script src="{{asset('user/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('user/js/jquery-1.12.3.min.js')}}"></script>
    <script src="{{asset('user/ajax/libs/tether/1.4.0/js/tether.min.js')}}"></script>
    <script src="{{asset('user/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('user/js/jquery.downCount.js')}}"></script>
    <script src="{{asset('user/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('user/js/fotorama.js')}}"></script>
    <script src="{{asset('user/js/simplebar.min.js')}}"></script>
    <script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('user/js/custom.js')}}"></script>


    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @yield('scripts')

<script>
    @if (Session::has('message'))
    var type = "{{Session::get('alert-type', 'info')}}";
    switch(type)
    {
        case 'info':
            toastr.info('{{Session::get('message')}}');
            break;
        case 'success':
            toastr.success('{{Session::get('message')}}');
            break;
        case 'warning':
            toastr.warning('{{Session::get('message')}}');
            break;
        case 'error':
            toastr.error('{{Session::get('message')}}');
            break;
    }
    @endif
</script>

<script type="text/javascript">
    $.ajaxSetup({
        headers:{
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
    // Start Product View with Modal
    function productView(id){
        // alert(id)
        $.ajax({
            type: 'GET',
            url: '/product/view/modal/'+id,
            dataType:'json',
            success:function(data){
                // console.log(data);
                $('#pname').text(data.product.product_name_en);
                $('#pdesc').text(data.product.short_descp_en);
                $('#price').text(data.product.selling_price);
                $('#pcode').text(data.product.product_code);
                $('#pcategory').text(data.product.category.category_name_en);
                $('#psubcategory').text(data.product.subcategories.subcategory_name_en);
                $('#pbrand').attr('src', data.product.brand.brand_image);
                $('#pimage').attr('src',data.product.product_thambnail);
                $('#product_id').val(id);
                $('#qty').val(1);
                // Product Price
                if (data.product.discount_price == null) {
                    $('#pprice').text('');
                    $('#oldprice').text('');
                    $('#pprice').text(data.product.selling_price);
                }else{
                    $('#pprice').text(data.product.discount_price);
                    $('#oldprice').text(data.product.selling_price);
                } // end product price
                // Start Stock option
                if (data.product.product_qty > 0) {
                    $('#aviable').text('');
                    $('#stockout').text('');
                    $('#aviable').text('aviable');
                }else{
                    $('#aviable').text('');
                    $('#stockout').text('');
                    $('#stockout').text('stockout');
                } // end Stock Option

                // Color
                $('select[name="color"]').empty();
                $.each(data.product.product_color_en,function(key,value){
                    $('select[name="color"]').append('<option value=" '+value+' ">'+value+' </option>')
                    if (data.product.product_color_en == "") {
                        $('#sizeArea').hide();
                    }else{
                        $('#sizeArea').show();
                    }
                }) // end color

                $('select[name="size"]').empty();
                $.each(data.product.product_size_en,function(key,value){
                    $('select[name="size"]').append('<option value=" '+value+' ">'+value+' </option>')
                    if (data.product.product_size_en == "") {
                        $('#sizeArea').hide();
                    }else{
                        $('#sizeArea').show();
                    }
                }) // end size
            }
        });
    }

    // Start Add To Cart Product
    function addToCart($id){
        var product_name = $('#pname').text();
        // var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var quantity = 1;
        $.ajax({
            type: "POST",
            dataType: 'json',
            data:{
                color:color, size:size, quantity:quantity, product_name:product_name
            },
            url: "/cart/data/store/"+ $id,
            success:function(data)
            {
                // console.log(data);

                miniCart();
                // Start Message
                const Toast =        Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message
            }
        })
    }
    // End Add To Cart Product
    //
    // Start Add To Cart Product
    function addToCartDetails($id){
        var product_name = $('#pname').text();
        // var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var quantity = $('#qty').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data:{
                color:color, size:size, quantity:quantity, product_name:product_name
            },
            url: "/cart/data/store/"+ $id,
            success:function(data)
            {
                miniCart();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message
            }
        })
    }
    // End Add To Cart Product

    // Start Add To Cart Product
    function addToCartFormQuickView(){
        var product_name = $('#pname').text();
        var id = $('#product_id').val();
        var color = $('#color option:selected').text();
        var size = $('#size option:selected').text();
        var quantity = $('#qty').val();
        $.ajax({
            type: "POST",
            dataType: 'json',
            data:{
                color:color, size:size, quantity:quantity, product_name:product_name
            },
            url: "/cart/data-store/"+ id,
            success:function(data)
            {
                miniCart();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message
            }
        })
    }
    // End Add To Cart Product

</script>

<script type="text/javascript">
    function miniCart() {
        $.ajax({
            type: 'GET',
            url: '/product/mini/cart',
            dataType:'json',
            success:function(response){
                $('strong[id="cartSubTotal"]').text(response.cartTotal);
                $('#cartQty').text(response.cartQty);
                var miniCart = "";
                $.each(response.carts, function(key,value){
                    console.log(value);
                    miniCart += `
                     <li>
                        <a type="submit" id="${value.rowId}" onclick="miniCartRemove(this.id)" class="close-cart">
                            <i class="fa fa-times-circle"></i>
                        </a>
                        <div class="media">  <a class="pull-left">  <img alt="Stylexpo" src="/${value.options.image}" /></a>
                            <div class="media-body">  <span><a href="#">${value.name} </a></span>
                                <div class="product-qty">
                                    <span class="cart-price">Qty: ${value.qty} * ${value.price} EGP</span>
                                </div>
                            </div>
                        </div>
                    </li>
                `
                });

                $('#miniCart').html(miniCart);
                $('#miniCart2').html(miniCart);
            }
        })
    }
    miniCart();

    // mini cart remove Start
    function miniCartRemove(rowId){
        $.ajax({
            type: 'GET',
            url: '/minicart/product-remove/'+rowId,
            dataType:'json',
            success:function(data){
                miniCart();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    icon: 'success',
                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        title: data.error
                    })
                }
                // End Message
            }
        });
    }
    //  end mini cart remove
</script>

{{--<!--  /// Start Add loadwishlist Page  //// -->--}}
<script type="text/javascript">
    function loadWishlist()
    {
        $.ajax({
            type: "GET",
            dataType: 'json',
            url: "/wishlist/load-wishlist-data",
            success: function (data)
            {
                $('small[id="wishlistTotal"]').text(data.wishlistTotal);
            }
        });
    }
    loadWishlist();
</script>
<!--  /// Start Add Wishlist Page  //// -->
<script type="text/javascript">
    function addToWishList(product_id)
    {
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/add-to-wishlist/" + product_id,
            success: function (data)
            {
                loadWishlist();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                });
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    });
                }
                else
                {
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error,
                    });
                }
                // End Message
            }
        });
    }

    function addToCompare(product_id)
    {
        $.ajax({
            type: "POST",
            dataType: 'json',
            url: "/add-to-compare/" + product_id,
            success: function (data)
            {
                $('#count_compare').text(data[1]);
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                });
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: 'Successfully Added On Your Compare'
                    });
                }
                else
                {
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: 'This Product has Already on Your Compare',
                    });
                }
                // End Message
            }
        });
    }
</script>
<!--  /// End Add Wishlist Page  ////   -->


    <!-- /// Load Wishlist Data  -->
<script type="text/javascript">

    function wishlist(){
        $.ajax({
            type: 'GET',
            url: '/user/get-wishlist-product',
            dataType:'json',
            success:function(response){
                console.log(response);
                var rows = ""
                $.each(response, function(key,value){

                    rows += `
                         <tr>
                                <td>
                                    <div class="product-image">
                                        <img src="/${value.product.product_thambnail}" alt="product image" class="">
                                    </div>
                                </td>

                                <td>
                                    <a href="#" class="" id="pname">${value.product.product_name_en}</a>
                                </td>
                                <td>
                                    <label>Unit Price:</label>
                                    <span class="product-price">EGP&nbsp;
                                                            ${value.product.discount_price == null ? `${value.product.selling_price}` :
                                                        `${value.product.discount_price}`
                                                    }
                                                            </span>
                                </td>

                                <td>
                                    <label>Line Total:</label>
                                    <span class="badge badge-success">In Stock</span>
                                </td>
                                    <td>
                                    <input type="hidden" id="product_id" value="${value.id}">
                                    <button class="btn-remove" type="submit" id="${value.id}" onclick="wishlistRemove(this.id)"><i class="fa fa-times-circle"></i></button>

                                </td>
                            </tr>


                        `
                });

                $('#wishlist').html(rows);
            }
        })
    }
    wishlist();

    ///  Wishlist remove Start
    function wishlistRemove(id){
        $.ajax({
            type: 'GET',
            url: '/user/wishlist-remove/'+id,
            dataType:'json',
            success:function(data){
                // window.location.reload();
                wishlist();
                loadWishlist();

                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message
            }
        });
    }
    // End Wishlist remove
</script>


<!-- /// Load My Cart /// -->
<script type="text/javascript">
    function cart(){
        $.ajax({
            type: 'GET',
            url: '/user/get-cart-product',
            dataType:'json',
            success:function(response){
                var rows = ""
                $.each(response.carts, function(key,value){
                    rows += `
                     <tr>
                        <td>
                            <div class="product-image">
                                <img src="${value.options.image}" alt="product image" class="">
                            </div>
                        </td>
                        <td>
                            <a href="#" class="product-name">${value.name}</a>
                            <ul class="list-inline product-options"></ul>
                        </td>
                        <td>
                            <label>Unit Price:</label>
                            <span class="product-price">EGP&nbsp;${value.price}</span>
                        </td>
                        <td>
                            <label>Quantity:</label>
                            <div class="number-picker">
                                <div class="input-group-quantity">
                                    <button type="button" data-type="minus" class="btn btn-number btn-minus bord" id="${value.rowId}" onclick="cartDecrement(this.id)" style="border: none"><i class="las la-angle-left"></i></button>
                                    <input type="number" min="1" max="100000" class="form-control input-number input-quantity" value="${value.qty}">
                                    <button type="button" data-type="plus" class="btn btn-number btn-plus" id="${value.rowId}" onclick="cartIncrement(this.id)" style="border: none"><i class="las la-angle-right"></i></button>
                                </div>
                            </div>
                        </td>
                        <td>
                            <label>Line Total:</label>
                            <span class="product-price">EGP&nbsp;${value.subtotal}</span>
                        </td>
                        <td>
                            <button class="btn-remove" type="submit" id="${value.rowId}" onclick="cartRemove(this.id)"><i class="fa fa-times-circle"></i></button>
                        </td>
                    </tr>
                    `
                });

                $('#cartPage').html(rows);
            }
        })
    }
    cart();
    ///  Cart remove Start
    function cartRemove(id){
        $.ajax({
            type: 'GET',
            url: '/user/cart-remove/'+id,
            dataType:'json',
            success:function(data){
                cart();
                miniCart();
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message
            }
        });
    }
    // End Cart remove

    // -------- CART INCREMENT --------//
    function cartIncrement(rowId){
        $.ajax({
            type:'GET',
            url: "/cart-increment/"+rowId,
            dataType:'json',
            success:function(data){
                couponCalculation();
                cart();
                miniCart();
            }
        });
    }
    // ---------- END CART INCREMENT -----///
    function cartDecrement(rowId){
        $.ajax({
            type:'GET',
            url: "/cart-decrement/"+rowId,
            dataType:'json',
            success:function(data){
                couponCalculation();
                cart();
                miniCart();
            }
        });
    }
    // ---------- END CART Decrement -----///
</script>
<!-- //End Load My cart / -->
<!-- /// Load My Cart /// -->
<script type="text/javascript">

    // -------- CART INCREMENT --------//
    function cartIncrement(rowId){
        $.ajax({
            type:'GET',
            url: "/cart-increment/"+rowId,
            dataType:'json',
            success:function(data){
                couponCalculation();
                cart();
                miniCart();
            }
        });
    }
    // ---------- END CART INCREMENT -----///
    function cartDecrement(rowId){
        $.ajax({
            type:'GET',
            url: "/cart-decrement/"+rowId,
            dataType:'json',
            success:function(data){
                couponCalculation();
                cart();
                miniCart();
            }
        });
    }
    // ---------- END CART Decrement -----///
</script>
<!-- //End Load My cart / -->



<!--  //////////////// =========== Coupon Apply Start ================= ////  -->
<script type="text/javascript">
    function applyCoupon(){
        var coupon_name = $('#coupon_name').val();
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {coupon_name:coupon_name},
            url: "{{ url('/coupon-apply') }}",
            success:function(data){
                couponCalculation();
                if (data.validity == true) {
                    $('#couponField').hide();
                }
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    });
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    });
                }
                // End Message
            }
        })
    }
    function couponCalculation(){
        $.ajax({
            type:'GET',
            url: "{{ url('/coupon-calculation') }}",
            dataType: 'json',
            success:function(data){
                if (data.total) {
                    $('#couponCalField').html(
                        `
                         <ul class="list-inline order-summary-list">
                            <li>
                                <label>Subtotal</label>
                                <span class="price-amount">EGP&nbsp; ${data.total}</span>
                            </li>  <!---->
                        </ul> <!---->
                        <div class="order-summary-total">
                            <label>Total</label>
                            <span class="total-price">EGP&nbsp; ${data.total}</span>
                        </div>
                    `
                    )
                }else{
                    $('#couponCalField').html(
                        `

                         <ul class="list-inline order-summary-list">
                            <li>
                                <label>Subtotal</label>
                                <span class="price-amount">EGP&nbsp; ${data.subtotal}</span>
                            </li>
                             <li>
                                <label>Coupon (${data.coupon_name})
                            <button type="submit" class="btn btn-close1 remove-from-cart" onclick="couponRemove()"><i class="fa fa-times"></i>  </button> </label>
                            </label>
                                <span class="price-amount">EGP&nbsp; ${data.discount_amount}</span>
                            </li>

                        </ul>

                        <div class="order-summary-total">
                            <label>Total</label>
                            <span class="total-price">EGP&nbsp; ${data.total_amount}</span>
                        </div>
                    `
                    )
                }
            }
        });
    }
    couponCalculation();
</script>

<!--  //////////////// =========== End Coupon Apply Start ================= ////  -->


<!--  //////////////// =========== Start Coupon Remove================= ////  -->

<script type="text/javascript">

    function couponRemove(){
        $.ajax({
            type:'GET',
            url: "{{ url('/coupon-remove') }}",
            dataType: 'json',
            success:function(data){
                couponCalculation();
                $('#couponField').show();
                $('#coupon_name').val('');
                // Start Message
                const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',

                    showConfirmButton: false,
                    timer: 3000
                })
                if ($.isEmptyObject(data.error)) {
                    Toast.fire({
                        type: 'success',
                        icon: 'success',
                        title: data.success
                    })
                }else{
                    Toast.fire({
                        type: 'error',
                        icon: 'error',
                        title: data.error
                    })
                }
                // End Message
            }
        });
    }
</script>


<!--  //////////////// =========== End Coupon Remove================= ////  -->

<script>
    var botmanWidget = {
        aboutText: 'Medicazone Team',
        introMessage: "✋ Hi! I'm Islam From medicazone Team"
    };
</script>

<script src='{{asset('user/js/widget.js')}}'></script>
</body>

</html>

