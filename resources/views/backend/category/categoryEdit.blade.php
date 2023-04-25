@extends('admin.admin_master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Edit Category</h2>
                        </div>

                        <form method="post" action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="old_image" class="form-control" value="{{$category->category_icon}}">
                            <div class="form-group">
                                <h5>Category Name English <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="category_name_en"
                                           value="{{$category->category_name_en}}" class="form-control" required>
                                    @error('category_name_en')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Category Name Arabic <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="category_name_ar"
                                           value="{{$category->category_name_ar}}" class="form-control" required>
                                    @error('category_name_ar')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <h5>Category Image <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="file" name="category_icon"
                                           value="{{$category->category_icon}}" class="form-control">
                                    @error('category_icon')
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <img src="{{asset($category->category_icon)}}" style="width: 300px;padding: 10px 0">
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
