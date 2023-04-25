@extends('admin.admin_master')
@section('content')
    <!-- Content Wrapper. Contains page content -->

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Coupon List <span class="badge badge-pill badge-danger"> {{ count($coupons) }} </span></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Coupon</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-8">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>Coupon Name </th>
                                        <th>Coupon Discount</th>
                                        <th>Validity </th>
                                        <th>Status </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($coupons as $coupon)
                                        <tr>
                                            <td> {{ $coupon->coupon_name }}  </td>
                                            <td> {{ $coupon->coupon_discount }}% </td>
                                            <td width="25%">
                                                {{ Carbon\Carbon::parse($coupon->coupon_validity)->format('D, d F Y') }}
                                            </td>

                                            <td>
                                                @if($coupon->coupon_validity >= Carbon\Carbon::now()->format('Y-m-d'))
                                                    <span class="badge badge-pill badge-success"> Valid </span>
                                                @else
                                                    <span class="badge badge-pill badge-danger"> Invalid </span>
                                                @endif

                                            </td>

                                            <td width="25%">
                                                <a href="{{ route('coupon.edit',$coupon->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                                <a href="{{ route('coupon.delete',$coupon->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
                                                    <i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="body">
                            <div class="header">
                                <h2>Add Coupon</h2>
                            </div>
                            <form method="post" action="{{ route('coupon.store') }}" >
                                @csrf


                                <div class="form-group">
                                    <h5>Coupon Name  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text"  name="coupon_name" class="form-control" >
                                        @error('coupon_name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <h5>Coupon Discount(%) <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="coupon_discount" class="form-control" >
                                        @error('coupon_discount')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group">
                                    <h5>Coupon Validity Date  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="date" name="coupon_validity" class="form-control" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                                        @error('coupon_validity')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add New">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
