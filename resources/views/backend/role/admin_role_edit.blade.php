@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Edit Merchant User</h2>
                        </div>
                        <form method="post" action="{{ route('admin.user.update') }}" enctype="multipart/form-data" >
                            @csrf

                            <input type="hidden" name="id" value="{{ $adminuser->id }}">
                            <input type="hidden" name="old_image" value="{{ $adminuser->profile_photo_path }}">

                            <div class="row">
                                <div class="col-12">

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Merchant User Name  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" class="form-control" value="{{ $adminuser->name }}" > </div>
                                            </div>

                                        </div> <!-- end cold md 6 -->



                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Merchant Email  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" class="form-control" value="{{ $adminuser->email }}" > </div>
                                            </div>

                                        </div> <!-- end cold md 6 -->

                                    </div>	<!-- end row 	 -->

                                    <div class="row">
                                        <div class="col-md-6">

                                            <div class="form-group">
                                                <h5>Merchant User Phone  <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="phone" class="form-control" value="{{ $adminuser->phone }}" > </div>
                                            </div>

                                        </div> <!-- end cold md 6 -->





                                    </div>	<!-- end row 	 -->

                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Merchant User Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="profile_photo_path" class="form-control" id="image"> </div>
                                            </div>
                                        </div><!-- end cold md 6 -->

                                        <div class="col-md-6">
                                            <img id="showImage" src="{{ url('upload/user/profile/no_image.jpg') }}" style="width: 100px; height: 100px;">

                                        </div><!-- end cold md 6 -->
                                    </div><!-- end row 	 -->

                                    <hr>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <div class="controls">
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_2" name="brand"
                                                               value="1" {{ $adminuser->brand == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Brand</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_3" name="category"
                                                               value="1" {{ $adminuser->category == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Category</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_4" name="product"
                                                               value="1" {{ $adminuser->product == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Product</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_5" name="slider"
                                                               value="1" {{ $adminuser->slider == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Slider</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_6" name="coupons"
                                                               value="1" {{ $adminuser->coupons == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Coupons</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <div class="controls">
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_7" name="shipping" value="1"
                                                               {{ $adminuser->shipping == 1 ? 'checked' : '' }}  data-parsley-errors-container="#error-checkbox">
                                                        <span>Shipping</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_6" name="blog" value="1"
                                                               {{ $adminuser->blog == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Blog</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_8" name="setting"
                                                               {{ $adminuser->setting == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Setting</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_10" name="returnorder"
                                                               {{ $adminuser->returnorder == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Return Order</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_11" name="review"
                                                               {{ $adminuser->review == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Review</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>




                                        <div class="col-md-4">
                                            <div class="form-group">

                                                <div class="controls">
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_12" name="orders" value="1"
                                                               {{ $adminuser->orders == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Orders</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_13" name="stock" value="1"
                                                               {{ $adminuser->stock == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Stock</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_14" name="reports" value="1"
                                                               {{ $adminuser->reports == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>Reports</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_15" name="alluser" value="1"
                                                               {{ $adminuser->alluser == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>All-user</span>
                                                    </label>
                                                    <br>
                                                    <label class="fancy-checkbox">
                                                        <input type="checkbox" id="checkbox_16" name="adminuserrole" value="1"
                                                               {{ $adminuser->adminuserrole == 1 ? 'checked' : '' }} data-parsley-errors-container="#error-checkbox">
                                                        <span>MerchantUser-role</span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update Merchant User">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>


@endsection
