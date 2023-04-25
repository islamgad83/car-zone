@extends('admin.admin_master')
@section('content')

    <!-- left content -->
    <section class="left-block content">
        <a class="mdi mdi-close mdi-menu btn btn-success open-left-block d-block d-md-none" href="javascript:void(0)"></a>
        <div class="scrollable" style="height: 100%;">
            <div class="left-content-area">
                <div class="h-p100">

                    <div class="p-20">
                        <a href="mailbox_compose.html" class="btn btn-rounded btn-success btn-block">Compose</a>
                    </div>

                    <div class="box mb-0 no-shadow bg-transparent b-0">
                        <div class="box-header with-border p-20">
                            <h4 class="box-title">Folders</h4>
                        </div>
                        <div class="box-body mailbox-nav p-20">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a class="nav-link active" href="javascript:void(0)"><i class="ion ion-ios-email-outline"></i> Inbox
                                        <span class="label label-success pull-right">12</span></a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-paper-airplane"></i> Sent</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-email-unread"></i> Drafts</a></li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-star"></i>  Starred <span class="label label-warning pull-right">14</span></a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="javascript:void(0)"><i class="ion ion-trash-a"></i> Trash</a></li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /. box -->
                    <div class="box no-shadow bg-transparent b-0">
                        <div class="box-header with-border p-20">
                            <h4 class="box-title">Labels</h4>
                        </div>
                        <div class="box-body mailbox-nav p-20">
                            <ul class="nav nav-pills flex-column">
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-danger"></i> Important</a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-warning"></i> Promotions</a></li>
                                <li class="nav-item"><a class="nav-link" href="#"><i class="fa fa-circle-o text-info"></i> Social</a></li>
                            </ul>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.left content -->

    <!-- right content -->
    <section class="right-block content">

        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Mailbox</h4>
                <p class="subtitle">Here is the list of mail</p>

                <div class="box-controls pull-right">
                    <div class="lookup lookup-circle lookup-right">
                        <input type="text" name="s">
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="mailbox-controls">
                    <!-- Check all button -->
                    <button type="button" class="btn btn-sm checkbox-toggle btn-outline"><i class="ion ion-android-checkbox-outline-blank"></i>
                    </button>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline btn-sm"><i class="ion ion-trash-a"></i></button>
                        <button type="button" class="btn btn-outline btn-sm"><i class="ion ion-reply"></i></button>
                        <button type="button" class="btn btn-outline btn-sm"><i class="ion ion-share"></i></button>
                    </div>
                    <!-- /.btn-group -->
                    <div class="btn-group">
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="ion ion-flag margin-r-5"></i>
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline btn-sm dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <i class="ion ion-folder margin-r-5"></i>
                                <span class="caret"></span>
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.btn-group -->
                    <button type="button" class="btn btn-outline btn-sm"><i class="fa fa-refresh"></i></button>
                    <div class="pull-right">
                        1-50/200
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline btn-sm"><i class="fa fa-chevron-left"></i></button>
                            <button type="button" class="btn btn-outline btn-sm"><i class="fa fa-chevron-right"></i></button>
                        </div>
                        <!-- /.btn-group -->
                    </div>
                    <!-- /.pull-right -->
                </div>
                <div class="mailbox-messages">
                    <div class="table-responsive">
                        <table class="table no-border">
                            <tbody>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="mailbox-star"><a href="#"><i class="fa fa-star text-warning"></i></a></td>
                                <td class="w-80"><a href="#"><img class="avatar" src="../images/avatar/2.jpg" alt="..."></a></td>
                                <td class="mailbox-name">Jacob</td>
                                <td class="mailbox-subject"><a href="mailbox_read_mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                                </td>
                                <td class="mailbox-attachment"></td>
                                <td class="mailbox-date">3 mins ago</td>
                            </tr>
                            <tr>
                                <td><input type="checkbox"></td>
                                <td class="mailbox-star"><a href="#"><i class="fa fa-star-o text-warning"></i></a></td>
                                <td class="w-80"><a href="#"><img class="avatar" src="../images/avatar/3.jpg" alt="..."></a></td>
                                <td class="mailbox-name">Mason</td>
                                <td class="mailbox-subject"><a href="mailbox_read_mail.html"><b>Lorem Ipsum</b> - There are many variations of Ipsum available...</a>
                                </td>
                                <td class="mailbox-attachment"><i class="fa fa-paperclip"></i></td>
                                <td class="mailbox-date">14 mins ago</td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                    <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /. box -->

    </section>
    <!-- /.right content -->
@endsection
