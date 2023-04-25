@extends('admin.admin_master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Edit Coupon</h2>
                        </div>

                        <form method="post" action="{{ route('coupon.update',$coupons->id) }}" >
                            @csrf
                            <div class="form-group">
                                <h5>Coupon Name  <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text"  name="coupon_name" class="form-control" value="{{ $coupons->coupon_name }}">
                                    @error('coupon_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Coupon Discount(%) <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="coupon_discount" class="form-control" value="{{ $coupons->coupon_discount }}">
                                    @error('coupon_discount')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Coupon Validity Date  <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="date" name="coupon_validity" class="form-control" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ $coupons->coupon_validity }}">
                                    @error('coupon_validity')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-warning mb-5" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
