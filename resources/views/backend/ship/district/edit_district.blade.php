@extends('admin.admin_master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Edit District</h2>
                        </div>

                        <form method="post" action="{{ route('district.update',$district->id ) }}" >
                            @csrf



                            <div class="form-group">
                                <h5>Division Select <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <select name="division_id" class="form-control"  >
                                        <option value="" selected="" disabled="">Select Division</option>
                                        @foreach($division as $div)
                                            <option value="{{ $div->id }}" {{ $div->id == $district->division_id ? 'selected': '' }} >{{ $div->division_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('division_id')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="form-group">
                                <h5>District Name  <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text"  name="district_name" class="form-control" value="{{ $district->district_name }}" >
                                    @error('district_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="text-xs-right">
                                <input type="submit" class="btn btn-rounded btn-warning mb-5" value="Update">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
