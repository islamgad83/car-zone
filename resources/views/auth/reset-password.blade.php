@extends('user.main_master')
@section('content')
    <nav class="breadcrumb-section theme1 bg-lighten2 pt-110 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center mb-15">
                        <h2 class="title text-dark text-capitalize">Rest Password</h2>
                    </div>
                </div>
                <div class="col-12">
                    <ol class="breadcrumb bg-transparent m-0 p-0 align-items-center justify-content-center">
                        <li><a href="{{route('user.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page"> Rest Password </li>
                    </ol>
                </div>
            </div>
        </div>
    </nav>

    <!-- product tab start -->
    <div class="my-account pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3 class="title text-capitalize mb-30 pb-25"> Forgot your password?</h3>
                    @if (session('status'))
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="log-in-form" method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-6">
                                <input type="email"  id="email" name="email" :value="old('email')" required class="form-control" placeholder="Your email">
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{$message}}</strong>
                                    </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="info-title" for="password">New Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input"
                                   id="password"  name="password" required autocomplete="new-password">
                        </div>
                        <div class="form-group">
                            <label class="info-title" for="password_confirmation">Confirm Password <span>*</span></label>
                            <input type="password" class="form-control unicase-form-control text-input"
                                   id="password_confirmation" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group row text-center mb-0">
                            <div class="col-12">
                                <div class="border-top">
                                    <button type="submit" class="btn theme-btn--dark1 btn--md mt-3">Email Password Reset Link</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- product tab end -->
@endsection
