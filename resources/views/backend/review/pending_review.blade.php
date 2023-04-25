@extends('admin.admin_master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Pending All Reviews List</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Pending All Reviews</a></li>
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
                                        <th>Summary  </th>
                                        <th>Comment </th>
                                        <th>User </th>
                                        <th>Product  </th>
                                        <th>Status </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($review as $item)
                                        <tr>
                                            <td> {{ $item->summary }}  </td>
                                            <td> {{ $item->comment }}  </td>
                                            <td>  {{ $item->user->name }}  </td>

                                            <td> {{ $item->product->product_name_en }}  </td>
                                            <td>
                                                @if($item->status == 0)
                                                    <span class="badge badge-pill badge-primary">Pending </span>
                                                @elseif($item->status == 1)
                                                    <span class="badge badge-pill badge-success">Publish </span>
                                                @endif

                                            </td>

                                            <td width="25%">
                                                <a href="{{ route('review.approve',$item->id) }}" class="btn btn-danger">Approve </a>
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
@endsection
