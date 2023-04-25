@extends('admin.admin_master')
@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Return Orders List</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Return Orders</a></li>
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
                                        <th>Date </th>
                                        <th>Invoice </th>
                                        <th>Amount </th>
                                        <th>Payment </th>
                                        <th>Status </th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>

                                    <tbody>
                                    @foreach($orders as $item)
                                        <tr>
                                            <td> {{ $item->order_date }}  </td>
                                            <td> {{ $item->invoice_no }}  </td>
                                            <td> ${{ $item->amount }}  </td>

                                            <td> {{ $item->payment_method }}  </td>
                                            <td>
                                                @if($item->return_order == 1)
                                                    <span class="badge badge-pill badge-primary">Pending </span>
                                                @elseif($item->return_order == 2)
                                                    <span class="badge badge-pill badge-success">Success </span>
                                                @endif

                                            </td>

                                            <td width="25%">
                                                <a href="{{ route('return.approve',$item->id) }}" class="btn btn-danger">Approve </a>
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
