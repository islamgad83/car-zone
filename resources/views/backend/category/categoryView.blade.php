@extends('admin.admin_master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Category List <span class="badge badge-pill badge-danger"> {{ count($categories) }} </span></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Category</a></li>
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
                                        <th>Category Icon </th>
                                        <th>Category En</th>
                                        <th>Category Ar </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach ($categories as $category)
                                        <tr>
                                            <td>
{{--                                                <span><i class="{{ $category->category_icon }}"></i></span>--}}
                                                <img src="{{asset($category->category_icon)}}"
                                                     style="width: 70px;" alt="">
                                            </td>
                                            <td>{{$category->category_name_en}}</td>
                                            <td>{{$category->category_name_ar}}</td>
                                            <td>
                                                <a href="{{route('category.edit', $category->id)}}" class="btn btn-info">Edit</a>
                                                <a href="{{route('category.delete', $category->id)}}" id="delete" class="btn btn-danger">Delete</a>
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
                                <h2>Add Category</h2>
                            </div>
                            <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h5>Category Name English <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="category_name_en" class="form-control" required>
                                        @error('category_name_en')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Category Name Arabic <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="category_name_ar" class="form-control" required>
                                        @error('category_name_ar')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                    <h5>Category Icon <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="category_icon" class="form-control">
                                        @error('category_icon')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="text-xs-right">
                                    <button type="submit" class="btn btn-rounded btn-info">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
