
<nav class="navbar top-navbar">
    <div class="container-fluid">

        <div class="navbar-left">
            <div class="navbar-btn">
                <a href="{{url('admin/dashboard')}}"><img src="{{asset('user/images/logo.png')}}" alt=" Logo" class="img-fluid logo"></a>
                <button type="button" class="btn-toggle-offcanvas"><i class="lnr lnr-menu fa fa-bars"></i></button>
            </div>
            <ul class="nav navbar-nav">

            </ul>
        </div>

        <div class="navbar-right">
            <div id="navbar-menu">
                <ul class="nav navbar-nav">
                    <li><a href="{{url('/')}}" class="icon-menu" target="_blank"><i class="icon-user"></i>User</a></li>

                    <li><a href="{{route('calender')}}" class="icon-menu open"><i class="icon-calendar"></i></a></li>
                    <li><a href="{{route('admin.logout')}}" class="icon-menu"><i class="icon-power"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="progress-container"><div class="progress-bar" id="myBar"></div></div>
</nav>
