@extends('user.main_master')
@section('title','User Order View')
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
                                <li class="active">  <a href="{{ route('my.orders') }}">{{__('user.orders')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li>  <a href="{{ route('return.order.list') }}">{{__('user.return_orders')}} <i class="fa fa-angle-right"></i>  </a>  </li>
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
                                        <h2 class="heading m-0">My Orders </h2>
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
                                                    <th class="order-id">No. </th>
                                                    <th class="order-date">Date </th>
                                                    <th class="order-status">Total </th>
                                                    <th class="order-total">Payment </th>
                                                    <th class="order-total">Invoice </th>
                                                    <th class="order-total">Order </th>
                                                    <th class="order-actions">Actions </th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orders as $order)
                                                <tr>
                                                    <td>
                                                        #{{ $order->id }}
                                                    </td>
                                                    <td>
                                                            {{ $order->order_date }}
                                                    </td>
                                                    <td class="order-status">{{ $order->amount }} EGP</td>
                                                    <td class="order-status">{{ $order->payment_method }}</td>
                                                    <td class="order-status">{{ $order->invoice_no }}</td>


                                                    <td class="order-status">
                                                        <label for="">
                                                            @if($order->status == 'pending')
                                                                <span class="badge badge-pill badge-warning" style="background: #800080; padding: 7px;color: #fff;"> Pending </span>
                                                            @elseif($order->status == 'confirm')
                                                                <span class="badge badge-pill badge-warning" style="background: #0000FF; padding: 7px;color: #fff;"> Confirm </span>

                                                            @elseif($order->status == 'processing')
                                                                <span class="badge badge-pill badge-warning" style="background: #FFA500; padding: 7px;color: #fff;"> Processing </span>

                                                            @elseif($order->status == 'picked')
                                                                <span class="badge badge-pill badge-warning" style="background: #808000; padding: 7px;color: #fff;"> Picked </span>

                                                            @elseif($order->status == 'shipped')
                                                                <span class="badge badge-pill badge-warning" style="background: #808080; padding: 7px;color: #fff;"> Shipped </span>

                                                            @elseif($order->status == 'delivered')
                                                                <span class="badge badge-pill badge-warning" style="background: #008000; padding: 7px;color: #fff;"> Delivered </span>
                                                                @if($order->return_order == 1)
                                                                    <span class="badge badge-pill badge-warning" style="background:red; padding: 7px;color: #fff;">Return Requested </span>

                                                                @endif
                                                            @else
                                                                <span class="badge badge-pill badge-warning" style="background: #FF0000; padding: 7px;color: #fff;"> Cancel </span>

                                                            @endif
                                                        </label>
                                                    </td>
                                                    <td>
                                                        <div class="print-btn text-center mb-2">
                                                            <a href="{{ url('user/order_details/'.$order->id ) }}" class="btn btn-color" type="button">View </a>
                                                        </div>
                                                        <div class="print-btn text-center">
                                                            <a target="_blank" href="{{ url('user/invoice_download/'.$order->id ) }}" class="btn btn-color" type="button">Print </a>
                                                        </div>
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
