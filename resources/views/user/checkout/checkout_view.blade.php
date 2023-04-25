@extends('user.main_master')
@section('title', 'My Checkout')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Start of Main -->
    <main class="main checkout">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav mb-2">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}">
                            {{__('user.Home')}}
                        </a></li>
                    <li class="active"><a href="{{route('checkout')}}">
                            {{__('user.checkout')}}
                        </a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->



        <!-- Start of PageContent -->
        <div class="page-content mt-10">
            <div class="container">
                <div class="steps-wrap" v-if="cartIsNotEmpty">
                    <div class="container">
                        <ul class="list-inline step-tabs">
                            <li class="step-tab ">
                                <a href="#" class="step-tab-link">
                        <span class="step-tab-text">
                            @if(App::getLocale() == 'ar')
                                عربة التسوق
                            @else
                                SHOPPING CART
                            @endif
                            <span class="bg-text">01</span>
                        </span>
                                </a>
                            </li>

                        <li class="step-tab active">
                            <span class="step-tab-text">
                                @if(App::getLocale() == 'ar')
                                        الدفع
                                    @else
                                        CHECKOUT
                                    @endif
                                <span class="bg-text">02</span>
                            </span>
                        </li>

                            <li class="step-tab ">
                <span class="step-tab-text">
                    @if(App::getLocale() == 'ar')
                        الطلب جاهز
                    @else
                        ORDER COMPLETE
                    @endif
                    <span class="bg-text">03</span>
                </span>
                        </li>
                    </ul>
                </div>
            </div>

                <div class="login-toggle">
                    @if(App::getLocale() == 'ar')
                        عميل؟
                    @else
                        customer?
                    @endif
                    <a href="#" class="show-login font-weight-bold text-uppercase text-dark"> {{__('user.login')}} </a>
                </div>
                <form class="form checkout-form" action="{{ route('checkout.store') }}" method="POST">
                    @csrf
                    <div class="row mb-12">
                        <div class="col-lg-6 pr-lg-4 mb-4">
                            <h3 class="title billing-title text-uppercase ls-10 pt-1 pb-3 mb-0">
                                @if(App::getLocale() == 'ar')
                                    تفاصيل الفاتورة
                                @else
                                    Billing Details
                                @endif
                            </h3>
                            <div class="row gutter-sm">
                                <div class="col-xs-6 mr-3">
                                    <div class="form-group">
                                        <label>{{__('user.name')}} * </label>
                                        <input type="text" id="shipping_name" value="{{ Auth::user()->name }}" class="form-control form-control-md" name="shipping_name" required="" />
                                    </div>
                                </div>
                                <div class="col-xs-6 mr-3">
                                    <div class="form-group">
                                        <label>{{__('user.email')}} * </label>
                                        <input type="email" class="form-control form-control-md" value="{{ Auth::user()->email }}" required="" name="shipping_email" />
                                    </div>
                                </div>
                            </div>
                            <div class="row gutter-sm">
                                <div class="col-xs-6 mr-3">
                                    <div class="form-group">
                                        <label>{{__('user.phone')}} * </label>
                                        <input type="number" class="form-control form-control-md" id="shipping_phone" placeholder="Phone" value="{{ Auth::user()->phone }}" required="" name="shipping_phone" />
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{__('user.post_code')}} </label>
                                        <input type="number" class="form-control form-control-md" name="post_code" id="post_code" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{__('user.country')}} * </label>
                                        <div class="select-box">
                                            <select name="division_id" class="form-control form-control-md" required>
                                                @foreach($divisions as $item)
                                                    <option value="{{ $item->id }}">{{ $item->division_name }}</option>
                                                @endforeach
                                            </select>
                                            @error('division_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{__('user.city')}} * </label>
                                        <div class="select-box">
                                            <select class="form-control form-control-md" name="district_id" required>
                                            </select>
                                            @error('district_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>{{__('user.state')}} * </label>
                                        <div class="select-box">
                                            <select class="form-control form-control-md" name="state_id">
                                            </select>
                                            @error('state_id')
                                            <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label>{{__('user.build')}} * </label>
                                <textarea class="form-control mb-0" id="order_notes" name="order_notes" cols="30" rows="4"
                                          placeholder="Apartment, suite, unit, etc."></textarea>
                            </div>


                            <div class="form-group mt-3">
                                <label for="order-notes">{{__('user.notes')}} </label>
                                <textarea class="form-control mb-0" id="order-notes" name="order-notes" cols="30" rows="4"
                                          laceholder="Notes about your order, e.g special notes for delivery"></textarea>
                            </div>
                        </div>

                        <div class="col-lg-3 mb-4">
                            <div class="checkout-right">
                                <div class="payment-method">
                                    <h4 class="title">{{__('user.payment_method')}}</h4>

                                    <div class="payment-method-form">
                                        <div class="form-group">
                                            <div class="form-radio">
                                                <input type="radio" checked="checked" id="delivery" name="payment_method" value="cash">
                                                <label class="span-payment">Cash On Delivery</label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" checked="checked" id="credit" name="payment_method" value="stripe">
                                                <label class="span-payment">Credit</label>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @php $total = 0 @endphp
                        <div class="col-lg-3 mb-4 sticky-sidebar-wrapper">
                            <div class="order-summary-wrapper sticky-sidebar">
                                <div class="order-summary">
                                    <aside class="order-summary-wrap">
                                        <div class="order-summary">
                                            <div class="order-summary-top">
                                                <h3 class="section-title">
                                                    @if(App::getLocale() == 'ar')
                                                        ملخص الطلب
                                                    @else
                                                        Order Summary
                                                    @endif
                                                    </h3>

                                                <ul class="list-inline cart-item">
                                                    @foreach($carts as $item)

                                                    <li>
                                                        <label>
                                                            <a class="price-amount" style="padding: 0 25px 0 0;"> {{$item->name}}</a>
                                                        </label>
                                                        <span class="product-quantity">{{ $item->qty }} X</span>
                                                        <span class="price-amount"> EGP&nbsp;{{$item->price}}</span>
                                                    </li>
                                                        <li>
                                                            <label>
                                                                <span class="price-amount" style="padding: 0 25px 0 0;">Color: {{$item->options->color}}</span>
                                                            </label>
                                                            <span class="price-amount"> Size:&nbsp;{{$item->options->size}}</span>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>

                                            <div class="order-summary-middle">
                                                <ul class="list-inline order-summary-list">
                                                    @if(Session::has('coupon'))
                                                        <li>
                                                            <label>{{__('user.sub_total')}}</label>
                                                            <span class="price-amount">EGP&nbsp;{{ $cartTotal }}</span>
                                                        </li>

                                                        <li v-if="hasCoupon" v-cloak>
                                                            <label>
                                                                Coupon {{ session()->get('coupon')['coupon_name'] }}
                                                                ( {{ session()->get('coupon')['coupon_discount'] }} % )

                                                            </label>
                                                            <span class="price-amount">EGP&nbsp;{{ session()->get('coupon')['discount_amount'] }}</span>

                                                        </li>
                                                        <li>
                                                            <label>{{__('user.total')}}</label>
                                                            <span class="price-amount">EGP&nbsp;{{ session()->get('coupon')['total_amount'] }}</span>
                                                        </li>
                                                    @else
                                                        <li>
                                                            <label>{{__('user.sub_total')}}</label>
                                                            <span class="price-amount">EGP&nbsp;{{ $cartTotal }}</span>
                                                        </li>
                                                        <li>
                                                            <label>{{__('user.total')}}</label>
                                                            <span class="price-amount">EGP&nbsp;{{ $cartTotal }}</span>
                                                        </li>
                                                    @endif
                                                </ul>
                                            </div>
                                            <div class="order-summary-bottom">
                                                <button
                                                    type="submit"
                                                    class="btn btn-primary btn-place-order"
                                                    id="button-confirm">
                                                    @if(App::getLocale() == 'ar')
                                                        مكان الامر
                                                    @else
                                                        PLACE ORDER
                                                    @endif
                                                </button>
                                            </div>
                                        </div>
                                    </aside>

                                </div>
                            </div>
                        </div>
                    </div>
                </form>


            </div>
        </div>
        <!-- End of PageContent -->
    </main>
    <!-- End of Main -->


    <script type="text/javascript">
        $(document).ready(function() {
            $('select[name="division_id"]').on('change', function(){
                var division_id = $(this).val();
                if(division_id) {
                    $.ajax({
                        url: "{{  url('/district-get/ajax') }}/"+division_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            $('select[name="state_id"]').empty();
                            var d =$('select[name="district_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="district_id"]').append('<option value="'+ value.id +'">' + value.district_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });
            $('select[name="district_id"]').on('change', function(){
                var district_id = $(this).val();
                if(district_id) {
                    $.ajax({
                        url: "{{  url('/state-get/ajax') }}/"+district_id,
                        type:"GET",
                        dataType:"json",
                        success:function(data) {
                            var d =$('select[name="state_id"]').empty();
                            $.each(data, function(key, value){
                                $('select[name="state_id"]').append('<option value="'+ value.id +'">' + value.state_name + '</option>');
                            });
                        },
                    });
                } else {
                    alert('danger');
                }
            });

        });
    </script>
@endsection
