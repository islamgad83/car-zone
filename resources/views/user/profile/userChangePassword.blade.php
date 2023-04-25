@extends('user.main_master')
@section('title','User Change Password')
@section('content')

    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">{{__('user.change_password')}} </h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{url('/')}}">{{__('user.Home')}} </a>/ </li>
                        <li><span>{{__('user.change_password')}} </span></li>
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
                                <div class="sub-title"><span></span> {{__('user.change_password')}} </div>
                            </div>
                        </div>
                        <div class="account-tab-inner">
                            <ul class="account-tab-stap3">
                                <li><a href="{{route('dashboard')}}">{{__('user.dashboard')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li><a href="{{route('user.profile')}}"> {{__('user.account_details')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li class="active">  <a href="{{route('user.changePassword')}}"> {{__('user.change_password')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li>  <a href="{{ route('my.orders') }}">{{__('user.orders')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li>  <a href="{{ route('return.order.list') }}">{{__('user.return_orders')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li>  <a href="{{ route('cancel.orders') }}">{{__('user.cancel_orders')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                                <li>  <a href="{{ route('user.logout') }}">{{__('user.logout')}} <i class="fa fa-angle-right"></i>  </a>  </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="account-content">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part heading-bg mb-30">
                                    <h2 class="heading m-0">{{__('user.change_password')}} </h2>
                                </div>
                            </div>
                        </div>

                        <div class="m-0">
                            <form class="main-form full" method="POST" action="{{route('user.updatePassword')}}">
                                @csrf
                                <div class="mb-20">
                                    <div class="row">
                                        <div class="col-12 mb-20">
                                            <div class="heading-part">
                                                <h3 class="sub-heading">Password change </h3>
                                            </div>
                                            <hr />
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box">
                                                <input type="password" name="current_password" id="current_password" wire:model.defer="state.current_password" placeholder="Current Password" autocomplete="current-password" required/>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box">
                                                <input type="password" class="form-control form-control-md" name="new_password"   id="password" wire:model.defer="state.password" autocomplete="new-password" placeholder="New Password"/>

                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-box">
                                                <input name="password_confirmation"
                                                       id="password_confirmation"  wire:model.defer="state.password_confirmation" autocomplete="new-password" type="password" class="form-control form-control-md" placeholder="Confirm Password" />                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-danger btn-rounded btn-sm mb-4">Save Changes </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CONTAINER END -->

@endsection
