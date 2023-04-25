@extends('admin.admin_master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Merchant Roll List</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Merchant Roll</a></li>
                                <li class="breadcrumb-item active" aria-current="page">List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-12">
                    <div class="box-header with-border">
                        <h3 class="box-title">Total Merchant User </h3>
                        <a href="{{ route('add.admin') }}" class="btn btn-danger mb-2" style="float: right;">Add Merchant User</a>
                    </div>
                    <div class="card">

                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover dataTable js-exportable">
                                    <thead>
                                    <tr>
                                        <th>Image  </th>
                                        <th>Name  </th>
                                        <th>Email </th>
                                        <th>Access </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($adminuser as $item)
                                        <tr>
                                            <td> <img src="{{ asset($item->profile_photo_path) }}" style="width: 50px; height: 50px;"> </td>
                                            <td> {{ $item->name }}  </td>
                                            <td> {{ $item->email  }}  </td>

                                            <td>
                                                @if($item->brand == 1)
                                                    <span class="badge btn-primary">Brand</span>
                                                @else
                                                @endif

                                                @if($item->category == 1)
                                                    <span class="badge btn-secondary">Category</span>
                                                @else
                                                @endif


                                                @if($item->product == 1)
                                                    <span class="badge btn-success">Product</span>
                                                @else
                                                @endif


                                                @if($item->slider == 1)
                                                    <span class="badge btn-danger">Slider</span>
                                                @else
                                                @endif


                                                @if($item->coupons == 1)
                                                    <span class="badge btn-warning">Coupons</span>
                                                @else
                                                @endif


                                                @if($item->shipping == 1)
                                                    <span class="badge btn-info">Shipping</span>
                                                @else
                                                @endif


                                                @if($item->blog == 1)
                                                    <span class="badge btn-light">Blog</span>
                                                @else
                                                @endif


                                                @if($item->setting == 1)
                                                    <span class="badge btn-dark">Setting</span>
                                                @else
                                                @endif


                                                @if($item->returnorder == 1)
                                                    <span class="badge btn-primary">Return Order</span>
                                                @else
                                                @endif


                                                @if($item->review == 1)
                                                    <span class="badge btn-secondary">Review</span>
                                                @else
                                                @endif


                                                @if($item->orders == 1)
                                                    <span class="badge btn-success">Orders</span>
                                                @else
                                                @endif

                                                @if($item->stock == 1)
                                                    <span class="badge btn-danger">Stock</span>
                                                @else
                                                @endif

                                                @if($item->reports == 1)
                                                    <span class="badge btn-warning">Reports</span>
                                                @else
                                                @endif

                                                @if($item->alluser == 1)
                                                    <span class="badge btn-info">Alluser</span>
                                                @else
                                                @endif

                                                @if($item->adminuserrole == 1)
                                                    <span class="badge btn-dark">Merchantuserrole</span>
                                                @else
                                                @endif
                                            </td>


                                            <td width="25%">
                                                <a href="{{ route('edit.admin.user',$item->id) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i> </a>

                                                <a href="{{ route('delete.admin.user',$item->id) }}" class="btn btn-danger" title="Delete" id="delete">
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
