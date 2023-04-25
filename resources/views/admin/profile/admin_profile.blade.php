@extends('admin.admin_master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Admin Profile</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Carzone</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Admin Profile</li>
                            </ol>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card social c_grid c_yellow">
                        <div class="profile-header d-flex justify-content-between justify-content-center">
                            <div class="d-flex">
                                @php
                                    $id = \Illuminate\Support\Facades\Auth::user()->id;
                                    $profile = \App\Models\Admin::find($id);
                                @endphp
                                <div class="mr-3 text-center">
{{--                                    <img src="{{(!empty($editData->profile_photo_path)) ? url($editData->profile_photo_path) : url('upload/admin/profile/no_image.jpg')}}" class="rounded" alt="">--}}
                                    <div class="circle">
                                        <img class="rounded-circle" src="{{(!empty($profile->profile_photo_path)) ? url($profile->profile_photo_path) : url('upload/admin/profile/no_image.jpg')}}" alt="">
                                    </div>
                                </div>
                                <div class="details">

                                    <h5 class="mb-0">Name: {{$adminData->name}}</h5>
                                    <span class="text-light">Email: {{$adminData->email}}</span><br>
                                    <span class="text-light">Phone: {{$adminData->phone}}</span><br>
                                    <span class="text-light">Register: {{$adminData->created_at}}</span>
                                    <p class="mb-0"><span>Posts: <strong>321</strong></span> <span>Followers: <strong>4,230</strong></span> <span>Following: <strong>560</strong></span></p>
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-12 text-right hidden-xs">
                                <a href="{{route('admin.profile.edit')}}" class="btn btn-sm btn-primary btn-round" title="">Edit Profile</a>
                            </div>
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
                                    <th>Process</th>
                                </tr>
                                </thead>
                                <tbody>
                                @php

                                    $pending = App\Models\Order::where('status','delivered')->get();
                                @endphp
                                @php
                                    $i = 1;
                                @endphp
                                @foreach($pending as $item)
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
                                            <span class="badge badge-success ">{{ $item->status }}</span>
                                        </td>
                                        <td class="text-center">
                                            <button type="button" class="btn btn-sm btn-default " title="Print" data-toggle="tooltip" data-placement="top"><i class="icon-printer"></i></button>
                                            <button type="button" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip" data-placement="top"><i class="icon-trash"></i></button>
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
@endsection
