@extends('admin.admin_master')

@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="card">

                    <div class="body">
                        <div class="header">
                            <h2>Admin Profile Edit</h2>
                        </div>
                        <form action="{{route('admin.profile.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Admin Name <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="text" name="name" value="{{$editData->name}}" class="form-control" required>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Admin Email <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="email" name="email" value="{{$editData->email}}" class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <h5>Profile Image <span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file" name="profile_photo_path" class="form-control"
                                                           id="image" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <img
                                                src="{{(!empty($editData->profile_photo_path)) ?
                                                    url($editData->profile_photo_path)
                                                    : url('upload/admin/profile/no_image.jpg')}}"
                                                id="showImage"
                                                style="width: 100px;"
                                            >
                                        </div>
                                    </div>
                                    <div class="text-xs-right">
                                        <button type="submit" class="btn btn-rounded btn-info">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
        $(document).ready(function(){
            $('#image').change(function(e){
                var reader = new FileReader();
                reader.onload = function(e){
                    $('#showImage').attr('src',e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });
    </script>
@endsection
