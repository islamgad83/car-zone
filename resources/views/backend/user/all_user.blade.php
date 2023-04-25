@extends('admin.admin_master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Total User <span class="badge badge-pill badge-danger"> {{ count($users) }} </span></h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">carzone</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">User List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Users">Users</a></li>
                        </ul>
                        <div class="tab-content mt-2">
                            <div class="tab-pane active show" id="Users">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example  dataTable table-custom spacing5">
                                        <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </thead>
                                        <tbody>

                                        @foreach($users as $user)
                                            <tr>
                                                <td>
                                                    <img src="{{ (!empty($user->profile_photo_path)) ?
                                                    url('upload/user/profile/'.$user->profile_photo_path)
                                                    : url('upload/user/profile/no_image.jpg')}}" alt=""
                                                         class="card-img-top my-4" style="width: 50px; height: 50px;"> </td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->phone }}</td>
                                                <td>
                                                    @if($user->UserOnline())
                                                        <span class="badge badge-pill badge-success">Active Now</span>
                                                    @else
                                                        <span class="badge badge-pill badge-danger">{{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route("user.deletebyid" , $user->id) }}" onclick="return confirm('Are you sure?')"  class="btn btn-sm btn-default js-sweetalert"   title="Delete" data-type="confirm">
                                                        <i class="fa fa-trash-o text-danger"></i></button>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
