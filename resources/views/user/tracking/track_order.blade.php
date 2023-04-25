@extends('user.main_master')
@section('title')
    Order Tracking Page
@endsection
@section('content')

    <!-- ========== MAIN CONTENT ========== -->
    <main id="content" role="main">
        <!-- breadcrumb -->
        <div class="bg-gray-13 bg-md-transparent">
            <div class="container">
                <!-- breadcrumb -->
                <div class="my-md-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="{{url('/')}}">{{__('user.Home')}}</a></li>
                            <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">
                                @if(App::getLocale() == 'ar')
                                    أتبع طلبك
                                @else
                                    Track your Order
                                @endif
                            </li>
                        </ol>
                    </nav>
                </div>
                <!-- End breadcrumb -->
            </div>
        </div>
        <!-- End breadcrumb -->

        <div class="container">
            <div class="mx-xl-10">
                <div class="mb-6 text-center">
                    <h2 class="mb-6">
                        @if(App::getLocale() == 'ar')
                            أتبع طلبك
                        @else
                            Track your Order
                        @endif
                    </h2>
                    <p class="text-gray-90 px-xl-10">
                        @if(App::getLocale() == 'ar')
                            لتتبع طلبك ، يرجى إدخال معرف الطلب الخاص بك في المربع أدناه والضغط على الزر "تعقب". تم إعطاؤك هذا في إيصالك وفي رسالة التأكيد الإلكترونية التي من المفترض أن تكون قد تلقيتها.
                        @else
                            To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.
                    @endif
                    </p>
                </div>
                <div class="my-4 my-xl-8">
                    <form method="post" action="{{ route('order.tracking-view') }}" class="js-validate">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="order_id">
                                        @if(App::getLocale() == 'ar')
                                            رقم التعريف الخاص بالطلب
                                        @else
                                            Order ID
                                        @endif
                                    </label>
                                    <input type="text" class="form-control" name="code" id="order_id" placeholder="Found in your order confirmation email." aria-label="Found in your order confirmation email.">
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <div class="col-md-6 mb-3">
                                <!-- Form Group -->
                                <div class="js-form-message form-group">
                                    <label class="form-label" for="billingemail">
                                        {{ __('user.email')}}
                                    </label>
                                    <input type="email" class="form-control" name="email" id="billingemail" placeholder="Email you used during checkout." aria-label="Email you used during checkout."
                                           data-msg="Please enter a valid email address."
                                           data-error-class="u-has-error"
                                           data-success-class="u-has-success">
                                </div>
                                <!-- End Form Group -->
                            </div>
                            <!-- Button -->
                            <div class="col mb-1 btn-track">
                                <button type="submit" class="btn btn-danger mb-3 mb-md-0 font-weight-normal px-5 px-md-4 px-lg-5 w-md-auto">
                                    @if(App::getLocale() == 'ar')
                                        أتبع طلبك
                                    @else
                                        Track
                                    @endif
                                </button>
                            </div>
                            <!-- End Button -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <!-- ========== END MAIN CONTENT ========== -->



@endsection
