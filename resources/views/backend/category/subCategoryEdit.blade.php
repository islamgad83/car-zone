@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Content Wrapper. Contains page content -->

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Edit SubCategory</h2>
                        </div>
                        <form method="post" action="{{ route('subcategory.update') }}" >
                            @csrf

                            <input type="hidden" name="id" value="{{ $subcategory->id }}">

                            <div class="form-group">
                                <h5>Category Select <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="category_id" class="form-control"  >
                                        <option value="" selected="" disabled="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}" {{ $category->id == $subcategory->category_id ? 'selected':'' }} >
                                                {{ $category->category_name_en }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <h5>SubCategory English <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="subcategory_name_en" class="form-control" value="{{ $subcategory->subcategory_name_en }}" >
                                    @error('subcategory_name_en')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group">
                                <h5>SubCategory Arabic  <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="subcategory_name_ar" class="form-control" value="{{ $subcategory->subcategory_name_ar }}">
                                    @error('subcategory_name_ar')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-warning mb-5">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
