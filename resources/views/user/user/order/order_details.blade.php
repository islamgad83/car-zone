@extends('user.main_master')
@section('title','User Order Details')
@section('content')
    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">{{__('user.account')}} </h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{url('/')}}">{{__('user.Home')}} </a>/ </li>
                        <li><span>My Order Details </span></li>
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
                                        <h2 class="heading m-0">My Orders Details </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-xs-30">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="ecommerce-address billing-address pr-lg-8">
                                                <h4 class="title title-underline ls-25 font-weight-bold">Order Details</h4>
                                                <address class="mb-4">
                                                    <table class="address-table">
                                                        <tbody>
                                                        <tr>
                                                            <th>Order Invoice: </th>
                                                            <td>{{ $order->invoice_no }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th>Date Added: </th>
                                                            <td>{{ $order->order_date }} </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Payment Method: </th>
                                                            <td>{{ $order->payment_method }} </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Transaction ID: </th>
                                                            <td>{{ $order->transaction_id }} </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Order Total: </th>
                                                            <td>{{ $order->amount }} Egp </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Order: </th>
                                                            <td class="badge badge-pill badge-warning"  style=" font-weight: bold">{{ $order->status }} </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </address>
                                                {{--                                    <a href="#" class="btn btn-link btn-underline btn-icon-right text-primary">Edit--}}
                                                {{--                                        your address <i class="w-icon-long-arrow-right"></i></a>--}}
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="ecommerce-address shipping-address pr-lg-8">
                                                <h4 class="title title-underline ls-25 font-weight-bold">Payment & Shipping Address </h4>
                                                <address class="mb-4">
                                                    <table class="address-table">
                                                        <tbody>
                                                        <tr>
                                                            <th>Name: </th>
                                                            <td>{{ $order->user->name }} </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Phone: </th>
                                                            <td>{{ $order->user->phone }} </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Shipping Name: </th>
                                                            <td>{{ $order->name }} </td>
                                                        </tr>
                                                        <tr>
                                                            <th> Shipping Phone: </th>
                                                            <td>{{ $order->phone }} </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Shipping Email: </th>
                                                            <td>{{ $order->email }} </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Country: </th>
                                                            <td>{{ $order->state->state_name}}, {{ $order->district->district_name }}, {{ $order->division->division_name }} </td>
                                                        </tr>
                                                        <tr>
                                                            <th>Postcode: </th>
                                                            <td>
                                                                @if ($order->division->post_code == NULL)
                                                                    ......
                                                                @endif
                                                                {{ $order->division->post_code }}

                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </address>
                                            </div>

                                        </div>
                                    </div>
                                </div>


                                <div class="col-12 mb-xs-30">
                                    <div class="cart-item-table commun-table">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                <tr>
                                                    <td class="text-left">Product Image</td>
                                                    <td class="text-left">Product Name</td>
                                                    <td class="text-left">Product Code</td>
                                                    <td class="text-left">Color</td>
                                                    <td class="text-left">Price</td>
                                                    <td class="text-right">Quantity</td>
                                                    <td class="text-right">Total</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($orderItem as $item)
                                                    <tr>
                                                        <td class="text-left"><img src="{{ asset($item->product->product_thambnail) }}" height="50px;" width="50px;"> </td>
                                                        <td class="text-left"> {{ $item->product->product_name_en }}</td>
                                                        <td class="text-left">{{ $item->product->product_code }}</td>
                                                        <td class="text-left">{{ $item->color }}</td>
                                                        <td class="text-left">{{ $item->size }}</td>
                                                        <td class="text-right"> {{ $item->qty }}X</td>
                                                        <td class="text-right">   {{ $item->price * $item->qty}} EGP</td>
                                                    </tr>
                                                @endforeach                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                            @if($order->status !== "delivered")

                            @else
                                @php
                                    $order = App\Models\Order::where('id',$order->id)->where('return_reason','=',NULL)->first();
                                @endphp
                                @if($order)
                                    <form action="{{ route('return.order',$order->id) }}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <label for="label"> Order Return Reason:</label>
                                            <textarea name="return_reason" id="" class="form-control" cols="30" rows="05">Return Reason</textarea>

                                        </div>
                                        <button type="submit" class="btn btn-danger">Order Return</button>
                                    </form>
                                @else
                                    <span class="badge badge-pill badge-warning" style="background: red">You Have send return request for this product</span>
                                @endif
                            @endif


                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- CONTAINER END -->



@endsection
