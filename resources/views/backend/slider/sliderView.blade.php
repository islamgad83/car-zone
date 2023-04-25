@extends('admin.admin_master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Slider List <span class="badge badge-pill badge-danger"> {{ count($sliders) }} </span></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Slider</a></li>
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
                                        <th>Slider Image </th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($sliders as $slider)
                                        <tr>

                                            <td><img src="{{ asset($slider->slider_img) }}" style="width: 70px; height: 40px;"> </td>
                                            <td>
                                                @if($slider->title == NULL)
                                                    <span class="badge badge-pill badge-danger"> No Title </span>
                                                @else
                                                    {{ $slider->title }}
                                                @endif
                                            </td>

                                            <td>{{ $slider->description }}</td>
                                            <td>
                                                @if($slider->status == 1)
                                                    <span class="badge badge-pill badge-success"> Active </span>
                                                @else
                                                    <span class="badge badge-pill badge-danger"> InActive </span>
                                                @endif

                                            </td>

                                            <td width="30%">
                                                <a href="{{ route('slider.edit',$slider->id) }}" class="btn btn-info btn-sm" title="Edit Data"><i class="fa fa-pencil"></i> </a>

                                                <a href="{{ route('slider.delete',$slider->id) }}" class="btn btn-danger btn-sm" title="Delete Data" id="delete">
                                                    <i class="fa fa-trash"></i></a>

                                                @if($slider->status == 1)
                                                    <a href="{{ route('slider.inactive',$slider->id) }}" class="btn btn-danger btn-sm" title="Inactive Now">
                                                        <i class="fa fa-arrow-down"></i>
                                                    </a>
                                                @else
                                                    <a href="{{ route('slider.active',$slider->id) }}" class="btn btn-success btn-sm" title="Active Now">
                                                        <i class="fa fa-arrow-up"></i>
                                                    </a>
                                                @endif

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
                                <h2>Add Slider</h2>
                            </div>

                            <form method="post" action="{{ route('slider.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <h5>Slider Title  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="title" class="form-control" >
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Slider Description <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text" name="description" class="form-control" >

                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Slider Image <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="file" name="slider_img" class="form-control" >
                                        @error('slider_img')
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
