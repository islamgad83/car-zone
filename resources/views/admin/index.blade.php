@extends('admin.admin_master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h1>Dashboard</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Carzone</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6">
                            <div class="card-wrapper flip-left">
                                <div class="card s-widget-top">
                                    <div class="front p-3 px-4">
                                        <div>Today's Sale</div>
                                        <div class="py-4 m-0 text-center h2 text-info">{{ $today  }} EGP</div>
                                        <div class="d-flex">
                                            <small class="text-muted">Increment</small>
                                            <div class="ml-auto">{{ $today%100  }}%</div>
                                        </div>
                                    </div>
                                    <div class="back p-3 px-4 bg-info text-center">
                                        <p class="text-light">This Week</p>
                                        <span id="minibar-chart2" class="mini-bar-chart"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-wrapper flip-left">
                                <div class="card s-widget-top">
                                    <div class="front p-3 px-4 bg-danger text-light">
                                        <div>Monthly Sale</div>
                                        <div class="py-4 m-0 text-center h2">{{ $month/1000 }} EGP</div>
                                        <div class="d-flex">
                                            <small>Increment</small>
                                            <div class="ml-auto"><i class="fa fa-caret-down"></i>{{ $month/1000 }}%</div>
                                        </div>
                                    </div>
                                    <div class="back p-3 px-4 text-center">
                                        <p>This Month</p>
                                        <span id="minibar-chart4" class="mini-bar-chart"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-wrapper flip-left">
                                <div class="card s-widget-top">
                                    <div class="front p-3 px-4 bg-warning text-light">
                                        <div>Yearly Sale </div>
                                        <div class="py-4 m-0 text-center h2">{{ $year }} EGP</div>
                                        <div class="d-flex">
                                            <small>Increment</small>
                                            <div class="ml-auto"><i class="fa fa-caret-up"></i>{{ $year/1000 }} %</div>
                                        </div>
                                    </div>
                                    <div class="back p-3 px-4 text-center">
                                        <p>This Year</p>
                                        <span id="minibar-chart3" class="mini-bar-chart"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <div class="card-wrapper flip-left">
                                <div class="card s-widget-top">
                                    <div class="front p-3 px-4">
                                        <div>Pending Orders</div>
                                        <div class="py-4 m-0 text-center h2 text-success">{{ count($pending) }} Orders</div>
                                        <div class="d-flex">
                                            <small class="text-muted">Increment</small>
                                            <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>{{ count($pending)/1000 }} %</div>
                                        </div>
                                    </div>
                                    <div class="back p-3 px-4 bg-success text-center">
                                        <p class="text-light">This Order</p>
                                        <span id="minibar-chart1" class="mini-bar-chart"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        @php
                            $brands = \App\Models\Brand::get();
                            $categories = \App\Models\Category::get();
                            $products = \App\Models\Product::get();
                            $orders = \App\Models\Order::get();
                            $sliders = \App\Models\Slider::get();
                             $reviews = \App\Models\Review::get();
                        @endphp
                        <div class="body">
                            <div class="form-group mb-4">
                                <label class="d-block">Brands <span class="float-right">{{count($brands)/100}}% <i class="fa fa-long-arrow-up"></i></span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-azura" role="progressbar" aria-valuenow="77" aria-valuemin="0" aria-valuemax="100" style="width: {{count($brands)}}%"></div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="d-block">Categories <span class="float-right">{{count($categories)/100}}% <i class="fa fa-long-arrow-up"></i></span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: {{count($categories)}}%;"></div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="d-block">Products <span class="float-right">{{count($products)/100}}% <i class="fa fa-long-arrow-up"></i></span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: {{count($products)}}%;"></div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="d-block">Orders <span class="float-right">{{count($orders)/100}}% <i class="fa fa-long-arrow-up"></i></span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-indigo" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: {{count($orders)}}%;"></div>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <label class="d-block">Sliders <span class="float-right"> {{count($sliders)/100}}% <i class="fa fa-long-arrow-up"></i></span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-orange" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: {{count($orders)}}%;"></div>
                                </div>
                            </div>
                            <div class="form-group mb-2">
                                <label class="d-block">Manage Review<span class="float-right">{{count($reviews)/100}}% <i class="fa fa-long-arrow-up"></i></span></label>
                                <div class="progress progress-xxs">
                                    <div class="progress-bar bg-red" role="progressbar" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100" style="width: {{count($reviews)/100}}%;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="body">
                            @php
                                $coupons = \App\Models\Coupon::latest()->get();
                            @endphp
                            <div class="row text-center">
                                <div class="col-lg-12 col-md-5">
                                    <div class="text-center">
                                        <input type="text" class="knob" value="{{count($orders)}}" data-width="68" data-height="68" data-thickness="0.1" data-bgColor="#383b40" data-fgColor="#17C2D7">
                                    </div>
                                    <label class="mb-0 mt-2">Delivered Orders</label>
                                    <h4 class="h4 mb-0 font-weight-bold text-cyan">{{count($orders)}}</h4>
                                </div>
                                <div class="col-12 col-md-2 col-lg-12">
                                    <hr class="mt-4 mb-4">
                                </div>
                                <div class="col-lg-12 col-md-5">
                                    <div class="text-center">
                                        <input type="text" class="knob" value="{{count($coupons)}}" data-width="68" data-height="68" data-thickness="0.1" data-bgColor="#383b40" data-fgColor="#dc3545">
                                    </div>
                                    <label class="mb-0 mt-2">Coupons</label>
                                    <h4 class="h4 mb-0 font-weight-bold text-info">{{count($coupons)}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Added This Week</h2>
                        </div>
                        <div class="body">
                            <div id="chart-pie" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Employment Growth</h2>
                        </div>
                        <div class="body">
                            <div id="chart-employment" style="height: 300px"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-12 col-sm-12">
                    <div class="card">
                        <div class="header">
                            <h2>Recent All Orders</h2>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover js-basic-example dataTable table-custom spacing5">
                                <thead>
                                <tr>
                                    <th>#No</th>
                                    <th>Date</th>
                                    <th>Invoice</th>
                                    <th>Amount</th>
                                    <th>Payment</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($orders as $item)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td class="pl-0 py-8">
                                                 <span class="text-white font-weight-600 d-block font-size-16">
                                                    {{ Carbon\Carbon::parse($item->order_date)->diffForHumans()  }}
                                                </span>
                                        </td>
                                        <td>

                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    {{ $item->invoice_no }}
                                                </span>
                                        </td>
                                        <td>
                                                    <span class="text-fade font-weight-600 d-block font-size-16">
                                                        {{ $item->amount }} EGY
                                                    </span>

                                        </td>
                                        <td>

                                                <span class="text-white font-weight-600 d-block font-size-16">
                                                    {{ $item->payment_method }}
                                                </span>
                                        </td>
                                        <td>
                                            <span class="badge badge-warning ">{{ $item->status }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <div class="col-lg-6 col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Overview</h2>
                            <ul class="header-dropdown dropdown">
                                <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another Action</a></li>
                                        <li><a href="javascript:void(0);">Something else</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div id="stackedbar-chart" class="ct-chart"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>Members</h2>
                        </div>
                        <div class="body">
                            <div id="chart-bar-stacked" style="height: 200px"></div>
                        </div>
                        <div class="card-footer text-center">
                            <div class="row clearfix">
                                <div class="col-6">
                                    <h6>350</h6>
                                    <span>Users</span>
                                </div>
                                <div class="col-6">
                                    <h6>87</h6>
                                    <span>Merchant</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="header">
                            <h2>My Balance </h2>
                        </div>
                        <div class="body">
                            <div class="card-value float-right text-blue">+15%</div>
                            <h4 class="mb-0 mt-2">5,021.00 EGP</h4>
                        </div>
                        <div class="card-chart-bg">
                            <span id="linecustom">6,7,5,9,7,8,4,7,6,9,11,16,10,8,9,12</span>
                        </div>
                        <div class="body top_counter">
                            <div class="icon bg-success text-white"><i class="fa fa-area-chart"></i> </div>
                            <div class="content">
                                <span>Growth</span>
                                <h5 class="number mb-0">62%</h5>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <div class="row clearfix">
                                <div class="col-6">
                                    <h6>2,295 EGP</h6>
                                    <span>Last Month</span>
                                </div>
                                <div class="col-6">
                                    <h6>2,763 EGP</h6>
                                    <span>This Month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
