@extends('user.main_master')
@section('title',' Stripe Payment Page')
<style>
    /**
 * The CSS shown here will not be introduced in the Quickstart guide, but shows
 * how you can use CSS to style your Element's container.
 */
    .StripeElement {
        box-sizing: border-box;
        height: 40px;
        width: 50%;
        padding: 10px 12px;
        border: 1px solid transparent;
        border-radius: 4px;
        background-color: white;
        box-shadow: 0 1px 3px 0 #e6ebf1;
        -webkit-transition: box-shadow 150ms ease;
        transition: box-shadow 150ms ease;
    }
    .StripeElement--focus {
        box-shadow: 0 1px 3px 0 #cfd7df;
    }
    .StripeElement--invalid {
        border-color: #fa755a;
    }
    .StripeElement--webkit-autofill {
        background-color: #fefde5 !important;}
</style>
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>

    <!-- Main Container  -->
    <div class="main-container container">
        <nav class="breadcrumb-nav mb-10 pb-1">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}">{{__('user.Home')}} </a></li>
                    <li><a href="#">
                            @if(App::getLocale() == 'ar')
                                {{__('الإئتمان')}}
                            @else
                                {{__( 'Strip')}}
                            @endif</a></li>
                </ul>
            </div>
        </nav>

        <div class="row">
            <!--Middle Part Start-->
            <div id="content">
                <div class="steps-wrap" v-if="cartIsNotEmpty">
                    <div class="container">
                        <ul class="list-inline step-tabs">
                            <li class="step-tab ">
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
                                    <span class="step-tab-text">
                                          @if(App::getLocale() == 'ar')
                                            الطلب جاهز
                                        @else
                                            ORDER COMPLETE
                                        @endif
                                    </span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="so-onepagecheckout ">
                    <div class="col-right col-sm-12">
                        <div class="row">
                            <div class="col-lg-4 mb-4 sticky-sidebar-wrapper">
                                <div class="order-summary-wrapper sticky-sidebar">
                                    <div class="order-summary">
                                        <aside class="order-summary-wrap">
                                            <div class="order-summary">
                                                <div class="order-summary-top">
                                                    <h3 class="section-title">
                                                        @if(App::getLocale() == 'ar')
                                                            طريقة التوصيل
                                                        @else
                                                            Delivery Method
                                                        @endif

                                                    </h3>
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
                                            </div>
                                        </aside>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8  checkout-payment-methods">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-credit-card"></i> {{__('user.payment_method')}}</h4>
                                </div>
                                <div class="panel-body">
                                    <form action="{{ route('stripe.order') }}" method="post" id="payment-form">
                                        @csrf

                                        <div class="form-row">
                                            <label for="card-element" style="margin-left: 10px; padding: 15px!important">
                                                <input type="hidden" name="name" value="{{ $data['shipping_name'] }}">
                                                <input type="hidden" name="email" value="{{ $data['shipping_email'] }}">
                                                <input type="hidden" name="phone" value="{{ $data['shipping_phone'] }}">
                                                <input type="hidden" name="post_code" value="{{ $data['post_code'] }}">
                                                <input type="hidden" name="division_id" value="{{ $data['division_id'] }}">
                                                <input type="hidden" name="district_id" value="{{ $data['district_id'] }}">
                                                <input type="hidden" name="state_id" value="{{ $data['state_id'] }}">
                                                <input type="hidden" name="notes" value="{{ $data['notes'] }}">
                                                Credit or debit card
                                            </label>

                                            <div id="card-element">
                                                <!-- A Stripe Element will be inserted here. -->
                                            </div>
                                            <!-- Used to display form errors. -->
                                            <div id="card-errors" role="alert"></div>
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
                        </div>
                    </div>
                </div>
            </div>
            <!--Middle Part End -->
        </div>
    </div>



    <script type="text/javascript">
        // Create a Stripe client.
        var stripe = Stripe('pk_test_51KLYCGGPPpAoeBrfUV801CKI08bg5ZUsEDdEKByshK3r2cIVuX2lK9TtRBPsbFxhr1n8zyk0XW3o8QUKTrsb1teN00BlQJfb0J');
        // Create an instance of Elements.
        var elements = stripe.elements();
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
            base: {
                color: '#32325d',
                fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                    color: '#aab7c4'
                }
            },
            invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
            }
        };
        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
        // Handle real-time validation errors from the card Element.
        card.on('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });
        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();
            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the user if there was an errors.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });
        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server
            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);
            // Submit the form
            form.submit();
        }
    </script>

@endsection
