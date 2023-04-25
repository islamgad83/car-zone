@extends('admin.admin_master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>State List <span class="badge badge-pill badge-danger"> {{ count($state) }} </span></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">State</a></li>
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
                                        <th>Division Name </th>
                                        <th>District Name </th>
                                        <th>State Name </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                        @foreach($state as $item)
                                        <tr>
                                            <td> {{ $item->division->division_name }}  </td>
                                            <td> {{ $item->district->district_name }}  </td>
                                            <td> {{ $item->state_name }}  </td>

                                            <td width="40%">
                                                <a href="{{ route('state.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                                <a href="{{ route('state.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
                                                    <i class="fa fa-trash"></i></a>
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
                                <h2>Add State</h2>
                            </div>
                            <form method="post" action="{{ route('state.store') }}" >
                                @csrf



                                <div class="form-group">
                                    <h5>Division Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="division_id" class="form-control"  >
                                            <option value="" selected="" disabled="">Select Division</option>
                                            @foreach($division as $div)
                                                <option value="{{ $div->id }}">{{ $div->division_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('division_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group">
                                    <h5>District Select <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <select name="district_id" class="form-control"  >
                                            <option value="" selected="" disabled="">Select District</option>
                                            @foreach($district as $dis)
                                                <option value="{{ $dis->id }}">{{ $dis->district_name }}</option>
                                            @endforeach
                                        </select>
                                        @error('district_id')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>



                                <div class="form-group">
                                    <h5>State Name  <span class="text-danger">*</span></h5>
                                    <div class="controls">
                                        <input type="text"  name="state_name" class="form-control" >
                                        @error('state_name	')
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
