@extends('admin.admin_master')
@section('content')
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Blog Post List</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Blog Post</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>Post Category  </th>
                                        <th>Post Image </th>
                                        <th>Post Title En </th>
                                        <th>Post Title Arabic </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($blogpost as $item)
                                        <tr>

                                            <td>{{ $item->category->blog_category_name_en }}</td>
                                            <td> <img src="{{ asset($item->post_image) }}" style="width: 60px; height: 60px;"> </td>
                                            <td>{{ $item->post_title_en }}</td>
                                            <td>{{ $item->post_title_ar }}</td>
                                            <td width="20%">
                                                <a href="{{ route('blog.category.edit',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>
                                                <a href="{{ route('category.delete',$item->id) }}" class="btn btn-danger" title="Delete Data" id="delete">
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
            </div>

        </div>
    </div>

@endsection
