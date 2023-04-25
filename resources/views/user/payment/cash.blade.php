@extends('user.main_master')
@section('title')
    Cash On Delivery
@endsection
@section('content')
    <!-- Start of Main -->
    <main class="main">
        <!-- Start of Breadcrumb -->
        <nav class="breadcrumb-nav mb-10 pb-1">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}">{{__('user.Home')}} </a></li>
                    <li><a href="#">Cash Method </a></li>
                </ul>
            </div>
        </nav>
        <!-- End of Breadcrumb -->


        <div class="page-content mb-10 pb-2">
            <div class="container">
                <div class="steps-wrap" v-if="cartIsNotEmpty">
                    <div class="container">
                        <ul class="list-inline step-tabs">
                            <li class="step-tab">
                                    <span class="step-tab-text">
                                        @if(App::getLocale() == 'ar')
                                            عربة التسوق
                                        @else
                                            SHOPPING CART
                                        @endif
                                        <span class="bg-text">01</span>
                                    </span>
                            </li>
                            <li class="step-tab ">
                                    <span class="step-tab-text">
                                         @if(App::getLocale() == 'ar')
                                            الدفع
                                        @else
                                            CHECKOUT
                                        @endif
                                        <span class="bg-text">02</span>
                                    </span></li> <li class="step-tab active">
                                    <span class="step-tab-text ">
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


                <section class="default-section mb-7">
                    <div class="row title-wrapper">
                        <div class="col-lg-12 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar" style="margin: auto">
                                    <div class="order-summary">
                                        <aside class="order-summary-wrap">
                                            <div class="order-summary">
                                                <div class="order-summary-top">
                                                    <h3 class="section-title">  @if(App::getLocale() == 'ar')
                                                            طريقة التوصيل
                                                        @else
                                                            Delivery Method
                                                        @endif</h3>
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
                                                    <form action="{{ route('cash.order') }}" method="post" id="payment-form">
                                                        @csrf
                                                        <div class="form-row">
                                                            <label for="card-element">

                                                                <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
                                                                <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
                                                                <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
                                                                <input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
                                                                <input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
                                                                <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
                                                                <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
                                                                <input type="hidden" name="notes" value="{{ $data['notes'] }}">
                                                            </label>
                                                        </div>
                                                        <br>
                                                        <button
                                                            type="submit"
                                                            class="btn btn-primary btn-place-order"
                                                            id="button-confirm">
                                                            PLACE ORDER
                                                        </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                    </div>
                </section>
            </div>
        </div>
    </main>
@endsection
