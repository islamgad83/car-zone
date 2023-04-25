@extends('admin.admin_master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Edit Blog Category</h2>
                        </div>


                        <form method="post" action="{{ route('blogcategory.update') }}" >
                            @csrf

                            <input type="hidden" name="id" value="{{ $blogcategory->id }}">

                            <div class="form-group">
                                <h5>Blog Category English  <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text"  name="blog_category_name_en" class="form-control" value="{{ $blogcategory->blog_category_name_en }}" >
                                    @error('blog_category_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <h5>Blog Category Arabic <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="blog_category_name_ar" class="form-control" value="{{ $blogcategory->blog_category_name_ar }}"  >
                                    @error('blog_category_name_ar')
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
