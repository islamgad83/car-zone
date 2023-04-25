@extends('admin.admin_master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Edit Slider</h2>
                        </div>

                        <form method="post" action="{{ route('slider.update') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{ $sliders->id }}">
                            <input type="hidden" name="old_image" value="{{ $sliders->slider_img }}">

                            <div class="form-group">
                                <h5>Slider Title <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text"  name="title" class="form-control" value="{{ $sliders->title }}" >

                                </div>
                            </div>

                            <div class="form-group">
                                <h5>Slider Description <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="description" class="form-control" value="{{ $sliders->description }}" >

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
                                <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
