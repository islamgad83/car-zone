@extends('admin.admin_master')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Seo Setting Page</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Seo</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Setting Page</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-12">
                    <div class="card">
                        <div class="body">

                            <form method="post" action="{{ route('update.seosetting') }}" >
                                @csrf

                                <input type="hidden" name="id" value="{{ $seo->id }}">
                                <div class="row">
                                    <div class="col-12">

                                        <div class="form-group">
                                            <h5>Meta Title <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="meta_title" class="form-control" value="{{ $seo->meta_title }}" > </div>
                                        </div>



                                        <div class="form-group">
                                            <h5>Meta Author <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="meta_author" class="form-control"  value="{{ $seo->meta_author }}"  > </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Meta Keyword <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                                <input type="text" name="meta_keyword" class="form-control" value="{{ $seo->meta_keyword }}"   > </div>
                                        </div>

                                        <div class="form-group">
                                            <h5>Meta Description <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                            <textarea name="meta_description" id="textarea" class="form-control" required placeholder="Textarea text">
                                                {{ $seo->meta_description }}
                                            </textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <h5>Google Analytics <span class="text-danger">*</span></h5>
                                            <div class="controls">
                                            <textarea name="google_analytics" id="textarea" class="form-control" required placeholder="Textarea text">
                                                {{ $seo->google_analytics }}
                                            </textarea>
                                            </div>
                                        </div>

                                        <div class="text-xs-right">
                                            <input type="submit" class="btn btn-rounded btn-primary mb-5" value="Update">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
