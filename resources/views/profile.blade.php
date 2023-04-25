@php
      $id = \Illuminate\Support\Facades\Auth::user()->id;
        $user = \App\Models\User::find($id);
@endphp
@extends('user.main_master')
@section('title', ' user profile')
@section('content')


    <!-- Bread Crumb STRAT -->
    <div class="banner inner-banner1 ">
        <div class="container">
            <section class="banner-detail center-xs">
                <h1 class="banner-title">{{__('user.account')}} </h1>
                <div class="bread-crumb right-side float-none-xs">
                    <ul>
                        <li><a href="{{url('/')}}">{{__('user.Home')}} </a>/ </li>
                        <li><span>{{__('user.account')}} </span></li>
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
                           @include('user.common.user_sidebar')
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div id="data-step1" class="account-content" data-temp="tabdata">
                        <div class="row">
                            <div class="col-12">
                                <div class="heading-part heading-bg mb-30">
                                    <h2 class="heading m-0">Account Dashboard </h2>
                                </div>
                            </div>
                        </div>
                        <div class="mb-30">
                            <div class="row">
                                <div class="col-12">
                                    <div class="heading-part d-flex">
                                        <img src="{{ (!empty($user->profile_photo_path)) ?
                                            url('upload/user/profile/'.$user->profile_photo_path)
                                            : url('upload/user/profile/no_image.jpg')}}" alt="" class="card-img-top my-4" style="border-radius: 50%; width: 6%;">
                                        <h3 class="sub-heading" style="margin-top: 42px; margin-left: 10px;">
                                            @if(App::getLocale() == 'ar')
                                                مرحبًا
                                            @else
                                                Hello
                                            @endif
                                                {{\Illuminate\Support\Facades\Auth::user()->name}}
                                        </h3>
                                    </div>
                                    <p>
                                        @if(App::getLocale() == 'ar')
                                            من حسابك يمكنك عرض الخاص بك
                                            <a href="{{route('user.profile')}}"
                                               class="account-link link-to-tab"> الطلبيات الأخيرة</a>,
                                            إدارة الخاص بك و
                                            <a href="{{route('user.changePassword')}}"
                                               class="text-primary link-to-tab"> تحرير كلمة المرور الخاصة بك و
                                                الحساب.</a>
                                        @else
                                            From your account you can view your  <a href="{{route('user.profile')}}" class="account-link link-to-tab">recent orders </a>,
                                            manage your, and
                                            <a href="{{route('user.changePassword')}}" class="account-link link-to-tab">edit your password and
                                                account. </a>
                                        @endif

                                    </p>
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
