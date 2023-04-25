<!doctype html>
<html lang="en">

<head>
    <link rel="icon" href="{{asset('backend/images/logo/medical.png')}}" style="width: 500%">
    <title>Carzone Admin - Login </title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="description" content="Oculux Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
    <meta name="author" content="GetBootstrap, design by: puffintheme.com">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{asset('../assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/vendor/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('../assets/vendor/animate-css/vivify.min.css')}}">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('backend/css/site.min.css')}}">

</head>

<body class="theme-cyan font-montserrat">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
        <div class="bar4"></div>
        <div class="bar5"></div>
    </div>
</div>

<div class="auth-main2 particles_js">
    <div class="auth_div vivify fadeInTop">
        <div class="card">
            <div class="body">
                <div class="login-img">
                    <img class="img-fluid" src="{{asset('backend/images/online-medical.png')}}" />
                </div>
                <form method="POST" action="{{ isset($guard) ? url($guard.'/login') : route('login') }}" class="form-auth-small">
                    @csrf
                    <div class="mb-3">
                        <p class="lead">Login to admin account</p>
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label sr-only">Email</label>
                        <input type="email" name="email" :value="old('email')"  class="form-control round" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="password" class="control-label sr-only">Password</label>
                        <input type="password"  name="password" class="form-control round" id="password" autocomplete="current-password" placeholder="Password">
                    </div>
                    <div class="form-group clearfix">
                        <label class="fancy-checkbox element-left">
                            <input type="checkbox" id="remember_me" name="remember">
                            <span>Remember me</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>
                    <div class="mt-4">
                        @if (Route::has('password.request'))
                        <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{ route('password.request') }}">Forgot password?</a></span>
                        @endif
                        <span>If you join to create a new merchant account? <a href="tel:+201011477900">+201011477900</a></span>
                            <span>Or <a href="https://api.whatsapp.com/send/?phone=201060838210">
                                   Whatsapp <i class="fa fa-whatsapp"></i>
                                </a>
                            </span>
                    </div>
                </form>
                <div class="pattern">
                    <span class="red"></span>
                    <span class="indigo"></span>
                    <span class="blue"></span>
                    <span class="green"></span>
                    <span class="orange"></span>
                </div>
            </div>
        </div>
    </div>
    <div id="particles-js"></div>
</div>
<!-- END WRAPPER -->

<script src="{{asset('backend/bundles/libscripts.bundle.js')}}"></script>
<script src="{{asset('backend/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('backend/bundles/mainscripts.bundle.js')}}"></script>
</body>
</html>
