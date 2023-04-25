@extends('user.main_master')
@section('content')
    <!-- Start login section  -->
    <div class="login__section section--padding">
        <div class="login-container container">
                <div class="login__section--inner">
                    <div class="row row-cols-md-2 row-cols-1">
                        <div class="col">
                            <div class="account__login">
                                <form class="log-in-form" method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}">
                                    @csrf
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title mb-10">
                                        @if(App::getLocale() == 'ar')
                                             التسجيل
                                        @else
                                            Login
                                        @endif
                                    </h2>
                                    <p class="account__login--header__desc">Login if you area a returning customer.</p>
                                </div>
                                <div class="account__login--inner">
                                    <label>
                                        <input class="account__login--input" id="email" name="email" :value="old('email')" required placeholder="{{__('user.email')}}" type="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <label>
                                        <input class="account__login--input" id="password" name="password" autocomplete="current-password" required placeholder="{{__('user.password')}}" type="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <div class="account__login--remember__forgot mb-15 d-flex justify-content-between align-items-center">
                                        <div class="account__login--remember position__relative">
                                            <input class="checkout__checkbox--input" id="remember" name="remember" type="checkbox">
                                            <span class="checkout__checkbox--checkmark"></span>
                                            <label class="checkout__checkbox--label login__remember--label" for="remember">
                                                Remember me</label>
                                        </div>
                                        @if (Route::has('password.request'))
                                        <button class="account__login--forgot"  type="submit" href="{{ route('password.request') }}">{{__('user.Last_your_password')}}</button>
                                        @endif
                                    </div>
                                    <a target="_blank" href="/admin/login" class="d-block mb-5 text-danger">{{__('user.Login_as_a_merchant')}}</a>

                                    <button class="account__login--btn primary__btn" type="submit">{{__('user.login')}}</button>
                                    <div class="account__login--divide">
                                        <span class="account__login--divide__text">OR</span>
                                    </div>
                                    <div class="account__social d-flex justify-content-center mb-15">
                                        <a class="account__social--link facebook" target="_blank" href="{{route('login.facebook')}}">Facebook</a>
                                        <a class="account__social--link google" target="_blank" href="{{route('login.google')}}">Google</a>
                                    </div>
                                    <p class="account__login--signup__text">Don,t Have an Account? <button type="submit">Sign up now</button></p>
                                </div>
                                </form>
                            </div>
                        </div>
                        <div class="col">
                            <div class="account__login register">
                                <form  class="personal-information" method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="account__login--header mb-25">
                                    <h2 class="account__login--header__title mb-10">
                                        @if(App::getLocale() == 'ar')
                                            انشاء حساب
                                        @else
                                            Create an Account
                                        @endif
                                    </h2>
                                    <p class="account__login--header__desc">Register here if you are a new customer</p>
                                </div>
                                <div class="account__login--inner">
                                    <label>
                                        <input class="account__login--input" placeholder="{{__('user.name')}}" type="text" name="name" id="name" :value="old('name')" autofocus autocomplete="name" required>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </label>
                                    <label>
                                        <input class="account__login--input" placeholder="{{__('user.email')}}" type="email" name="email" id="email_1" :value="old('email')" required>
                                    </label>

                                    <label>
                                        <input class="account__login--input" placeholder="{{__('user.phone')}}" type="number" name="phone" id="phone">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </label>


                                    <label>
                                        <input class="account__login--input" placeholder="{{__('user.password')}}" type="password" id="password" name="password"
                                               autocomplete="new-password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <label>
                                        <input class="account__login--input" placeholder="{{__('user.re_password')}}"
                                               type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                                        @error('password_confirmation')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{$message}}</strong>
                                            </span>
                                        @enderror
                                    </label>
                                    <button class="account__login--btn primary__btn mb-10" type="submit">{{__('user.register')}}</button>
                                    <div class="account__login--remember position__relative">
                                        <input class="checkout__checkbox--input" id="check2" type="checkbox">
                                        <span class="checkout__checkbox--checkmark"></span>
                                        <label class="checkout__checkbox--label login__remember--label" for="check2" style="margin-top: 20px">
                                            I have read and agree to the terms & conditions</label>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- End login section  -->

<script>
    function myFunction() {
        var x = document.getElementById("password");
        var show = document.getElementById("show");
        if (x.type === "password") {
            x.type = "text";
            show.value = "Hide";
        } else {
            x.type = "password";
            show.value = "Show";
        }
    }

</script>
@endsection
