@php
    $id = \Illuminate\Support\Facades\Auth::user()->id;
    $profile = \App\Models\Admin::find($id);

    $prefix = Request::route()->getPrefix();
    $route = Route::current()->getName();
@endphp

<div id="left-sidebar" class="sidebar">
    <div class="navbar-brand">
        <a href="{{url('admin/dashboard')}}"><img src="{{asset('user/images/logo-small.png')}}" alt="Oculux Logo" class="img-fluid logo"><span>Carzone</span></a>
        <button type="button" class="btn-toggle-offcanvas btn btn-sm float-right"><i class="lnr lnr-menu icon-close"></i></button>
    </div>
    <div class="sidebar-scroll">
        <div class="user-account">
            <div class="user_div">
                <a href="{{route('admin.profile')}}">
                    <img src="{{(!empty($profile->profile_photo_path)) ? url($profile->profile_photo_path) :
                                    url('upload/admin/profile/no_image.jpg')}}" class="user-photo media-object" alt="User Profile Picture">
                </a>

            </div>
            <div class="dropdown">
                <span>Ahlan,</span>
                <a href="javascript:void(0);" class="dropdown-toggle user-name" data-toggle="dropdown"><strong>{{$profile->name}}</strong></a>
                <ul class="dropdown-menu dropdown-menu-right account vivify flipInY">
                    <li><a href="{{route('admin.profile')}}"><i class="icon-user"></i>My Profile</a></li>
                    <li><a href="{{route('admin.changePassword')}}"><i class="icon-lock-open"></i>Change Password</a></li>
                    <li><a href="{{route('admin.logout')}}"><i class="icon-power"></i>Logout</a></li>
                </ul>
            </div>
        </div>
        <nav id="left-sidebar-nav" class="sidebar-nav">
            <ul id="main-menu" class="metismenu">
                <li class="header">Main</li>
                <li class="{{($prefix == 'dashboard')? 'active' : ''}} active open">
                    <a href="{{url('admin/dashboard')}}">
                        <i class="icon-speedometer"></i><span>Dashboard</span>
                    </a>
                </li>
                <li class="header">App</li>
                <li class="{{($prefix == '/brand')? 'active' : ''}}">
                    <a href="{{route('all.brand')}}" class="has-arrow">
                        <i class="icon-book-open"></i><span>Brand</span>
                    </a>
                    <ul>
                        <li class="{{($route == 'all.brand')? 'active' : ''}}">
                            <a href="{{route('all.brand')}}">All Brand</a>
                        </li>
                    </ul>
                </li>
                <li class="{{($prefix == '/category')? 'active' : ''}}">
                    <a href="{{route('all.category')}}" class="has-arrow"><i class="icon-layers"></i><span>Categories</span></a>
                    <ul>
                        <li class="{{($route == 'all.category')? 'active' : ''}}">
                            <a href="{{route('all.category')}}">All Category</a>
                        </li>
                        <li class="{{($route == 'all.subcategory')? 'active' : ''}}">
                            <a href="{{route('all.subcategory')}}">All SubCategory</a>
                        </li>
                        <li class="{{($route == 'all.subSubcategory')? 'active' : ''}}">
                            <a href="{{route('all.subSubcategory')}}">All Sub - SubCategory</a>
                        </li>
                    </ul>
                </li>
                <li class=" {{($prefix == '/product')? 'active' : ''}}">
                    <a href="{{route('manage.product')}}" class="has-arrow">
                        <i class="icon-puzzle"></i><span>Products</span></a>
                    <ul>
                        <li class="{{($route == 'add_products')? 'active' : ''}}">
                            <a href="{{route('add_products')}}">Add Products</a>
                        </li>
                        <li class="{{($route == 'manage.product')? 'active' : ''}}">
                            <a href="{{route('manage.product')}}">Manage Products</a>
                        </li>
                    </ul>
                </li>


              





                <li class="header">UI Elements</li>
                <li class=" {{($prefix == '/slider')? 'active' : ''}}">
                    <a href="{{route('manage.slider')}}" class="has-arrow">
                        <i class="icon-tag"></i><span>Slider</span></a>
                    <ul>
                        <li class="{{($route == 'manage.slider')? 'active' : ''}}">
                            <a href="{{route('manage.slider')}}">Manage Slider</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ ($prefix == '/coupons')?'active':'' }}  ">
                    <a href="{{ route('manage-coupon') }}" class="has-arrow">
                        <i class="icon-diamond"></i><span>Coupons</span></a>
                    <ul>
                        <li><a href="{{ route('manage-coupon') }}">Manage Coupon</a></li>
                    </ul>
                </li>
                <li class="{{ ($prefix == '/shipping')?'active':'' }}  ">
                    <a href="{{ route('manage-division') }}" class="has-arrow">
                        <i class="icon-pencil"></i><span>Shipping Area</span></a>
                    <ul>
                        <li class="{{ ($route == 'manage-division')? 'active':'' }}">
                            <a href="{{ route('manage-division') }}">Ship Division</a>
                        </li>
                        <li class="{{ ($route == 'manage-district')? 'active':'' }}">
                            <a href="{{ route('manage-district') }}">Ship District</a>
                        </li>
                        <li class="{{ ($route == 'manage-state')? 'active':'' }}">
                            <a href="{{ route('manage-state') }}">Ship State</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ ($prefix == '/review')?'active':'' }}  ">
                    <a href="{{ route('pending.review') }}" class="has-arrow">
                        <i class="icon-layers"></i><span>Manage Review</span>
                    </a>
                    <ul>
                        <li class="{{ ($route == 'pending.review')? 'active':'' }}">
                            <a href="{{ route('pending.review') }}">Pending Review</a>
                        </li>
                        <li class="{{ ($route == 'publish.review')? 'active':'' }}">
                            <a href="{{ route('publish.review') }}">Publish Review</a>
                        </li>
                    </ul>
                </li>
                <li class="header">Extra</li>
                <li class="{{ ($prefix == '/orders')?'active':'' }}  ">
                    <a href="{{ route('pending-orders') }}" class="has-arrow">
                        <i class="icon-lock"></i><span>Orders</span></a>
                    <ul>
                        <li class="{{ ($route == 'pending-orders')? 'active':'' }}">
                            <a href="{{ route('pending-orders') }}">Pending Orders</a>
                        </li>
                        <li class="{{ ($route == 'confirmed-orders')? 'active':'' }}">
                            <a href="{{ route('confirmed-orders') }}">Confirmed Orders</a>
                        </li>
                        <li class="{{ ($route == 'processing-orders')? 'active':'' }}">
                            <a href="{{ route('processing-orders') }}">Processing Orders</a>
                        </li>
                        <li class="{{ ($route == 'picked-orders')? 'active':'' }}">
                            <a href="{{ route('picked-orders') }}"> Picked Orders</a>
                        </li>
                        <li class="{{ ($route == 'shipped-orders')? 'active':'' }}">
                            <a href="{{ route('shipped-orders') }}"> Shipped Orders</a>
                        </li>
                        <li class="{{ ($route == 'delivered-orders')? 'active':'' }}">
                            <a href="{{ route('delivered-orders') }}"> Delivered Orders</a>
                        </li>
                        <li class="{{ ($route == 'cancel-orders')? 'active':'' }}">
                            <a href="{{ route('cancel-orders') }}"> Cancel Orders</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ ($prefix == '/return')?'active':'' }}  ">
                    <a href="{{ route('all.request') }}" class="has-arrow">
                        <i class="icon-bubbles"></i><span>Return Order</span></a>
                    <ul>
                        <li class="{{ ($route == 'return.request')? 'active':'' }}">
                            <a href="{{ route('return.request') }}">Return Request</a>
                        </li>
                        <li class="{{ ($route == 'all.request')? 'active':'' }}">
                            <a href="{{ route('all.request') }}">All Request</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ ($prefix == '/stock')?'active':'' }}  ">
                    <a href="{{ route('product.stock') }}" class="has-arrow">
                        <i class="icon-book-open"></i><span>Manage Stock</span></a>
                    <ul>
                        <li class="{{ ($route == 'product.stock')? 'active':'' }}">
                            <a href="{{ route('product.stock') }}">Product Stock</a>
                        </li>
                    </ul>
                </li>

                <li class="{{ ($prefix == '/reports')?'active':'' }}  ">
                    <a href="{{ route('all-reports') }}" class="has-arrow">
                        <i class="icon-flag"></i><span>All Reports</span></a>
                    <ul>
                        <li class="{{ ($route == 'all-reports')? 'active':'' }}">
                            <a href="{{ route('all-reports') }}">All Reports</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ ($prefix == '/alluser')?'active':'' }}  ">
                    <a href="{{ route('all-users') }}" class="has-arrow">
                        <i class="icon-users"></i><span>Users</span></a>
                    <ul>
                        <li class="{{ ($route == 'all-users')? 'active':'' }}">
                            <a href="{{ route('all-users') }}">All Users</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ ($prefix == '/blog')?'active':'' }}  ">
                    <a href="{{ route('blog.category') }}" class="has-arrow">
                        <i class="icon-diamond"></i><span>Manage Blog</span></a>
                    <ul>
                        <li class="{{ ($route == 'blog.category')? 'active':'' }}">
                            <a href="{{ route('blog.category') }}">Blog Category</a>
                        </li>
                        <li class="{{ ($route == 'list.post')? 'active':'' }}">
                            <a href="{{ route('list.post') }}">List Blog Post</a>
                        </li>
                        <li class="{{ ($route == 'add.post')? 'active':'' }}">
                            <a href="{{ route('add.post') }}">Add Blog Post</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ ($prefix == '/setting')?'active':'' }}  ">
                    <a href="{{ route('blog.category') }}" class="has-arrow">
                        <i class="icon-settings"></i><span>Manage Setting</span></a>
                    <ul>
                        <li class="{{ ($route == 'site.setting')? 'active':'' }}">
                            <a href="{{ route('site.setting') }}">Site Setting</a>
                        </li>
                        <li class="{{ ($route == 'seo.setting')? 'active':'' }}">
                            <a href="{{ route('seo.setting') }}">Seo Setting</a>
                        </li>
                    </ul>
                </li>
                <li class="{{ ($prefix == '/adminuserrole')?'active':'' }} ">
                    <a href="{{ route('all.admin.user') }}" class="has-arrow"><i class="icon-user">
                        </i><span>Admin User Role</span></a>
                    <ul>
                        <li class="{{ ($route == 'all.admin.user')? 'active':'' }}">
                            <a href="{{ route('all.admin.user') }}">All Admin User</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
