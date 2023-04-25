@extends('user.main_master')
@section('content')

    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">{{__('user.account')}} </h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{url('/')}}">{{__('user.Home')}} </a>/ </li>
                        <li><span>My order </span></li>
                    </ul>
                </div>
            </section>
        </div>
    </div>
    <!-- Bread Crumb END -->
    <!-- CONTAIN START -->
    <section class="checkout-section ptb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="account-sidebar account-tab mb-sm-30">
                        <div class="dark-bg tab-title-bg">
                            <div class="heading-part">
                                <div class="sub-title"><span></span> {{__('user.account')}} </div>
                            </div>
                        </div>
                        <div class="account-tab-inner">
                            <ul class="account-tab-stap3">
                                <li><a href="{{route('dashboard')}}">{{__('user.dashboard')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li><a href="{{route('user.profile')}}"> {{__('user.account_details')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li>  <a href="{{route('user.changePassword')}}"> {{__('user.change_password')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li>  <a href="{{ route('my.orders') }}">{{__('user.orders')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li class="active">  <a href="{{ route('return.order.list') }}">{{__('user.return_orders')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li>  <a href="{{ route('cancel.orders') }}">{{__('user.cancel_orders')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li>  <a href="{{ route('user.logout') }}">{{__('user.logout')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div id="data-step3" class="account-content" data-temp="tabdata">
                        <div id="form-print" class="admission-form-wrapper">
                            <div class="row">
                                <div class="col-12">
                                    <div class="heading-part heading-bg mb-30">
                                        <h2 class="heading m-0">Return Orders </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-xs-30">
                                    <div class="cart-item-table commun-table">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td class="text-left">Date</td>
                                                    <td class="text-left">Total</td>
                                                    <td class="text-left">Payment</td>
                                                    <td class="text-left">Invoice</td>
                                                    <td class="text-left">Order Reason </td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orders as $order)
                                                    <tr>
                                                        <td class="text-left">{{ $order->order_date }} </td>
                                                        <td class="text-left"> {{ $order->amount }} EGP</td>
                                                        <td class="text-left">{{ $order->invoice_no }}</td>
                                                        <td class="text-left">{{ $order->return_reason }}</td>
                                                        <td class="text-left">
                                                            <label>
                                                                <span class="badge badge-pill badge-warning" style="background: #418DB9; padding: 2px;margin-bottom: 5px; color: #fff;">{{ $order->status }} </span>
                                                                <br>
                                                                @if($order->return_order == 0)
                                                                    <span class="badge badge-pill badge-warning" style="background: #418DB9; padding: 2px;margin-bottom: 5px; color: #fff;"> No Return Request </span>
                                                                @elseif($order->return_order == 1)
                                                                    <span class="badge badge-pill badge-warning" style="background: #800080; padding: 2px;margin-bottom: 5px; color: #fff;"> Pending </span>
                                                                    <br>
                                                                    <span class="badge badge-pill badge-warning" style="background:red; padding: 2px;margin-bottom: 5px; color: #fff;">Return Requested </span>

                                                                @elseif($order->return_order == 2)
                                                                    <span class="badge badge-pill badge-warning" style="background: #008000; padding: 2px;margin-bottom: 5px; color: #fff;">Success </span>
                                                                @endif
                                                            </label>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- CONTAINER END -->

@endsection
