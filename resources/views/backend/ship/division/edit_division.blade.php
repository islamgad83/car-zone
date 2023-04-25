@extends('admin.admin_master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Edit Division</h2>
                        </div>
                        <form method="post" action="{{ route('division.update',$divisions->id) }}" >
                            @csrf


                            <div class="form-group">
                                <h5>Division Name  <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text"  name="division_name" class="form-control" value="{{ $divisions->division_name }}" >
                                    @error('division_name')
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
