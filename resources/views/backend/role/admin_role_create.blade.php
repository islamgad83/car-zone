@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Create Merchant User</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Create</a></li>
                                <li class="breadcrumb-item active" aria-current="page"> Merchant User</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">

                            <form method="post" action="{{ route('admin.user.store') }}" enctype="multipart/form-data" >
                                @csrf
                                <div class="row">
                                    <div class="col-12">

                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>Merchant User Name  <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="name" class="form-control" > </div>
                                                </div>
                                            </div> <!-- end cold md 6 -->



                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>Merchant Email  <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="email" name="email" class="form-control" > </div>
                                                </div>

                                            </div> <!-- end cold md 6 -->

                                        </div>	<!-- end row 	 -->




                                        <div class="row">
                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>Merchant User Phone  <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="text" name="phone" class="form-control" > </div>
                                                </div>

                                            </div> <!-- end cold md 6 -->



                                            <div class="col-md-6">

                                                <div class="form-group">
                                                    <h5>Merchant Password  <span class="text-danger">*</span></h5>
                                                    <div class="controls">
                                                        <input type="password" name="password" class="form-control" > </div>
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
                                                <img id="showImage" src="{{ url('upload/no_image.jpg') }}" style="width: 100px; height: 100px;">

                                            </div><!-- end cold md 6 -->
                                        </div><!-- end row 	 -->



                                        <hr>



                                        <div class="row">

                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <div class="controls">
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_2" name="brand" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Brand</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_3" name="category" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Category</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_4" name="product" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Product</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_5" name="slider" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Slider</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_6" name="coupons" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Coupons</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <div class="controls">
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_7" name="shipping" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Shipping</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_6" name="blog" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Blog</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_8" name="setting" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Setting</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_10" name="returnorder" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Return Order</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_11" name="review" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Review</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>




                                            <div class="col-md-4">
                                                <div class="form-group">

                                                    <div class="controls">
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_12" name="orders" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Orders</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_13" name="stock" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Stock</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_14" name="reports" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>Reports</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_15" name="alluser" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>All-user</span>
                                                        </label>
                                                        <br>
                                                        <label class="fancy-checkbox">
                                                            <input type="checkbox" id="checkbox_16" name="adminuserrole" value="1"  data-parsley-errors-container="#error-checkbox">
                                                            <span>MerchantUser-role</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Add Merchant User">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
