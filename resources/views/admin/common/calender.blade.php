@extends('admin.admin_master')
@section('content')
    <link rel="stylesheet" href="{{asset('../assets/vendor/fullcalendar/fullcalendar.min.css')}}">
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Calendar</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Medicazone</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right hidden-xs">
                        <button class="btn btn-sm btn-primary btn-round" title="" data-toggle="modal" data-target="#addevent">Add New Event</button>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Default Size -->
    <div class="modal fade" id="addevent" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="title" id="defaultModalLabel">Add Event</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="form-line">
                            <input type="number" class="form-control round" placeholder="Event Date">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" class="form-control round" placeholder="Event Title">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea rows="4" class="form-control no-resize" placeholder="Event Description..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-round btn-primary">Add</button>
                    <button type="button" class="btn btn-round btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('calender-js')

    <!-- Javascript -->
    <script src="{{asset('backend/bundles/libscripts.bundle.js')}}"></script>
    <script src="{{asset('backend/bundles/vendorscripts.bundle.js')}}"></script>

    <script src="{{asset('backend/bundles/fullcalendarscripts.bundle.js')}}"></script><!--/ calender javascripts -->

    <script src="{{asset('backend/bundles/mainscripts.bundle.js')}}"></script>
    <script src="{{asset('backend/js/pages/calendar.js')}}"></script>
@endsection
