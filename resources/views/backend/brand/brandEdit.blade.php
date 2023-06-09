@extends('admin.admin_master')
@section('content')

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Edit Brand</h2>
                        </div>

                        <form action="{{url('brand/update/'.$brand->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{--                                    <input type="hidden" name="id" value="{{$brand->brand_id}}">--}}
                            <input type="hidden" name="old_image" class="form-control" value="{{$brand->brand_image}}">
                            <div class="form-group">
                                <h5>Brand Name English <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="brand_name_en"
                                           value="{{$brand->brand_name_en}}" class="form-control" required>
                                    @error('brand_name_en')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Brand Name Arabic <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="brand_name_ar"
                                           value="{{$brand->brand_name_ar}}" class="form-control" required>
                                    @error('brand_name_ar')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Brand Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="brand_image"
                                           value="{{$brand->brand_image}}" class="form-control">
                                    @error('brand_image')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <img src="{{asset($brand->brand_image)}}" style="width: 300px;padding: 10px 0">
                            </div>
                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
