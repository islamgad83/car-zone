@extends('admin.admin_master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Admin Change Password</h2>
                        </div>

                        <div class="body">
                            <form action="{{route('admin.updatePassword')}}" method="POST">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <hr>
                                        <h6>Change Password</h6>
                                        <div class="form-group">
                                            <input type="password" name="current_password" class="form-control" placeholder="Current Password" id="current_password" wire:model.defer="state.current_password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control" placeholder="New Password" id="password" wire:model.defer="state.password" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm New Password" id="password_confirmation"  wire:model.defer="state.password_confirmation" required>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-round btn-primary">Update</button> &nbsp;&nbsp;
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
